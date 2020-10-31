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
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
    public function class(){
        return view('index1');
    }
}
