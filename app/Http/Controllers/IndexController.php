<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('pages.welcome');
    }

    public function about(){
		$dept = array("cse","eee","bba","civil","law");
		return view('pages.about',compact('dept'));
	}

	public function calcu1()
	{
		return view('example');
	}
	
	public function extend()
	{
		return view('ab');
	}
}
