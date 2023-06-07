<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('form');
});

Route::get('/customerlist', function () {
    return view('customerlist');
});

Route::get('/customerlist', [CustomerController::class, 'displayCustomers'])->name('customerlist');

Route::post('/addcustomer', [CustomerController::class, 'addCustomer'])->name('addcustomer');


