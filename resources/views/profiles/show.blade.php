@extends('layouts.app')


@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      

   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Twój profil:
                </div>
                <div class="card-body">

  <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Avatar:') }}</label>
                            <div class="col-md-6">
                         
        <tr class="bg-primary">
        <th>
  <div class="form-group row">


  <p class="text-center"><img src="/img/avatars/{{ $profile->avatar }}" style="width:60px; height:60px; margin-left: 15px  ">
                    </p>
                   
                            </div>
                        </th>
    
                             
                               
                            </div>
                        </div>     

           
                             <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Imię:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->name}} </th>
    
                             
                                </table>
                            </div>
                        </div>      

                         <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Nazwisko:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->last_name}} </th>
    
                             
                                </table>
                            </div>
                        </div>    

                           <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Wzrost:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->height}} </th>
    
                             
                                </table>
                            </div>
                        </div>   

                              <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Waga:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->weight}} </th>
    
                             
                                </table>
                            </div>
                        </div>   

                              <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Doświadczenie:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->experience}} </th>
    
                             
                                </table>
                            </div>
                        </div>   
                        
                      <!-- <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Dieta:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        @isset($profile->Diet)
        <th>{{ $profile->Diet->name}} </th>
@endisset
                   
                                </table>
                            </div>
                        </div>  

  <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Trening:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        @isset($profile->Training)
        <th>{{ $profile->Training_name}} </th>
@endisset 
                             
                                </table>
                            </div>
                        </div>   --> 
                        <h3> Komentarze </h3>
                        <hr>

<div class ="comments">
@foreach ($profile->comments  as $comment)
<article>
{{$comment->body}} <br>  by {{$comment->profile->name}} 
</article>
</br>
@endforeach


</div>  
                   <hr>
          <div class="card">
          <div class="card-block">
          <form method="POST" action="/profiles/{{$profile->id}}/comments">
         
         {{csrf_field()}}

          <div class="form-group">
          <textarea name="body" placeholder="Your comment here" class="form-control">
          </textarea>
          </div>

          <div class ="form-group">
          <button type="submit" class="btn btn-primary"> Add comment </button>
          </div> 
</form>




                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        
        @if(Auth::id()  == $profile->id)      
         <a href="{{ route('profiles.edit',$profile->id) }}" class="btn brn-lg btn-primary"
             style="margin-right: 8px;">Edytuj Profil</a>
            
                             
    </table>
    
</div>
</div>  
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endif
  
   


  

 
@endsection
