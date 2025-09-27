<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
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
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/login', function () {
    return view('login');
})->name('login');
// Главная страница
// Route::get('/', [ApplicationController::class, 'index'])->name('home');
// Route::get('/', [ApplicationController::class, 'showForm'])->name('form');
Route::post('/form-record', [ApplicationController::class, 'store'])->name('form.record');