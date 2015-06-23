@extends('admin.dashboardlayout')

@section('content')






<div class="row" id="">
<h3 id="headtext" align="center">Projects</h3>
  <div class="container">
  


     
     @Foreach($projects as $list)
      <div class="col offset-m1 m5">
      <div class="card-panel">
      <div class="row">
        <div class="col m6">
            <img src="../{{$list->pimage}}" height="100" width="100" />
        </div>
        <div class="col m6">
         {{ $list->id }} .{{ $list->pname }}

       
       <div class="card-action">
             <a  href="../projects/{{ $list->id }}/edit" >
        <i class="mdi-editor-border-color">Edit</i></a>
       
        <a  href="../projects/{{ $list->id }}/addphoto" >
        <i class="mdi-content-add">Add Photos</i></a>
            </div>
       
        
       
     </div>
     </div><!-- end of row -->
     </div><!-- end of panel -->
        </div><!-- end of column -->
      @endforeach
       
      
   
  

  </div><!-- end of container -->
<div class="row">
<div class="col offset-m5">
{!! $projects->render() !!}
</div>
</div>

</div>




@endsection