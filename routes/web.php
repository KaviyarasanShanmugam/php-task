<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    if (session('user')) {
        return redirect('users');
    }
    return view('login');
})->name('login');

Route::post('login', [UserController::class, 'login'])->name('login.post');



Route::group(['middleware' => ['CustomAuth']], function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users-status', [UserController::class, 'statusUpdate'])->name('users.status');
    Route::get('logout', [UserController::class, 'logout'])->name('login.logout');

});


