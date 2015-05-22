<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Carbon\Carbon; //for time functions;

use App\Staff;  //include model

use Request;


class StaffController extends Controller {

	//show members of staff

	public function index(){

		$staff=Staff::all();

		return view('staff',compact('staff'));

	}


	public function create(){

		 return view('admin.addstaff');
	}


	public function store(Request $request){

		$destinationPath = 'images/';



       

        $image = Request::file('staffimage')->move($destinationPath);

		$input=Request::all();



		Staff::create(['name'=>$input['name'],'staffimage'=>$image,'position'=>$input['position'],
			'profqualif'=>$input['profqualif'],'acadqualif'=>$input['acadqualif'],'bio'=>$input['bio']]);

		return view('admin.addstaff');

		
	}

}
