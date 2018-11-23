<?php

use App\Libro;
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
    return view('home');
});


Route::get('libro', function () {
    $libros = Libro::orderBy('id','asc')->paginate(10);
    return view('eliminarLibro')->with('libros',$libros);
});

Route::get('estudiante', function () {
    return view('crearEstudiante');
});

Route::get('empleado', function () {
    return view('crearEmpleado');
});

Route::get('prestamo', function () {
    return view('crearPrestamo');
});

Route::resource('libros', 'controladorLibro');

Route::resource('estudiantes', 'controladorEstudiante');

Route::resource('empleados', 'controladorEmpleado');

Route::resource('prestamos', 'controladorPrestamo');


/**
Route::get('libros', 'controladorLibro@index')->name('libros');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');





**/



