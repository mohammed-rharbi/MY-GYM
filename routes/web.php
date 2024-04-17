<?php

use App\Http\Controllers\AdminControll;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\authController;
use App\Http\Controllers\authManger;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CoachControll;
use App\Http\Controllers\GymclassController;
use App\Http\Controllers\MemberControll;
use App\Http\Controllers\TypesOFclassController;
use Illuminate\Support\Facades\Route;





Route::resource('article', ArticleController::class);
Route::get('/banned_user' , [AdminControll::class , 'banned'])->name('banned');
Route::get('/login',[authManger::class , 'login'])->name('login');
Route::get('/register' , [authManger::class , 'regester' ])->name('register');
Route::post('/login' , [authManger::class , 'GetLogin' ])->name('login.GetLogin');
Route::post('/regester' , [authManger::class , 'GetRegester' ])->name('regester.GetRegester');
Route::get('/logout', [authManger::class , 'logout'])->name('logout');
Route::get('/coachform', [authManger::class , 'coachform'])->name('coachform');
Route::get('/', [authManger::class , 'home'])->name('home');




Route::middleware(['Auth','Role:admin'])->group(function () {
    
    Route::resource('admin' , AdminControll::class);
    Route::resource('category', categoryController::class);
    Route::resource('class_type' ,TypesOFclassController::class );
    Route::resource('Traning_Room' ,ClassroomController::class );
    Route::get('users',[AdminControll::class , 'allusers'])->name('getusers');
    Route::get('myarticle',[AdminControll::class , 'myarticle'])->name('myarticle');
    Route::post('ban{id}' , [AdminControll::class , 'ban'])->name('Ban');
    Route::post('unban{id}' , [AdminControll::class , 'unban'])->name('Unban');
    Route::get('classes' , [AdminControll::class , 'allclasses'])->name('allclasses');
    Route::get('Admin_Profile' , [AdminControll::class , 'adminprofile'])->name('adminprofile');

});


Route::middleware(['Auth','Role:coach'])->group(function () {
    
    Route::get('profile' , [CoachControll::class , 'showprofile'])->name('profile.showprofile');
    Route::resource('class', GymclassController::class);
    Route::post('/coach/store', [CoachControll::class, 'store'])->name('coach.store');
    Route::put('/Coach_Profile/{id}' , [CoachControll::class , 'coachprofile'])->name('coachprofile');


  
});


Route::resource('coach' , CoachControll::class);


Route::middleware(['Auth','Role:member'])->group(function () {
    
    Route::resource('member' , MemberControll::class);

});








// Route::get('/dashbourd', function () {
//     return view('dashbourd');
// })->name('dash');

// Route::get('/', function () {
//     return view('welcome');
// });




