<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;

Route::get('/',[FrontendController::class,'home']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/read/{id}',[DashboardController::class,'read'])->name('read');
Route::get('/guestread/{id}',[FrontendController::class,'guestread'])->name('guestread');
// Route::get('/register',[FrontendController::class,'register']);
// Route::post('/register',[FrontendController::class,'registration'])->name('register.post');
// Route::post('/login',[FrontendController::class,'login'])->name('login.post');
// Route::get('/dashboard',[FrontendController::class,'dashboard']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/postblog', [DashboardController::class, 'postblog']);
    Route::post('/postblog', [DashboardController::class, 'post'])->name('postblog');
    Route::get('/updateblog', [DashboardController::class, 'updateblog']);
    Route::get('/update/{id}', [DashboardController::class, 'update'])->name('update');
    Route::post('/edit/{id}', [DashboardController::class, 'edit'])->name('edit');
    Route::get('/deleteblog', [DashboardController::class, 'deleteblog']);
    Route::get('/delete/{id}', [DashboardController::class, 'delete'])->name('delete');
    Route::post('/logout', [FrontendController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [FrontendController::class, 'register']);
    Route::post('/register', [FrontendController::class, 'registration'])->name('register.post');
    Route::post('/login', [FrontendController::class, 'login'])->name('login.post');
});

