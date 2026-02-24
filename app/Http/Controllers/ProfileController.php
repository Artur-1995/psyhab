<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
{
    if (Auth::check()) {

        // Пользователь авторизован, направляем на главную страницу или панель администратора
        return view('auth.profile.index');
    } else {
        // Пользователь не авторизован, показываем форму входа
        return redirect()->route('login');
    }
}
    /**
     * Отображение данные пользователя.
     *
     * @return \Illuminate\View\View
     */
    public function showPersonalForm()
    {
        $user = Auth::user();
        return view('auth.profile.personal', compact('user'));
    }

    /**
     * Отображение формы создания статьи.
     *
     * @return \Illuminate\View\View
     */
    public function showArticlesForm()
    {
        $user = User::with('articles')->find(Auth::id());

        return view('auth.profile.articles', compact('user'));
    }

    public function updatePersonal(Request $request)
    {
        // Валидируем входящие данные
        $validatedData = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:18',
        ]);

        // Обновляем данные пользователя
        $user = Auth::user();

        $user->update($validatedData);

        // Возвращаем успешный ответ
        return redirect()->route('profile')->with('success', 'Профиль успешно обновлён!');
    }
        /**
     * Отображение формы регистрации.
     *
     * @return \Illuminate\View\View
     */
    public function showRecords()
    {
        return view('auth.profile.records');
    }
}
