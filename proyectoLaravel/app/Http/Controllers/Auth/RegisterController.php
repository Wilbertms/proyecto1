<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function index()
    {
         
        return view('Auth\register');


    }

    protected function create(request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $ultimoId= DB::table('usuario')->max('ID_USUARIO');
        $id_user= DB::table('users')->max('id');
        DB::table('usuario')->insert(['ID_USUARIO' => $ultimoId + 1, 'ID_TIPO'=> 1, 'USUARIO' => $request->name, 'NOMBRE_USUARIO' => $request->nombre_usuario, 'APELLIDO_USUARIO' => $request->apellido_usuario, 'CONTRASENA' => $request->password, 'FECHA_NACIMIENTO' => $request->fecha, 'GENERO' => $request->genero, 'FOTO' => "", 'ID_USER' => $id_user ]);
        
         return redirect('/home');
    }
}
