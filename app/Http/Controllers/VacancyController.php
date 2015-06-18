<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Vacancy;

use Request;



class VacancyController extends Controller {

	//show vacancies

	public function index(){

		$vacancies = Vacancy::all();

		return view('vacancies',compact('vacancies'));

	}


	//post a vacancy

	public function create(){

		return view ('admin.addvacancy');
	}


	//make entry into database



	public function store(Request $request){

		$input=Request::all();


		

		//return $input;


		Vacancy::create($input);





	}

	public function show($id){

		$vacancydet = Vacancy::Findorfail($id);



		return view ('vacancydetails',compact('vacancydet'));
	}

	public function edit($id ,Request $request){
		
		 $specificvacancy=Vacancy::Findorfail($id);

		 return $specificvacancy;

		

         //return view ('admin.editvacancy', compact('specificvacancy'));


	}

	public function adminindex(){

		$vacancies = Vacancy::all();

		

		return view ('admin.vacancylist',compact($vacancies));
	}

}
