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
Route::get('/',[UserController::class,'homepage'])->name('all');

Route::get('/registration',[UserController::class,'signupok'])->name('signupok');
Route::post('/registration',[UserController::class,'signupValidateok'])->name('signupl');


Route::get('/login',[UserController::class,'loginok'])->name('loginpageok');
Route::post('/login',[UserController::class,'loginsubmit'])->name('loginpagesubmit');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('logged.user');
Route::post('/dashboard',[UserController::class,'dashboardSubmit'])->name('dashboardsubmit');

Route::get('/view',[UserController::class,'view'])->name('view')->middleware('logged.user');
Route::get('/update',[UserController::class,'myupdate'])->name('myupdate')->middleware('logged.user');

Route::get('delete/{id}',[UserController::class,'destroy']);


Route::get('/searchbox',[UserController::class,'search'])->middleware('logged.user');

Route::get('/logout',function(){
    session()->forget('logged');
    session()->flash('msg','Sucessfully Logged out');
    return redirect()->route('all');
})->name('logout');





