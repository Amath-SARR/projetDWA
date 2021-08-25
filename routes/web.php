<?php

use App\Http\Controllers\RevenueController;
use App\Http\Controllers\depenseController;
use App\Models\Depense;
use App\Models\Revenue;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {

    return view('welcome');
});*/

Route::get('/', function () {

    return view('index');
});

Route::resource('/revenue', RevenueController::class);
Route::resource('/depense', DepenseController::class);
