<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyJrController;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\AuthController;
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
})->name('/');

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/diretrizes', function () {
    return view('diretrizes');
});


Route::get('/company', [CompanyJrController::class, 'index']);
Route::get('/federation', [FederationController::class, 'index']);

Route::post('/company/save', [CompanyJrController::class, 'store']);
Route::post('/federation/save', [FederationController::class, 'store']);

Route::get('company/list/{id}', [CompanyJrController::class, 'show']);
Route::get('/company/list', [CompanyJrController::class, 'buscarPorFederacao'])->name('/company/list');
Route::get('/company/search', [CompanyJrController::class, 'buscarEmpresa'])->name('/company/search');

Auth::routes();
Route::get('/login', [AuthController::class, 'formLogin']);
Route::post('/login/save', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);