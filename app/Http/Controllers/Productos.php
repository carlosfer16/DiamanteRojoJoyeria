<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CategoriasModel;
use App\ProductosModel;

class Productos extends Controller
{
    public function getProductos(Request $req){

        $id = $req->input("id")==""?0:$req->input("id");
        
        $cat = $req->input("cat")==""?0:$req->input("cat");

        $categorias = CategoriasModel::where('cat_visible', 1)->get();
        
        $query = DB::table('productos as p')->select("p.*")->join("categorias as c","c.cat_id", "=", "p.cat_id");

        if($cat!=0){
            $query->where("c.cat_id",$cat);
        }

        if($id!=0){
            $query->where("p.pro_id", $id);
        }

        $query->where("p.pro_visible",1);

        $productos = $query->get();

        $oneProd = null;
        if($id!=0){
            $cat =  $productos[0]->cat_id;
            $oneProd = $productos[0];
        }

        return view('productos/productos',["categorias" => $categorias,
                                            "productos" => $productos,
                                            "catSelect" => $cat,
                                            "id" => $id,
                                            "oneProd" => $oneProd                                            
                                            ]);
    } 

    public function addProductos(Request $datos){
        
        $id = $datos->input("id")==""?0:$datos->input("id");

        if($id==0){
            $prod = new ProductosModel();
        }else{
            $prod = ProductosModel::find($id);
        }       
        
        if ($datos->hasFile('prodImg')){
            $fileName = $datos->prodImg->store('productos');;
            $prod->pro_imagen = $fileName;
        }

        $prod->pro_nombre = $datos->input('name');
        $prod->pro_desc = $datos->input('desc');
        $prod->pro_costo = $datos->input('costo');
        $prod->cat_id = $datos->input("cat");
        $prod->save();

        return redirect()->action("Productos@getProductos");
    }   


    function deleteProd(Request $req){
        $prod = ProductosModel::find($req->input('id'));

        $prod->pro_visible = 0;

        $prod->save();

        return redirect()->action("Productos@getProductos");

    }
}


