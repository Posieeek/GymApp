@extends('layout')


@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pokaz profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('calcs.index') }}"> Back</a>
            </div>
        </div>
    </div> 
    
  

 <table class="table table-striped  table-dark">
           <tr>
            <th>    <strong>Powtórzenia:</strong> </th>
            <th>      <strong>Ciężar:</strong></th>
       
        
            <th>Dieta </th>
            <th>Trening </th>
            </tr>
            <td>{{ $calc->name}}</td>
        <td>{{ $calc->last_name}}</td>
    
        </div>
    </div>
   
    </table>
@endsection