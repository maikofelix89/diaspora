<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

/* use Illuminate\Http\Request; */

use App\Project;

use App\ProjectCategories;

use Request;



class ProjectController extends Controller {

	//lists all the projects

	public function index(){

		
		$projects = Project::all();;

		return view('projects', compact('projects'));



		
	}

	//shows the create project form

	public function create(){

		$project_categories = ProjectCategories::all();

		

		return view('projectform',compact('project_categories'));
	}

	public function store(Request $request){

		//creates a project 


		$destinationPath = 'images/';



       

        $image = Request::file('pimage')->move($destinationPath);

       

       


      
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		




		Project::create(['pname'=>$input['pname'],'cat_name'=>$input['cat_name'],'pimage'=>$image,'pcost'=>$input['pcost'],'pdesc'=>$input['pdesc']]);

		return redirect('projects');

		

		

		

	}


	public function show($id){

		//show a specific project
		
		$projects= Project::FindorFail($id);
		return view('showproject',compact('projects'));

	}


	public function board(){

		return view('admin.dashboard');
	}

}
