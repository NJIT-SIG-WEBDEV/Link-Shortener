<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{

	public function create()
	{

        // insert new entry into Link table
        $link = new Link;
        $link->url = request()->url;
        $link->save();

        //create the code for new entry
        $link->code = base_convert($link->id, 10, 36);
        $link->save();

        return "Here's your new url code: " . $link->code;

	}

    public function redirect($linkCode)
    {
    	//pull url from database
    	$url = Link::findUrl($linkCode);
    	return redirect($url);
    }
}
