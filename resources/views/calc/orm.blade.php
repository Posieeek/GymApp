@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Kalkulator maksymalnego powtórzenia dla:</div>
            <div class="card-body" >

           
            <button type="button" class="btn  btn-block active"><a href="{{ url('/calc/squat') }}"style="color: rgb(0,0,0)">Przysiadu</a></button>   
            <button type="button" class="btn  btn-block active"><a href="{{ url('/calc/bench') }}"style="color: rgb(0,0,0)">Wyciskania sztangi leżąc poziomo</a></button> 
            <button type="button" class="btn  btn-block active"><a href="{{ url('/calc/deadlift') }}"style="color: rgb(0,0,0)">Martwego ciągu</a></button>
   
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
       
       

        
   

@endsection
