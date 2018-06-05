@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 ">
            <div class="pull-left">
                <h2>Dziennik cwiczen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('components.create') }}"> Dodaj cwiczenie</a>
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
            <th>Waga</th>
           
            <th width="280px">Action</th>
        </tr>
    @foreach ($components as $component)
    <tr>
        
        <td>{{ $component->name}}</td>
        <td>{{ $component->weight}}</td>
     
        <td>
            <a class="btn btn-info" href="{{ route('components.show',$component->id) }}">Pokaż</a>
            <a class="btn btn-primary" href="{{ route('components.edit',$component->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['components.destroy', $component->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $components->links() !!}
@endsection