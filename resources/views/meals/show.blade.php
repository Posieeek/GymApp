@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pokaz produkt</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('meals.index') }}"> Back</a>
            </div>
        </div>
    </div>

 <table class="table table-striped  table-dark">
           <tr>
            <th>    <strong>Nazwa:</strong> </th>
            <th>      <strong>Dieta:</strong></th>
         
            </tr>
              <td>  {{ $meal->name}}</td>
              <td>   {{ $meal->diet_id}}</td>
           
        </div>
    </div>
   
    </table>
@endsection