<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SuggestionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('home');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/blog1', function () {
    return view('blog1');
})->name('blog1');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/login', function () {
    return view('login');
})->name('login');
// Главная страница
// Route::get('/', [ApplicationController::class, 'index'])->name('home');
// Route::get('/', [ApplicationController::class, 'showForm'])->name('form');
// Route::post('/form-record', [ApplicationController::class, 'store'])->name('form.record');


// Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/form-record', [FormController::class, 'show'])->name('form');

// Маршрут для отправки формы (добавьте метод submit в контроллер)
Route::post('/submit-form', [FormController::class, 'store'])->name('form.store');

// Поиск статей
Route::get('/blog/suggestions/{query}', [BlogController::class, 'getSuggestions'])->name('suggestions');

// Переход к статье
Route::get('/blog/{id}-{slug?}', [BlogController::class, 'showArticle'])->name('article.show');
