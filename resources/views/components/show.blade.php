@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pokaz cwiczenie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('components.index') }}"> Back</a>
            </div>
        </div>
    </div>

 <table class="table table-striped  table-dark">
           <tr>
            <th>    <strong>Nazwa:</strong> </th>
            <th>      <strong>Waga:</strong></th>
         
            </tr>
              <td>  {{ $component->name}}</td>
              <td>   {{ $component->weight}}</td>
           
        </div>
    </div>
   
    </table>
@endsection