<?php


namespace App\Http\Controllers;
use App\Http\Requests\MealRequest;

use Illuminate\Http\Request;
use App\Component;
use App\Profile;
use App\User;
use App\Meal;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $meals = auth()->user()->meals()->get();
     
       
        return view('meals.index', compact('meals'));
    }
   



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $components = auth()->user()->components;
        $componentIds = $components->pluck('id')->toArray();

        return view('meals.create', compact('components', 'componentIds'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MealRequest $request)
    {
       

        $meal = Meal::create([
            'name' => $request->name,
            'owner_id' => auth()->id()
        ]);
        $meal->components()->sync($request->components);

        return redirect()->route('meals.index')
        ->with('message', 'Stworzono posiłek');


                       
                
                      
                
                        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
       
        return view('meals.show',compact('meal'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        $components = auth()->user()->components;
        $componentIds = $components->pluck('id')->toArray();

        return view('meals.edit', compact('meal', 'components', 'componentIds'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MealRequest $request, Meal $meal)
    {
      

        $meal->update([
            'name' => $request->name,
        ]);

        if (isset($meal->components)) {
            $meal->components()->sync($request->components);
        }

        return redirect()->route('meals.index')
            ->with('message', 'Pomyślnie zaktualizowano posiłek.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meal::find($id)->delete();
        return redirect()->route('meals.index')
                        ->with('success','Usunięto posiłek');
    }
}