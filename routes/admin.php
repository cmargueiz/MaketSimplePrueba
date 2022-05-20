<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Task\TaskController;

Route::get('',[HomeController::class,'index'])->name('admin.home');
Route::resource('tasks',TaskController::class)->names('admin.tasks');