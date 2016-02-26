<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{	
	protected $primaryKey = 'linkId';

	//queries the database for a url and returns it
	static public function findUrl($linkId)
	{
		return Link::find($linkId)->url;
	}
}
