@extends('layout')

@section('content')

<div class="row" id="content">

<h2 align="center" id="headtext">Admin Dashboard</h2>
<hr id="line" />

<div class="col offset-s2 s8">
<div class="row">


 <div class="row">
    <div class="col s12" id="admintab">
      <ul class="tabs" >
        <li class="tab col s3"><a href="#test1">Categories</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Projects</a></li>
        <li class="tab col s3"><a href="#test3">Staff & Vacancies</a></li>
        <li class="tab col s3"><a href="#test4">Calendar</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
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

						<a href="/projCategories">

					<div class="col s6">

							

							 <div class="card-panel" id="adminbtn"> 
							   <div id="adminactions">
							   	
							   	 <i class="mdi-action-list large"></i>
							   	 <p>View Project Categories</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>



    </div>
    <div id="test2" class="col s12">

     <a href="/projects/create">

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
							   	
							   	 <i class="mdi-action-store large"></i>
							   	 <p>View Projects</p>
							   </div>
							 	
							 </div>
							 	
							

					</div>
				
			</a>

    	


    </div>
    <div id="test3" class="col s12">

			    <a href="/staff/create">

								<div class="col s6">

										

										 <div class="card-panel" id="adminbtn"> 
										   <div id="adminactions">
										   	
										   	 <i class="mdi-social-person-add large"></i>
										   	 <p>Add Staff</p>
										   </div>
										 	
										 </div>
										 	
										

								</div>
							
						</a>

						<a href="/staff">

								<div class="col s6">

										

										 <div class="card-panel" id="adminbtn"> 
										   <div id="adminactions">
										   	
										   	 <i class="mdi-social-people-outline large"></i>
										   	 <p>View Staff</p>
										   </div>
										 	
										 </div>
										 	
										

								</div>
							
						</a>

						 <a href="/Vacancy/create">

								<div class="col s6">

										

										 <div class="card-panel" id="adminbtn"> 
										   <div id="adminactions">
										   	
										   	 <i class="mdi-content-add large"></i>
										   	 <p>Post Vacancy</p>
										   </div>
										 	
										 </div>
										 	
										

								</div>
							
						</a>

						<a href="/Vacancy">

								<div class="col s6">

										

										 <div class="card-panel" id="adminbtn"> 
										   <div id="adminactions">
										   	
										   	 <i class="mdi-action-work large"></i>
										   	 <p>View Vacancies</p>
										   </div>
										 	
										 </div>
										 	
										

								</div>
							
						</a>
    	


    </div>
    <div id="test4" class="col s12">

		    <a href="/Calendar/create">

							<div class="col s6">

									

									 <div class="card-panel" id="adminbtn"> 
									   <div id="adminactions">
									   	
									   	 <i class="mdi-content-add large"></i>
									   	 <p>Add Calendar Event</p>
									   </div>
									 	
									 </div>
									 	
									

							</div>
						
					</a>

					<a href="Calendar/">

							<div class="col s6">

									

									 <div class="card-panel" id="adminbtn"> 
									   <div id="adminactions">
									   	
									   	 <i class="mdi-action-event large"></i>
									   	 <p>View Events</p>
									   </div>
									 	
									 </div>
									 	
									

							</div>
						
					</a>
		    	
  </div><!-- end of col s12 -->



 </div><!-- end of row -->

 </div><!-- end of row -->

  </div><!-- end of col s9 -->
  </div><!-- end of content -->




@endsection