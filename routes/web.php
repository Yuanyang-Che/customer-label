<?php

use App\Http\Controllers\LabelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\URL;

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

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    //Events
    Route::get('/labels', [LabelController::class, 'index'])->name('label.index');

    Route::get('/labels/new', [LabelController::class, 'create'])->name('label.create');
    Route::post('/labels/new', [LabelController::class, 'store'])->name('label.store');

    Route::get('/labels/{id}', [LabelController::class, 'show'])->name('label.show');

//    Route::get('/labels/{id}/edit', [LabelController::class, 'store'])->name('label.edit');
    Route::post('/labels/{id}/edit', [LabelController::class, 'update'])->name('label.update');

    Route::post('/labels/{id}/delete', [LabelController::class, 'delete'])->name('label.delete');

});

Route::get('/', function () {
    return redirect()->route('profile.index');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/signup', [AuthController::class, 'signupForm'])->name('auth.signupForm');
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup');


if (env('APP_ENV') !== 'local') {
    URL::forceScheme('https');
}
