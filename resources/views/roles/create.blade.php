@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodaj Role</div>
                    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Nazwa</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Opis</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="form-group">
                            <p class="text-center">
                                <button class="btn btn-primary btn-lg" type="submit">Zapisz</button>
                            </p>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection