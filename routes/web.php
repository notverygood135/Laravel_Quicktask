<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])
    ->name('users.create')
    ->middleware([
        'admin',
    ]);
// Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user}', [UserController::class, 'delete'])->name('users.delete');

// Route::resource('/users', TaskController::class);

Route::resource('/tasks', TaskController::class);


