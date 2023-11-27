<?php

use App\Http\Controllers\SurveyCostumerController;
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

Route::get('/', [SurveyCostumerController::class, 'index'])->name('index');
Route::post('/store', [SurveyCostumerController::class, 'store'])->name('store');

Route::get('/thank-you', function() {
    return view('thank-you');
})->name('thank-you');
