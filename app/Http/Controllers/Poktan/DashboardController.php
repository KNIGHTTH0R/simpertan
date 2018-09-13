<?php

namespace App\Http\Controllers\Poktan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function __construct()
	{
		# code...
	}
    public function dashboard()
    {
    	return view('poktan.dashboard');
    }
}
