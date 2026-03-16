<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CheckCookieConsent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Получаем текущее согласие
        $sessionAccepted = $request->session()->get('cookies_accepted') === true;
        $cookieAccepted = Cookie::get('cookies_accepted') === true;
        $status = $sessionAccepted || $cookieAccepted ? true : false;

        // Добавляем переменную в шаблон
        view()->share('showCookieBanner', $status === true);

        return $next($request);
    }
}
