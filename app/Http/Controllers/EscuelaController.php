<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;
use App\Pago;
use App\Asistencia;
use Excel;

class EscuelaController extends Controller
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

        return view('escuela.index')->with('escuelas', Escuela::all())->with('pagos', $pagos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('escuela.create');
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
        $escuela = new Escuela;
        $escuela->name=$request->input('name');
        $escuela->document=$request->input('document');
        $escuela->phonenumber=$request->input('phonenumber');
        $escuela->adress=$request->input('adress');
        $escuela->manager=$request->input('manager');
        $escuela->rh=$request->input('rh');
        $escuela->eps=$request->input('eps');
        $escuela->birthdate=$request->input('birthdate');
        $escuela->category=$request->input('category');
        $escuela->photo='imgs/'.$file;
        $escuela->observation=$request->input('observation');
        if ($escuela->save()) {
            return redirect('escuela')->with('status','El Deportista '.$escuela->name.' Se Adiciono con Exito!');
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
        $escuela = Escuela::find($id);
        return view('escuela.show')->with('escuela', $escuela);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuela = Escuela::find($id);
        return view('escuela.edit')->with('escuela', $escuela);
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
        $escuela = Escuela::find($id);
        $escuela->name = $request->input('name');
        $escuela->document = $request->input('document');
        $escuela->phonenumber = $request->input('phonenumber');
        $escuela->adress = $request->input('adress');
        $escuela->manager = $request->input('manager');
        $escuela->rh = $request->input('rh');
        $escuela->eps = $request->input('eps');
        $escuela->birthdate = $request->input('birthdate');
        $escuela->category = $request->input('category');
        if ($request->hasFile('photo')) {
            $file=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'),$file);
            $escuela->photo = "imgs/".$file;
        }
        $escuela->observation = $request->input('observation');
        if ($escuela->save()) {
            return redirect('escuela')->with('status','El Deportista '.$escuela->name.' Se Actualizo con Exito!');
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
        $escuela = Escuela::find($id);
        if ($escuela->delete()) {
            return redirect('escuela')->with('status', 'EL Deportista '.$escuela->name.' Se elimino con exito');
        }
    }

    public function pagos($id)
    {
        $escuela = Escuela::find($id);
        $pagos = Pago::where('escula_id', $id)->get();
        return view('pagos.index')->with('escuela', $escuela)->with('pagos', $pagos);
    }

    public function print($id)
    {
        $escuela = Escuela::find($id);
        $pagos = Pago::where('escula_id', $id)->get();
        return view('pagos.print')->with('escuela', $escuela)->with('pagos', $pagos);
    }

    public function asistencias($id)
    {
        $escuela = Escuela::find($id);
        return view('asistencias.index')->with('escuela', $escuela);
    }

    public function ajaxsearch(Request $request){

        $escuelas = Escuela::name($request->input('name'))->orderBy('id','ASC')->paginate(10)->setPath('escuela');
            return view ('escuela.ajax')->with('escuela',$escuela);
    }
    public function pdf()
    {
        $escuela = Escuela::all();
        $pdf   = \PDF::loadView('escuela.pdf', compact('escuela'));
        return $pdf->download('consulta.pdf');
    }

    public function excel()
   {
       Excel::create('deportistafile', function($excel) {
       $excel->sheet('List', function($sheet) {
       $escuelas = Escuela::all();
       $sheet->loadView('escuela.excel', array('escuelas' => $escuelas));
       });
       })->download('xls');
   }
}
