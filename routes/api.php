<?php

use App\Http\Controllers\api\stockcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/get/stocks',[stockcontroller::class,'getstocks']);
Route::get('/get/stock/{id}',[stockcontroller::class,'stockView']);
Route::post('/create/stock',[stockcontroller::class,'create']);