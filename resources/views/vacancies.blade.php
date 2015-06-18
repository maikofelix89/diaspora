@extends('layout')

@section('content')


 <div class="row">
  <h2 align="center" id="headtext">Vacancies</h2>

  @Foreach($vacancies as $vacancy)
  <div class="col m4">
  <a href="../Vacancy/{{$vacancy->id}}">
    <div class="card-panel">
   
      <h5>Position : {{$vacancy->job_title}}</h5>
      <p>No of positions : {{$vacancy->positions}}</p>
       <p>Posted on : {{$vacancy->created_at}}</p>
      <p>Deadline : {{$vacancy->deadline}}</p>
    </div>
    </a>
  </div>

  @endForeach
 </div>



@endsection