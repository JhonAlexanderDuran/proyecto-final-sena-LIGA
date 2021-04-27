<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Deportista;

class DeportistaController extends Controller
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();
        return view('deportistas.create')->with('clubs', $clubs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'),$file);
        }
        $deportista = new Deportista;
        $deportista->codigo      = $request->input('codigo');
        $deportista->name        = $request->input('name');
        $deportista->document    = $request->input('document');
        $deportista->phonenumber = $request->input('phonenumber');
        $deportista->rh          = $request->input('rh');
        $deportista->manager     = $request->input('manager');
        $deportista->eps         = $request->input('eps');
        $deportista->category    = $request->input('category');
        $deportista->photo       = 'imgs/'.$file;
        $deportista->state       = $request->input('state');
        $deportista->club_id     = $request->input('club_id');
        if ($deportista->save()) {
            return redirect('home')->with('status','El Deportista '.$deportista->name.' Se Adiciono con Exito!');
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
        $deportista = Deportista::find($id);
        return view('deportistas.show')->with('deportista', $deportista);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deportista = Deportista::find($id);
        return view('deportistas.edit')->with('deportista', $deportista);
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
        $deportista = Deportista::find($id);
        $deportista->codigo      = $request->input('codigo');
        $deportista->name        = $request->input('name');
        $deportista->document    = $request->input('document');
        $deportista->phonenumber = $request->input('phonenumber');
        $deportista->rh          = $request->input('rh');
        $deportista->manager     = $request->input('manager');
        $deportista->eps         = $request->input('eps');
        $deportista->category    = $request->input('category');
        if ($request->hasFile('photo')) {
            $file=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'),$file);
            $deportista->photo = "imgs/".$file;
        }
        $deportista->state = $request->input('state');
        if ($deportista->save()) {
            return redirect('home')->with('status','El Deportista '.$deportista->name.' Se Actualizo con Exito!');
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
        $deportista = Deportista::find($id);
        if ($deportista->delete()) {
            return redirect('home')->with('status', 'EL Deportista '.$deportista->name.' Se elimino con exito');
        }
    }
}
