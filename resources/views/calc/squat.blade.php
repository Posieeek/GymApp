@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Kalkulator maksymalnego powtórzenia dla przysiadu</div>
            <div class="card-body" >

     <div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Waga (kg): </strong>
            {!! Form::selectRange('weight', 20, 450, array('class' => 'form-control'))!!}
        </div>
    </div>
    </div>

    <div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Powtórzenia:</strong>
            {!! Form::selectRange('rep', 1, 12, array('class' => 'form-control'))!!}
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{ url('/calc/orm') }}"> Back</a>
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
         

        
   

@endsection
