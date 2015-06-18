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
<h4 align="center" id="headtext">Add Event</h4>

<div class="col s5 offset-s4">

{!!  Form::open(array('url' => 'addcalendar', 'files' => true))  !!}





<div class="row">


  <div class="col m8">

  
  
     <div class="input-field">
 

   {!!  Form::label('eventnamelbl','Event Name:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('event_name',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>

  <div class="row">

  

 

  <div class="col m3">

   

  {!!  Form::label('eventlbl','Event Image:',['for'=>'icon_prefix'])  !!}
  
  </div>
  <div class="col m8">

  <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="event_image"></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
  </div>
</div>

</div>
 


<!-- end of col-md-8 -->


</div><!-- end of row -->

  <div class="row">


  <div class="col m8">

    {!!  Form::label('from','Event start date:',['for'=>'icon_prefix'])  !!}
  
    
      <input type="date" class="datepicker" name="from">

       <!-- <input type="date" class="datepicker" name="from" hidden> -->
    
 
   
   

  </div>

  </div>



  <div class="row">


  <div class="col m8">

    {!!  Form::label('to','Event End Date:',['to'=>'icon_prefix'])  !!}
  
    
      <input type="date" class="datepicker" name="to">
       <!-- <input type="date" class="datepicker" name="to" hidden> -->
    
 
   
   

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
