@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Add Category</a> </div>
    <h1>Categories</h1>
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
            <h5>Add Category</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-category') }}" name="add_Category" id="add_Category" novalidate="novalidate">{{ csrf_field() }}
              <div class="widget-content nopadding">
                <form class="form-horizontal" method="post" action="{{ url('/admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate"> {{ csrf_field() }}
                  <div class="control-group">
                    <label class="control-label">Category Name</label>
                    <div class="controls">
                      <input type="text" name="category_name" id="category_name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Category Level</label>
                    <div class="controls">
                      <select name="parent_id" style="width: 220px;">
                        <option value="0">Main Category</option>
                        @foreach($levels as $val)
                          <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Description</label>
                    <div class="controls">
                      <textarea name="description" id="description"></textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Image</label>
                    <div class="controls">
                      <div class="uploader" id="uniform-undefined"><input name="image" id="image" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
                    </div>
                  </div>
              <div class="form-actions">
                <input type="submit" value="Add Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
