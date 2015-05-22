<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

/* use Illuminate\Http\Request; */

use App\ProjectCategories;

use Request;



class ProjectCategoriesController extends Controller {


	public function create(){
       
      return view('catform');

	}

	public function store(Request $request){



		//creates a project 

		$input=Request::all();

		$input['created_at'] = Carbon::now();


		ProjectCategories::create(['cat_name'=>$input['cat_name'],'created_at'=>$input['created_at']]);

		return view('catform');

		

		

		

	}

}
