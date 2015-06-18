<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Diaspora Design Build</title>

    
  

   

    <!-- materialize css -->
    

    {!! HTML::style('css/materialize.css') !!} 



    <!-- custom css -->
    

    {!! HTML::style('css/all.css') !!} 



    

    

    <!-- font awesome -->
     {!! HTML::style('bower_components/fontawesome/css/font-awesome.min.css') !!} 

    
    

    

    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- jasny bootstrap css -->
    {!! HTML::style('bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') !!} 
   

   
   <style type="text/css">

    header, main, footer {
    padding-left: 240px;
  }

  @media only screen and (max-width : 992px) {
    header, main, footer {
      padding-left: 0;
    }
  }



   </style> 
    

   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="mobile-demo">

  <div class="wrapper">
  

  <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Diaspora Design</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">About Us</a></li>
        <li><a href="">Services</a></li>
        <li><a href="/projects">Portfolio</a></li>
        <li><a href="/Calendar">Calender</a></li>
        <li><a href="/Vacancies">Vacancies</a></li>
        <li><a href="/contactus">Contact Us</a></li>
        <li><a href="/staff">Staff</a></li>
      </ul>
      
      <ul id="slide-out" class="side-nav fixed">
   
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Categories <i class="mdi-action-list large"></i></a>
          <div class="collapsible-body" id="sidebody">
            <ul>
              <li><a href="/projCategories/create">Create</a></li>
              <li><a href="/projCategories">View</a></li>
             
            </ul>`
          </div>
        </li>
      </ul>
    </li>
    
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Projects<i class="mdi-action-store large"></i></a>
          <div class="collapsible-body" id="sidebody">
            <ul>
              <li><a href="/projects/create">Create</a></li>
              <li><a href="/projects">View</a></li>
             
            </ul>`
          </div>
        </li>
      </ul>
    </li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Staff <i class="mdi-social-people-outline large"></i></a>
          <div class="collapsible-body" id="sidebody">
            <ul>
              <li><a href="/staff/create">Create</a></li>
              <li><a href="/staff">View</a></li>
             
            </ul>`
          </div>
        </li>
      </ul>
    </li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Vacancies<i class="mdi-action-work"></i></a>
          <div class="collapsible-body" id="sidebody">
            <ul>
              <li><a href="/Vacancy/create">Create</a></li>
              <li><a href="/Vacancy">View</a></li>
             
            </ul>`
          </div>
        </li>
      </ul>
    </li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header">Calendar <i class="mdi-action-event"></i></a>
          <div class="collapsible-body" id="sidebody">
            <ul>
              <li><a href="/Calendar/create">Create</a></li>
              <li><a href="/Calendar">View</a></li>
             
            </ul>`
          </div>
        </li>
      </ul>
    </li>
    
   
   
    
  </ul>

    </div>
  </nav>
  </div>

 <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="large mdi-navigation-menu"></i></a>
  
  
        

	@yield('content')
  <!-- footer section -->

  <div class="push"></div>

   

    <!-- jQuery (necessary for Materialize JavaScript plugins) -->
   

    <!--   {!! HTML::script('../bower_components/jquery/dist/jquery.min.js'); !!} -->

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
   

   <!-- material js -->
   {!! HTML::script('bower_components/materialize/dist/js/materialize.min.js'); !!}
   

  
    <!-- scrolling js -->
   

    {!! HTML::script('js/scrolling.js'); !!}




    <!-- jasny bootstrap -->
  {!! HTML::script('bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js'); !!}
    
   <script type="text/javascript">
    $(".button-collapse").sideNav();
    // Hide sideNav
    $('.button-collapse').sideNav('hide');
   

    $(document).ready(function(){

    $('.collapsible').collapsible({
      accordion : false
    });

     $('select').material_select();


      $('.datepicker').pickadate({
       selectMonths: true, // Creates a dropdown to control month
       selectYears:5, // Creates a dropdown of 15 years to control year
       formatSubmit: 'yyyy-mm-dd',
        hiddenName: true
       
       });
        

     


  });

 
        

   </script>


 
  </div><!-- end of wrapper -->

  </body>
</html>