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

    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
              
                    <div class="card-body">
    <form action="{{route('meals.update', ['meal' => $meal])}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nazwa posiłku:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$meal->name}}"/>
        </div>

        <div class="form-group">
            <label for="components">Produkty:</label>
            <select class="form-control" multiple="multiple" name="components[]" id="components"
                   >
                @foreach($components as $component)
                    <option value="{{$component->id}}"
                            @if(in_array($component->id, $componentIds)) @endif
                            @if(in_array($component->id, $meal->components->pluck('id')->toArray())) selected @endif>
                        {{$component->name}} ({{$component->weight}} g)
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
                <a href="{{route('meals.index')}}" class="btn btn-primary btn-lg clearfix">Wróć</a>
            </p>
        </div>
    </form>
@endsection
