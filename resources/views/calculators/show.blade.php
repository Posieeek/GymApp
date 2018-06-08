@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Pokaz cwiczenie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('calculators.index') }}"> Back</a>
            </div>
        </div>
    </div>

 <table class="table table-striped  table-dark">
           <tr>

            <th>      <strong>Ciezar:</strong></th>
      
            <th>     <strong>Powtorzenia:</strong></th>
            </tr>
   
              <td>   {{ $calculator->weight}}</td>

              <td>  {{ $calculator->rep}} </td>   
        </div>
    </div>
   
    </table>
@endsection