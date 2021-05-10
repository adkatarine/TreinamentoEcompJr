<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyJrController;
use App\Http\Controllers\FederationController;
use App\Models\Federation;

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
    $federacoes = Federation::all();
    return view('home', ['federacoes' => $federacoes]);
});

Route::get('/company', [CompanyJrController::class, 'index']);
Route::get('/federation', [FederationController::class, 'index']);

Route::post('/company/save', [CompanyJrController::class, 'store']);
Route::post('/federation/save', [FederationController::class, 'store']);

Route::get('company/list/{id}', [CompanyJrController::class, 'show']);
Route::get('/company/list', [CompanyJrController::class, 'buscarPorFederacao'])->name('/company/list');
Route::get('/company/search', [CompanyJrController::class, 'buscarEmpresa'])->name('/company/search');