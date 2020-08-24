@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Chefs</a> <a href="#" class="current">Edit Chef</a> </div>
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
            <h5>Edit Chef</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/edit-chef/'.$chefDetails->id) }}" name="edit_chef" id="edit_chef" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Under Category</label>
                <div class="controls">
                  <select name="category_id" id="category_id" style="width:220px;">
                    <?php echo $categories_drop_down; ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                  <input type="text" name="project_name" id="project_name" value="{{ $chefDetails->project_name }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Personal Name</label>
                <div class="controls">
                  <input type="text" name="chef_name" id="chef_name" value="{{ $chefDetails->chef_name }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Contact Number</label>
                <div class="controls">
                  <input type="text" name="chef_number" id="chef_number" value="{{ $chefDetails->chef_number }}">
                </div>
              </div>
             
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="email" name="chef_email" id="chef_email" value="{{ $chefDetails->chef_email }}">
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
                          @if(!empty($chefDetails->image))
                            <input type="hidden" name="current_image" value="{{ $chefDetails->image }}"> 
                          @endif
                        </td>
                        <td>
                          @if(!empty($chefDetails->image))
                            <img style="width:30px;" src="{{ asset('/images/backend_images/product/small/'.$chefDetails->image) }}"> | <a href="{{ url('/admin/delete-chef-image/'.$chefDetails->id) }}">Delete</a>
                          @endif
                        </td>
                      </tr>
                    </table>
                </div>
              </div>
             
              <div class="form-actions">
                <input type="submit" value="Edit Chef" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


