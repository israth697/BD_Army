<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArmstypeController;
use App\Http\Controllers\ArmsetupController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\soildersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DashboardController::class,'dashboard']) ->name('dashboard');
Route::get('/type',[ArmstypeController::class,'Armstype']) ->name('Armstype');
Route::get('/setup',[ArmsetupController::class,'Armsetup']) ->name('Armsetup');
Route::get('/divide',[DistributionController::class,'Distribution']) ->name('Distribution');
Route::get('/money',[PurchaseController::class,'Purchase']) ->name('Purchase');
Route::get('/babe',[soildersController::class,'soilders']) ->name('soilders');