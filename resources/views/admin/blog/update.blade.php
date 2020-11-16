@extends('layout.admin_master')
@section('title','Update Blog Page')
@section('content')
    <h1 class="h3 mb-1 text-gray-800">Update Blog</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Form</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                      <select name="category_id" class="form-control" id="">
                        <option value="">Select a category</option>
                        
                        <option value="">suususus</option> 
                        
                        
                      </select>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="title" value="" placeholder="Enter Blog Title">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="description" id="" cols="5" rows="5" placeholder="write a description about the blog..."></textarea>
                    </div>
                    <div class="form-group">
                      <input type="file" name="imageName" class="form-control">
                    </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection


{{-- => category page create
=> create table
=> create (a)
=> create category[form->name] --}}
