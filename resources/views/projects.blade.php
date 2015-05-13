@extends('layout')

@section('content')

<div class="container" >

 <div class="row" id="content">
<h1 align="center">Projects</h1>



@foreach ($projects as $project)

<div class="col-md-4">
  <div class="thumbnail">

   

<img src="{{ $project->pimage }}" />

<div class="caption">


<h4 align="center">Name:{{ $project->pname }}</h4>

</div>


</div>


</div>


@endforeach



 </div>



</div>


@endsection