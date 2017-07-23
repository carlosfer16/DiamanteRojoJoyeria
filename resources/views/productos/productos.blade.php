@extends('layouts.body')

@section('content')    
    <div class="row">
        <div class="col-md-4">
            @include('productos.newProducto');            
        </div>
        <div class="col-md-8">
            @include('productos.listado');
        </div>
    </div>
@stop