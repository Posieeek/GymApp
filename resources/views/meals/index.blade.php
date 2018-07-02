@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 ">
            <div class="pull-left">
                <h2>Lista posiłków</h2>
            </div>
            <div class="pull-right">
     
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-striped  table-dark">
        <tr class="bg-primary">
            
            <th>Nazwa</th>
            <th>Dieta</th>
         
            <th width="280px">Action</th>
        </tr>@foreach ($meals as $meal)
  
    <tr>
        
        <td>{{ $meal->name}}</td>
        <td>{{ $meal->diet_id}}</td>
 
       
        <td>
    
            <a class="btn btn-primary" href="{{ route('meals.edit',$meal->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['meals.destroy', $meal->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    <a class="btn btn-success" href="{{ route('meals.create') }}"> Dodaj posiłek</a>

    {!! $meals->links() !!}
@endsection