<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todo-list', [TodoListController::class, 'index'])->name('todo-list.index');

Route::get('todo-list/{list}', [TodoListController::class, 'show'])->name('todo-list.show');

Route::post('todo-list', [TodoListController::class, 'store'])->name('todo-list.store');
