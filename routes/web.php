<?php

use App\Http\Controllers\Admin\BarangController;
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

Route::group(['middleware' => 'auth'],function(){
    //route
    Route::group(['prefix' => 'admin2'],function(){
        Route::get('/', function(){
            return view('pages.admin.dashboard');
        })->name('admin.dashboard');
        Route::resource('barang', BarangController::class);
    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
