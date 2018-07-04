<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingRequest;
use App\Training;
use App\User;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = auth()->user()->trainings()->get();

        return view('trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exercises = auth()->user()->exercises;
        $exerciseIds = $exercises->pluck('id')->toArray();

        return view('trainings.create', compact('exercises', 'exerciseIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TrainingRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingRequest $request)
    {
        $training = Training::create([
            'name' => $request->name,
            'owner_id' => auth()->id()
        ]);

        $training->exercises()->sync($request->exercises);

        return redirect()->route('trainings.index')
            ->with('message', 'Stworzyłeś trening!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        return view('trainings.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        $exercises = auth()->user()->exercises;
        $exerciseIds = $exercises->pluck('id')->toArray();

        return view('trainings.edit', compact('training', 'exercises', 'exerciseIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TrainingRequest $request
     * @param  \App\Training $training
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingRequest $request, Training $training)
    {
        $training->update([
            'name' => $request->name
        ]);

        if (isset($training->exercises)) {
            $training->exercises()->sync($request->exercises);
        }

        return redirect()->route('trainings.index')
            ->with('message', 'Zedytowałeś trening.');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training $training
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Training $training)
    {
        $training->delete();

        return back()->with('message', 'Pomyślnie usunięto trening.');
    }

    public function split()
    {
        return view('/training/split');
    }

    public function training()
    {
        return view('/training');
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
