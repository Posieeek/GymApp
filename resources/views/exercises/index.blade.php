@extends('layouts.app')


@section('content')
 
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
        <h2>Lista ćwiczeń</h2>
  <a class="btn btn-success" href="{{ route('exercises.create') }}"> Dodaj ćwiczenie</a>
    <a href="{{route('trainings.index')}}" class="btn btn-success">Twoje treningi</a>
   
    <table class="table table-striped  table-dark">
        <tr class="bg-primary">
            
            <th>Cwiczenie</th>
            <th>Objętość</th>
            <th>Ciezar</th>
            <th>Ilosc serii</th>
            <th>Ilosc powtorzen </th>
            <th width="280px">Action</th>
        </tr>
   @foreach ($exercises as $index => $exercise)
    <tr>
        
        <td>{{ $exercise->name}}</td>
        <td>{{$volume[$index]}}</td>
        <td>{{ $exercise->weight}}</td>
        <td>{{ $exercise->ex_set}}</td>
        <td>{{ $exercise->rep}}</td>
        <td>
            
            <a class="btn btn-primary" href="{{ route('exercises.edit',$exercise->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['exercises.destroy', $exercise->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
  
    </div>
    </div>

   
@endsection