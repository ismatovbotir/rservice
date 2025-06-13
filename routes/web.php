<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\AppealController;
use App\Http\Controllers\FiscalController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('main');
Route::get('/label', function () {
    return view('label');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'crm', 'middleware' => 'auth','as'=>'crm.'], function () {

    Route::resource('/fiscal',FiscalController::class);
    Route::resource('/bill',BillController::class);
    Route::resource('/offer',OfferController::class);
    Route::resource('/appeal',AppealController::class);
    Route::resource('/company',CompanyController::class);
    Route::resource('/client',ClientController::class);

});