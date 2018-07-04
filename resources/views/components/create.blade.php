@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h1>  Dodaj produkt </h1></div>
                    
</div>
</div>
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