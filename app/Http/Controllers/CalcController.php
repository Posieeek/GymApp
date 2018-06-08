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

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calcs = Calc::latest()->paginate(5);
        return view('$calcs.index',compact('$calcs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('$calcs.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
         
            'weight' => 'required',
          
            'rep' => 'required',
        ]);
        Calc::create($request->all());
        return redirect()->route('$calcs.index')
                        ->with('success','Exercise created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $$calc = Calc::find($id);
        return view('$calcs.show',compact('$calc'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $$calc = Calc::find($id);
        return view('$calcs.edit',compact('$calc'));
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
        request()->validate([
         
            'weight' => 'required',
          
            'rep' => 'required',
        ]);
        Calc::find($id)->update($request->all());
        return redirect()->route('$calcs.index')
                        ->with('success','Exercise updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calc::find($id)->delete();
        return redirect()->route('$calcs.index')
                        ->with('success','Exercise deleted successfully');
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
