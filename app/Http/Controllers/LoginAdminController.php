<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoginAdminModel as users;
use App\CategoriasModel;
use App\ProductosModel;
use App\UsuariosModel;

class LoginAdminController extends Controller
{
    function index(){
        $categorias = CategoriasModel::where("cat_visible", 1)->get();
        return view('login.login',  [
                                        "categorias" => $categorias
                                    ]);
    }

    function login(Request $res){
        $cliente = UsuariosModel::where("cli_correo", $res->input('mail'))
                                ->where("cli_pass", md5($res->input('pass')))
                                ->get();

        print_r($cliente->toArray());
    }
}
