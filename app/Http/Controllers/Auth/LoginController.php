<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use InvalidArgumentException;

class LoginController extends Controller
{

    /**
 * Show the appropriate page based on user's authorization state.
 *
 * @return \Illuminate\View\View, Illuminate\Http\RedirectResponse
 */
public function index()
{
    if (Auth::check()) {
        // Пользователь авторизован, направляем на главную страницу или панель администратора
        return redirect()->route('profile');
    } else {
        // Пользователь не авторизован, показываем форму входа
        return view('auth.login');
    }
}

public function showloginForm()
    {
        return view('auth.authform');
    }

    /**
     * Attempt to log in the user.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended(route('profile')); // Перенаправляем на домашнюю страницу
        }

        return back()->withErrors([
            'email' => 'Логин или пароль введены неверно.'
        ]);
    }

    /**
     * Log out the authenticated user.
     *
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
