<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Project;



class LandingController extends Controller {

	//handles the landing page

	public function index()
	{
	     $projects = Project::all()->take(3);

		return view('welcome', compact('projects'));
		
	}

}
