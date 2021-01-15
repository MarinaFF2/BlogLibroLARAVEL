@extends('maestra.maestraSinRegistrar')

@section('titulo') 
Iniciar Sesión
@endsection

@section('javascript') 
<script>
    function goBack() {
        window.history.back();
    }
</script>
@endsection

@section('contenido') 

<div class="container">            
    <div class="row">
        <div class="col-sm col-md">
            <div class="breadcrumb">
                <div class="breadcrumb-item"><a href="bienvenidaS">Home</a></div>
                <div class="breadcrumb-item active">Inicio Sesión</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center"> 
        <div class="col-md-4 col-sm-4 mt-3 mb-3">
            <h1>Iniciar Sesión</h1>
            <form class="form-inline" action="inicioSesion" method="POST">
                <div class="row">
                    <div class="col-sm col-md mt-3 mb-3">
                        <div class="form-group-sm form-group-md mt-3 mb-3">
                            <label for="email">Usuario:
                                <input type="text" class="form-control form-control-sm form-control-md ml-3" id="usuario" name="correo" placeholder="usuario@x.x">
                            </label>
                        </div>
                        <div class="form-group-sm form-group-md mt-3 mb-3">
                            <label for="pwd">Contraseña:
                                <input type="password" class="form-control form-control-sm form-control-md ml-3" id="pwd" name="clave" placeholder="Contraseña">
                            </label>
                        </div>
                        <div class="form-group-sm form-group-md mt-3 mb-3">
                            <a href="enlaceRegistrarse" class="ml-3">Registrarse</a>
                            <a href="enlaceOlvidarPwd" class="ml-3">He olvidado la contraseña</a><br>
                        </div>
                        <div class="form-group-md form-group-sm mt-3 mb-3 ml-3">
                            <input type="submit" class="btn btn-primary mt-3" id="aceptar" name="aceptarInicioSesion" value="Aceptar">
                            <input type="button" class="btn btn-warning mt-3 ml-3" name="volverIndex" value="Volver">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection