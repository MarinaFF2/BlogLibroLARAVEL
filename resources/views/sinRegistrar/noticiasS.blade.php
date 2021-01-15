<?php use App\Auxiliar\Conexion;?>
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
                <div class="breadcrumb-item active">Recuperar Noticias</div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm col-md">
            <div class="title h1 text-center">Noticias</div>
        </div>
    </div>            
    <div class="row ">
        <?php
        $n = Conexion::obtenerNoticia();
        foreach ($n as $key) {
            ?>
            <div class="col-sm col-md">
                <!-- Card Start -->
                <div class="card tam ml-3 mt-3 mb-3">
                    <div class="card-title">
                        <?php echo $key->asunto; ?>
                    </div>
                    <div class="card-text">
                        <img class="card-img-top" src="<?php echo $key->foto; ?>" alt="foto usuario" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                        <label><?php echo $key->idUsuario; ?></label> 
                        <h4><small><i>Posted on <?php echo $key->fecha; ?></i></small></h4>
                        <p><?php echo $key->asunto; ?></p>
                        <p><?php echo $key->descripcion; ?></p>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="row">
            <div class="col-sm col-md">
                {{ $n->links()}}
            </div>
        </div>
    </div>
    @endsection