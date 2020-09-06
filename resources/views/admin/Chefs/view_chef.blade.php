@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Chefs</a> <a href="#" class="current">View Chefs</a> </div>
    <h1>Chefs</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Chefs</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Chefs ID</th>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Project Name</th>
                  <th>Chef Name</th>
                  <th>Contact Number</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($chefs as $chef)
                <tr class="gradeX">
                  <td class="center">{{ $chef->id }}</td>
                  <td class="center">{{ $chef->category_id }}</td>
                  <td class="center">{{ $chef->category_name }}</td>
                  <td class="center">{{ $chef->project_name }}</td>
                  <td class="center">{{ $chef->chef_name }}</td>
                  <td class="center">{{ $chef->chef_number }}</td>
                  <td class="center">{{ $chef->chef_email }}</td>
                  <td class="center">
                    @if(!empty($chef->image))
                    <img src="{{ asset('/assets/images/resource/'.$chef->image) }}" style="width:50px;">
                    @endif
                  </td>
                  <td class="center">
                    <a href="#myModal{{ $chef->id }}" data-toggle="modal" class="btn btn-success btn-mini">View</a> 
                    <a href="{{ url('/admin/edit-chef/'.$chef->id) }}" class="btn btn-primary btn-mini">Edit</a>
                    <a id="delChef" rel="{{ $chef->id }}" rel1="delete-chef" href="javascript:"  class="btn btn-danger btn-mini deleteRecord">Delete</a>
 
                        <div id="myModal{{ $chef->id }}" class="modal hide">
                          <div class="modal-header">
                            <button data-dismiss="modal" class="close" type="button">×</button>
                            <h3>{{ $chef->project_name }} Full Details</h3>
                          </div>
                          <div class="modal-body">
                            <p>Chef ID: {{ $chef->id }}</p>
                            <p>Category ID: {{ $chef->category_id }}</p>
                            <p>Project Name: {{ $chef->project_name}}</p>
                            <p>Chef Name: {{ $chef->chef_name }}</p>
                            <p>Chef Number: {{ $chef->chef_number }}</p>
                            <p>Chef E-mail: {{ $chef->chef_email }}</p>
                          </div>
                        </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
