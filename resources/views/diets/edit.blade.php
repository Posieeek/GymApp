@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h1>Edytuj dietę</h1></div>               
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
    <form action="{{route('diets.update', ['diet' => $diet])}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nazwa diety:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$diet->name}}"/>
            
        </div>

        <div class="form-group">
            <label for="meals">Posiłki:</label>
            <select class="form-control" multiple="multiple" name="meals[]" id="meals"
                    style="height: 300px;">
                @foreach($meals as $meal)
                    <option value="{{$meal->id}}"
                            @if(in_array($meal->id, $mealIds)) @endif
                            @if(in_array($meal->id, $diet->meals->pluck('id')->toArray())) selected @endif>
                        {{$meal->name}}
                    </option>
                @endforeach
            </select>
        </div>
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
                <a href="{{route('meals.index')}}" class="btn btn-primary btn-lg clearfix">Twoje posiłki</a>
                <a href="{{route('diets.index')}}" class="btn btn-primary btn-lg clearfix">Wróć</a>
           
            </p>
        </div>
    </form>
@endsection
