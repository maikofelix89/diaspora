@extends('layout')

@section('content');
<div class="container">

<div class="row" id="projectdetails">
<h2 align="center">{{  $projects->pname  }}</h2>
<div class="col s6">

<div class="card-panel">
<img src="../{{ $projects->pimage}}" class="responsive-img materialboxed"/>
        
</div>

 

 

 
<div class="btn">More Photos</div>
 



</div>

<div class="col s6">


  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active">About Project </div>
      <div class="collapsible-body"><p>{{ $projects->pdesc}}</p></div>
    </li>
    <li>
      <div class="collapsible-header ">Client</div>
      <div class="collapsible-body"><p></p></div>
    </li>
    <li>
    <li>
      <div class="collapsible-header">Year and Cost</div>
      <div class="collapsible-body">
        <p></p>
      <p>{{ $projects->pcost}}</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Status</div>
      <div class="collapsible-body"><p>Project successfully completed.</p></div>
    </li>
    
  </ul>

  </div>

</div><!-- end of row -->
</div><!-- end of container -->

@endsection