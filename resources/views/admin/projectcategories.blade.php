@extends('admin.dashboardlayout')


@section('content')

<div class="row" id="">
<h3 id="headtext" align="center">Project Categories</h3>
  <div class="container">
   <div class="col offset-m1 m9">


      <ul class="collection">
      @foreach($cat_list as $list)
        <li class="collection-item">{{ $list->cat_name }}  &nbsp 
       
        <a class="secondary-content" href="../projCategories/{{ $list->id }}/edit" >
        <i class="mdi-editor-border-color">Edit</i></a>
         &nbsp 
        <a class="secondary-content" href="../projCategories/{{ $list->id }}/delete" >
        <i class="mdi-action-delete">Delete</i></a>
         &nbsp 
        </li>
     

      @endforeach
       
      </ul>
    </div>
  

  </div><!-- end of container -->

</div>

@endsection