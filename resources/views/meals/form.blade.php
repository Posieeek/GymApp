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
  
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>