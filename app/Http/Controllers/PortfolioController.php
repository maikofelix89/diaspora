<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class PortfolioController extends Controller {

  //loads the portfolio page

	public function index(){

		return view('portfolio');
	}

}
