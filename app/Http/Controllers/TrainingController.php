<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
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
  
      public function training()
    {
        return view('training');
    }
    
    public function split()
    {
        return view('/training/split');
    }

    public function fbw()
    {
        return view('/training/fbw');
    }

    public function pushpull()
    {
        return view('/training/pushpull');
    }

    public function pplegs()
    {
        return view('/training/pplegs');
    }
    public function podwyskok()
    {
        return view('/training/podwyskok');
    }

}
