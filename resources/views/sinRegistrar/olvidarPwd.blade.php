@extends('maestra.maestraSinRegistrar')

@section('titulo') 
Registrarse
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
                        <div class="breadcrumb-item"><a href="enlaceIniciarSesion">Inicio Sesión</a></div>
                        <div class="breadcrumb-item active">Recuperar contraseña</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">                 
                <div class="col-md-5 col-sm-5-5 mt-3">                    
                    <h1>Recuperar contraseña</h1>
                    <form action="olvidarPwd" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm col-md mb-3">
                                <div class="form-group mt-3 mb-3">
                                    <label class="col-label-sm col-label-md mr-3">Introduce tu correo: </label>
                                    <input type="email" id="correo" class="form-control form-control-sm form-control-md" name="email" placeholder="usuario"/> 
                                    <label class="col-label-sm col-label-md mr-3">*Si no aparace en el menu principal del correo, mira en spam* </label>
                                </div>                                
                                <div class="mt-3 mb-3">
                                    <input type="submit" class="btn btn-primary" name="botOlvidoPwd" value="Recuperar contraseña">
                                    <input type="button" class="btn btn-warning" value="Volver" onclick="goBack()">
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
@endsection