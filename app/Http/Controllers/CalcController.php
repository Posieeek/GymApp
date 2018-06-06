<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
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

    
    public function calc()
    {
        return view('calc');
    }

    public function orm()
    {
        return view('/calc/orm');
    }

    public function squat()
    {
        return view('/calc/squat');
    }
    public function bench()
    {
        return view('/calc/bench');
    }
    public function deadlift()
    {
        return view('/calc/deadlift');
    }
    
}
