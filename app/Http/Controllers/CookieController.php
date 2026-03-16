<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class CookieController extends Controller
{
    /**
     * Время жизни куки в секундах (по умолчанию 1 год)
     */
    protected const COOKIE_LIFETIME = 31536000; // 60 * 60 * 24 * 365

    /**
     * Запоминает согласие пользователя с cookies
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        try {
            // Получаем время жизни из конфигурации
            $expiresAt = Config::get('constants.cookie_lifetime', self::COOKIE_LIFETIME);

            // Проверяем корректность времени жизни
            if (!is_int($expiresAt) || $expiresAt <= 0) {
                throw new \InvalidArgumentException('Некорректное время жизни куки');
            }

            // Сохраняем согласие в сессии и куках
            $request->session()->put('cookies_accepted', true);
            Cookie::queue('cookies_accepted', true, $expiresAt);
            Cookie::queue('cookies_expiration', now()->toAtomString(), $expiresAt);

            return response()->json([
                'message' => __('info.cookies_accepted'),
                'status' => true
            ], 201);
        } catch (\Exception $e) {
            Log::error('Ошибка при сохранении cookies', ['exception' => $e]);
            return response()->json([
                'message' => __('errors.generic_error'),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Проверяет наличие согласия с cookies
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function check(Request $request): JsonResponse
    {
        try {
            // Получаем текущее согласие
            $sessionAccepted = $request->session()->has('cookies_accepted');
            $cookieAccepted = Cookie::get('cookies_accepted') === 'true';

            // Проверяем срок действия
            $cookieExpiration = $request->cookies->get('cookies_expiration');
            $isCookieExpired = $cookieExpiration
                ? Carbon::parse($cookieExpiration)->isPast()
                : false;

            // Определяем финальный статус
            $accepted = ($sessionAccepted || $cookieAccepted) && !$isCookieExpired;

            // Логируем результат
            $this->logCookieCheck($accepted);

            return response()->json([
                'cookies_accepted' => $accepted,
                'message' => $accepted ? __('info.cookies_accepted') : __('info.cookies_not_accepted'),
                'details' => [
                    'session_status' => $sessionAccepted,
                    'cookie_status' => $cookieAccepted,
                    'is_expired' => $isCookieExpired
                ]
            ], $accepted ? 200 : 403)
            ->header('X-Cookies-Status', $accepted ? 'accepted' : 'rejected');
        } catch (\Exception $e) {
            Log::error('Ошибка при проверке cookies', ['exception' => $e]);
            return response()->json([
                'message' => __('errors.generic_error'),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Очищает согласие с cookies
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request): JsonResponse
    {
        try {
            // Очищаем сессию и все связанные куки
            $request->session()->forget('cookies_accepted');

            // Создаем массив с куки для удаления
            $cookiesToDelete = [
                Cookie::forget('cookies_accepted'),
                Cookie::forget('cookies_expiration')
            ];

            // Добавляем все куки в очередь на удаление
            foreach ($cookiesToDelete as $cookie) {
                Cookie::queue($cookie);
            }

            // Получаем время жизни из конфигурации
            $expiresAt = Config::get('constants.cookie_lifetime', self::COOKIE_LIFETIME);

            // Сохраняем согласие в сессии и куках
            $request->session()->put('cookies_accepted', false);
            Cookie::queue('cookies_accepted', false, $expiresAt);
            Cookie::queue('cookies_expiration', now()->toAtomString(), $expiresAt);

            // Логируем действие
            $this->logCookieCheck(false);

            return response()->json([
                'message' => __('info.cookies_deleted'),
                'status' => false
            ], 200);
        } catch (\Exception $e) {
            Log::error('Ошибка при удалении cookies', [
                'exception' => $e,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);

            return response()->json([
                'message' => __('errors.generic_error'),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Логирует результат проверки cookies
     *
     * @param bool $status
     */
    private function logCookieCheck(bool $status): void
    {
        Log::info('Cookie check result', [
            'status' => $status,
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent()
        ]);
    }
}
