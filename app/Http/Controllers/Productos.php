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
        $productos = ProductosModel::all();
        return view('productos',["categorias" => $categorias,
                                "productos" => $productos
                                
                                ]);
    } 

    public function addProductos(Request $datos){
        $prod = new ProductosModel();
        
        if ($datos->hasFile('prodImg')){
            $fileName = $datos->prodImg->store('productos');;
            $prod->pro_imagen = $fileName;
        }   
        $prod->pro_nombre = $datos->input('name');
        $prod->pro_costo = $datos->input('costo');
        $prod->save();

        return redirect("/");
    }   
}


