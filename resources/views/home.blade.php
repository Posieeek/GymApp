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

                        <button type="button" class="btn btn-block active">
                            <a href="{{ url('/profiles') }}" style="color: rgb(0,0,0)">Twój profil:</a>
                        </button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>W
@endsection
