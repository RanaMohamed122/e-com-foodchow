@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Chefs</a> <a href="#" class="current">View Chefs' Blogs</a> </div>
    <h1>Chefs' Blog</h1>
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
                  <th>Blog ID</th>
                  <th>Chefs ID</th>
                  <th>Blog Title</th>
                  <th>Blog Brief</th>
                  <th>Blog Body</th>
                  <th>Image</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($chefsBlogs as $chefsBlog)
                <tr class="gradeX">
                  <td class="center">{{ $chefsBlog->id }}</td>
                  <td class="center">{{ $chefsBlog->chef_id }}</td>
                  <td class="center">{{ $chefsBlog->blog_title }}</td>
                  <td class="center">{{ $chefsBlog->blog_brief }}</td>
                  <td class="center">{{ $chefsBlog->blog_body }}</td>

                  <td class="center">
                    @if(!empty($chefsBlog->image))
                    <img src="{{ asset('/assets/images/resource/'.$chefsBlog->image) }}" style="width:50px;">
                    @endif
                  </td>
                  <td class="center">
                    <a href="{{ url('/admin/edit-chef-blog/'.$chefsBlog->id) }}" class="btn btn-primary btn-mini">Edit</a>
                    <a id="delChef" rel="{{ $chefsBlog->id }}" rel1="delete-chef-blog" href="javascript:"  class="btn btn-danger btn-mini deleteRecord">Delete</a>
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
