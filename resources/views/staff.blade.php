@extends('layout')

@section('content')

<div class="container">

<h3 align="center" id="headtext">Meet our staff</h3>
<hr id="line" />

<div class="row" id="dblstaff">




@foreach($staff as $employees)



<div class="col s4">

      <div class="card">
        <div class="card-image waves-effect waves-block waves-light" id="staffimage">
          <img class="activator" src="../{{ $employees->staffimage}}">
        </div>
        <div class="card-content">
          <span class="card-title activator" id="headtext">{{$employees->name}} <i class="mdi-action-open-in-new right"></i></span>
          <p>{{ $employees->position}}</p>
        </div>
        <div class="card-reveal">
          <span class="card-title" id="headtext">Bio<i class="mdi-navigation-close right"></i></span>
          <p>{{$employees->bio}}</p>
        </div>
      </div>
            
</div>

@endforeach
</div>
</div><!-- end of container -->
@endsection