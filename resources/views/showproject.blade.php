@extends('layout')

@section('content')
<div class="container">

<div class="row" id="projectdetails">
<h2 align="center" id="headtext">{{  $projects->pname  }}</h2>
<div class="col s6">

<div class="card-panel">
<img src="../{{ $projects->pimage}}" class="responsive-img materialboxed"/>


</div>

 

 

 
<div class="btn" id="morebutton">More Photos</div>


 



</div>

<div class="col s6">


  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active">About Project </div>
      <div class="collapsible-body"><p>{{ $projects->pdesc}}</p></div>
    </li>
    <li>
      <div class="collapsible-header ">Client</div>
      <div class="collapsible-body"><p> {{$projects->client}}</p></div>
    </li>
    <li>
    <li>
      <div class="collapsible-header">Year and Cost</div>
      <div class="collapsible-body">
        <p></p>
      <p>Sh {{ number_format($projects->pcost) }}</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">Status</div>
      <div class="collapsible-body"><p>Project successfully completed.</p></div>
    </li>
    
  </ul>

  </div>

</div><!-- end of row -->
<div class="row" id="morephotos" style="display:none">
<div class="divider"></div>
<h4 align="center" id="headtext">More Photos</h4>

 @foreach($photos as $photo)
 <div class="col m4">
   <div class="card" id="sectioncard">
    <div class="card-image">
   <img src="../{{$photo->image}}" />
   </div>
   
    <h6 align="center">{{$photo->section}}</h6>
   
    <div class="card-content">
   
    <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#{{ $photo->id }}">View</a>
    </div>

   </div>
   <div id="{{ $photo->id }}" class="modal mymodal">
    <div class="modal-content">
    <h4 align="center" id="headtext">{{$photo->section}}</h4>
      <img src="../{{$photo->image}}" height="270" width="auto"/>
    </div>
    <h4 align="center" id="headtext">Description</h4>

   {{$photo->description}}
   
  
  </div>
   </div><!-- end of col m4 -->
   <!-- Modal Structure -->
   
  

 @endforeach
</div>
</div>




@endsection