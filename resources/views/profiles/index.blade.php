@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-8 ">
            <div class="pull-left">
                <h2>Profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('profiles.create') }}"> Uzupełnij profil</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-striped  table-dark">
        <tr class="bg-primary">
        <th> Avatar </th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Wzrost</th>
            <th>Waga </th>
            <th>Doswiadczenie</th>
            <th>Trener </th>
            <th>Dieta </th>
            <th>Trening </th>
            <th width="280px">Action</th>
        </tr>
      
    @foreach ($profiles as $profile)
    @if(Auth::id()  == $profile->id)
    <tr>
    <td> </td>
        <td>{{ $profile->name}}</td>
        <td>{{ $profile->last_name}}</td>
        <td>{{ $profile->height}}</td>
        <td>{{ $profile->weight}}</td>
        <td>{{ $profile->experience}}</td>
        <td>{{$profile->trainer_id}}</td>
        <td>{{$profile->diet_id}}</td>
        <td>{{$profile->training_id}}</td>
        
        
        <td>
            <a class="btn btn-info" href="{{ route('profiles.show',$profile->id) }}">Pokaż</a>
          
          
                        <a href="{{ route('profiles.edit',$profile->id) }}" class="btn brn-lg btn-primary"
                           style="margin-bottom: 8px;">Edytuj Profil</a>
                           {!! Form::open(['method' => 'DELETE','route' => ['profiles.destroy', $profile->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
                  
           
        </td>
    </tr>
    @endif
    @endforeach
   
    </table>

  

    {!! $profiles->links() !!}
@endsection