<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DamageController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ArmsetupController;
use App\Http\Controllers\ArmstypeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\soildersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\purchasedetailsController;
use App\Http\Controllers\HomeController;

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


//show login form
Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');

//submit login form
Route::post('/admin/do/login',[UserController::class,'doLogin'])->name('admin.do.login');

Route::group(['prefix'=>'','middleware'=>['auth']],function(){
  
//for searchbar 
Route::get('/search',[HomeController::class,'search'])->name('search');

//for logout
Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

Route::get('/',[DashboardController::class,'dashboard']) ->name('dashboard');
Route::get('/idea',[DashboardController::class,'accept']) ->name('accept');

Route::get('/type',[ArmstypeController::class,'Armstype']) ->name('Armstype');
Route::get('/type-create',[ArmstypeController::class,'submit']) ->name('submit');
Route::post('/type-store',[ArmstypeController::class,'store']) ->name('Armstype.store');
Route::get('/type-edit/{id}',[ArmstypeController::class,'edit_type']) ->name('Armstype.edit');
Route::post('/type-update/{id}',[ArmstypeController::class,'update_type']) ->name('Armstype.update');

Route::get('/setup',[ArmsetupController::class,'Armsetup']) ->name('Armsetup');
Route::get('/setup-bot',[ArmsetupController::class,'agree']) ->name('agree');
Route::post('/setup-store',[ArmsetupController::class,'store']) ->name('Armsetup.store');
Route::get('arms_setup/edit/{id}',[ArmsetupController::class,'setup_edit'])->name('arms.setup.edit');
Route::post('arms_setup/update/{id}',[ArmsetupController::class,'setup_update'])->name('arms.setup.update');


Route::get('/money',[PurchaseController::class,'Purchase']) ->name('Purchase');
Route::get('/money-bot',[PurchaseController::class,'tender']) ->name('tender');
Route::post('/money-store',[PurchaseController::class,'store']) ->name('Purchase.store');


Route::get('/soilders',[soildersController::class,'soilders']) ->name('soilders.list');
Route::get('/soilders-create',[soildersController::class,'create']) ->name('soilders.create');
Route::post('/soilders-store',[soildersController::class,'store']) ->name('soilders.store');


Route::get('/position',[RankController::class,'rank']) ->name('rank.list');
Route::get('/position/view/{id}',[RankController::class,'rank_view']) ->name('rank.view');
Route::get('/position-bot',[RankController::class,'post']) ->name('rank.post');
Route::post('/position-store',[RankController::class,'store']) ->name('rank.store');
Route::get('/position-edit/{id}',[RankController::class,'edit']) ->name('rank.edit');
Route::post('/position-update/{id}',[RankController::class,'update']) ->name('rank.update');
Route::get('/position-delete/{id}',[RankController::class,'delete']) ->name('rank.delete');


Route::get('/permission',[OfficerController::class,'officer']) ->name('officer.permit');
Route::get('/firing',[OfficerController::class,'fire']) ->name('officer.fire');
Route::post('/permission-store',[OfficerController::class,'store']) ->name('officer.store');


Route::get('/arms',[DamageController::class,'damagestock']) ->name('damage.stock');
Route::get('/arm',[DamageController::class,'search']) ->name('damage.search');
Route::post('/arms-stock',[DamageController::class,'store']) ->name('damage.store');

Route::get('/weapon',[StockController::class,'weapon']) ->name('weapon.stock');
Route::get('/stock/view/{id}',[StockController::class,'stock_view']) ->name('stock.view');
Route::get('/weapons',[StockController::class,'collection']) ->name('weapon.collection');
Route::post('/weapon-store',[StockController::class,'store']) ->name('weapon.store');



Route::get('/supply',[VendorController::class,'vendor']) ->name('vendor.supply');
Route::get('/supply-list',[VendorController::class,'vendordetails']) ->name('vendor.list');
Route::post('/supply-store',[VendorController::class,'store']) ->name('vendor.store');


Route::get('/profile',[UserController::class,'profile'])->name('admin.profile');

});