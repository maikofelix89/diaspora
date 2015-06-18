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
<h4 align="center" id="headtext">Vacancy</h4>

<div class="col s5 offset-s4">

{!!  Form::open(array('url' => 'addvacancy', 'files' => true))  !!}





<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('jobtitlelbl','Job Title:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('job_title',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>
  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('jobpositions','Positions:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('positions',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('jobcode','Job Code:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('job_code',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('joblocation','Job Location:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('job_location',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  

  


  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('jobsummarylbl','Job Summary:',['for'=>'icon_prefix'])  !!}

   {!!  Form::textarea('job_summary',null,['class' => 'materialize-textarea'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('dutieslbl','Job Duties:',['for'=>'icon_prefix'])  !!}

   {!!  Form::textarea('job_duties',null,['class' => 'materialize-textarea'])  !!}
  </div>

  </div>

  </div>

  

   <div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 
   {!!  Form::label('speciflbl','Personal Specifications:',['for'=>'icon_prefix'])  !!}

   {!!  Form::textarea('job_specs',null,['class' => 'materialize-textarea'])  !!}
  </div>

  </div>

  </div>

  <div class="row">


  <div class="col m8">

  {!!  Form::label('datelbl','Deadline:')  !!}
  
     <div class="input-field">
 
   

   <input type="date" class="datepicker" name="deadline">
  </div>

  </div>

  </div>
             
              


<div class="row">

<div class="col offset-m3 col m8">

{!!  Form::submit('Post Vacancy',['class' =>'btn'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->
</div><!-- end of row -->


</div>
</div>
@endsection