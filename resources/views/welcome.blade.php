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


                  <h1>About Us</h1>
                  <hr class="intro-divider" id="line" />

                  <p>Diaspora Design Build Ltd an Architectural and Construction firm 
                  built on strong work ethic, attention to design and strong client relationships, 
                  has been in practise since the year 2002.</p>



            </div>
            </div>

        </div>
    

        <!-- tiles section -->

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
<script type="text/javascript">
  
    $(document).ready(function(){
      $('.slider').slider({

        full_width: true,
        transition: 0.5

      });
    });
</script>


@endsection