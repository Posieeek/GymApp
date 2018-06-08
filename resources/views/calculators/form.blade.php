<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Weight:</strong>
            {!! Form::textarea('weight', null, array('placeholder' => 'Weight','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rep:</strong>
            {!! Form::textarea('rep', null, array('placeholder' => 'Rep','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>