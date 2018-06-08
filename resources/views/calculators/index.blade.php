@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 ">
            <div class="pull-left">
                <h2>Zmierz swoje maksy!</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('calculators.create') }}"> Dodaj cwiczenie</a>
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
            
       
            <th>Ciezar</th>
        
            <th>Ilosc powtorzen </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($calculators as $calculator)
    <tr>
        
      
        <td>{{ $calculator->weight}}</td>
     
        <td>{{ $calculator->rep}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('calculators.show',$calculator->id) }}">Pokaż</a>
            <a class="btn btn-primary" href="{{ route('calculators.edit',$calculator->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['calculators.destroy', $calculator->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $calculators->links() !!}
@endsection