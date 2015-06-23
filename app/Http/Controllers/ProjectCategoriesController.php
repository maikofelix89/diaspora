<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

/* use Illuminate\Http\Request; */

use App\ProjectCategories;

use Request;





class ProjectCategoriesController extends Controller {


	public function index(){

        $cat_list= ProjectCategories::all();
        $user= \Auth::user();

		return view('admin.projectcategories',compact('cat_list','user'));
	}


	public function create(){
	   $user= \Auth::user();
       
      return view('catform',compact('user'));

	}

	public function store(Request $request){



		//creates a project 

		$input=Request::all();

		$input['created_at'] = Carbon::now();


		ProjectCategories::create(['cat_name'=>$input['cat_name'],'created_at'=>$input['created_at']]);

		return view('catform');

		

		

		

	}

	public function edit($id){
	   $user= \Auth::user();

       $categories=ProjectCategories::findorFail($id);




	return view ('admin.editprojcat', compact('categories','user'));


	}


	public function update($id , Request $request ){
		  $user= \Auth::user();

		$input=Request::all();


		$categories=ProjectCategories::findorFail($id);

		
        $categories->cat_name=$input['cat_name'];
		
		$categories->save();

	    $cat_list= ProjectCategories::all();

		return view('admin.projectcategories',compact('cat_list','user'));

	}


	public function show($id){
		 $user= \Auth::user();

		$categories=ProjectCategories::findorFail($id);

		return view('admin.projcatlist',compact('categories','user'));
	}

}
