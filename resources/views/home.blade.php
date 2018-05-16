@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Twój status:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Jesteś zalogowany!               
                </div>   
            </div>
            <br>
            
            <div class="card">
            <div class="card-header">Podstrony</div>
            <div class="card-body" >
             <a href="{{ url('/') }} "style="color: rgb(0,0,0)">Edytuj profil!</a>
             </div>
               </div>
               </div>
               </div>

</div>

</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Podstrony</div>
            <div class="card-body" >
            
            <button type="button" class="btn  btn-block active"><a href="{{ url('/') }} "style="color: rgb(0,0,0)">Home</a></button>
            <button type="button" class="btn  btn-block active"><a href="https://kfd.pl"style="color: rgb(0,0,0)">Trening</a></button>
            <button type="button" class="btn  btn-block active"><a href="https://magdagessler.pl"style="color: rgb(0,0,0)">Diety</a></button>
            <button type="button" class="btn  btn-block active"><a href="{{ url('/gallery') }}"style="color: rgb(0,0,0)">Galeria</a></button>
            <button type="button" class="btn  btn-block active"><a href="{{ url('/calc') }} "style="color: rgb(0,0,0)">Kalkulatory</a></button>
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
       
       

        
   

@endsection
