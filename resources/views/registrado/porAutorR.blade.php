@extends('maestra.maestraRegistrado')

@section('titulo') 
@endsection

@section('contenido') 
<div class="container">
    <div class="row ">
        <div class="col">
            <div class="breadcrumb">
                <div class="breadcrumb-item"><a href="../../index.php">Home</a></div>
                <div class="breadcrumb-item"><a href="listadoLibros.php?pag=1">Listar Libros</a></div>
                <div class="breadcrumb-item active">Por Autor</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md col-sm col-lg mt-3 mb-3">
            <h2 class="text-center fixed-tope">LIBROS ORDENADOS POR AUTOR</h2>
            <form class="form-inline" action="../../controlador/controladorLibro.php" method="POST">
                <div class="form-group mt-3 mb-3">
                    <select  name="filtro" class="form-control form-control-sm form-control-md form-control-lg">
                        <option value="autor"selected>Autor</option>
                        <?php
                        for ($i = 65; $i <= 90; $i++) {
                            $letra = chr($i);
                            echo ' <option value=' . $letra . '>' . $letra . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" class="btn btn-primary" name="filtrarA" value="Filtrar">
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
                        foreach ($l as $key) {
                            ?> 
                        <form class="form-inline" action="../../controlador/controladorLibro.php" method="POST">
                            <tr>
                                <td>
                                    <img id="fotoLibro" class="img-fluid" src="data:image/jpeg;base64,<?php echo base64_encode($key->getFoto()); ?>" alt='Foto no encontrada'/>
                                    <input type="hidden"  name="isbn" value="<?php echo $key->getIsbn(); ?>"/>
                                </td>
                                <td><?php echo $key->getNombre(); ?></td>
                                <td><?php echo $key->getAutor(); ?></td>
                                <td><?php echo $key->getEditorial(); ?></td>
                                <td><?php echo $key->getGenero(); ?></td>             
                                <td>
                                    <button type="button" id="agrandar" class="btn" data-toggle="modal" data-id="<?php echo $key->getIsbn(); ?>" data-target="#ampliar">
                                    </button>                                            

                                </td>
                            </tr>
                        </form>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Libro -->
    <div class="modal" id="ampliar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><?php echo $key->getNombre(); ?></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-inline" action="../../controlador/controladorLibro.php" method="POST">
                        <div class="form-group mt-3 mb-3">
                            <img id="fotoLibro" class="img-fluid" src="data:image/jpeg;base64,<?php echo base64_encode($key->getFoto()); ?>" alt='Foto no encontrada'/>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>ISBN -> </label>
                            <input type="text" id="ISBN" class="border-white form-control-sm"/>
                            <?php // echo $key->getIsbn(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Nombre -> </label>
                            <input type="text" id="titulo" class="border-white form-control-sm"/>
                            <?php // echo $key->getNombre(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Autor -> </label>
                            <input id="autor" class="border-white form-control-sm"/>
                            <?php // echo $key->getAutor(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Editorial -> </label>
                            <input type="text" id="editorial" class="border-white form-control-sm"/>
                            <?php // echo $key->getEditorial(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Genero -> </label>
                            <input type="text" id="genero" class="border-white form-control-sm"/>
                            <?php // echo $key->getGenero(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">   
                            <label>Descripcion -> </label>
                            <textarea id="descripcion" class="border-white form-control-sm"/>
                            <?php // echo $key->getDescripcion(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Año de edicción -> </label>
                            <input type="number" id="anioEdiccion" class="border-white form-control-sm"/>
                            <?php // echo $key->getAnioEdiccion(); ?>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label>Nº pagina -> </label>
                            <input type="number" id="nPag" class="border-white form-control-sm"/>
                            <?php // echo $key->getNPag(); ?>
                        </div>
                    </form>
                    <?php
                    if (isset($_SESSION['u'])) {
                        ?>
                        <h1>Noticia</h1>
                        <form class="form-inline" action="../../controlador/controladorGeneral.php" method="POST">
                            <div class="form-group mt-3 mb-3">
                                <img id="fotoUsu" src="data:image/jpeg;base64,<?php echo base64_encode($u->getFoto()); ?>" alt="foto usuario" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                                <input type="hidden" class="form-control form-control-sm form-control-md" name="fotoUsuario" value="data:image/jpeg;base64,<?php echo base64_encode($u->getFoto()); ?>">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label>
                                    <input type="text" class="titulo border-white form-control-sm"/>
                                    <?php // echo $u->getNombre(); ?>
                                </label> 
                                <h4><small><i>Posted on <input type="text" style="border:none" class="form-control form-control-sm form-control-md form-control-lg" name="fechaNoticia"/></i></small></h4>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label>Asunto: </label>
                                <input type="text" class="titulo form-control form-control-sm form-control-md form-control-lg" name="asuntoNoticia" value="<?php echo $key->getNombre(); ?>"/>
                            </div>  
                            <div class="w-100"></div>
                            <div class="form-group mt-3 mb-3"> 
                                <textarea rows="10" cols="30" class="form-control form-control-sm form-control-md form-control-lg" name="descripcionNoticia" placeholder="Descripcion"></textarea>   
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <input type="submit" class="btn btn-primary" name="aniadirNoticia" value="Aceptar"/>
                            </div>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm col-md col-lg">
            {{ $l->links()}}
        </div>
    </div>
</div>
@endsection