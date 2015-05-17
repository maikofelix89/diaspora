@extends('layout')

@section('content')

<div class="container" >

 <div class="row" id="content">
<h2 align="center">Portfolio</h2>



@foreach ($projects as $project)

<div class="col m4">

<div class="card" id="projectcard">
            <div class="card-image" id="cardimage">
             <img src="{{ $project->pimage }}" class="responsive-img" />
              <span class="card-title"></span>
            </div>
            <div class="card-content">
           {{ $project->pname }}
              
            </div>
            <div class="card-action">
             <a class="btn waves-effect waves-light" href="projects/{{$project->id }}" type="submit" name="action">View More
    <i class="mdi-content-send right"></i>
  </a>
              
            </div>
          </div>
 

   


















</div>


@endforeach



 </div>



</div>


@endsection