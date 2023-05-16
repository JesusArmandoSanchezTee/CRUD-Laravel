<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });


//permite ver la lista de todas la url del controller
Route::resource('empleado', EmpleadoController::class);

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');



//***************PARAMETROS OBLIGATORIOS Y OPCIONALES********* */
//se pone el parametro que queremos que sea obligatorio 
// de no se asi se pone el signo ? para que sea null 
// Route::get('saludos/{nombre?}', function ($nombre = 'invitado ') {
//     return 'saludos mi estimado '. $nombre;
// });

//RUTAS CON NOMBRE YA QUE DURANTE EL DESARROLLO DEL SOFTWARE PUEDE CAMBIAR LA RUTA Y
// AL TENER UN NOMBRE LA RUTA SI SE CAMBIA NO ES NECESARIO CAMBIARLO EN TODO EL CODIGO 
//se hace referencia al nombre de la ruta no al url
// Route::get('contactonos', function () {
//     return 'esta es la seccion de contactos';
// })->name('contactos');

// Route::get('/', function () {
//     echo "<a href='" . route('contactos') . "'>contactos 1</a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 2</a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 3</a>";
// });


// Route::get('/', function () {
//     $nombre = 'jesus';
//     return view('home')->with('nombre', $nombre);
//     // para enviar un parametro al html primero debemos pasar nombre de la variable y el valor con with
// })->name('home');
