<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;

class CalculatorController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $calculators = Calculator::latest()->paginate(5);
        
        foreach ($calculators as $calculator)
        {
            $max_reps[]=($calculator->weight * (1 + 0.025 * $calculator->rep));
        }

       /* elseif ($a == 2) {  
            echo ($b * (1 + 0.025 * $a)); 
            echo " kg na jedno powtórzenie podnosząc $b kg na $a powtórzenia"; 
          }
          */
        return view('calculators.index',compact('calculators', 'max_reps'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calculators.create');
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
        Calculator::create($request->all());
        return redirect()->route('calculators.index')
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
        $calculator = Calculator::find($id);
        return view('calculators.show',compact('calculator'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calculator = Calculator::find($id);
        return view('calculators.edit',compact('calculator'));
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
        Calculator::find($id)->update($request->all());
        return redirect()->route('calculators.index')
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
        Calculator::find($id)->delete();
        return redirect()->route('calculators.index')
                        ->with('success','Exercise deleted successfully');
    }

}
