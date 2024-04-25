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
    Route::post('class_destroy{id}' , [GymclassController::class , 'destroy'])->name('class_destroy');


});


Route::middleware(['Auth','Role:coach'])->group(function () {
    

    Route::get('profile' , [CoachControll::class , 'showprofile'])->name('profile.showprofile');
    Route::resource('class', GymclassController::class);
    Route::put('/Coach_Profile/{id}' , [CoachControll::class , 'coachprofile'])->name('coachprofile');

    Route::put('storeInfo', [CoachControll::class, 'Profile'])->name('storeInfo');
    Route::resource('coach' , CoachControll::class);
    Route::get('traniers' , [CoachControll::class , 'ClassTraniers'])->name('mytraniers');
    Route::get('My_Article' , [CoachControll::class , 'myArticle'])->name('My_Article');


});




Route::middleware(['Auth','Role:member'])->group(function () {
    
    Route::resource('member' , MemberControll::class);
    Route::post('BooK_Class/{id}' , [MemberControll::class , 'book'])->name('book_class');
    Route::get('My_profil' , [MemberControll::class , 'profil'])->name('My_profil');

});


Route::get('Gym_Classes' , [MemberControll::class , 'classes'])->name('Gym_Classes');
Route::get('Class_Rooms' , [MemberControll::class , 'rooms'])->name('classRooms');
Route::get('articles' , [MemberControll::class , 'articles'])->name('articles');
Route::get('article_category/{id}' , [categoryController::class , 'ArticleCategory'])->name('article_category');
Route::get('Class_details{id}' , [MemberControll::class , 'Class_details'])->name('Class_details');


Route::get('Author_Profile{id}' , [MemberControll::class , 'Author_Profile'])->name('Author_Profile');


Route::get('/search' , [MemberControll::class , 'search'])->name('search');







Route::get('/aboutus', function(){
    return view('sections.aboutus');
})->name('aboutus');

Route::get('/contact', function(){
    return view('sections.contact');
})->name('contact');

// Route::get('/dashbourd', function () {
//     return view('dashbourd');
// })->name('dash');

// Route::get('/', function () {
//     return view('welcome');
// });




