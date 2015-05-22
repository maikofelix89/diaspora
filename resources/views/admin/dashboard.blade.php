@extends('layout')

@section('content')

<div class="row" id="content">

<h2 align="center" id="headtext">Admin Dashboard</h2>
<hr id="line" />

<div class="col offset-s2 s8">
<div class="row">

			 <a href="/projCategories/create">

					<div class="col s6">

							

							 <div class="card-panel" id="adminbtn"> 
							   <div id="adminactions">
							   	
							   	 <i class="mdi-action-note-add large"></i>
							   	 <p>Add Project Categories</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>

						<a href="/projects/create">

					<div class="col s6">

							

							 <div class="card-panel" id="adminbtn"> 
							   <div id="adminactions">
							   	
							   	 <i class="mdi-action-store large"></i>
							   	 <p>View Project Categories</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>

  </div>
  <div class="row">

			 <a href="/projCategories/create">

					<div class="col s6">

							

							 <div class="card-panel" id="adminbtn"> 
							   <div id="adminactions">
							   	
							   	 <i class="mdi-action-note-add large"></i>
							   	 <p>Add Projects</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>

			<a href="/projects">

					<div class="col s6">

							

							 <div class="card-panel" id="adminbtn"> 
							   <div id="adminactions">
							   	
							   	 <i class="mdi-action-note-add large"></i>
							   	 <p>View Projects</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>

			</div><!-- end of row -->



  </div><!-- end of col s9 -->

</div>


@endsection