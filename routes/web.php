<?php

use App\Http\Controllers\PortfolioController;
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
    return redirect('/aboutme');
});


Route::controller(PortfolioController::class)

    ->group(function () {
        Route::get('/aboutme', 'aboutme')->name('aboutme');
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/portfolio/{id}', 'singleportfolio')->name('singleportfolio');
        Route::get('/experience', 'experience')->name('experience');
    });
