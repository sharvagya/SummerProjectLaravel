<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;


Route::view('/','addemployee');

Route::get('/addemployee', [EmployeeController::class, 'showEmployeeForm'])->name('addemployee');
Route::post('/addemployee', [EmployeeController::class, 'store'])->name('addemployee.post');

Route::get('/signup', [AdminController::class,'showSignupForm'])->name('signup');
Route::post('/signup', [AdminController::class, 'register'])->name('signup.post');

Route::get('/login', [AdminController::class,'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class,'login'])->name('login.post');

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/viewEmployee', [EmployeeController::class, 'showEmployeeList'])->name('viewemployee');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');







