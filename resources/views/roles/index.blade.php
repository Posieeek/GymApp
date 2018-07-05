@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead class="thead-dark text-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="table-primary table-bordered">
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->description}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('roles.edit', ['role' => $role]) }}"
                               role="button">Edytuj</a>
                            <form action="{{ route('roles.destroy', ['role' => $role]) }}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger" type="submit">Usuń</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('roles.create') }}" role="button">Dodaj</a>
        <table class="table" style="margin-top: 20px;">
            <thead class="thead-dark text-light">
            <tr>
                <th scope="col">Użytkownik</th>
                <th scope="col">Nazwa uprawnień</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="table-dark table-bordered">
            @foreach($filteredUsers as $filteredUser)
                <tr>
                    <td>{{ $filteredUser->username }}</td>
                    <td>Admin</td>
                    <td>
                        <form action="{{ route('delete-roles', ['id' => $filteredUser->id]) }}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-dark" href="{{ route('assign-roles') }}" role="button">Przydziel rolę</a>
    </div>
@endsection