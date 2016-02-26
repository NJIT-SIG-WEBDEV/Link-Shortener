<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{

    public function redirect($linkId)
    {
    	//pull url from database
    	$url = Link::findUrl($linkId);
    	return redirect($url);
    }
}
