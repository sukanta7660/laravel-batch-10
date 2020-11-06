<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category');
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        //dd($request->all());
        //query builder
    // DB::table('categories')->insert([
    //     'name' => $request->name,
    //     'slug' => str_slug($request->name,'_'),
    // ]);

    //eloquent
    $category = new Category();
    $category->name = $request->name;
    $category->slug = str_slug($request->name);
    $category->save();
    return redirect()->to('admin/all-category');
    }
}
