<?php

namespace App\Http\Controllers\Poktan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Usulan;

class DashboardController extends Controller
{
	public function __construct()
	{
		# code...
	}
    public function index()
    {
		$user = auth()->user();
		$poktan_id = $user->poktan_id;

		// $items = Usulan::select('id')
		// 							->join()

    	return view('poktan.dashboard.index');
			// print_r($user->email);
    }
}
