<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\Util\IndonesiaAreaController;
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
    return view('welcome');
});

Route::prefix('utility')
    ->name('utility.')
    ->group(function () {
        Route::controller(IndonesiaAreaController::class)
            ->prefix('area')
            ->name('area.')
            ->group(function () {
                Route::get('/province', 'province')->name('province');
                Route::get('/city', 'city')->name('city');
                Route::get('/district', 'district')->name('district');
                Route::get('/sub-district', 'subDistrict')->name('sub-district');
                Route::get('/tps', 'getTps')->name('tps');
            });
    });

Route::post('/post', [RespondenController::class, 'postData'])->name('post');
