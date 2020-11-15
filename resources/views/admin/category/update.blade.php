@extends('layouts.admin_master')
@section('title','Update Category Page')
@section('content')
<h1 class="h3 mb-1 text-gray-800">Update Category</h1>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Form</h6>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{action('Admin\CategoryController@update')}}">
                    {{-- @csrf --}}
                    {{csrf_field()}}
                <input type="hidden" name="tah" value="{{$category->id}}">
                    <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="{{$category->name}}" name="name" placeholder="Enter category name...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Save Changes
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