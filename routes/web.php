<?php

use App\Http\Controllers\BirdViewDistanceController;
use App\Http\Controllers\DrivingDistanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PincodeController;


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
    return view('home');
})->name('home');

//Postal Code CRUD
Route::resource('/pincodes', PincodeController::class)->except(['show']);
Route::post('/pincodes/destroy-all', [PincodeController::class, 'destroyAll'])->name('pincodes.destroy.all');
Route::get('/pincodes/upload', [PincodeController::class, 'upload'])->name('pincodes.upload');
Route::post('/pincodes/upload', [PincodeController::class, 'uploadStore'])->name('pincodes.upload.store');

//Bird View Distance
Route::resource('/birdview-distance', BirdViewDistanceController::class)->only(['create', 'store']);

//Distance from Api
Route::resource('/driving-distance', DrivingDistanceController::class)->only(['create', 'store']);