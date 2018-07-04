@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-sm-6 ">
        <h2>Lista treningów</h2>
    <a href="{{route('trainings.create')}}" class="btn btn-success">Dodaj trening</a>
    <a href="{{route('exercises.index')}}" class="btn btn-success">Twoje ćwiczenia</a>
   

       @forelse($trainings as $training)
        <div class="card">
        <div class="row justify-content-center">
        <div class="col-sm-10 ">

            <h2>Trening: {{ $training->name}}</h2>
    
      
     
            <a class="btn btn-primary " href="{{ route('trainings.edit',$training->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['trainings.destroy', $training->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        
  

</div>
</div>

   <div class="row justify-content-center">
        <div class="col-sm-10 ">
<table class="table table-striped  table-dark">
        <tr class="bg-info">
        <th> Nazwa ćwiczenia </th>
            <th>Waga (kg)</th>
            <th>Ilość serii </th>
            <th>Ilość powtórzeń </th>
            
        
           
            <th width="280px"></th>
        </tr>@foreach($training->exercises as $exercise)
  
    <tr>
        
    <td>{{$exercise->name}}</td>
            <td>{{$exercise->weight}}</td>
            <td>{{$exercise->ex_set}}</td>
            <td>{{$exercise->rep}}</td>  
           
      
     <br>
          
        <td>
    
            <a class="btn btn-primary" href="{{ route('exercises.edit',$exercise->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['exercises.deleteFromTraining', $exercise->id, $training->id],'style'=>'display:inline']) !!}
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
        <p>Nie ma żadnych treningów.</p>
    @endforelse
@endsection
