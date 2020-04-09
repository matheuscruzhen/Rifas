<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    function logar(Request $request) {
        $username = $request->username;
        $senha = $request->senha;

        $usuario = DB::select('SELECT * FROM usuarios WHERE username = :username AND senha = :senha',
            [
                'username' => $username,
                'senha' => $senha
            ]
            );

        if($usuario[0]->ativo && $usuario[0]->tipousuario_id == 1) {
            return redirect('/admin/dashboard');
        }

        if($usuario[0]->ativo && $usuario[0]->tipousuario_id == 2) {
            return redirect('/gerente/dashboard');
        }

        if($usuario[0]->ativo && $usuario[0]->tipousuario_id == 3) {
            return redirect('/cambista/dashboard');
        }

        echo "Sua conta está desativada ou seus dados estam incorretos";

    }
}
