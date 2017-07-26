<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CarritoModel;

class CarritoController extends Controller
{
    function getCarrito(Request $req){
        $idSesion = $req->session()->get("id");
        $carrito = CarritoModel::where("cli_id" , $idSesion)
                                ->where("car_estado", 0)->get();

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
