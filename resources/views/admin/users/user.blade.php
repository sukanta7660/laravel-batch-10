@extends('layouts.admin_master')
@section('title','All-User')
@section('content')
<h1 class="h3 mb-1 text-gray-800">All Users</h1><br>
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{action('Admin\CategoryController@create')}}" class="btn btn-sm btn-primary">Create</a></h6>
            </div>
            <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">User Type</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              
                  <tbody>
                @foreach ($users as $row)
                    <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->userType}}</td>
                  <td class="text-right">
                  <a href="{{action('Admin\UserController@update_type',['id' => $row->id])}}" title="userType update" class="btn btn-sm btn-danger">Update UserType</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
@endsection
