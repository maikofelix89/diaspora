<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

//use Illuminate\Http\Request;

use App\Project;

use App\ProjectCategories;

use Request;

use App\Photos;



class ProjectController extends Controller {

	//lists all the projects

	public function index(){

		
		$projects = Project::all();



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

		
        $project_categories = ProjectCategories::all();



		Project::create(['pname'=>$input['pname'],'cat_name'=>$input['cat_name'],'pimage'=>$image,'pcost'=>$input['pcost'],'pdesc'=>$input['pdesc']]);

		return view('projectform',compact('project_categories'));

		

		

		

	}


	public function show($id){

		//show a specific project
		
		$projects= Project::FindorFail($id);
		
		$photos = Photos::where('projid', '=',$projects->id)->get();

		
		return view('showproject',compact('projects','photos'));

	}

	public function edit($id){

		$project_categories = ProjectCategories::all();


		$project=Project::findorFail($id);

         return view ('admin.editproject', compact('project','project_categories'));
	}

	public function update($id, Request $request){

		$specificproj=Project::findorFail($id);

		$input=Request::all();

		$destinationPath = 'images/';

		$input['published_at'] = Carbon::now();

		$image = Request::file('pimage')->move($destinationPath);


		$specificproj->pname=$input['pname'];
		$specificproj->pimage=$image;
		$specificproj->pcost=$input['pcost'];
		$specificproj->pdesc=$input['pdesc'];
		$specificproj->cat_name=$input['cat_name'];


		//return $specificproj;

		$specificproj->save();

		

		return redirect('projects');


    }


  public function destroy($id){
  	$projects = Project::all();
  	$project = Project::findorFail($id);
  	$project->delete();
  	

     return view('admin.dashboardlayout');
		

  	


  }
	


	public function board(){

		return view('admin.dashboard');
	}
	public function newboard(){

		return view('admin.dashboardlayout');
	}


	public function adminprojlist(){
		  $projects=Project::all();
		 return  view('admin.adminprojlist',compact('projects'));

	}

	public function addphoto($id){

		$project = Project::findorFail($id);



		

		return view('admin.addprojectphotos',compact('project'));


	}

	public function savephoto(Request $request){

		$destinationPath = 'images/';



       

        $image = Request::file('image')->move($destinationPath);

       

       


      
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		
        $photo = Photos::all();

      



		Photos::create(['projid'=>$input['projid'],'section'=>$input['section'],'description'=>$input['description'],'image'=>$image]);

		  $projects=Project::all();
		 return  view('admin.adminprojlist',compact('projects'));



	}

}
