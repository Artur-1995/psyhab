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
        $articles = Article::latest()->get();

        $topArticles = $articles->sortByDesc('views')->take(5);
        $topArticle = $topArticles->first();

        // Формируем список остальных популярных статей, исключив самую популярную:
        $articles = $articles->whereNotIn('id', [$topArticle->id]);

        return view('blog', compact('articles', 'topArticles', 'topArticle'));
    }

    // Поиск по статьям
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
}
