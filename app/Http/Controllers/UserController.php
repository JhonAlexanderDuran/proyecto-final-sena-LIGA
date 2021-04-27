<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
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
            return view('users.index')->with('users', User::all());            
        }else{
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
        return view('users.create');
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
        $user = new User;
        $user ->name = $request->input('name');
        $user ->document = $request->input('document');
        $user ->email = $request->input('email');
        $user ->password = bcrypt($request->input('password'));
        $user ->role = $request->input('role');
        $user ->phonenumber = $request->input('phonenumber');

        if ($user->save()) {
            return redirect('user')->with('status', 'El usuario '.$user->name.' Se adiciono con Exito !');
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
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
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
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->phonenumber = $request->input('phonenumber');

        if ($user->save()) {
            return redirect('user')->with('status', 'El usuario '.$user->name.' Se actualizo con Exito !');
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
        $user = User::find($id);
        if ($user->delete()) {
            return redirect('user')->with('status', 'EL usuario '.$user->name.' Se elimino con exito');
        }
    }

    public function ajaxsearch(Request $request){

        if(Auth::user()->role=='Admin') {
        $users = User::name($request->input('name'))->orderBy('id','ASC')->paginate(10)->setPath('user');
            return view ('users.ajax')->with('users',$users);
        }
        else{
            return view('/dashboard-club');
        }
    }
}
