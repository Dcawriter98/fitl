<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

//not needed as I fiexed code on the Routes.php page

class PageControllerContact extends Controller
{
	
	public function contact()
	{
		return view('pages/contact');
	}

}
