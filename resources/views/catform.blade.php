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
<h4 align="center" id="headtext">Project Category</h4>

<div class="col s5 offset-s4">

{!!  Form::open(array('url' => 'projectcatform'))  !!}





<div class="row"> 

   <div class="col m8">


  
  
     <div class="input-field">
 

   {!!  Form::label('catnamelbl','Project Category:',['for'=>'icon_prefix'])  !!}

  

  {!!  Form::text('cat_name',null,['class' => 'form-control validate'])  !!}
  </div>

  </div>

  </div>
             
              


<div class="row">

<div class="col offset-m3 col m8">

{!!  Form::submit('Add Category',['class' =>'btn'])  !!}

{!!  Form::close()  !!}

</div><!-- end of col-sm-offset-3 col-sm-5  -->
</div><!-- end of row -->


</div>
</div>


@endsection


