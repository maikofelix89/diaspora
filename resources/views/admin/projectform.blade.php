@extends('layout')

@section('content')

<div id="content">

@if($errors->any())

<ul class="alert alert-danger">

@foreach($errors->all() as $error)

<li>{{ $error  }}</li>

@endforeach



</ul>


@endif

<div class="col-sm-offset-3 col-sm-5">

{!!  Form::open(array('url' => 'projectform', 'files' => true))  !!}



<h1 align="center">Add Project</h1>
<hr class="intro-divider" id="line" />

<div class="form-group">

   <div class="col-md-3">
    

{!!  Form::label('namelbl','Project Name')  !!}


  </div>

  <div class="col-md-8">
  

  {!!  Form::text('pname',null,['class' => 'form-control'])  !!}

  </div>

  </div>
             
              
<div class="form-group">

   <div class="col-md-3">

 {!!  Form::label('imagelbl','Image')  !!}

  </div>

 

  <div class="col-md-8">

 

  

  <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img data-src="holder.js/100%x100%" alt="...">
  </div>
  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
  <div>
    <span class="btn btn-success btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="pimage"></span>
    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>
 


<!-- end of col-md-8 -->


</div>



<div class="col-md-offset-3 col-md-8">

{!!  Form::submit('Add Project',['class' =>'btn btn-primary'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->


@endsection