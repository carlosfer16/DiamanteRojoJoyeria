@extends('layouts.body')

@section('content')    
@include('flash::message') 
    <div class="row">
        @if($id!=0)
            <div class="col-md-6 col-md-offset-3">
                 @include('categorias.newCat'); 
            </div>
        @else
            <div class="col-md-4">
                @include('categorias.newCat');            
            </div>
            <div class="col-md-8">
                @include("categorias.listadoCat");
            </div>
        @endif
    </div>
    <script type="text/javascript">
    setTimeout(function(){
        $(".alert").fadeOut(1500);
    },1500)
    </script>
@stop