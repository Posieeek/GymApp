<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last name:</strong>
            {!! Form::text('last_name', null, array('placeholder' => 'Last_name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Height:</strong>
            {!! Form::text('height', null, array('placeholder' => 'Height','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Weight:</strong>
            {!! Form::text('weight', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Experience:</strong>
            {!! Form::text('experience', null, array('placeholder' => 'Experience','class' => 'form-control')) !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imie trenera:</strong>
            {!! Form::text('trainer_id', null, array('placeholder' => 'Trainer_id','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Dieta:</strong>
            {!! Form::text('diet_id', null, array('placeholder' => 'Diet_id','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Trening:</strong>
            {!! Form::text('training_id', null, array('placeholder' => 'Training_id','class' => 'form-control')) !!}
        </div>
    </div>

    @if(Auth::id()  == $profile->id)
                        <button type="submit" class="btn btn-primary">Submit</button>
                    @endif

  
</div>


           