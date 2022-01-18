<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactUsMailable;


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
    return view('auth.login');
});

/*
Route::get('/empleado', [EmpleadoController::class, 'index']);

Route::get('/empleado/create', [EmpleadoController::class, 'create']);
*/

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

//aqui elimino las vistas de registro y de recuperas password
// ['register' => false, 'reset' => false]
Auth::routes();


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/contact-us', [ContactUsController::class, "index"])->name('contactanos.index');
    Route::post('/contact-us', [ContactUsController::class, "store"])->name('contactanos.store');
});



Route::get('/tailwindcss', function () {
    return view('tailwind.style');
});
