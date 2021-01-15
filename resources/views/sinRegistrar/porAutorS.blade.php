@extends('maestra.maestraSinRegistrar')

@section('titulo') 
buscar por autor
@endsection

@section('javascript') 
        <!--<script src="{{asset ('js/sinRegistrar/autorS.js')}}"></script>-->
@endsection

@section('contenido') 
<div class="container">
    <div class="row ">
        <div class="col">
            <div class="breadcrumb">
                <div class="breadcrumb-item"><a href="home">Home</a></div>
                <div class="breadcrumb-item"><a href="listadoLibros">Listar Libros</a></div>
                <div class="breadcrumb-item active">Por Autor</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md col-sm col-lg mt-3 mb-3">
            <h2 class="text-center fixed-tope">LIBROS ORDENADOS POR AUTOR</h2>
            <form class="form-inline" name="filtroS" action="filtroS" method="POST">
                {{ csrf_field() }}
                <div class="form-group mt-3 mb-3">
                    <input type="submit" class="btn btn-primary" name="filtrarA" id="filtrarA" value="A">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarB" value="B">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarC" value="C">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarD" value="D">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarE" value="E">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarF" value="F">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarG" value="G">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarH" value="H">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarI" value="I">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarJ" value="J">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarK" value="K">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarM" value="M">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarN" value="N">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarÑ" value="Ñ">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarO" value="O">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarP" value="P">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarQ" value="Q">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarR" value="R">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarS" value="S">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarT" value="T">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarU" value="U">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarV" value="V">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarW" value="W">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarY" value="X">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarX" value="Y">
                    <input type="submit" class="btn btn-primary" name="filtroS" id="filtrarZ" value="Z">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md col-sm col-lg">
            <div class="table-responsive">                        
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Foto</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Genéro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($listaLibros != null) {
                            foreach ($listaLibros as $key) {
                                ?> 
                            <form class="form-inline" action="../../controlador/controladorLibro.php" method="POST">
                                <tr>
                                    <td>
                                        <img id="fotoLibro" class="img-fluid" src="<?php echo $key->foto; ?>" alt='Foto no encontrada'/>
                                        <input type="hidden"  name="isbn" value="<?php echo $key->ISBN; ?>"/>
                                    </td>
                                    <td><?php echo $key->titulo; ?></td>
                                    <td><?php echo $key->autor; ?></td>
                                    <td><?php echo $key->editorial; ?></td>
                                    <td><?php echo $key->generos; ?></td>             
                                    <td>
                                        <button type="button" id="agrandar" class="btn" data-toggle="modal" data-id="<?php echo $key->ISBN; ?>" data-target="#ampliar">
                                        </button>                                            

                                    </td>
                                </tr>
                            </form>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm col-md col-lg">
            @if ($listaLibros != null) 
            {{$listaLibros->links()}}
            @endif
        </div>
    </div>
</div>

<!-- Modal Libro -->
<div class="modal" id="ampliar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">
                    <input type="text" class="titulo border-white form-control-sm"/>
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" action="../../controlador/controladorLibro.php" method="POST">
                    <div id="fotoLibro" class="form-group mt-3 mb-3">
                        <img id="fotoLibro" class="img-fluid" src="" alt='Foto no encontrada'/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>ISBN -> </label>
                        <label id="ISBN"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Nombre -> </label>
                        <input type="text" class="titulo border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Autor -> </label>
                        <input id="autor" class="border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Editorial -> </label>
                        <input type="text" id="editorial" class="border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Genero -> </label>
                        <input type="text" id="genero" class="border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">   
                        <label>Descripcion -> </label>
                        <textarea id="descripcion" class="border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Año de edicción -> </label>
                        <input type="number" id="anioEdiccion" class="border-white form-control-sm"/>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label>Nº pagina -> </label>
                        <input type="number" id="nPag" class="border-white form-control-sm"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection