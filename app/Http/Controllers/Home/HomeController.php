<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

use App\Http\Models\Demo as DemoModel;

/**
* Home Controller
*/
class HomeController extends Controller
{
	
	function index()
	{
		$DemoModel = new DemoModel();
		$res = $DemoModel->getData();

		return view('home.index',['data'=>$res]);
	}
	
	function user()
	{
		echo "user";
	}
}