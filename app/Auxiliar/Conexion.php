<?php

namespace App\Auxiliar;

use App\Modals\usuario;
use App\Modals\usuarios_rol;
use App\Modals\noticia;
use App\Modals\libro;

/**
 * Description of Conexion
 *
 * @author Marina Estefania Flores Fernandez
 */
class Conexion {
    /**
     * CLASE USUARIOS
     */

    /**
     * Metodo para obtener un usuario para comprobar que exite
     * solo con el correo
     * @author Marina Estefania Flores Fernandez
     * @param type $correo
     * @return type
     */
    static function existeCorreo($correo) {
        $v = \DB::table('usuarios')
                ->where('usuarios.correo', $correo)
                ->join('usuarios_roles', 'usuarios_roles.usuario_dni', '=', 'usuarios.correo')
                ->select('usuarios.correo as correo', 'usuarios.pwd as pwd', 'usuarios.nombre as nombre', 'usuarios.apellido as apellido', 'usuarios_roles.idRol as rol', 'usuarios.foto as foto', 'usuarios.activo as activo')
                ->first();
        return $v;
    }

    /**
     * Metodo para obtener un usuario para comprobar que exite
     * con el correo y contraseña para el incio de sesion
     * @author Marina Estefania Flores Fernandez
     * @param type $correo
     * @param type $pwd
     * @return type
     */
    static function existeUsuario($correo, $pwd) {
        $v = \DB::table('usuarios')
                ->where('usuarios.correo', $correo)
                ->where('usuarios.pwd', $pwd)
                ->join('usuarios_roles', 'usuarios_roles.usuario_dni', '=', 'usuarios.correo')
                ->select('usuarios.correo as correo', 'usuarios.pwd as pwd', 'usuarios.nombre as nombre', 'usuarios.apellido as apellido', 'usuarios_roles.idRol as rol', 'usuarios.foto as foto', 'usuarios.activo as activo')
                ->first();
        return $v;
    }

    /**
     * MODIFICAR USUARIO
     * @author Marina Estefania Flores Fernandez
     * @param type $correo
     * @param type $nombre
     * @param type $apellido
     * @param type $activo
     * @param type $rol_id
     */
    static function ModificarUsuarios($correo, $nombre, $apellido, $activo, $rol_id) {
        try {
            $p = usuario::where('correo', $correo)
                    ->update(['nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'activo' => $activo]);

            $r = usuarios_rol::where('idUsuario', $correo)
                    ->update(['idRol' => $rol_id]);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Modificado usuario con exito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        } catch (\Exception $e) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al modificar usuario.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }
    }

    /**
     * METODO INSERTAR USUARIO
     * @param type $correo
     * @param type $pwd
     * @param type $nombre
     * @param type $apellido
     * @param type $edad
     */
    static function insertarUsuarios($correo, $pwd, $nombre, $apellido, $activo, $rol) {
        //usuario
        $p = new usuario;
        $p->nombre = $nombre;
        $p->apellido = $apellido;
        $p->correo = $correo;
        $p->pwd = $pwd;
        $p->activo = $activo;
        $p->foto = 'images/defecto.jpeg';
        //rol
        $c = new usuarios_rol;
        $c->usuario_id = $correo;
        $c->rol_id = $rol;
        try {
            $p->save();
            $c->save();
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Insertado con exito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        } catch (\Exception $e) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al insertar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }
    }

    /**
     * Metodo para modificar la foto del usuario
     * @param type $correo
     * @param type $foto
     */
    static function ModificarFotoUsuario($correo, $foto) {
        try {
            $p = usuario::where('correo', $correo)
                    ->update(['foto' => $foto]);

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Modificada foto con exito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        } catch (\Exception $e) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al modificar foto.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }
    }

    /**
     * METODO MODIFICAR USUARIO
     * @param type $correo
     * @param type $pwd
     * @param type $nombre
     * @param type $apellido
     */
    static function ModificarUsuContra($correo, $pwd) {
        try {
            $p = usuario::where('correo', $correo)
                    ->update(['pwd' => $pwd]);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Modificado contraseña con exito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        } catch (\Exception $e) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al modificar contraseña.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }
    }

    /**
     * BORRAR USUARIO   
     * @param type $correo
     */
    static function borrarUsuario($correo) {
        try {
            usuarios_rol::where('idUsuario', $correo)->delete();
            usuario::where('correo', $correo)->delete();
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Borrado con exito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        } catch (\Exception $e) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Error al borrar.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">X</span>
                    </button>
                  </div>';
        }
    }

    /**
     * 
     * @param type $correo
     * @return type
     */
    static function obtenerRolUsuario($correo) {
        $p = usuarios_rol::where('idUsuario', $correo)->first();
        return $p;
    }

    /**
     * Metodo para obtener una lista de array con la clase usuario
     * 
     * @return type
     */
    static function listaUsuarios() {
        $v = \DB::table('usuarios')
                ->join('usuarios_roles', 'usuarios_roles.usuario_dni', '=', 'usuarios.correo')
                ->select('usuarios.correo as correo', 'usuarios.pwd as pwd', 'usuarios.nombre as nombre', 'usuarios.apellido as apellido', 'usuarios_roles.idRol as rol', 'usuarios.foto as foto', 'usuarios.activo as activo')
                ->get();
        return $v;
    }

    /**
     * Metodo para obtener una lista de array con la clase usuario
     * @return type
     */
    static function listaUsuariosPagination() {
        $v = \DB::table('usuarios')
                ->join('usuarios_roles', 'usuarios_roles.usuario_dni', '=', 'usuarios.correo')
                ->select('usuarios.correo as correo', 'usuarios.pwd as pwd', 'usuarios.nombre as nombre', 'usuarios.apellido as apellido', 'usuarios_roles.idRol as rol', 'usuarios.foto as foto', 'usuarios.activo as activo')
                ->paginate(8);
        return $v;
    }

    /**
     * CLASE Noticia
     */

    /**
     * Metodo para obtener una lista de array con la clase Noticia
     * @return \Noticia
     */
    static function obtenerNoticia() {
        $v = \DB::table('noticias')->paginate(10);
        return $v;
    }
/**
     * Metodo para obtener una lista de array con la clase Libro
     * @return \Noticia
     */
    static function obtenerLibro() {
        $v = \DB::table('libros')->paginate(10);
        return $v;
    }
}
