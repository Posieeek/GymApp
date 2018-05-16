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
            <button type="button" class="btn  btn-block active"><a href="https://filmweb.pl"style="color: rgb(0,0,0)">Filmy</a></button>
            <button type="button" class="btn  btn-block active"><a href="https://github.com/laravel/laravel"style="color: rgb(0,0,0)">Zdjęcia</a></button>
            <button type="button" class="btn  btn-block active"><a href="https://www.bodybuilding.com/fun/other7.htm"style="color: rgb(0,0,0)">Kalkulator wyciskania</a></button> 
            <button type="button" class="btn  btn-block active"><a href="http://bmi-online.pl/"style="color: rgb(0,0,0)">Kalkulator BMI</a></button>
               </div>       
        </div> 
        </div>      
        </div>
               </div>
               </div>
       
       

        
   

@endsection
