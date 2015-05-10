@extends('layout')
@section('content')

<!-- header section -->

  <div class="row" id="header">

             <!-- 

              <div class="col-md-12 col-lg-12">

              <div class="intro">
                <div class="intro-message">
                <h1 id="pencilfont" class="animated bounceInLeft">Diaspora Design Ltd</h1>
                <h3 class="animated bounceInDown">Architectural and Construction firm</h3>

                </div>
              </div>

              </div>

              -->
             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     
      <div class="carousel-caption">
      <h1 id="pencilfont" class="animated bounceInLeft">Diaspora Design Ltd</h1>
       <h3 class="animated bounceInDown">Architectural Firm</h3>
      </div>
    </div>
    <div class="item">
      
      <div class="carousel-caption">
       <h1 id="pencilfont" class="animated bounceInLeft">Diaspora Design Ltd</h1>
       <h3 class="animated bounceInDown">Architectural Firm</h3>
       
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fa fa-chevron-circle-left fa-3x myleft" aria-hidden="true" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fa fa-chevron-circle-right fa-3x myleft" aria-hidden="true" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>

        <!-- about us section -->

       <!--
        <div class="row" id="about">
            <div class="container">
            <div class="col-md-12">


            <h1>Who are we?</h1>
            <hr class="intro-divider" id="line" />
            <p>Diaspora Design Build Ltd an Architectural and Construction firm built on strong work ethic, attention to design and strong client relationships, has been in practise since the year 2002.</p>



            </div>
            </div>

        </div>
        -->

        <!-- tiles section -->

        <div clas="row" id="tiles">
				               <div class="col-md-7 animated slideInLeft" id="id">
				                 <div class="idoverlayid">

				                     <div class="col-md-12" >

				                          
				                          <h2 id="servicetitle">Interior Design</h2>

				                          <div class="btncontainer">
				                           <div class="btn btn-primary  btn-lg" id="viewbtn">View</div>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

				                <div class="col-md-5 animated slideInRight" id="pm">
				                 <div class="idoverlaypm">

				                     <div class="col-md-12" >

				                          
				                          <h2 id="servicetitle">Project Management</h2>

				                          <div class="btncontainer">
				                           <div class="btn btn-primary  btn-lg" id="viewbtn">View</div>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

				               <div class="col-md-5" id="bp">
				                 <div class="idoverlaybp">

				                     <div class="col-md-12" >

				                          
				                          <h2 id="servicetitle">Business Plans</h2>

				                          <div class="btncontainer">
				                           <div class="btn btn-primary  btn-lg" id="viewbtn">View</div>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>

               
				               <div class="col-md-7" id="arc">
				                 <div class="idoverlayarc">

				                     <div class="col-md-12" >

				                          
				                          <h2 id="servicetitle">Architectural Services</h2>

				                          <div class="btncontainer">
				                           <div class="btn btn-primary  btn-lg" id="viewbtn">View</div>
				                          </div>


				                       
				                     </div>
				                     </div>
				               </div>
				                

        </div>



@endsection