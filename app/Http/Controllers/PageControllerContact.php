<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageControllerContact extends Controller
{
	
	public function contact()
	{
		return view('pages/contact');
	}

}
