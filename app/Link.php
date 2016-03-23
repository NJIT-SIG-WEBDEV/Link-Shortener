<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{	
	public $timestamps = false;
	
	//queries the database for a url and returns it
	static public function findUrl($linkCode)
	{
		return Link::where('code', $linkCode)->first()->url;
	}
}
