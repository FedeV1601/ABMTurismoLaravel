<?php

use App\Http\Controllers\TownController;
use App\Http\Controllers\HotelController;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/user/ciudades/index', [TownController::class, 'galeria'])->name('user.ciudades.index');

Route::get('/user/ciudades/show/{ciudad}', [TownController::class, 'show'])->name('user.ciudades.show');

Route::get('/user/hoteles/index/{ciudad}', [HotelController::class, 'galeria'])->name('user.hoteles.index');

Route::get('/user/hoteles/show/{hotel}', [HotelController::class, 'show'])->name('user.hoteles.show');


/*
Route::get('/ciudades/ABMCiudad', [TownController::class, 'index']);

Route::get('/ciudad/show/{id}', [TownController::class, 'show']);
Route::get('/ciudad/delete/{id}', [TownController::class, 'destroy']);

Route::get('/ciudad/agregar', [TownController::class, 'create']);
Route::post('/ciudad/agregar', [TownController::class, 'store']);

Route::get('/ciudad/editar/{id}', [TownController::class, 'edit']);
Route::post('/ciudad/editar/{id}', [TownController::class, 'update']);
*/

Route::resource('/admin/ciudades', TownController::class)->parameters(['ciudades' => 'ciudad'])->names('admin.ciudades'); 

/* Route::get('/hoteles/index/{id}', [HotelController::class, 'galeria']);
Route::get('/hoteles/ABMHotel', [HotelController::class, 'index']);
Route::get('/hotel/show/{id}', [HotelController::class, 'show']);
Route::get('/hotel/delete/{id}', [HotelController::class, 'destroy']);

Route::get('/hotel/agregar', [HotelController::class, 'create']);
Route::post('/hotel/agregar', [HotelController::class, 'store']);

Route::get('/hotel/editar/{id}', [HotelController::class, 'edit']);
Route::post('/hotel/editar/{id}', [HotelController::class, 'update']); */

Route::resource('/admin/hoteles', HotelController::class)->parameters(['hoteles' => 'hotel'])->names('admin.hoteles'); 



