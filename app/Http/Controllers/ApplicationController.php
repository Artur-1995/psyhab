<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSubmitted;
use App\Models\Application;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;

class ApplicationController extends Controller
{
    // Метод для показа главной страницы
    public function index()
    {
        return view('home');
    }
    public function loginForm()
    {
        return view('auth.authform');
    }
    // Метод для показа главной страницы
    public function showForm()
    {
        return view('application.form');
    }

    public function tariffInfo($type)
{
    $consultationTitle = 'Консультация';
    $subscriptionTitle = 'Подписка на неделю';
    switch ($type) {
        case 'consultation-light':
            $price = '2500';
            return view('sections.consultation_tariff', ['title' => $consultationTitle, 'price' => $price]);
        case 'consultation-medium':
            $price = '3500';
            return view('sections.consultation_tariff', ['title' => $consultationTitle, 'price' => $price]);
        case 'consultation-heavy':
            $price = '4500';
            return view('sections.consultation_tariff', ['title' => $consultationTitle, 'price' => $price]);
        case 'weekly-subscription-tariff-light':
            $price = '3500';
            return view('sections.weekly_subscription_tariff', ['title' => $subscriptionTitle, 'price' => $price]);
        case 'weekly-subscription-tariff-medium':
            $price = '4500';
            return view('sections.weekly_subscription_tariff', ['title' => $subscriptionTitle, 'price' => $price]);
        case 'weekly_subscription_tariff-heavy':
            $price = '5500';
            return view('sections.weekly_subscription_tariff', ['title' => $subscriptionTitle, 'price' => $price]);
        default:
            throw new InvalidArgumentException("Неверный тип тарифа '$type'");
    }
}

    // Контроллер для отправки заявки с сайта
    public function store(Request $request)
    {
        Log::info('1111111', $request->all());
        try {
            $for = ['me' => 'Для себя', 'kid' => 'Для ребенка', 'couple' => 'Для пары', "self" => 'Личная'];
            DB::beginTransaction(); // Начинаем транзакцию для сохранения целостности данных
            // Валидация данных
            $validator = Validator::make($request->all(), [
                'for' => $for[$request->for],
                'phone' => 'required', // Более строгая проверка номера телефона
                'email' => 'nullable|email|max:255',
                'message' => 'nullable|max:1000',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422); // Код состояния 422 Unprocessable Entity
            }

            // Сохранение данных
            Application::create($request->only('for', 'phone', 'email'));

            // Отправка письма на info@psyhab.ru
            Mail::to('info@psyhab.ru')->send(new ApplicationSubmitted($validator));

            DB::commit(); // Завершаем транзакцию

            // Возвращаем успешный ответ
            return response()->json(['success' => true, 'message' => 'Заявка успешно отправлена'], 201); // Код состояния 201 Created
        } catch (Exception $e) {
            DB::rollBack(); // Откатываем транзакцию в случае ошибки
            report($e); // Логируем ошибку

            // Возвращаем ошибку клиенту
            return response()->json(['error' => 'Возникла ошибка при сохранении заявки.', 'debug' => $e->getMessage()], 500); // Внутренняя ошибка сервера
        }
    }
}
