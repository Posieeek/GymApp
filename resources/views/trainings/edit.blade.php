@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h1>  Edytuj posiłek </h1></div>
                    
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
    <form action="{{route('trainings.update', ['training' => $training])}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nazwa posiłku:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$training->name}}"/>
        </div>

        <div class="form-group">
            <label for="exercises">Produkty:</label>
            <select class="form-control" multiple="multiple" name="exercises[]" id="exercises"
                   >
                @foreach($exercises as $exercise)
                    <option value="{{$exercise->id}}"
                            @if(in_array($exercise->id, $exerciseIds)) @endif
                            @if(in_array($exercise->id, $training->exercises->pluck('id')->toArray())) selected @endif>
                        {{$exercise->name}} ({{$exercise->weight}} g)
                    </option>
                @endforeach
            </select>
        </div>
        </div>
</div>
</div>
</div>
</div>
        <div class="form-group">
            <p class="text-center">
                {{method_field('PATCH')}}
                <button class="btn btn-primary btn-lg" type="submit">Zapisz</button>
                <a href="{{route('trainings.index')}}" class="btn btn-primary btn-lg clearfix">Wróć</a>
            </p>
        </div>
    </form>
@endsection
