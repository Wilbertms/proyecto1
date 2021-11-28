<?php

namespace App\Http\Controllers;

use App\Incidencia;
use App\Asignacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $incidencia = DB::table('incidencia')
        ->join('usuario','usuario.ID_USUARIO','=','incidencia.ID_USUARIO')
        ->join('ticket','ticket.ID_INCIDENCIA','=', 'incidencia.ID_INCIDENCIA')
        ->join('asignacion','asignacion.ID_ASIGNACION','=','ticket.ID_ASIGNACION')->get();
        $usuario = DB::table('usuario')->where('ID_USER',auth()->user()->id)->first();

        return view('gestionIncidencia', ['incidencia'=>$incidencia, 'usuario' => $usuario]);
    }



    
    public function procesos()
    {
        $usuario = DB::table('usuario')->where('ID_USER',auth()->user()->id)->first();
        $incidencia = DB::table('incidencia')
        ->join('usuario','usuario.ID_USUARIO','=','incidencia.ID_USUARIO')
        ->join('ticket','ticket.ID_INCIDENCIA','=', 'incidencia.ID_INCIDENCIA')
        ->join('asignacion','asignacion.ID_ASIGNACION','=','ticket.ID_ASIGNACION')->where('incidencia.ID_USUARIO', $usuario->ID_USUARIO)->get();

        return view('procesos', ['incidencia'=>$incidencia, 'usuario' => $usuario]);
    
    }


    public function crearIncidencia(Request $request)
    {
        $usuario = DB::table('usuario')->where('ID_USER',auth()->user()->id)->first();

        $ultimo = DB::table('incidencia') -> max('ID_INCIDENCIA');
        $dispositivo = $request -> dispositivo;
        $marca = $request -> marca;
        $descripcion = $request -> descripcion;  
        $fechaActual = date('Y-m-d');
        

        DB::table('incidencia')->insert(['ID_INCIDENCIA' => $ultimo + 1, 'DISPOSITIVO'=> $dispositivo, 'MARCA' => $marca, 'DESCRIPCION' => $descripcion, 'ID_USUARIO' => $usuario->ID_USUARIO, 'FECHA' => $fechaActual]);

        return view('crearIncidencia', ['usuario'=> $usuario]);
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
    public function asignarTecnico(Request $request)
    {
        $ultimoId= DB::table('asignacion')->max('ID_ASIGNACION');
        $tecnico = $request->tecnico;
        

        DB::table('asignacion')->insert(['ID_ASIGNACION'=>$ultimoId + 1, 'TECNICO'=>$tecnico]);

        return redirect('gestionIncidencia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(  $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        //
    }
 
   
}
