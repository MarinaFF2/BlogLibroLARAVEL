@extends('maestra.maestraSinRegistrar')

@section('titulo') 
Home
@endsection

@section('contenido') 
<div class="container">
    <div class="row">
        <div class="col-sm col-md">
            <div class="breadcrumb">
                <div class="breadcrumb-item active">Home</div>
            </div>
        </div>
    </div>
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm col-md">
            <h1>Tsundoku</h1><br>                    
            <p>Es un concepto japonés que describe la sesación de tener un hogar con libros apilados por el simple placer de verlos.</p><br>
            <p>Viene de estas dos palabras:</p><br>
            <p>     Tsunde-oky: apilar cosas para luego marcharse.</p><br>
            <p>     Dokusho: leer libros.</p><br>
            <p>Este es el porque de que la página se llame así.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm col-md">
            <img src="{{asset ('img/iconos/1.gif')}}" alt="gif"/>
        </div>
    </div>
</div>
@endsection