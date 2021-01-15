@extends('maestra.maestraRegistrado')

@section('titulo') 
@endsection

@section('contenido') 
<div clas="container">
    <div class="row">
        <div class="col-sm col-md col-lg">
            <div class="breadcrumb">
                <div class="breadcrumb-item"><a href="bienvenidaR">Home</a></div>
                <div class="breadcrumb-item active">Perfil</div>
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-md col-sm col-lg">
            <h1 class="text-center">Perfil</h1>
        </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">                 
        <div class="col-md-4 col-sm-4 col-lg-4 mt-2 ml-3">
            <img id="perfil" name="fotoPerfil" src="data:image/jpeg;base64,<?php echo base64_encode($u->Foto); ?>" alt='Foto de perfil no encontrada'/><br>
        </div>                               
        <div class="col-md-4 col-sm-4 col-lg-4 mt-2">
            <form action="modificarFotoR" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-3 mb-3">
                    <label class="col-label-sm  col-label-md col-label-lg col-label-md mr-3">Foto:</label>
                    <input type="hidden" name="correo" value="<?php echo $u->Correo; ?>"/> 
                    <input type="file" id="foto" class="form-control-file form-control -md form-control-sm" name="foto"/>                         
                    <input type="submit" class="btn btn-primary" id="modificarFoto" name="modificarFoto" value="modificarFoto" />
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">  
        <div class="col-md-4 col-sm-4 col-lg-4  mt-2">
            <form action="perfilR" method="POST" enctype="multipart/form-data">
                <div class="row ml-3 justify-content-center">
                    <div class="col-md col-sm mb-3">
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Correo:*</label>
                            <input type="email" id="correo" class="form-control form-control-sm form-control-md form-control-lg" name="correo" value="<?php echo $u->Correo; ?>" placeholder="usuario" readonly/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Antigua contraseña:</label>
                            <input type="password" id="antClave" class="form-control form-control-sm form-control-md form-control-lg" name="antClave"/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Contraseña:</label>
                            <input type="password" id="clave" class="form-control form-control-sm form-control-md form-control-lg" name="clave"/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Confirmar contraseña:</label>
                            <input type="password" id="conClave" class="form-control form-control-sm form-control-md form-control-lg" name="conClave"/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Nombre:</label>
                            <input type="text" id="nombre" class="form-control form-control-sm form-control-md form-control-lg" name="nombre" value="<?php echo $u->Nombre; ?>" placeholder="Nombre" pattern="[A-Za-z]{1,50}"/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Apellido:</label>
                            <input type="text" id="apellido" class="form-control form-control-sm form-control-md form-control-lg" name="apellido" value="<?php echo $u->Apellido; ?>" placeholder="Apellido" pattern="[A-Za-z]{1,50}"/> 
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label class="col-label-sm  col-label-md col-label-lg mr-3">Edad:</label>
                            <input type="number" id="edad" class="form-control form-control-sm form-control-md form-control-lg" name="edad" value="<?php echo $u->Edad; ?>" placeholder="Edad" pattern="[0-9]{1,50}"/> 
                        </div>
                        <div class="text-right  mt-3 mb-3">
                            <input type="submit" class="btn btn-primary" id="modificarUsuario" name="modificarUsuario" value="Guardar" />
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>
@endsection