<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route :: prefix ('/admin')-> name ('admin.')-> group (function (){
    Route::get('/',[AdminController::class ,'index'])->name('index');
    Route::get('courses',[AdminController::class ,'courses'])->name('courses');
    Route::get('files',[AdminController::class ,'files'])->name('files');
    Route::get('friends',[AdminController::class ,'friends'])->name('friends');
    Route::get('plan',[AdminController::class ,'plan'])->name('plan');
    Route::get('profile',[AdminController::class ,'profile'])->name('profile');
    Route::get('projects',[AdminController::class ,'projects'])->name('projects');
    Route::get('settings',[AdminController::class ,'settings'])->name('settings');

    });
