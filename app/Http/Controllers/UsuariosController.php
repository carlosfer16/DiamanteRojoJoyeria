<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\UsuariosModel;
use Session;

class UsuariosController extends Controller
{
    function reportes(){
        return view('admin.reporte');
    }

    function index(Request $req){
        $id = $req->input('id')==""?0:$req->input('id');

        $tipos = DB::table('tipo_cliente')->where("tc_visible",1)->get();

        $query = DB::table('clientes')->where("cli_visible", 1);

        if($id!=0){
            $query->where("cli_id" , $id);
        }

        $clientes = $query->get();

        $oneCli = null;
        $tipoSelect = 1;
        if($id!=0){
            $oneCli = $clientes[0];
            $tipoSelect = $clientes[0]->cli_tipo;
        }
        
        return view('admin.clientes',   [
                                            "clientes" => $clientes,
                                            "id" => $id,
                                            "tipos" => $tipos,
                                            "oneCli" => $oneCli,
                                            "tipoSelect" => $tipoSelect
                                        ]);
    }

    function addCliente(Request $req){
        $id = $req->input('id')==""?0:$req->input('id');

        if($id!=0){
            $usu = UsuariosModel::find($id);
            
            Session::flash("tipo","success");
            Session::flash("alerta","Usuario Actualizado");
        }else{
            $usu = new UsuariosModel();
            $usu->cli_pass = md5($req->input('pass'));
            Session::flash("tipo","success");
            Session::flash("alerta","Usuario Registrado Correctamente");
        }        

        $usu->cli_nombre = $req->input('name');
        $usu->cli_apellido = $req->input('last');
        $usu->cli_domicilio = $req->input('dom');
        $usu->cli_correo = $req->input('mail');        
        $usu->cli_tipo = $req->input('tipo');

        $usu->save();

        return redirect()->action("UsuariosController@index");
    }

    function deleteClie(Request $req){
        $prod = UsuariosModel::find($req->input('id'));

        $prod->cli_visible = 0;

        $prod->save();

        return redirect()->action("UsuariosController@index");

    }
}