<?php

use App\Http\Controllers\ComController;
Use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email/verify', function() {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('dashboard/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Proteger las paginas que no pueden acceder al menu sin log in con middleware
Route::resource('comentario', ComentarioController::class)->middleware('verified');

Route::resource('peliculas', PeliculaController::class)->middleware('verified');

Route::resource('users', UserController::class)->middleware('verified');

Route::get('/get-all-comentario', [ComController::class, 'getAllComentarios']);

Route::get('/download-pdf', [ComController::class, 'downloadPDF'])->name('download-pdf');

Route::post('pelicula/agrega-user/{pelicula}', [PeliculaController::class, 'agregaUser'])->name('pelicula.agrega-user');