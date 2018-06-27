@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('update-roles') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="user">Użytkownik</label>
                        <select class="form-control" id="user" name="user">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role">Rola</label>
                        <select class="form-control" id="role" name="role">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            <button class="btn btn-primary btn-lg" type="submit">Zapisz</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection