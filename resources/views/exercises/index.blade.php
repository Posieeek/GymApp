@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 ">
            <div class="pull-left">
                <h2>Dziennik cwiczen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('exercises.create') }}"> Dodaj cwiczenie</a>
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
            
            <th>Cwiczenie</th>
            <th>Ciezar</th>
            <th>Ilosc serii</th>
            <th>Ilosc powtorzen </th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($exercises as $exercise)
    <tr>
        
        <td>{{ $exercise->name}}</td>
        <td>{{ $exercise->weight}}</td>
        <td>{{ $exercise->ex_set}}</td>
        <td>{{ $exercise->rep}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('exercises.show',$exercise->id) }}">Pokaż</a>
            <a class="btn btn-primary" href="{{ route('exercises.edit',$exercise->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['exercises.destroy', $exercise->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $exercises->links() !!}
@endsection