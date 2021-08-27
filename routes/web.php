<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ModalityController;
use App\Http\Controllers\ThirdController;
use App\Http\Controllers\UnitController;
use App\Models\User;


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

Auth::routes();

Route::resource('course', CourseController::class);
Route::middleware('role:Teacher|Admin')->post('course',[CourseController::class,'store']);

Route::middleware(['auth'])->group(function(){

  Route::resource('user', UserController::class);
  Route::resource('modality', ModalityController::class);
  Route::resource('third', ThirdController::class);
  Route::resource('unit', UnitController::class);

});

Route::group(["prefix" => "/", "middleware" => ['auth']], function() {
  Route::get('{any}', function () {
    return view('home');
  })->where('any', '.*');
});

