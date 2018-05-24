@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pokaz profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
            </div>
        </div>
    </div>

 <table class="table table-striped  table-dark">
           <tr>
            <th>    <strong>Imie:</strong> </th>
            <th>      <strong>Nazwisko:</strong></th>
            <th>     <strong>Wzrost:</strong></th>
            <th>     <strong>Waga:</strong></th>
            <th>     <strong>Doswiadczenie:</strong></th>
            </tr>
            <td>{{ $profile->name}}</td>
        <td>{{ $profile->last_name}}</td>
        <td>{{ $profile->height}}</td>
        <td>{{ $profile->weight}}</td>
        <td>{{ $profile->experience}}</td>
        </div>
    </div>
   
    </table>
@endsection