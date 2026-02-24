<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    // Форма создания статьи
    public function create()
    {
        return view('article.create');
    }

    // Просмотр статьи
    public function show($slug = null, $id)
    {
        // Находим статью по её идентификатору
        $article = Article::findOrFail($id);
$topArticles = Article::latest()->get()->sortByDesc('views')->take(5);
        // Выбираем список последних статей
        // $topArticles = Article::latest()->get();
        // $topArticle = $articles->sortByDesc('views')->first();
        // $topArticles = $articles;
        // Исключаем самую популярную статью из списка
        // $articles = $articles->reject(function ($article) use ($topArticle) {
        //     return $article->id === $topArticle->id;
        // });

        // Рендерим шаблон статьи
        return view('article.index', compact('article', 'topArticles'));
    }

    // Сохранение статьи
    public function store(Request $request)
    {

        // Валидация данных
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);
        $validatedData['user_id'] = Auth::id();

        // Создание новой статьи
        Article::create($validatedData);
        // Перенаправление на страницу со списком статей
        return redirect()->route('blog.index')->with('message', 'Статья опубликована!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        // Вернем страницу с формой редактирования
        return view('article.edit', compact('article'));
    }
    public function destroy($id)
    {
        // Находим статью по её идентификатору
        $article = Article::findOrFail($id);

        // Удаляем статью
        $article->delete();

        // Возвращаемся обратно на главную страницу
        return redirect()->route('profile')->with('message', 'Статья успешно удалена!');
    }
}
