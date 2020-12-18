<?php

use App\Http\Controllers\LocalizationController;
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


Route::get('lang/{lang}', [LocalizationController::class, 'index'])->name('lang');


/* You can also do it this way , without a controller */
//Route::get('lang/{lang}', function ($locale) {
//    \Illuminate\Support\Facades\Session::put('locale',$locale);
//    return redirect()->back();
//})->name('lang');


Route::get('/', function () {
    return view('index');
})->name('index');
