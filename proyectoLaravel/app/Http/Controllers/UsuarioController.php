<?php

namespace App\Http\Controllers;
use App\Tipo;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function perfil()
    {
        $usuario = DB::table('usuario')->where('ID_USER',auth()->user()->id)->first();
        return view('perfil', ['usuario' => $usuario]);
    }
    public function gestionUsuario()
    {
        $usuario = DB::table('usuario')->where('ID_USER',auth()->user()->id)->first();
        $usuarios = DB::table('usuario')->get();
        $incidencia = DB::table('incidencia')
        ->join('usuario','usuario.ID_USUARIO','=','incidencia.ID_USUARIO')
        ->join('ticket','ticket.ID_INCIDENCIA','=', 'incidencia.ID_INCIDENCIA')
        ->join('asignacion','asignacion.ID_ASIGNACION','=','ticket.ID_ASIGNACION')->get();
       return view ('gestionUsuario', ['usuario' => $usuario, 'usuarios' => $usuarios, 'incidencia' => $incidencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('usuario')->where('ID_USUARIO', $id)->delete();
        return redirect('gestionUsuario');
    }
}
