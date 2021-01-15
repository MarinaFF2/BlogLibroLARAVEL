<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class controladorSinRegistrar extends Controller {

    /**
     * Cerrar sesion
     * @author Marina
     * @param Request $req
     * @return type
     */
    public function cerrarSesion(Request $req) {
        session()->invalidate();
        session()->regenerate();
        return view('inicioSesion');
    }

    public function iniciarSesion(Request $req) {
        if ($req->get('correo') != NULL and $req->get('clave') != NULL) {
            $correo = $req->get('correo');
            $pass = $req->get('clave');
            $passHash = hash('sha256', $pass);
            $u = Conexion::existeUsuario($correo, $passHash);
            if ($u != null) {
                session()->put('usu', $u);
                foreach ($u as $n) {
                    $rol = $n['rol'];
                }
                if ($rol == 1) {
                    session()->put('rol', $rol);
                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                            Has iniciado sesión como administrador.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">X</span>
                            </button>
                          </div>';
                    return view('administrador.bienvenidaA');
                }
                if ($rol == 2) {
                    session()->put('rol', $rol);
                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                            Has iniciado sesión.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">X</span>
                            </button>
                          </div>';
                    return view('registrado.bienvenidaR');
                }
            }
        } else {
            echo '<div class="alert alert-alert alert-dismissible fade show" role="alert">
                    Se ha equivocado al introduccir los datos.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';

            return view('sinRegistrar/bienvenidaS');
        }
    }

    public function registrarse(Request $req) {
        if ($_REQUEST['correo'] != NULL and $_REQUEST['nombre'] != NULL and $_REQUEST['apellido'] != NULL and $_REQUEST['clave'] != NULL and $_REQUEST['reclave'] != NULL) {
            $correo = $req->get('correo');
            $pass = $req->get('clave');
            $rePass = $req->get('reclave');
            if (strcmp($pass, $rePass) == 0) {
                $passHash = hash('sha256', $pass);
                $u = Conexion::existeCorreo($correo);
                if ($u == null) {
                    $nombre = $req->get('nombre');
                    $apellido = $req->get('apellido');
                    Conexion::insertarUsuarios($correo, $passHash, $nombre, $apellido, 0, 2); //usuario registrado
                    if ($req->file('foto') != null) {
                        $foto = $req->file('foto')->move('perfil', $correo);
                        Conexion::ModificarFotoUsuario($correo, $foto);
                    } else {
                        $foto = 'img/perfil/defaultUsu.jpeg';
                        Conexion::ModificarFotoUsuario($correo, $foto);
                    }
                    return view('sinRegistrar/bienvenidaS');
                }
            }
        }
        return view('sinRegistrar/inicioSesion');
    }

    /**
     * Olvidar Contraseña
     * @author Pedro
     * @param Request $req
     * @return type
     */
    public function olvidarPwd(Request $req) {
        $email_usuario = $req->get('email');
        if ($email_usuario != null) {
            $n = Conexion::existeUsuario_Correo($email_usuario);

            $nombre = null;
            $apellidos = null;
            $dni = null;

            foreach ($n as $value) {
                $nombre = $value['nombre'];
                $apellidos = $value['apellidos'];
                $dni = $value['dni'];
            }

            if ($n != null) { //si existe usuario
                //genera la contraseña
                $pass = $this->generateRandomString(5);
                $passHash = hash('sha256', $pass);
                //cifrar contraseña
                Conexion::RecuperarConstrasenia($dni, $passHash);


                $objDemo = new \stdClass();
                $objDemo->demo_one = $email_usuario;
                $objDemo->demo_two = $pass;
                $objDemo->sender = 'Servicio de recuperación de contraseñas';
                $objDemo->receiver = $nombre . ', ' . $apellidos;

                Mail::to($email_usuario)->send(new DemoEmail($objDemo));

                return view('inicioSesion');
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error el usuario no existe o es incorrecto.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';

                return view('olvidarPwd');
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Introduce el correo, por favor.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';

            return view('olvidarPwd');
        }
    }

    /**
     * Genera la contraseña
     * @author Manu
     * @param type $length
     * @return type
     */
    public static function generateRandomString($length) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    public function filtroS(Request $req) {
        $letra = $req->get('filtrarA');
        $listaLibros = \App\Auxiliar\Conexion::obtenerLibro();
        $datos = ['listaLibros' => $listaLibros];
        return view('sinRegistrar/porAutorS', $datos);
    }

}
