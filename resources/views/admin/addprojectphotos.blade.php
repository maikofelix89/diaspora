@extends('admin.dashboardlayout')

@section('content')

<div id="">

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
<h4 align="center" id="headtext">Add Photos to {{ $project->pname}}</h4>


<div class="col s5 offset-s4">

{!!  Form::open(array('url' => 'photoform', 'files' => true))  !!}


<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('photonamelbl','Name :',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('section',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>








             
              
<div class="row">

  

 

  <div class="col m3">

   

  {!!  Form::label('imglbl','Project Image:',['for'=>'icon_prefix'])  !!}
  
  </div>
  <div class="col m8">

  <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>
 


<!-- end of col-md-8 -->


</div><!-- end of row -->

<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('photodesclbl','Description',['for'=>'icon_prefix'])  !!}

   {!!  Form::textarea('description',null,['class' => 'materialize-textarea'])  !!}
   <input type="text" name="projid" value="{{ $project->id}}" hidden>
  </div>

  </div>

  </div>

<div class="row">

<div class="col offset-m3 col m8">

{!!  Form::submit('Add Photo',['class' =>'btn'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->
</div><!-- end of row -->

</div><!-- end of col-sm-offset -->
</div><!-- end of project row -->
</div>


@endsection