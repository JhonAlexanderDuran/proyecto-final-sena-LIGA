<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Escuela;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pagos = Pago::all();
        $escuela = Escuela::all();
        return view('pagos.index')->with('pagos', $pagos)->with('escuela', $escuela);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($escuela_id)
    {
        return view('pagos.create')->with('escuela_id', $escuela_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escuela = Escuela::all();
        $escuela_id = $request->input('escuela_id');
        $pagos = new pago;
        $pagos->number= $request->input('number');
        $pagos->payment= $request->input('payment');
        $pagos->concept= $request->input('concept');
        $pagos->value= $request->input('value');
        $pagos->escula_id= $escuela_id ;
        if ($pagos->save()) {
            return redirect('escuela/'.$escuela_id.'/payments')->with('status','El Pago Se Adiciono con Exito!');
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
        $pago = Pago::findOrFail($id);
        $escuela_id = $pago->escula_id;
        return view('pagos.edit', compact('pago','escuela_id'));
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
        $pago = Pago::findOrFail($id);
        $pago->number= $request->input('number');
        $pago->payment= $request->input('payment');
        $pago->concept= $request->input('concept');
        $pago->value= $request->input('value');


        if ($pago->save()) {
            return redirect('escuela/'.$pago->escuela->id.'/payments')->with('status','El Pago Se Edito con Exito!');
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
        //
    }

    public function print($id)
    {
        $pago = Pago::find($id);
        // dd($escuela);
        // $pago = Pago::where('escula_id', $id)->firstOrFail();
        return view('pagos.print')->with('pago', $pago);
    }
}
