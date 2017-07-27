<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CarritoModel;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    function getCarrito(Request $req){
        $idSesion = $req->session()->get("id");
        $productos = DB::table("vw_carrito")->where("cli_id", $idSesion)->get();

        $subtotal = 0;
        $contador = 0;

        foreach($productos as $p){
            $subtotal += floatval($p->total);
            $contador++;
        }

        $carrito =  [
                        "productos" => $productos,
                        "subtotal" => $subtotal,
                        "contador" => $contador
                    ];

        return response()->json($carrito);

    }

    function addCarrito(Request $req){
        if($req->session()->has("id")){
            $idSesion = $req->session()->get("id");
            $carrito = new CarritoModel();
            $carrito->pro_id = $req->input("id");
            $carrito->cli_id = $idSesion;
            
            $carrito->save();
            $res = true;
        }else{
            $res = false;
        }

        return response()->json($carrito);
    }
}
