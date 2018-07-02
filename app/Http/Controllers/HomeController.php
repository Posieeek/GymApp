<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



    public function gallery()
    {
        return view('gallery');
    }

    public function diet()
    {
        return view('diet');
    }

    public function profile()
    {
        $profile = Auth::user()->profile;

        return view('profiles.show', compact('profile'));
    }
    
    public function video()
    {
        return view('/video');
    }

    public function highcarb()
    {
        return view('/diet/highcarb');
    }

    public function lowcarb()
    {
        return view('/diet/lowcarb');
    }

    public function vegan()
    {
        return view('/diet/vegan');
    }

 
}
