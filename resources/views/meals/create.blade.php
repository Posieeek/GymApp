@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h1>  Dodaj posiłek </h1></div>
                    
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
    <form action="{{route('meals.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nazwa posiłku:</label>
            <input type="text" class="form-control" name="name" id="name"/>
        </div>
        <div class="form-group">
            <label for="components">Produkty:</label>
            @if(count($components) != 0)
                <select class="form-control" multiple="multiple" name="components[]" id="components"
                      >
                    @foreach($components as $component)
                        <option value="{{$component->id}}" @if(in_array($component->id, $componentIds)) @endif>{{$component->name}}
                         ({{$component->weight}} g)</option>
                    @endforeach
                </select>
            @else
                <p>Brak produktów.</p>
            @endif
        </div>
        </div>
</div>
</div>
</div>
</div>
</div>
        @if(count($components) != 0)
            <div class="form-group">
                <p class="text-center">
                    <button class="btn btn-primary btn-lg clearfix" type="submit">Zapisz</button>
                    
                    <a href="{{route('components.index')}}" class="btn btn-primary btn-lg clearfix">Twoje produkty</a>
                    <a href="{{route('meals.index')}}" class="btn btn-primary btn-lg clearfix">Wróć</a>
                </p>
            </div>
        @endif
    </form>
@endsection
