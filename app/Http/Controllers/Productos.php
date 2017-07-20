<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriasModel;
use App\ProductosModel;

class Productos extends Controller
{
    public function getProductos(){
        $categorias = CategoriasModel::all();
        return view('productos',["categorias" => $categorias]);
    } 

    public function addProductos(Request $datos){
        $prod = new ProductosModel();
        $prod->pro_nombre = $datos->input('name');
        $prod->pro_costo = $datos->input('costo');
        $prod->save();

        return redirect("/");
    }   
}


