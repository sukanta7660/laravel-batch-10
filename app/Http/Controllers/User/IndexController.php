<?php

namespace App\Http\Controllers\User;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
		//return DB::table('categories')->get();
		//return Category::all();
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
