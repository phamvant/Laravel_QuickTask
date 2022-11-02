<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('lang/{lang}', [LangController::class, 'changeLang'])->name('lang');

Route::get('home', [PageController::class, 'h'])->name('h');
Route::get('mouse', [PageController::class, 'm'])->name('m');
Route::get('keyboard', [PageController::class, 'k'])->name('k');
Route::get('decoraccessories', [PageController::class, 'da'])->name('da');
Route::get('figure', [PageController::class, 'f'])->name('f');
Route::get('speaker', [PageController::class, 's'])->name('s');
Route::get('clock', [PageController::class, 'c'])->name('c');

Route::resource('users', UserController::class);
Route::resource('tasks', TaskController::class);

require __DIR__.'/auth.php';
