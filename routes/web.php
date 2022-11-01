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

Route::get('mousepad', [PageController::class, 'mp'])->name('mp');
Route::get('gaminggear', [PageController::class, 'gg'])->name('gg');
Route::get('decoraccessories', [PageController::class, 'da'])->name('da');
Route::get('speakermicrowebcam', [PageController::class, 'smw'])->name('smw');
Route::get('gamingchair', [PageController::class, 'gc'])->name('gc');
Route::get('gamingtable', [PageController::class, 'gt'])->name('gt');
Route::get('signalsplitterusb', [PageController::class, 'ssu'])->name('ssu');
Route::get('radiatorscooling', [PageController::class, 'rc'])->name('rc');
Route::get('phoneaccessories', [PageController::class, 'pa'])->name('pa');
Route::resource('users', UserController::class);
Route::resource('tasks', TaskController::class);

require __DIR__.'/auth.php';
