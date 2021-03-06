<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('admin.blog.blog',compact('blogs'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));
    }
    public function store(Request $request){

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'imageName' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

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

    public function delete($id){
        $blog = Blog::find($id);
        $path = public_path('uploads/blogs/'.$blog->imageName);
        if(file_exists($path)){
            unlink($path);
        }
        $blog->delete();
        return redirect()->back();
    }

    public function update_page($id){
        $blog = Blog::find($id);
        $categories = Category::all();
        return view('admin.blog.update',compact('blog','categories'));
    }

    public function update(Request $request){
        $blog = Blog::find($request->id);
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if($request->hasFile('imageName')){
            
            $path = public_path('uploads/blogs/'.$blog->imageName);
        if(file_exists($path)){
            unlink($path);
        }

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
