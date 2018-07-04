

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
              
                    <div class="card-body">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nazwa:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Waga:</strong>
            {!! Form::text('weight', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>
  
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Węglowodany:</strong>
            {!! Form::text('carbohydrates', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tłuszcze:</strong>
            {!! Form::text('fat', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Białka:</strong>
            {!! Form::text('proteins', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ route('components.index') }}"> Back</a>
    </div>
</div>