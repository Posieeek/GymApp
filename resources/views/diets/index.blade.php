@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-sm-6 ">
    <h1>Moje diety</h1>

    <a href="{{route('diets.create')}}" class="btn btn-success">Dodaj dietę</a>
    <a href="{{route('meals.index')}}" class="btn btn-success">Twoje posiłki</a>
    <a href="{{route('components.index')}}" class="btn btn-success">Twoje produkty</a>


    @forelse($diets as $diet)
        

    <div class="card">
        <div class="row justify-content-center">
        <div class="col-sm-10 ">

            <h2>Dieta: {{ $diet->name}}</h2>
    
      
     
            <a class="btn btn-primary" href="{{ route('diets.edit',$diet->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['diets.destroy', $diet->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        
  

</div>
</div>
<br>
<div class="row justify-content-center">
        <div class="col-sm-10 ">
        <h3> Posiłki: </h3>
<table class="table table-striped  table-dark">
        <tr class="bg-info">
        <th> Nazwa posiłku </th>
            <th width="280px"></th>
        </tr>@foreach($diet->meals as $meal)
    <tr>
    <td>{{$meal->name}}</td>   
        <td>
            <a class="btn btn-primary" href="{{ route('meals.edit',$meal->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['meals.deleteFromDiet', $meal->id,  $diet->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
           </div>
           </div>
    @empty
        <p>Nie ma żadnych diet.</p>
    @endforelse
    </div>
        </div>
@endsection
