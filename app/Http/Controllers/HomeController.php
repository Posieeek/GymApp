<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function calc()
    {
        return view('calc');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function diet()
    {
        return view('diet');
    }

    public function training()
    {
        return view('training');
    }
    
    public function split()
    {
        return view('split');
    }

    public function fbw()
    {
        return view('fbw');
    }

    public function pushpull()
    {
        return view('pushpull');
    }

    public function pplegs()
    {
        return view('pplegs');
    }


}
