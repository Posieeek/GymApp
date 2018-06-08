@extends('layouts.app')


@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

      
    @foreach ($calcs as $calc)
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
             fdsds
                </div>
                <div class="card-body">

  <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Cieżar:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $calc->weight}} </th>
    
                             
                                </table>
                            </div>
                        </div>      

                             <div class="form-group row">
                            <label for="imie" class="col-sm-4 col-form-label text-md-right">{{ __('Powtórzenia:') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th>{{ $calc->rep}} </th>
    
                             
                                </table>
                            </div>
                        </div>      

   

                        
          
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>
                            <div class="col-md-6">
                            <table class="table table-striped  table-dark">
        <tr class="bg-primary">
          <a href="{{ route('calcs.edit',$calc->id) }}" class="btn brn-lg btn-primary"
             style="margin-right: 8px;">Edytuj Profil</a>
             {!! Form::open(['method' => 'DELETE','route' => ['calcs.destroy', $calc->id],'style'=>'display:inline']) !!}
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

    @endforeach
   


  

    {!! $calcs->links() !!}
@endsection
