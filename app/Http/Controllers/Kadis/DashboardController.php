<?php

namespace App\Http\Controllers\Kadis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
      auth()->user()->hasRole('ROLE_KADIS');
    }

    public function index()
    {
    	return view('kadis.dashboard');
    }
}
