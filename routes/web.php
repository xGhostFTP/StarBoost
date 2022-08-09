<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\UsersController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/main2', [App\Http\Controllers\HomeController::class, 'main2'])->name('main2');

Route::get('/servicios', [App\Http\Controllers\HomeController::class, 'servicios'])->name('servicios');

Route::get('/contactanos', [App\Http\Controllers\HomeController::class, 'contactanos'])->name('contactanos');

Route::get('/shop', 'App\Http\Controllers\CartController@shop')->name('shop');
Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart.index');
Route::post('/add', 'App\Http\Controllers\CartController@add')->name('cart.store');
Route::post('/update', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::post('/remove', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::post('/clear', 'App\Http\Controllers\CartController@clear')->name('cart.clear');
//Route::post ('/update', 'App\Http\Controllers\CartController @ update') -> nombre ('cart.update');
//Route::post ('/remove', 'App\Http\Controllers\CartController @ remove') -> nombre ('cart.remove');





//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registro', [App\Http\Controllers\HomeController::class, 'registro'])->name('registro');

Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');

Route::get('/evaluacion_servicio', [App\Http\Controllers\HomeController::class, 'evaluacion_servicio'])->name('evaluacion_servicio');

Route::get('/estadisticas', [App\Http\Controllers\HomeController::class, 'estadisticas'])->name('estadisticas');

Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');


Route::get('/coach',[CoachController::class, 'index'])
    ->middleware('auth.coach')
    ->name('coach.index');

Route::resource('users',UsersController::class);