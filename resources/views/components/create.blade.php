@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dodaj cwiczenie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('components.index') }}"> Back</a>
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


    {!! Form::open(array('route' => 'components.store','method'=>'POST')) !!}
         @include('components.form')
    {!! Form::close() !!}


@endsection