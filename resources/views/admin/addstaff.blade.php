@extends('layout')

@section('content')

<div id="content">

@if($errors->any())

<div class="card-panel">
      <span class="blue-text text-darken-2">
      <ul>

@foreach($errors->all() as $error)


<li>{{ $error  }}</li>


@endforeach


</ul></span>
</div>




@endif
<div class="row" id="projects">
<h4 align="center">Add Staff</h4>

<div class="col s5 offset-s4">

{!!  Form::open(array('url' => 'stafform', 'files' => true))  !!}





<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('staffnamelbl','Name of Staff:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('name',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">

  

 

  <div class="col m3">

   

  {!!  Form::label('imglbl','Staff Image:',['for'=>'icon_prefix'])  !!}
  
  </div>
  <div class="col m8">

  <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="staffimage"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>
 


<!-- end of col-md-8 -->


</div><!-- end of row -->

  <div class="row">


  <div class="col m8">

    {!!  Form::label('positionlbl','Position:',['for'=>'icon_prefix'])  !!}
  
    
      <select name="position">

      
     
      <option value="CEO">CEO</option>
      <option value="HR">HR</option>
      <option value="Draftsman">Draftsman</option>
     

    
    </select>
    
 
   
   

  </div>

  </div>



  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('profquallbl','Proffessional Qualification:',['for'=>'icon_prefix'])  !!}

   {!!  Form::text('profqualif',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('acadquallbl','Academic Qualification:',['for'=>'icon_prefix'])  !!}

   {!!  Form::text('acadqualif',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
  {!!  Form::label('staffbiolbl','Bio:',['for'=>'icon_prefix'])  !!}

  {!!  Form::textarea('bio',null,['class' => 'materialize-textarea'])  !!}
  </div>

  </div>

  </div>
             
              


<div class="row">

<div class="col offset-m3 col m8">

{!!  Form::submit('Add Project',['class' =>'btn'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->
</div><!-- end of row -->


</div>
</div>
@endsection