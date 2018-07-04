@extends('layouts.app')


@section('content')
    
          

          
  


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="row justify-content-center">
        <div class="col-sm-6 ">
       
                <h2>Zmierz swoje maksy!</h2>
             
      
    <table class="table table-striped  table-dark">
        <tr class="bg-primary">
       <th>Nazwa</th>     
       
            <th>Ciezar</th>
        
            <th>Ilosc powtorzen </th>

             <th>Twój ciężar maksymalny </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($calculators as $index => $calculator)
    <tr>
        
         
    <td>{{ $calculator->name}}</td>
        <td>{{ $calculator->weight}}</td>
     
        <td>{{ $calculator->rep}}</td>
        <td>{{$max_reps[$index]}}</td>
        <td>
           <a class="btn btn-primary" href="{{ route('calculators.edit',$calculator->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['calculators.destroy', $calculator->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    <a class="btn btn-success" href="{{ route('calculators.create') }}"> Dodaj cwiczenie</a>
    </div>
    </div>
   
   


@endsection