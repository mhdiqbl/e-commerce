<?php

use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class, 'index']);
Route::get('product/{slug}', [HomeController::class, 'show'])->name('product.show');
Route::view('/product','pages.user.product');
Route::group(['middleware' => 'auth'],function(){
    //admin
    Route::group(['prefix' => 'admin2'],function(){
        Route::get('/', function(){
            return view('pages.admin.dashboard');
        })->name('admin.dashboard');
        Route::resource('barang', BarangController::class);
        Route::resource('gallery', GalleryController::class);
    });
    //user
    Route::group([],function(){
        Route::get('/card',[HomeController::class, 'listCard'])->name('card.list');
        Route::post('/card/{id}',[HomeController::class, 'addCard'])->name('card.add');
    });
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
