<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Projectcategories extends Model {

	//specify the table to use

	protected $table = 'project_categories';



	//mass assignable fields

	protected $fillable = ['cat_name'];




	


}
