<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    // Метод для показа главной страницы
    public function index()
    {
        return view('home');
    }
    // Метод для показа главной страницы
    public function showForm()
    {
        return view('application.form');
    }

    // app/Http/Controllers/YourController.php

    // Контроллер
    public function store(Request $request)
    {
        DB::beginTransaction(); // Начинаем транзакцию для сохранения целостности данных

        try {
            // Валидация данных
            $validator = Validator::make($request->all(), [
                'for' => 'nullable|max:255',
                'phone' => 'required', // Более строгая проверка номера телефона
                'email' => 'nullable|email|max:255',
                'message' => 'nullable|max:1000',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422); // Код состояния 422 Unprocessable Entity
            }

            // Сохранение данных
            Application::create($request->only('for', 'phone'));

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
