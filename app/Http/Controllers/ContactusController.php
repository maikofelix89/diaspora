<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactusController extends Controller {

	//show contact us form

	public function index(){

		return view('contactus');
	}

}
