<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Club;
use Auth;
use Illuminate\Support\Facades\Session;

class ClubController extends Controller
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
        if(Auth::user()->role=='Admin') {
        return view ('clubs.index')->with('clubs',Club::all());
        }
        else{
            return view('/dashboard-club');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role=='Admin') {
        $user = User::all();
        return view('clubs.create')->with('user', $user);
        }
        else{
            return view('/dashboard-club');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $club = new Club;
        $club->name        = $request->input('name');
        $club->nit         = $request->input('nit');
        $club->city        = $request->input('city');
        $club->phonenumber = $request->input('phonenumber');
        $club->user_id     = $request->input('user_id');

        if ($club->save()) {
            return redirect('clubs')->with('status', 'El usuario '.$club->name.' Se adiciono con Exito !');
        }
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
        $user = User::all();
        $club = Club::find($id);
        return view('clubs.edit')->with('club', $club)->with('user', $user);
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
        $club = Club::find($id);
        $club->name = $request->input('name');
        $club->nit = $request->input('nit');
        $club->city = $request->input('city');
        $club->phonenumber = $request->input('phonenumber');
        $club->user_id = $request->input('user_id');

        if ($club->save()) {
            return redirect('clubs')->with('status', 'El usuario '.$club->name.' Se actualizo con Exito !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
        if ($club->delete()) {
            return redirect('clubs')->with('status', 'EL usuario '.$club->name.' Se elimino con exito');
        }
    }

    public function pdf()
    {
        $club = Club::all();
        $pdf   = \PDF::loadView('clubs.pdf', compact('club'));
        return $pdf->download('consulta.pdf');
    }
}
