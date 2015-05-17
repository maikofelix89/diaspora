var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

	mix.sass([

		'materialize/sass/materialize.scss'




		]);
    mix.styles([

    	 
    	  'bower_components/animate.css/animate.min.css',

    	 
    	 
         
        
    	 'landing.css',
    	 
    	 'global.css',

    	 'portfolio.css'




    	]);
});
