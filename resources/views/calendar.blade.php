@extends('layout')

@section('content')


	<div class="row">
  <div class="container">

	 <h3 align="center" id="headtext"><i class="mdi-action-event"> Events</i></h3>

@Foreach($calendar as $events)
<div class="col m6">
 
  <div class="card-panel">

     <div class="row"> 
       <div class="col m6">
     

  
  <img src="{{ $events->event_image }}" height="120"/>

    

     </div>
     <div class="m6">
     <h5>{{ $events->event_name}}</h5>
      <p>Start Date : {{ $events->from}} </p>
     <p>End Date : {{ $events->to}} </p>
     </div>


  </div>


  </div>
  </div>


@endForeach
</div>
    </div>


@endsection