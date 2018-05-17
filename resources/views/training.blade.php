@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Przykłady treningów</div>
            <div class="card-body" >
            
            <button type="button" class="btn  btn-block active"><a href="{{ url('/training/split') }}"style="color: rgb(0,0,0)">Split</a></button>
            <button type="button" class="btn  btn-block active"><a href="{{ url('/training/fbw') }}"style="color: rgb(0,0,0)">FBW</a></button> 
            <button type="button" class="btn  btn-block active"><a href="{{ url('/training/pushpull') }}"style="color: rgb(0,0,0)">Push pull</a></button>
            <button type="button" class="btn  btn-block active"><a href="{{ url('/training/pplegs') }}"style="color: rgb(0,0,0)">Push pull legs</a></button> 
            <button type="button" class="btn  btn-block active"><a href="{{ url('/training/podwyskok') }}"style="color: rgb(0,0,0)">Pod wyskok</a></button>   
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
       
       

        
   

@endsection
