<div class="container2">
    
                
  <h1>  Edytuj maksika </h1>



    <div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Ćwiczenie:</strong>
            {!! Form::select('name', array('Wyciskanie' => 'Wyciskanie', 'Martwy ciąg' => 'Martwy ciąg','Przysiad' => 'Przysiad'))!!}
        </div>
    </div>
</div>

    <div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Ciężar (kg):</strong>
            {!! Form::selectRange('weight', 1, 500, array('class' => 'form-control'))!!}
    
           
        </div>
    </div>
    </div>
   

    <div class="row"> 
    <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="form-group">
            <strong>Powtórzenia:</strong>
            {!! Form::selectRange('rep', 1, 12, array('class' => 'form-control'))!!}
    
           
        </div>
    </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
