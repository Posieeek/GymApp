<?php


namespace App\Http\Controllers;


use App\Http\Requests\ExerciseRequest;
use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = auth()->user()->exercises()->get();
        foreach ($exercises as $exercise)
    {
        $volume[]=(($exercise->rep)  * ($exercise->ex_set) *  ($exercise->weight) );
    }
   

    return view('exercises.index', compact('exercises', 'volume'));
     
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercises.create');
    }


    /**
     * Store a newly created resource in storage.
     *@param ExerciseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExerciseRequest $request)
    {
        Exercise::create(array_merge($request->all(), ['owner_id' => auth()->id()]));
        return redirect()->route('exercises.index')
                        ->with('message','Dodałeś ćwiczenie!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        return view('exercises.show',compact('exercise'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = Exercise::find($id);
        return view('exercises.edit',compact('exercise'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExerciseRequest $request, Exercise $exercise)
    {
      
        $exercise->update($request->all());
        return redirect()->route('exercises.index')
                        ->with('success','Pomyślnie zedytowałeś ćwiczenie!');
    }


        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exercise $exercise
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return back()->with('message', 'Pomyślnie usunięto ćwiczenie.');
    }
}
