<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use Carbon\Carbon; //for time functions;

use App\Calendar;  //include model

use Request;

class CalendarController extends Controller {

	//show calendar

	public function index(){
		$calendar = Calendar::all();;

		return view ('calendar',compact('calendar'));
	}

	//create a calendar event

	public function create(){

		return view ('admin.addcalendar');
	}


	//store in database

	public function store(Request $request){
		$destinationPath = 'images/';
        $image = Request::file('event_image')->move($destinationPath);

        $input=Request::all();

        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

		
        $calendar = Calendar::all();



		Calendar::create(['event_image'=>$image,'event_name'=>$input['event_name'],'from'=>$input['from'],'to'=>$input['to']]);

		return view('admin.addcalendar');

		

	}

}
