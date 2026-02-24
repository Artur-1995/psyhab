<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    /**
     * Запоминает согласие пользователя с cookies
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->session()->put('cookies_accepted', true);
        return response()->json(['message' => 'Cookie согласованы'], 200);
    }
}
