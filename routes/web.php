<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sdu12Controller;
use App\Http\Controllers\EmailController;
/*
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

Route::get('/home',[Sdu12Controller::class,'users2']);
Route::get('/ru',[Sdu12Controller::class,'users3']);
Route::get('/all-ru',[Sdu12Controller::class,'users5']);
Route::get('/all-user',[Sdu12Controller::class,'users4']);
Route::get('/',[Sdu12Controller::class,'users2']);
Route::get('/qus',function (){
    return view('qut');
});
Route::get('/add-story',[Sdu12Controller::class,'addStory']);
Route::post('/add-story',[Sdu12Controller::class,'storeStory'])->name('story.store');
Route::get('/all-user',[Sdu12Controller::class,'users']);
Route::get('/edit-user/{id}',[Sdu12Controller::class,'editUser']);
Route::post('/update-user',[Sdu12Controller::class,'updateUser'])->name('user.update');
Route::get('/delete-user/{id}',[Sdu12Controller::class,'deleteUser']);
Route::get('/sendemail',[EmailController::class,'index']);
Route::post('/sendemail/send',[EmailController::class,'send']);
Route::get('/add-com/{id}',[Sdu12Controller::class,'addComment'])->name('add.update');