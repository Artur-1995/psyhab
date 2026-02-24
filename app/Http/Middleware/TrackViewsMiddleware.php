<?php

namespace App\Http\Middleware;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;

class TrackViewsMiddleware
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
        if (!session()->has('viewed_article_' . request()->route('id'))) { // проверка наличия записи просмотра
            session()->put('viewed_article_' . request()->route('id'), true); // сохраняем факт просмотра
            Article::find(request()->route('id'))->increment('views');
        }

        return $next($request);
    }
}
