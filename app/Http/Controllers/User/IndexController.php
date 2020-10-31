<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('user.index');
    }

    public function about(){
		$dept = array("cse","eee","bba","civil","law");
		return view('user.about',compact('dept'));
	}
	public function contact(){
    	return view('user.contact');
    }
}
