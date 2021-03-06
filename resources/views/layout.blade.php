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



    <!-- jQuery (necessary for Materialize JavaScript plugins) -->
   

      <!-- {!! HTML::script('bower_components/jquery/dist/jquery.min.js'); !!}  -->

      <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>



     <!-- scrolling js -->
   

   <!-- {!! HTML::script('js/scrolling.js'); !!} -->

    

    <!-- font awesome -->
     {!! HTML::style('bower_components/fontawesome/css/font-awesome.min.css') !!} 

    
    

    

    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- jasny bootstrap css -->
    {!! HTML::style('bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') !!} 
   

   
    
    

   


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
  <nav id="mynavbar">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Diaspora Design</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">About Us</a></li>
        <li><a href="">Services</a></li>
        <li><a href="/projects">Portfolio</a></li>
        <li><a href="/Calendar">Calender</a></li>
        <li><a href="/Vacancy">Vacancies</a></li>
        <li><a href="/contactus">Contact Us</a></li>
        <li><a href="/staff">Staff</a></li>
      </ul>
      
      <ul class="side-nav" id="">
       <li><a href="">About Us</a></li>
        <li><a href="">Services</a></li>
        <li><a href="/projects">Portfolio</a></li>
        <li><a href="/Calendar">Calender</a></li>
        <li><a href="/Vacancy">Vacancies</a></li>
        <li><a href="/contactus">Contact Us</a></li>
        <li><a href="/staff">Staff</a></li>
      </ul>
    </div>
  </nav>
  </div>

	@yield('content')
  <!-- footer section -->

  <div class="push"></div>

    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Diaspora Design</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contacts</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Portfolio</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Team</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 Diaspora Design Ltd
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>

    
   

   <!-- material js -->
   {!! HTML::script('bower_components/materialize/dist/js/materialize.min.js'); !!}


   <!-- fluxbox slider -->
   {!! HTML::script('bower_components/Flux-Slider/js/flux.min.js'); !!}
  
   

  
   




    <!-- jasny bootstrap -->
  {!! HTML::script('bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js'); !!}
    
   <script type="text/javascript">
   

    $(document).ready(function(){

    $('.collapsible').collapsible({
      accordion : false
    });

    $(function(){
    window.myFlux = new flux.slider('#slider', {
        autoplay: false,
        pagination: true
    });
});

     $('select').material_select();


      $('.datepicker').pickadate({
       selectMonths: true, // Creates a dropdown to control month
       selectYears:5, // Creates a dropdown of 15 years to control year
       formatSubmit: 'yyyy-mm-dd',
        hiddenName: true
       
       });

       $('.modal-trigger').leanModal();

       $('#morebutton').click(function(){
          $('#morephotos').toggle();

       });
        

     


  });

 
        

   </script>


 
  </div><!-- end of wrapper -->

  </body>
</html>