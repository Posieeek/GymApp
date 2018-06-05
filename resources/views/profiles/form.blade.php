
<div class="container2">
    
                
  <h1>  Edytuj profil </h1>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Last name:</strong>
            {!! Form::text('last_name', null, array('placeholder' => 'Last_name','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Height:</strong>
            {!! Form::text('height', null, array('placeholder' => 'Height','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Weight:</strong>
            {!! Form::text('weight', null, array('placeholder' => 'Weight','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Experience:</strong>
            {!! Form::text('experience', null, array('placeholder' => 'Experience','class' => 'form-control')) !!}
        </div>
    </div>


</div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Dieta:</strong>
            {!! Form::text('diet_name', null, array('placeholder' => 'Diet_name','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
<div class="row"> 
   <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Trening:</strong>
            {!! Form::text('training_name', null, array('placeholder' => 'Training_name','class' => 'form-control')) !!}
        </div>
    </div>
</div>

    @if(Auth::id()  == $profile->id)
                        <button type="submit" class="btn btn-primary">Submit</button>
                    @endif

   <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
</div>

</div>
           