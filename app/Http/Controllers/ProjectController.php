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

		
		$projects = Project::paginate(3);

           

		return view('projects', compact('projects'));



		
	}

	//shows the create project form

	public function create(){

		$project_categories = ProjectCategories::all();

		$user= \Auth::user();

		

		return view('projectform',compact('project_categories','user'));
	}

	public function store(Request $request){

		//creates a project 


		$destinationPath = 'images/';



       

        $image = Request::file('pimage')->move($destinationPath);

       

       


      
		$input = Request::all();

		$input['published_at'] = Carbon::now();

		
        $project_categories = ProjectCategories::all();

        $user= \Auth::user();



		Project::create(['pname'=>$input['pname'],'cat_name'=>$input['cat_name'],'client'=>$input['client'],'pimage'=>$image,'pcost'=>$input['pcost'],'pdesc'=>$input['pdesc']]);

		return view('projectform',compact('project_categories','user'));

		

		

		

	}


	public function show($id){

		//show a specific project
		
		$projects= Project::FindorFail($id);
		
		$photos = Photos::where('projid', '=',$projects->id)->get();

		
		return view('showproject',compact('projects','photos'));

	}

	public function edit($id){

		  $user= \Auth::user();

		$project_categories = ProjectCategories::all();


		$project=Project::findorFail($id);

         return view ('admin.editproject', compact('project','project_categories','user'));
	}

	public function update($id, Request $request){

		$specificproj=Project::findorFail($id);

		$input=Request::all();

		$destinationPath = 'images/';

		$input['published_at'] = Carbon::now();

		$image = Request::file('pimage')->move($destinationPath);


		$specificproj->pname=$input['pname'];
		$specificproj->client=$input['client'];
		$specificproj->pimage=$image;
		$specificproj->pcost=$input['pcost'];
		$specificproj->pdesc=$input['pdesc'];
		$specificproj->cat_name=$input['cat_name'];


		//return $specificproj;

		$specificproj->save();

		

		return redirect('projects');


    }


  public function destroy($id){
  	$user= \Auth::user();
  	$projects = Project::all();
  	$project = Project::findorFail($id);
  	$project->delete();
  	

     return view('admin.dashboardlayout');
		

  	


  }
	


	public function board(){

		return view('admin.dashboard');
	}
	public function newboard(){

		$user= \Auth::user();

		return view('admin.dashboardlayout',compact('user'));
	}


	public function adminprojlist(){
		$user= \Auth::user();
		  $projects=Project::paginate(4);
		 return  view('admin.adminprojlist',compact('projects','user'));

	}

	//add more photos form

	public function addphoto($id){
		$user= \Auth::user();

		$project = Project::findorFail($id);



		

		return view('admin.addprojectphotos',compact('project','user'));


	}

	//adds more photos to a section

	public function savephoto(Request $request){
		$user= \Auth::user();

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
