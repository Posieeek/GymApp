@extends('layouts.app')


@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      
    @foreach ($profiles as $profile)
    @if(Auth::id()  == $profile->id)

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
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->name}} </th>
    
                             
                                </table>
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
                        <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Dieta:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->Diet->name}} </th>
    
                             
                                </table>
                            </div>
                        </div>  

  <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Trening:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $profile->Training->name}} </th>
    
                             
                                </table>
                            </div>
                        </div>  
                        
          
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
          <a href="{{ route('profiles.edit',$profile->id) }}" class="btn brn-lg btn-primary"
             style="margin-right: 8px;">Edytuj Profil</a>
             {!! Form::open(['method' => 'DELETE','route' => ['profiles.destroy', $profile->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
                             
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
    @endforeach
   


  

    {!! $profiles->links() !!}
@endsection
