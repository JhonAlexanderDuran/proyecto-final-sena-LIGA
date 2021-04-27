<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Deportista;
use Excel;

class ConsultasController extends Controller
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
        $clubs = Club::all();
        $deport = Deportista::all();
        return view('consultas.index')->with('clubs', $clubs)->with('deport', $deport);
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
        //
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
        //
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

    public function search(Request $request){
        
        $clubconsult = Club::where('name', $request->get('name'))->first();
        $clubs = Club::all();

        
        return view('consultas.search')->with('clubconsult', $clubconsult)->with('clubs', $clubs);
    }

    public function excel($clubname)
   {

        $clubconsult = Club::where('name', $clubname)->first();
       Excel::create('deportistafile', function($excel) use($clubconsult){
       $excel->sheet('List', function($sheet) use($clubconsult) {
       
       $sheet->loadView('consultas.excel', array('clubconsult' => $clubconsult));
       });
       })->download('xls');
   }
}
