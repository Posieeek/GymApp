
<div class="container2">
    
                

<div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">

             <img src="/uploads/avatars/{{ $profile->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
         
            <form enctype="multipart/form-data" action="/profile" method="POST">
               
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
            </form>
            </div>
</div>
</div>

<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Imię:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
</div>



<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Nazwisko lub pseudonim:</strong>
        
            {!! Form::text('last_name', null, array('placeholder' => 'Last_name','class' => 'form-control')) !!}
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Wzrost (cm):</strong>
            {!! Form::selectRange('height', 130, 220, array('class' => 'form-control'))!!}
    
           
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Waga (kg):</strong>
            {!! Form::selectRange('weight', 20, 200, array('class' => 'form-control'))!!}
        </div>
    </div>
    </div>
<div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Doświadczenie (lata):</strong>
            {!! Form::select('experience', array('< 3 miesiące' => '< 3 miesiące', '3-6 miesięcy' => '3-6 miesięcy','6-12 miesięcy' => '6-12 miesięcy',
             'Rok' => 'Rok', '2 lata' => '2 lata','3-4 lata' => '3-4 lata', '5-6 lat' => '5-6 lat',
                '7-8 lat' => '7-8 lat', '9-10 lat' => '9-10 lat','11-15 lat' => '11-15 lat', '16-20 lat' => '16-20 lat',
                '+20 lat' => '+20 lat'  ))!!}
      
        
        </div>
    </div>


</div>
@if(Auth::id()  == $profile->id)
                        <button type="submit" class="btn btn-primary">Submit</button>
                    @endif
                    <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
<!-- <div class="row"> 
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
</div> -->


</div>
           