<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.blog');
    }
    public function create(){
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));
    }
    public function store(Request $request){
        // $extension = $request->imageName->extension();
        // $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
        // $fileName = $fileName.'.'.$extension;
        //return $fileName;
       //dd($request->all());
        $blog = new Blog();
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->description = $request->description;

        //image upload
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = str_slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $blog->imageName = $fileName;

            $request->imageName->move('public/uploads/blogs/',$fileName);
        }

        $blog->save();
        return redirect('admin/all-blog');
    }
}
