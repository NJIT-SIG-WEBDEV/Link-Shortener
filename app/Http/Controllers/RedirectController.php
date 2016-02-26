<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{
    //
    public function redirect($linkId)
    {
    	return 'The link ID you entered was: ' . $linkId;

    	//pull id from database

    	
    }
}
