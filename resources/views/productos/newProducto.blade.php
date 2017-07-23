<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        <h3 class="panel-title">Agregar Producto</h3>
    </div>
    <div class="panel-body">
        <form action="{{url('productos/addProductos')}}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="" class="control-label col-md-2">Categoria</label>
                <div class="col-md-10">
                    <select name="cat" id="" class="form-control">
                        @foreach( $categorias as $cat)
                            @if($cat->cat_id == $catSelect)
                                <option value="{{$cat->cat_id}}" selected>{{$cat->cat_nombre}}</option>
                            @else
                                <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                            @endif
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