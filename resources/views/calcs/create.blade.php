@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Uzupełnij calc</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('calcs.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'calcs.store','method'=>'POST')) !!}
         @include('calcs.form')
    {!! Form::close() !!}


@endsection