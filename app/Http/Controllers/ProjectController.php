<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

/* use Illuminate\Http\Request; */

use App\Project;

use Request;



class ProjectController extends Controller {

	//lists all the projects

	public function index(){

		
		$projects = Project::all();;

		return view('projects', compact('projects'));



		
	}

	//shows the create project form

	public function create(){

		return view('projectform');
	}

	public function store(Request $request){

		//creates a project 


		$destinationPath = 'images/';



       

        $image = Request::file('pimage')->move($destinationPath);

       

       


      
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		




		Project::create(['pname'=>$input['pname'],'pimage'=>$image,'pcost'=>$input['pcost'],'pdesc'=>$input['pdesc']]);

		return redirect('projects');

		

		

		

	}


	public function show($id){

		//show a specific project
		
		$projects= Project::FindorFail($id);
		return view('showproject',compact('projects'));

	}

}
