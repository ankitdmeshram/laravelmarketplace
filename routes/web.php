<?php

use App\Http\Controllers\leadController;
use App\Http\Controllers\storeController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/pest-control-service', function () {
    return view('landingPages/pestcontrolservice');
});

Route::get('leads', [leadController::class, 'allLeads']);

Route::post('add_lead', [leadController::class, 'addLead']);

Route::get('delete/{id}', [leadController::class, 'delete']);

Route::get('{storename}', [storeController::class, 'fetchAllDetails']);
