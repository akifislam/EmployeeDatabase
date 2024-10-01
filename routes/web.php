<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EmployeeController::class,'index'])->name('employee.index');
Route::get('/{eid}/show', [EmployeeController::class,'show'])->name('employee.show');
Route::get('/create', [EmployeeController::class,'create'])->name('employee.create');
Route::post('/store', [EmployeeController::class,'store'])->name('employee.store');

