<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('login', [AuthController::class, 'index']);
Route::get('signup', [AuthController::class, 'signup']);
Route::post('signup', [AuthController::class, 'signupPost']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('todo/list', [TodoListController::class, 'index']);
Route::get(
    'todo/list/{todoList}',
    [TodoListController::class, 'show']
)->name('todo.item');
