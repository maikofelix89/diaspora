<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model {

//mass assignable fields

	protected $fillable = ['event_image','event_name','from','to'];

}
