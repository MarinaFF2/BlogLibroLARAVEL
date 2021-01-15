<?php

namespace App\Http\Controllers;

use App\Auxiliar\Conexion;
use Illuminate\Http\Request;

class controladorRegistrado extends Controller {

    public function modificarFoto(Request $req) {
        $usu = session()->get('usu');
        foreach ($usu as $key) {
            $rol = $key->Rol;
        }
        $correo = $req->get('correo');
        if ($req->file('foto') != null) {
            $foto = $req->file('foto')->move('perfil', $correo);
            Conexion::ModificarFotoUsuario($correo, $foto);
        } else {
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Sube una foto por favor.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }

        $u = Conexion::existeCorreo($correo);
        $u = session()->put('usu', $u);
        switch ($rol) {
            case 1 :
                return view('administrador/perfilA', ['u' => $u]);
                break;
            case 2 :
                return view('registrado/perfilR', ['u' => $u]);
                break;
        }
    }

    public function perfil(Request $req) {
        $usu = session()->get('usu');
        foreach ($usu as $key) {
            $rol = $key->Rol;
        }
        $correo = $req->get('correo');
        $nombre = $req->get('nombre');
        $apellido = $req->get('apellido');
        $edad = $req->get('edad');
        //activo -> 1
        Conexion::ModificarUsuarios($correo, $nombre, $apellido, 1, $rol);

        if ($req->get('clave') != null && $req->get('antClave') != null && $req->get('conClave') != null) {
            $clave = $req->get('clave');
            $antClave = $req->get('antClave');
            $reClave = $req->get('conClave');
            $antpassHash = hash('sha256', $antClave);
            $usuario = Conexion::existeUsuario($correo, $antpassHash);
            if ($usuario) {
                if ($reClave == $clave) {
                    $passHash = hash('sha256', $clave);
                    Conexion::ModificarUsuContra($correo, $passHash);
                } else {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            La nueva contraseña no coincide.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">X</span>
                            </button>
                          </div>';
                }
            } else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            La antigua contraseña no es esa.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">X</span>
                            </button>
                          </div>';
            }
        }
        $u = Conexion::existeCorreo($correo);
        session()->put('usu', $u);
        switch ($rol) {
            case 1 :
                return view('administrador/perfilA', ['u' => $u]);
                break;
            case 2 :
                return view('registrado/perfilR', ['u' => $u]);
                break;
        }
    }

}
