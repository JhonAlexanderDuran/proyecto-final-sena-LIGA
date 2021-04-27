<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role=='Admin') {

            return view('dashboard-admin');
        }

        elseif (Auth::user()->role=='Club') {

            return view('dashboard-club');
        }

        else{

            return 'El Rol No Existe';
        }

    }

    public function carnet()
    {
        return view('carnet');
    }
}
