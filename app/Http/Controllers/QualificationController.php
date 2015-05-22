<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QualificationController extends Controller {

	//form to add qualification

	public function create(){
		return view('addacademic');
	}

}
