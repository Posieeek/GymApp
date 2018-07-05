@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h1>  Edytuj profil </h1></div>
                    
</div>
</div>
</div>
</div>
</div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
              
                    <div class="card-body">

    {!! Form::model($profile, ['method' => 'PATCH','route' => ['profiles.update', $profile->id]]) !!}
        @include('profiles.form')
    {!! Form::close() !!}
    </div>
        </div>
</div>
</div>
</div>
</div>
</div>
        </div>
</div>
</div>
</div>
</div>
@endsection