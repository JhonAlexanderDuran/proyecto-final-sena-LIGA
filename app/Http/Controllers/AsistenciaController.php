<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;
use App\Escuela;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($escuela_id)
    {
        return view('asistencias.create')->with('escuela_id', $escuela_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escuela_id = $request->input('escuela_id');
        $escuela = Escuela::all();
        $asistencias = new Asistencia;
        $asistencias->month= $request->input('month');
        $asistencias->asistent= $request->input('asistent');
        $asistencias->escula_id= $escuela_id;
        if ($asistencias->save()) {
            return redirect('escuela/'.$escuela_id.'/assistance')->with('status','La asistencia Se Adiciono con Exito!');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $escuela_id = $asistencia->escula_id;
        return view('asistencias.edit', compact('asistencia', 'escuela_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->month= $request->input('month');
        $asistencia->asistent= $request->input('asistent');
        if ($asistencia->save()) {
            return redirect('escuela/'.$asistencia->escuela->id.'/assistance')->with('status','La asistencia Se actualizo con Exito!');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);
        if ($asistencia->delete()) {
            return redirect('escuela/'.$asistencia->escuela->id.'/assistance')->with('status', 'La asistencia '.$asistencia->id.' Se elimino con exito');
        }
    }
}
