<?php

namespace App\Http\Controllers;

use App\Diet;
use App\Http\Requests\DietRequest;
use App\User;

class DietController extends Controller
{
    public function index()
    {
        $diets = auth()->user()->diets()->get();

        return view('diets.index', compact('diets'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = auth()->user()->meals;
        $mealIds = $meals->pluck('id')->toArray();

        return view('diets.create', compact('meals', 'mealIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DietRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DietRequest $request)
    {
        $diet = Diet::create([
            'name' => $request->name,
            'owner_id' => auth()->id()
        ]);

        $diet->meals()->sync($request->meals);

        return redirect()->route('diets.index')
            ->with('message', 'Utworzono nową dietę.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function show(Diet $diet)
    {
        return view('diets.show', compact('diet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        $meals = auth()->user()->meals;
        $mealIds = $meals->pluck('id')->toArray();

        return view('diets.edit', compact('diet', 'meals', 'mealIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DietRequest $request
     * @param  \App\Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function update(DietRequest $request, Diet $diet)
    {
        $diet->update([
            'name' => $request->name,
        ]);

        if (isset($diet->meals)) {
            $diet->meals()->sync($request->meals);
        }

        return redirect()->route('diets.index')
            ->with('message', 'Zaktualizowano dietę.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diet $diet
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Diet $diet)
    {
        $diet->delete();

        return redirect()->route('diets.index')
            ->with('message', 'Pomyślnie usunięto dietę.');
    }
}
