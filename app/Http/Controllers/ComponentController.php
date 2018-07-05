<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ComponentRequest;
use App\Component;
use App\Profile;
use App\Meal;
use App\User;


class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $components = auth()->user()->components()->get();
        foreach ($components as $component)
        {
            $calories[]=(($component->fat * 9) + ($component->proteins * 4) + ($component->carbohydrates * 4)  );  
        }   
       return view('components.index', compact('components', 'calories'));
    }
   



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Component::create(array_merge($request->all(), ['owner_id' => auth()->id()]));
        return redirect()->route('components.index')
                        ->with('success','Produkt stworzony pomyślnie!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $component = Component::find($id);
        return view('components.show',compact('component'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $component = Component::find($id);
        return view('components.edit',compact('component'));
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
      
        Component::find($id)->update($request->all());
        return redirect()->route('components.index')
                        ->with('success','Produkt zaktualizowany pomyślnie!');
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Component $component
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Component $component)
    {
        $component->delete();

        return redirect()->route('components.index')->with('message', 'Pomyślnie usunięto produkt.');
    }

    public function deleteFromMeal($componentId, $mealId)
    {
        $meal = Meal::find($mealId);
        $meal->components()->detach($componentId);

        return back()->with('message', 'Pomyślnie usunięto produkt z danego posiłku.');
    }
}