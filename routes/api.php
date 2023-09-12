<?php

use App\Http\Controllers\api\armstypecontroller;
use App\Http\Controllers\api\Distributorcontroller;
use App\Http\Controllers\api\purchasecontroller;
use App\Http\Controllers\api\returncontroller;
use App\Http\Controllers\api\soildercontroller;
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

Route::get('/get/armstypes',[armstypecontroller::class,'getarms']);
Route::get('/get/arms/{id}',[armstypecontroller::class,'armsView']);
Route::post('/create/arms',[armstypecontroller::class,'createarms']);

Route::get('/get/returns',[returncontroller::class,'getreturn']);
Route::get('/get/return/{id}',[returncontroller::class,'returnsView']);
Route::post('/create/return',[returncontroller::class,'createreturn']);

Route::get('/get/distributor',[Distributorcontroller::class,'getdistributor']);
Route::get('/get/distributor/{id}',[Distributorcontroller::class,'distributorView']);
Route::post('/create/distributor',[Distributorcontroller::class,'createdistributor']);

Route::get('/get/purchases',[purchasecontroller::class,'getpurchase']);
Route::get('/get/purchases/{id}',[purchasecontroller::class,'purchasesView']);
Route::post('/create/purchases',[purchasecontroller::class,'createpurchase']);

Route::get('/get/soilders',[soildercontroller::class,'getsoilders']);
Route::get('/get/soilder/{id}',[soildercontroller::class,'soilderView']);
Route::post('/create/soilder',[soildercontroller::class,'createsoilder']);







