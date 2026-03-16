<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Middleware\TrackViewsMiddleware;

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

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');
// Работа с куки файлами
Route::post('/cookies-accept', [CookieController::class, 'store'])->name('cookies.accept');
Route::post('/cookies-check', [CookieController::class, 'check'])->name('cookies.check');
Route::post('/cookies-close', [CookieController::class, 'destroy'])->name('cookies.close');


// Вывод информации в блоке тариф на главной странице
Route::get('/tariff-info/{type}', [ApplicationController::class, 'tariffInfo'])->name('home.tariffInfo');

// Тариф подписка на неделю
Route::post('/consultation-form', [LoginController::class, 'consultationForm'])->name('home.consultationForm');

// Route::get('/auth', [LoginController::class, 'index'])->name('login');
// // // Аутентификация пользователя
// Route::get('/auth-form', [LoginController::class, 'showloginForm'])->name('login.form');
// Route::post('/auth', [LoginController::class, 'authenticate'])->name('login.auth');
// // // Аутентификация пользователя
// Route::get('/register-form', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
// Route::post('/register', [RegisterController::class, 'storeUser'])->name('register.store');

// // // Роут выхода (если необходим)
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// // // Роут выхода (если необходим)
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// // Личная информация
// Route::get('/profile/personal', [ProfileController::class, 'showPersonalForm'])->name('profile.personal');
// Route::post('/profile/personal', [ProfileController::class, 'updatePersonal'])->name('profile.updatePersonal');
// // Статьи
// Route::get('/profile/articles', [ProfileController::class, 'showArticlesForm'])->name('profile.articles');
// // Route::post('/profile/personal', [ProfileController::class, 'updatePersonal'])->name('profile.updatePersonal');
// Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])
//     ->name('articles.destroy');
// // Ближайшие записи
// Route::get('/profile/upcoming-entries', [ProfileController::class, 'showRecords'])->name('profile.records');

// Форма на заявку
Route::get('/form-record', [FormController::class, 'show'])->name('form');
// Маршрут для отправки формы
Route::post('/submit-form', [FormController::class, 'store'])->name('form.store');

// Блог
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// // Поиск статей
// Route::get('/blog/suggestions/{query}', [BlogController::class, 'getSuggestions'])->name('suggestions');
// Route::middleware([TrackViewsMiddleware::class])->group(function () {
//     // Статься
//     Route::get('/blog/{slug?}-{id}', [ArticleController::class, 'show'])->name('article.show');
// });
// // Показ формы редактирования статьи
// Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])
//     ->name('articles.edit');
//     // Обновление статьи
// Route::patch('/articles/{article}', [ArticleController::class, 'update'])
//     ->name('articles.update');
// // Сохранение статьи
// Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
// // Отображение формы создания статьи
// Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
// // Загрузка фото через визуальный редактор
// Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');


// // Сохранение статьи
// Route::get('/article/store/test', [ArticleController::class, 'test'])->name('test');
