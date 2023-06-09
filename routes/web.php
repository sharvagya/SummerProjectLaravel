<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;


Route::view('/','login');
Route::get('/help', function () {
    return view('help');
})->name('help');
Route::get('/employeeinfo', function () {
    return view('employeeinfo');
})->name('employeeinfo');
Route::get('/addEmployee', function () {
    return view('addEmployee');
})->name('addEmployee');


Route::get('/addemployee', [EmployeeController::class, 'showEmployeeForm'])->name('addemployee');
Route::post('/addemployee', [EmployeeController::class, 'store'])->name('addemployee.post');

Route::get('/signup', [AdminController::class,'showSignupForm'])->name('signup');
Route::post('/signup', [AdminController::class, 'register'])->name('signup.post');

Route::get('/login', [AdminController::class,'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class,'login'])->name('login.post');

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/viewEmployee', [EmployeeController::class, 'showEmployeeList'])->name('viewEmployee');
Route::post('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');

// Edit employee form
// Route::get('/employees/{id}/edit', 'App\Http\Controllers\EmployeeController@edit')->name('employee.edit');
Route::put('/employees/{id}', 'App\Http\Controllers\EmployeeController@update')->name('employee.update');
Route::delete('/employees/{id}', 'App\Http\Controllers\EmployeeController@destroy')->name('employee.destroy');

Route::resource('salary', SalaryController::class);
Route::get('/salary', 'App\Http\Controllers\SalaryController@index')->name('salary');


Route::post('/logout', [AdminController::class, 'logout'])->name('logout');









