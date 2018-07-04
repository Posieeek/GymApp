@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h1>  Dodaj trening </h1></div>
                    
</div>
</div>
</div>
</div>
</div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
              
                    <div class="card-body">
    <form action="{{route('trainings.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nazwa treningu:</label>
            <input type="text" class="form-control" name="name" id="name"/>
        </div>
        <div class="form-group">
            <label for="exercises">Ćwiczenia:</label>
            @if(count($exercises) != 0)
                <select class="form-control" multiple="multiple" name="exercises[]" id="exercises"
                      >
                    @foreach($exercises as $exercise)
                        <option value="{{$exercise->id}}" @if(in_array($exercise->id, $exerciseIds)) @endif>{{$exercise->name}}
                         ({{$exercise->weight}} g)</option>
                    @endforeach
                </select>
            @else
                <p>Brak ćwiczeń.</p>
            @endif
        </div>
        </div>
</div>
</div>
</div>
</div>
</div>
        @if(count($exercises) != 0)
            <div class="form-group">
                <p class="text-center">
                    <button class="btn btn-primary btn-lg clearfix" type="submit">Zapisz</button>
                    
                    <a href="{{route('exercises.index')}}" class="btn btn-primary btn-lg clearfix">Twoje ćwiczenia</a>
                    <a href="{{route('trainings.index')}}" class="btn btn-primary btn-lg clearfix">Wróć</a>
                </p>
            </div>
        @endif
    </form>
@endsection
