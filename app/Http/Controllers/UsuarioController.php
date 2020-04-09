<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function login() {
        return view('login');
    }

    function logar(Request $request) {
        $username = $request->username;
        $senha = $request->senha;

        // var_dump();
    }
}
