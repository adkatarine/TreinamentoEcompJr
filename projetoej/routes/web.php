<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyJrController;
use App\Http\Controllers\FederationController;

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
});

Route::get('/company', [CompanyJrController::class, 'index']);
Route::get('/federation', [FederationController::class, 'index']);

Route::post('/company/save', [CompanyJrController::class, 'store']);
Route::post('/federation/save', [FederationController::class, 'store']);

Route::get('company/list', [CompanyJrController::class, 'show']);