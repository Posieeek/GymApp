@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edytuj rolę</div>
                    <form action="{{ route('roles.update', ['role' => $role]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nazwa</label>
                            <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Opis</label>
                            <input type="text" name="description" value="{{ $role->description }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <p class="text-center">
                                {{method_field('PATCH')}}
                                <button class="btn btn-success btn-lg" type="submit">Zapisz</button>
                                <a class="btn btn-success btn-lg" href="{{ route('roles.index',$role->id) }}">Wróć</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection