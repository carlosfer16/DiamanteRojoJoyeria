<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoginAdminModel as users;

class LoginAdminController extends Controller
{
    function index(){
        return view('adminlogin');
    }
}
