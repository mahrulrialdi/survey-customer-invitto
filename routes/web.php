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

Route::get('/', [SurveyCostumerController::class, 'index_satisfaction'])->name('index_satisfaction');
Route::get('/survey-complain', [SurveyCostumerController::class, 'index_complain'])->name('index_complain');
Route::post('/store-survey-satisfaction', [SurveyCostumerController::class, 'survey_satisfaction'])->name('survey_satisfaction');
Route::post('/store-survey-complain', [SurveyCostumerController::class, 'survey_complain'])->name('survey_complain');

Route::get('/thank-you', function() {
    return view('survey.thank-you');
})->name('thank-you');
