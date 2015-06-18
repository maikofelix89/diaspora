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
<h4 align="center" id="headtext">Edit {{$project->pname }}</h4>

<div class="col s5 offset-s4">

{!!  Form::model($project,array('method'=>'PATCH' ,'action' => ['ProjectController@update',$project->id], 'files' => true))  !!}





<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('pnamelbl','Project Name:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('pname',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

    {!!  Form::label('costlbl','Category:',['for'=>'icon_prefix'])  !!}
  
    
      <select name="cat_name">

      @foreach($project_categories  as $categories)
     
      <option value="{{ $categories->cat_name }}">{{ $categories->cat_name }}</option>
     

      @endforeach
    </select>
    
 
   
   

  </div>

  </div>



  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('costlbl','Project Cost:',['for'=>'icon_prefix'])  !!}

   {!!  Form::text('pcost',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
  {!!  Form::label('desclbl','Decription:',['for'=>'icon_prefix'])  !!}

  {!!  Form::textarea('pdesc',null,['class' => 'materialize-textarea'])  !!}
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
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="pimage"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>
 


<!-- end of col-md-8 -->


</div><!-- end of row -->

<div class="row">

<div class="col offset-m3 col m8">

{!!  Form::submit('Update Project',['class' =>'btn'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->
</div><!-- end of row -->


</div>
</div>


@endsection