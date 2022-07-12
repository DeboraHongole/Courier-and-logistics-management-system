<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\supplier\SupplierController;
use App\Http\Controllers\supplier\BusnessContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\supplier\HomeController;
use Illuminate\Support\Facades\Auth; 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.homepage');
});

Auth::routes();


Route::get('/', [SupplierController::class, 'index'])->name('homepage');
//// a. root for admin supper View all datacollector more infor(VIEWS)index
Route::get('supplier/', [SupplierController::class, 'homepage'])->name('supplier.index');
Route::post('supplier/destination', [SupplierController::class, 'destination'])->name('supplier.destination');


Route::post('supplier/busnesscontacts/from', [SupplierController::class, 'busness_contact_from'])->name('supplier.busness_contact_from');
Route::post('supplier/busnesscontacts/to', [SupplierController::class, 'busness_contact_to'])->name('supplier.busness_contact_to');

Route::get('supplier/parceldetail', [SupplierController::class, 'parcel_detail'])->name('supplier.parcel_detail');
Route::post('supplier/add_parceldetail', [SupplierController::class, 'add_parceldetail'])->name('supplier.add_parceldetail');


Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']], function () {
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('country/view_countries',[AdminController::class,'viewCountry'])->name('admin.view_country');
    Route::post('country/add_countries',[AdminController::class,'addCountry'])->name('admin.add_country');
    Route::get('region/view_regions',[AdminController::class,'viewRegions'])->name('admin.view_regions');
    Route::post('region/add_regions',[AdminController::class,'addRegions'])->name('admin.add_regions');
});