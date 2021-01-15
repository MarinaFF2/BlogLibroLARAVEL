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
                <div class="breadcrumb-item active">Registrarse</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">                 
        <div class="col-sm col-md">                    
            <h1 class="text-center">Registrarse</h1>
        </div>
    </div>
    <div class="row justify-content-center">                 
        <div class="col-sm-4 col-md-4 mt-2"> 
            <form class="form-inline" action="registrarse" method="POST" enctype="multipart/form-data">
                <div class="row ml-3 justify-content-center">
                    <div class="col-sm col-md mb-3">
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Correo:*</label>
                            <input type="email" id="correo" class="form-control form-control-sm form-control-md" name="correo" placeholder="usuario"/> 
                        </div>
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Contraseña:*</label>
                            <input type="password" id="clave" class="form-control form-control-sm form-control-md" name="clave" placeholder="password"/> 
                        </div>
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Confirmar contraseña:*</label>
                            <input type="password" id="reclave" class="form-control form-control-sm form-control-md" name="reclave" placeholder="password" /> 
                        </div>
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Nombre:</label>
                            <input type="text" id="nombre" class="form-control form-control-sm form-control-md" name="nombre" placeholder="Nombre" pattern="[A-Za-z]{1,50}"/> 
                        </div>
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Apellido:</label>
                            <input type="text" id="apellido" class="form-control form-control-sm form-control-md" name="apellido" placeholder="Apellido" pattern="[A-Za-z]{1,50}"/> 
                        </div>
                        <div class="form-group mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Edad:</label>
                            <input type="number" id="edad" class="form-control form-control-sm form-control-md" name="edad" placeholder="Edad" pattern="[0-9]{1,50}"/> 
                        </div>
                        <div class="form-control mt-3 mb-3 justify-content-center">
                            <label class="col-label-sm col-label-md mr-3">Foto:</label>
                            <input type="file" id="file" class="form-control-file form-control-sm" name="foto"/> 
                        </div>
                        <div class="mt-3 mb-3 justify-content-center">
                            <input type="submit" class="btn btn-primary" id="registrar" name="registrar" value="Registrar" />
                            <input type="button" class="btn btn-warning" value="Volver" onclick="goBack()">
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection