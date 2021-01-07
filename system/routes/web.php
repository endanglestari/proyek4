<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientController;

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
    return view('welcome');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('kontak', [HomeController::class, 'showKontak']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::post('kategori/filter', [KategoriController::class, 'filter']);
	Route::resource('produk', ProdukController::class);
	Route::resource('product', ProductController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('user', UserController::class);
	Route::resource('register', RegisterController::class);
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);
Route::get('alamat', [HomeController::class, 'testAlamat']);


Route::get('produk-collection', [ClientController::class, 'produkCollection']);
Route::post('produk-collection/filter', [ClientController::class, 'filter']);
Route::get('kategori-collection', [ClientController::class, 'kategoriCollection']);
Route::get('berandaa', [HomeController::class, 'showBerandaa']);