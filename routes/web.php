<?php

use App\Http\Controllers\AdminControll;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\authController;
use App\Http\Controllers\authManger;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CoachControll;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MemberControll;
use Illuminate\Support\Facades\Route;








Route::middleware(['Auth','Role:admin'])->group(function () {
    
    Route::resource('admin' , AdminControll::class);
    Route::resource('category', categoryController::class);
    Route::resource('article', ArticleController::class);
    Route::get('users',[AdminControll::class , 'allusers'])->name('getusers');
    Route::post('ban{id}' , [AdminControll::class , 'ban'])->name('Ban');
    Route::post('unban{id}' , [AdminControll::class , 'unban'])->name('Unban');


});

Route::middleware(['Auth','Role:coach'])->group(function () {
    
    Route::resource('coach' , CoachControll::class);

});



Route::middleware(['Auth','Role:member'])->group(function () {
    
    Route::resource('member' , MemberControll::class);

});





Route::get('/banned_user' , [AdminControll::class , 'banned'])->name('banned');
Route::get('/login',[authManger::class , 'login'])->name('login');
Route::get('/register' , [authManger::class , 'regester' ])->name('register');
Route::post('/login' , [authManger::class , 'GetLogin' ])->name('login.GetLogin');
Route::post('/regester' , [authManger::class , 'GetRegester' ])->name('regester.GetRegester');
Route::get('/logout', [authManger::class , 'logout'])->name('logout');



Route::get('/dashbourd', function () {
    return view('dashbourd');
})->name('dash');

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', [authManger::class , 'home'])->name('home');


