<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

/* use Illuminate\Http\Request; */

use App\Project;

use Request;



class ProjectController extends Controller {

	//

	public function show(){

		
		$projects = Project::all();;

		return view('projects', compact('projects'));



		
	}

	public function index(){

		return view('admin.projectform');
	}

	public function store(Request $request){


		$destinationPath = 'images/';



        $imagename = Request::file('pimage');

        $location = Request::file('pimage')->move($destinationPath);

        $image=$destinationPath.$imagename;

       


      
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		return $imagename;




		//Project::create(['pname'=>$input['pname'],'pimage'=>$image]);

		//return redirect('projects');

		

		

		

	}

}
