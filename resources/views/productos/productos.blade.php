@extends('layouts.body')

@section('content') 
@include('flash::message')   
    <div class="row">
        @if($id!=0)
            <div class="col-md-6 col-md-offset-3">
                @include('productos.newProducto')
            </div>            
        @else
            <div class="col-md-5">
                @include('productos.newProducto')            
            </div>
            <div class="col-md-7">
                @include('productos.listado')
            </div>
        @endif        
    </div>
    <script type="text/javascript">
    setTimeout(function(){
        $(".alert").fadeOut(1500);
    },1500)
    </script>
@stop