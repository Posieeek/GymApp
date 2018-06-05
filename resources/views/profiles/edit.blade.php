@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-4 margin-tb">
            <div class="pull-center">
            </div>
          
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($profile, ['method' => 'PATCH','route' => ['profiles.update', $profile->id]]) !!}
        @include('profiles.form')
    {!! Form::close() !!}


@endsection