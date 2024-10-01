<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EmployeeController::class,'index']);
Route::get('/{eid}/show',[EmployeeController::class,'show']);
