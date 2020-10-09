<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('pages.welcome');
    }

    public function about(){
		$dept = array("cse","eee","bba","civil","law");
		return view('pages.about',compact('dept'));
	}
}
