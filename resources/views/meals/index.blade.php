@extends('layouts.app')


@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
        <h2>Lista posiłków</h2>
       
        <a class="btn btn-success" href="{{ route('meals.create') }}"> Dodaj posiłek</a>
    <a href="{{route('components.index')}}" class="btn btn-success ">Twoje produkty</a>
    <a href="{{route('diets.index')}}" class="btn btn-success">Dieta</a>
    <br>
       @forelse($meals as $meal)
        <div class="card">
        <div class="row justify-content-center">
        <div class="col-sm-10 ">

            <h2>Posiłek: {{ $meal->name}}</h2>
    
      
     
            <a class="btn btn-primary " href="{{ route('meals.edit',$meal->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['meals.destroy', $meal->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        
  

</div>
</div>
<div class="row justify-content-center">
        <div class="col-sm-10 ">
<table class="table table-striped  table-dark">
        <tr class="bg-info">
        <th> Nazwa produktu </th>
            <th>Waga (g)</th>
            <th>Białko </th>
            <th>Węglowodany </th>
            <th>Tłuszcze </th>
        
           
            <th width="280px"></th>
        </tr>@foreach($meal->components as $component)
  
    <tr>
        
    <td>{{$component->name}}</td>
            <td>{{$component->weight}}</td>
            <td>{{$component->proteins}}</td>
            <td>{{$component->carbohydrates}}</td>  
            <td>{{$component->fat}}</td>
      
     <br>
          
        <td>
    
            <a class="btn btn-primary" href="{{ route('components.edit',$component->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['components.deleteFromMeal', $component->id,  $meal->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
           </div>
           </div>
                <hr>
                <br>
    @empty
        <p>Nie ma żadnych posiłków.</p>
    @endforelse
    
    </div>
    </div>
    
@endsection