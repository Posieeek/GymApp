@extends('layouts.app')

@section('content')
    <h1>Dieta: {{$diet->name}} </h1>

    <hr>

    <div class="card">
        <div class="card-header">
            <h3>Lista posiłków:</h3>
        </div>

        <div class="card-body">
            @foreach($diet->meals as $meal)
                <ul class="list-group">
                    <h3>
                        {{$meal->name}}
                    </h3>
                    @foreach($meal->products as $product)
                        @include('products._products_list_simple')
                    @endforeach
                </ul>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
