<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Предполагаем, что у вас есть модель User
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Отображение формы регистрации.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.registerform');
    }

    /**
     * Сохранение нового зарегистрированного пользователя.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUser(Request $request)
    {

        // Валидируем входящие данные
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // dd(bcrypt($request->input('password')));
        // Создаем нового пользователя
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'), // Если передавалось
            // 'role' => 'user', //$request->input('role'), // Если передавалось
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Авторизуем пользователя после регистрации
        Auth::login($user);

        return redirect()->route('login')->with('message', 'Вы успешно зарегистрировались!');
    }

    /**
     * Выход из аккаунта (если понадобится).
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
