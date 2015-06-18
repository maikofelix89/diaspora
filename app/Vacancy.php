<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vacancies';

	//
	protected $fillable = ['job_title','positions','job_code','job_location',
	'job_summary','job_duties','job_specs','deadline'];

}
