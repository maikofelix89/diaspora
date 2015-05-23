@extends('layout')
@section('content')

<!-- header section -->

  <div class="row" id="header">

    <div class="intro">

     <h1 id="pencilfont" class="animated bounceInLeft">Diaspora Design Build</h1>
       <h3 class="animated bounceInDown">Architectural Firm</h3>



    </div>

    

  </div>

        <!-- about us section -->

      
        <div class="row" id="about">
            <div class="container">
                   <div class="col-md-12">


                  <h2 id="headtext">About Us</h2>
                  <hr class="intro-divider" id="line" />

                  <p>Diaspora Design Build Ltd an Architectural and Construction firm 
                  built on strong work ethic, attention to design and strong client relationships, 
                  has been in practise since the year 2002.</p>



            </div>
            </div>

        </div>

        <div class="row" id="services">
        <div class="container">
		           <h2 align="center" id="headtext">Services</h2>
		            <hr class="intro-divider" id="line" />
		        <div class="col m4">
				        <div class="card" id="servicescard">
				            <div class="card-image" id="cardimage">
				             <img src="../images/arc.jpg" class="responsive-img" />
				              <span class="card-title"></span>
				            </div>
				            <div class="card-content">
				                 Architectural services
				              
				            </div>
				           
				          </div><!--- end of services card -->
				          </div>

				            <div class="col m4">

				           <div class="card" id="servicescard">
				            <div class="card-image" id="cardimage">
				             <img src="../images/plan.jpg" class="responsive-img" />
				              <span class="card-title"></span>
				            </div>
				            <div class="card-content">
				                Master planning
				              
				            </div>
				           
				          </div><!--- end of services card -->
				          </div>

				            <div class="col m4">

				           <div class="card" id="servicescard">
				            <div class="card-image" id="cardimage">
				             <img src="../images/pm.jpg" class="responsive-img" />
				              <span class="card-title"></span>
				            </div>
				            <div class="card-content">
				               Project planning and appraisal
				              
				            </div>
				           
				          </div><!--- end of services card -->
				          </div>
				          </div>

		       
       </div><!-- end of container -->

        </div><!-- end of services row -->

        <div class="row" id="projectsshow">
        <h2 align="center" id="headtext">Portfolio</h2>
        <div class="container">

        @foreach($projects as $project)

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

        <div class="col offset-s4">

          <a class="btn waves-effect waves-light" href="/projects" type="submit" name="action">All Projects
			          <i class="mdi-content-send right"></i></a>

		 </div>
        
      </div>

        </div>
    

        <!-- tiles section -->

        <!--

        <div class="row" id="tiles">

				               <div class="col m7 animated slideInLeft" id="id">
				                 <div class="idoverlayid">

				                     <div class="col m12" >

				                          
				                          <h2 id="servicetitle">Interior Design</h2>

				                          <div class="btncontainer">
				                          <a class="waves-effect waves-light btn-large">Button</a>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

				                <div class="col m5 animated slideInRight" id="pm">
				                 <div class="idoverlaypm">

				                     <div class="col m12" >

				                          
				                          <h2 id="servicetitle">Project Management</h2>

				                          <div class="btncontainer">
				                           <a class="waves-effect waves-light btn-large">View</a>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

				               <div class="col m5" id="bp">
				                 <div class="idoverlaybp">

				                     <div class="col m12" >

				                          
				                          <h2 id="servicetitle">Business Plans</h2>

				                          <div class="btncontainer">
				                         <a class="waves-effect waves-light btn-large">View</a>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

               
				               <div class="col m7" id="arc">
				                 <div class="idoverlayarc">

				                     <div class="col m12" >

				                          
				                          <h2 id="servicetitle">Architectural Services</h2>

				                          <div class="btncontainer">
				                          <a class="waves-effect waves-light btn-large">View</a>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>


				                

        </div>
         -->
<script type="text/javascript">
  
    $(document).ready(function(){
      $('.slider').slider({

        full_width: true,
        transition: 0.5

      });
    });
</script>


@endsection