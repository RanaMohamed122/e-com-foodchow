@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Chefs</a> <a href="#" class="current">Edit Chef's Blog</a> </div>
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Chef's Blog</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/edit-chef-blog/'.$chefBlogDetails->id) }}" name="edit_chef_blob" id="edit_chef_blog" novalidate="novalidate">{{ csrf_field() }}
                <div class="control-group">
                    <label class="control-label">Chef ID</label>
                    <div class="controls">
                      <input type="text" name="chef_id" id="chef_id" value="{{ $chefBlogDetails->chef_id }}">
                    </div>
                  </div>
              
              <div class="control-group">
                <label class="control-label">Blog Title</label>
                <div class="controls">
                  <input type="text" name="blog_title" id="blog_title" value="{{ $chefBlogDetails->blog_title}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Blog Brief</label>
                <div class="controls">
                  <input type="text" name="blog_brief" id="blog_brief" value="{{ $chefBlogDetails->blog_brief }}">
                </div>
              </div>
             
              <div class="control-group">
                <label class="control-label">Blog Body</label>
                <div class="controls">
                    <input type="email" name="blog_body" id="blog_body" value="{{ $chefBlogDetails->blog_body }}">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <div id="uniform-undefined">
                    <table>
                      <tr>
                        <td>
                          <input name="image" id="image" type="file">
                          @if(!empty($chefBlogDetails->image))
                            <input type="hidden" name="current_image" value="{{ $chefBlogDetails->image }}"> 
                          @endif
                        </td>
                        <td>
                          @if(!empty($chefBlogDetails->image))
                            <img style="width:30px;" src="{{ asset('/assets/images/resource/'.$chefBlogDetails->image) }}"> | <a href="{{ url('/admin/delete-chef-image/'.$chefBlogDetails->id) }}">Delete</a>
                          @endif
                        </td>
                      </tr>
                    </table>
                </div>
              </div>
             
              <div class="form-actions">
                <input type="submit" value="Edit Chef Blog" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


