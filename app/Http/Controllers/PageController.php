<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
	//about page
	public function about()
	{
		return view('pages/about');
		//return view('pages/contact');
	}
	
	//contact page
	public function contact()
	{
		//return view('pages/about');
		return view('pages/contact');
	}

}

