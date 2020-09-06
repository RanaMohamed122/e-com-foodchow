@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Chefs' Blogs</a> <a href="#" class="current">Add Chef Blog</a> </div>
    <h1>Add Chef Blog</h1>
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Blog</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-chef-blog') }}" name="add_chef_blog" id="add_chef_blog" novalidate="novalidate">{{ csrf_field() }}
              
               <div class="control-group">
                    <label class="control-label">Chef ID</label>
                    <div class="controls">
                        <input type="text" name="chef_id" id="chef_id">
                    </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>     
              <div class="control-group">
                <label class="control-label">Blog Title</label>
                <div class="controls">
                  <input type="text" name="blog_title" id="blog_title">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Blog Brief</label>
                <div class="controls">
                  <input type="text" name="blog_brief" id="blog_brief">
                </div>
              </div>
             
              <div class="control-group">
                <label class="control-label">Blog Body</label>
                <div class="controls">
                    <input type="text" name="blog_body" id="blog_body">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Chef Blog" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection



