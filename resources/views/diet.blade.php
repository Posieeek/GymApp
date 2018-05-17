@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Diety</div>
            <div class="card-body" >
            
  
            <button type="button" class="btn  btn-block active"><a href="{{ url('/diet/highcarb') }}"style="color: rgb(0,0,0)">High carb</a></button> 
            <button type="button" class="btn  btn-block active"><a href="{{ url('/diet/lowcarb') }}" style="color: rgb(0,0,0)">Low carb</a></button>
            <button type="button" class="btn  btn-block active"><a href="{{ url('/diet/vegan') }}"style="color: rgb(0,0,0)">Vegan</a></button> 
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
       
       

        
   

@endsection
