<?php

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
    return view('sinRegistrar/bienvenidaS');
});
//comunes
Route::post('cerrarSesion', 'controladorSinRegistrar@cerrarSesion');
Route::post('registrarse', 'controladorSinRegistrar@registrarse');
Route::post('inicioSesion', 'controladorSinRegistrar@iniciarSesion');
Route::post('olvidarPwd', 'controladorSinRegistrar@olvidarPwd');
Route::get('bienvenidaS', function () {return view('sinRegistrar/bienvenidaS');});
Route::get('noticiasS', function () {return view('sinRegistrar/noticiasS');});
Route::get('porNombreS', function () {return view('sinRegistrar/porNombreS');});
Route::get('porAutorS', function () {
    $listaLibros = null;
    $datos = ['listaLibros' => $listaLibros]; 
    return view('sinRegistrar/porAutorS',$datos);});
Route::post('porAutorS','controladorSinRegistrar@olvidarPwd');
Route::any('filtroS','controladorSinRegistrar@filtroS');
Route::get('enlaceIniciarSesion', function () {return view('sinRegistrar/iniciarSesion');});
Route::get('enlaceRegistrarse', function () {return view('sinRegistrar/registrarse');});
Route::get('enlaceOlvidarPwd', function () {return view('sinRegistrar/olvidarPwd');});


//registrado
//Route::group(['middleware' => ['usuario']], function() {
    Route::get('bienvenidaR', function () {
        return view('registrado/bienvenidaR');
    });
    Route::post('perfilR', 'controladorRegistrado@perfil');
    Route::get('perfilR', function () {
        return view('registrado/perfilR');
    });
    Route::post('modificarFotoR', 'controladorRegistrado@modificarFoto');

//    Route::get('consultarGastosAlumno', function () {
//        if (isset($_GET['page'])) {
//            $datos = controladorTutor::enviarConsultarGastoAlumno();
//        } else {
//            $datos = [
//                'l2' => Conexion::listarAlumnoPorTutor(),
//                'gtc' => null,
//                'gtp' => null,
//                'gc' => null
//            ];
//        }
//        return view('tutor/consultarGastosAlumno', $datos);
//    });
//});

//administrador
//Route::group(['middleware' => ['administrador']], function() {
    Route::get('bienvenidaA', function () {
        return view('administrador/bienvenidaA');
    });
    Route::post('bienvenidaA', function () {
        return view(404); //Error 404 NOT FOUND
    });
    Route::post('perfilA', 'controladorGeneral@perfil');
    Route::get('perfilA', function () {
        return view('registrado/perfilA');
    });
    Route::post('modificarFotoA', 'controladorGeneral@modificarFoto');

//    Route::get('consultarGastosAlumno', function () {
//        if (isset($_GET['page'])) {
//            $datos = controladorTutor::enviarConsultarGastoAlumno();
//        } else {
//            $datos = [
//                'l2' => Conexion::listarAlumnoPorTutor(),
//                'gtc' => null,
//                'gtp' => null,
//                'gc' => null
//            ];
//        }
//        return view('tutor/consultarGastosAlumno', $datos);
//    });
//});
