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
use App\Http\Controllers\ReportController;

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

Route::get('/type',[ArmstypeController::class,'Armstype'])->name('Armstype');
Route::get('/type/view/{id}',[ArmstypeController::class,'arms_view'])->name('armstype.view');
Route::get('/type-create',[ArmstypeController::class,'submit'])->name('submit');
Route::post('/type-store',[ArmstypeController::class,'store'])->name('Armstype.store');
Route::get('type/edit/{id}',[ArmstypeController::class,'edit'])->name('armstype.edit');
Route::post('type/update/{id}',[ArmstypeController::class,'update'])->name('Armstype.update');
Route::get('/type-delete/{id}',[ArmstypeController::class,'delete'])->name('Armstype.delete');

Route::get('/setup',[ArmsetupController::class,'Armsetup']) ->name('Armsetup');
Route::get('/setup-bot',[ArmsetupController::class,'agree']) ->name('agree');
Route::post('/setup-store',[ArmsetupController::class,'store']) ->name('Armsetup.store');
Route::get('arms_setup/edit/{id}',[ArmsetupController::class,'edit'])->name('arms.setup.edit');
Route::post('arms_setup/update/{id}',[ArmsetupController::class,'update'])->name('arms.setup.update');
Route::get('/arms_setup-delete/{id}',[ArmsetupController::class,'delete']) ->name('arms.setup.delete');


Route::get('/money',[PurchaseController::class,'Purchase']) ->name('Purchase');
Route::get('/money/view/{id}',[PurchaseController::class,'tender_view']) ->name('tender.view');
Route::get('/money-bot',[PurchaseController::class,'tender']) ->name('tender');
Route::post('/money-store',[PurchaseController::class,'store']) ->name('Purchase.store');
Route::get('/money-edit/{id}',[PurchaseController::class,'edit']) ->name('Purchase.edit');
Route::post('/money-update/{id}',[PurchaseController::class,'update']) ->name('Purchase.update');
Route::get('/money-delete/{id}',[PurchaseController::class,'delete']) ->name('Purchase.delete');

Route::get('/soilders',[soildersController::class,'soilders']) ->name('soilders.list');
Route::get('/soilders/view/{id}',[soildersController::class,'soilders_view']) ->name('soilders.view');
Route::get('/soilders-create',[soildersController::class,'create']) ->name('soilders.create');
Route::post('/soilders-store',[soildersController::class,'store']) ->name('soilders.store');
Route::get('/soilders-edit/{id}',[soildersController::class,'edit']) ->name('soilders.edit');
Route::post('/soilders-update/{id}',[soildersController::class,'update']) ->name('soilders.update');
Route::get('/soilders-delete/{id}',[soildersController::class,'delete']) ->name('soilders.delete');

Route::get('/position',[RankController::class,'rank']) ->name('rank.list');
Route::get('/position/view/{id}',[RankController::class,'rank_view']) ->name('rank.view');
Route::get('/position-bot',[RankController::class,'post']) ->name('rank.post');
Route::post('/position-store',[RankController::class,'store']) ->name('rank.store');
Route::get('/position-edit/{id}',[RankController::class,'edit']) ->name('rank.edit');
Route::post('/position-update/{id}',[RankController::class,'update']) ->name('rank.update');
Route::get('/position-delete/{id}',[RankController::class,'delete']) ->name('rank.delete');


Route::get('/permission',[OfficerController::class,'officer']) ->name('officer.permit');
Route::get('/firing/view/{id}',[OfficerController::class,'officer_view']) ->name('officer.view');
Route::get('/firing',[OfficerController::class,'fire']) ->name('officer.fire');
Route::post('/permission-store',[OfficerController::class,'store']) ->name('officer.store');
Route::get('firing/edit/{id}',[OfficerController::class,'edit'])->name('officer.edit');
Route::post('firing/update/{id}',[OfficerController::class,'update'])->name('officer.update');
Route::get('/permission-delete/{id}',[OfficerController::class,'delete']) ->name('officer.delete');

Route::get('/arms',[DamageController::class,'damagestock']) ->name('damage.stock');
Route::get('/arms/view/{id}',[DamageController::class,'damage_view']) ->name('damage.view');
Route::get('/arm',[DamageController::class,'search']) ->name('damage.search');
Route::post('/arms-stock',[DamageController::class,'store']) ->name('damage.store');
Route::get('/arms-delete/{id}',[DamageController::class,'delete']) ->name('damage.delete');

Route::get('/weapon',[StockController::class,'weapon']) ->name('weapon.stock');
Route::get('/stock/view/{id}',[StockController::class,'stock_view']) ->name('stock.view');
Route::get('/weapons',[StockController::class,'collection']) ->name('weapon.collection');
Route::post('/weapon-store',[StockController::class,'store']) ->name('weapon.store');
Route::get('/weapon-delete/{id}',[StockController::class,'delete']) ->name('weapon.delete');


Route::get('/supply',[VendorController::class,'vendor']) ->name('vendor.supply');
Route::get('/supply/view/{id}',[VendorController::class,'vendor_view']) ->name('vendor.view');
Route::get('/supply-list',[VendorController::class,'vendordetails']) ->name('vendor.list');
Route::post('/supply-store',[VendorController::class,'store']) ->name('vendor.store');
Route::get('supply/edit/{id}',[VendorController::class,'edit'])->name('vendor.edit');
Route::post('supply/update/{id}',[VendorController::class,'update'])->name('vendor.update');
Route::get('/supply-delete/{id}',[VendorController::class,'delete']) ->name('vendor.delete');

Route::get('/money-report',[ReportController::class,'tender_report']) ->name('tender.Report');
Route::post('/money-report/ab',[ReportController::class,'show_report']) ->name('show.Report');

Route::get('/profile',[UserController::class,'profile'])->name('admin.profile');

});