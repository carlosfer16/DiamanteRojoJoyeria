<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoginAdminModel as users;
use App\CategoriasModel;
use App\ProductosModel;

class LoginAdminController extends Controller
{
    function index(){
        $categorias = CategoriasModel::where("cat_visible", 1)->get();
        return view('login.login',  [
                                        "categorias" => $categorias
                                    ]);
    }
}
