@extends('layouts.body')

@section('content')    
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading">
                    <h3 class="panel-title">Agregar Producto</h3>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="" class="control-label col-md-2">Categoria</label>
                            <div class="col-md-10">
                                <select name="cat" id="" class="form-control">
                                    @foreach( $categorias as $cat)
                                        <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-2">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-2">Costo</label>
                            <div class="col-md-10">
                                <input type="number" step="0.01" name="costo" class="form-control" placeholder="Costo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-2">Imagen</label>
                            <div class="col-md-10">
                                <input type="file" name="prodImg" class="form-control" placeholder="Seleccione Un Archivo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                    </form>
                </div>
            </div>            
        </div>
        <div class="col-md-8">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading">
                    <h3 class="panel-title">Productos</h3>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal">
                        <select name="SelectCat" id="" class="form-control">
                            @foreach( $categorias as $cat)
                                <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                            @endforeach
                        </select>
                    </form>
                    <table class="table table-striped m-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Costo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $pro)
                                <tr>
                                    <td>{{$pro->pro_id}}</td>
                                    <td>{{$pro->pro_nombre}}</td>
                                    <td>{{$pro->pro_costo}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop