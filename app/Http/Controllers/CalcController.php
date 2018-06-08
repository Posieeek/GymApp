<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Calc;
use App\Http\Controllers\Controller;
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

    public function add($a, $b){
        echo "Wyciskasz na ławce poziomej: \n ";
        if ($a == 1) {
            echo $b ;  
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzeń"; 
          }
        elseif ($a == 2) {  
            echo ($b * (1 + 0.025 * $a)); 
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia"; 
          }
          elseif ($a == 3) {
            echo ($b * (1 + 0.025 * $a)); 
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 4) {
            echo ($b * (1 + 0.025 * $a)); 
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 5) {
            echo ($b * (1 + 0.025 * $a));  
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 6) {
            echo ($b * (1 + 0.025 * $a));   
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 7) {
            echo ($b * (1 + 0.025 * $a));  
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 8) {
            echo ($b * (1 + 0.025 * $a));   
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 9) {
            echo ($b * (1 + 0.025 * $a)); 
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";    
          }
          elseif ($a == 10) {
            echo ($b * (1 + 0.025 * $a));  
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";    
          }
          elseif ($a == 11) {
            echo ($b * (1 + 0.025 * $a));   
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";   
          }
          elseif ($a == 12) {
            echo ($b * (1 + 0.025 * $a));   
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia";    
          }     
        return view('/calc/add');
    }


    public function subtract($a, $b){
        echo $a - $b;
        return view('calc::index', compact('result'));
    }


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
