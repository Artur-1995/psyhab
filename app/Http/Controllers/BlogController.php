<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
class BlogController extends Controller
{
    public function index(): View
    {
        // Выбираем список последних статей
        $articles = Article::latest()->take(5)->get();
        $topArticle = $articles->sortByDesc('views_count')->first();
        $topArticles = $articles->sortByDesc('views_count');
        // Исключаем самую популярную статью из списка
        $articles = $articles->reject(function ($article) use ($topArticle) {
            return $article->id === $topArticle->id;
        });

        return view('blog', compact('articles', 'topArticles', 'topArticle'));
    }

public function getSuggestions(string $query)
{
    Log::info("Запрос на предложения:", ['query' => $query]);

    $articles = Article::where('title', 'LIKE', '%' . $query . '%')
                      ->limit(10)
                      ->get()
                      ->map(function($article) {
                          return [
                              'value' => $article->id, // Уникальный идентификатор статьи
                              'label' => $article->title // Заголовок статьи
                          ];
                      })
                      ->toArray();

    return response()->json($articles);
}

public function showArticle($id, $slug = null)
{
    // Находим статью по её идентификатору
    $article = Article::findOrFail($id);
    
    // Выбираем список последних статей
        $articles = Article::latest()->take(5)->get();
        $topArticle = $articles->sortByDesc('views_count')->first();
        $topArticles = $articles->sortByDesc('views_count');
        // Исключаем самую популярную статью из списка
        $articles = $articles->reject(function ($article) use ($topArticle) {
            return $article->id === $topArticle->id;
        });

    // Рендерим шаблон статьи
    return view('article', compact('article', 'articles', 'topArticles', 'topArticle'));
}
}
