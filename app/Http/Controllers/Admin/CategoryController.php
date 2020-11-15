<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        //eloquent
        $categories =  Category::all();

        //query builder
        //return DB::table('categories')->select('name','slug','created_at')->get();
        return view('admin.category.category',compact('categories'));
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
    $category->slug = str_slug($request->name,'_');
    $category->save();
    return redirect()->to('admin/all-category');
    }

    public function update_page($id){
        $category = Category::find($id);
        return view('admin.category.update',compact('category'));
    }

    public function update(Request $request){
        
        $category = Category::find($request->tah);
        return $category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name,'_');
        $category->save();
        return redirect()->to('admin/all-category');
    }

    //delete
    public function delete($id){
        //query builder
        //DB::table('categories')->where('id',$id)->delete();

        //eloquent
        //Category::where('id',$id)->delete();
       $category =  Category::find($id);
       $category->delete();
        return redirect()->back();
    }

}

