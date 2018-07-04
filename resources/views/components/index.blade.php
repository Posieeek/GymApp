@extends('layouts.app')


@section('content')
  

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
        <h2>Lista produktów</h2>
        <a class="btn btn-success" href="{{ route('components.create') }}"> Dodaj produkt</a>
    <a href="{{route('meals.index')}}" class="btn btn-success">Twoje posiłki</a>
    <a href="{{route('diets.index')}}" class="btn btn-success">Dieta</a>
    <table class="table table-striped  table-dark">
        <tr class="bg-primary">
            
            <th>Nazwa</th>
            <th>Waga</th>
            <th>Kalorie</th>
            <th>Węgle</th>
            <th>Tłuszcze</th>
            <th>Białko</th>
           
            <th width="280px">Action</th>
        </tr>@foreach ($components as $index => $component)
  
    <tr>
        
        <td>{{ $component->name}}</td>
        <td>{{ $component->weight}}</td>
        <td>{{$calories[$index]}}</td>
        <td>{{ $component->carbohydrates}}</td>
        <td>{{ $component->fat}}</td>
        <td>{{ $component->proteins}}</td>
    
          
        <td>
    
            <a class="btn btn-primary" href="{{ route('components.edit',$component->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['components.destroy', $component->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
   
    </div>
    </div>

@endsection