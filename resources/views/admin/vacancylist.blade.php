@extends('admin.dashboardlayout')


@section('content')

<div class="row" id="">
<h3 id="headtext" align="center">Vacancy List</h3>
  <div class="container">


      <ul class="collection">

      @foreach($vacancies as $list)
      
        <li class="collection-item">{{ $list->job_title }}  &nbsp 
       
        <a class="secondary-content" href="../Vacancy/{{ $list->id }}/edit" >
        <i class="mdi-editor-border-color">Edit</i></a>
         &nbsp 
        <a class="secondary-content" href="../Vacancy/{{ $list->id }}/delete" >
        <i class="mdi-action-delete">Delete</i></a>
         &nbsp 

        </li>
     

      @endforeach
       
      </ul>
  

  </div><!-- end of container -->

</div>

@endsection