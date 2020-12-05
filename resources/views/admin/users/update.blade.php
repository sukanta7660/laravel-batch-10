@extends('layouts.admin_master')
@section('title','Update User Type Page')
@section('content')
<h1 class="h3 mb-1 text-gray-800">Update User Type</h1>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Form</h6>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{action('Admin\UserController@update')}}">
                    {{-- @csrf --}}
                    {{csrf_field()}}
                <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group">
                        <select name="userType" class="form-control">
                            <option value="">Select a User type</option>
                            <option value="Admin" @if($user->userType == 'Admin') selected @endif>Admin</option>
                            <option value="User" @if($user->userType == 'User') selected @endif>User</option>
                        </select>
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