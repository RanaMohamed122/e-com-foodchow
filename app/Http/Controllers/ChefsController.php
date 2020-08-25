<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Category;
use App\Chef;
use App\ChefBlog;
use DB;


class ChefsController extends Controller
{
    public function addChef(Request $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if($request->isMethod('post')){
                $data = $request->all();
                //echo "<pre>"; print_r($data); die;
                if(empty($data['category_id'])){
                    return redirect()->back()->with('flash_message_error','Under Category is missing!');	
                }
            }

    		
            $chef = new Chef;
            $chef->category_id = $data['category_id'];
            $chef->project_name = $data['project_name'];
    		$chef->chef_name = $data['chef_name'];
            $chef->chef_number = $data['chef_number'];
            $chef->chef_email = $data['chef_email'];    

    		// Upload Image
    		if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/product/large'.'/'.$fileName;
                    $medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
                    $small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($large_image_path);
 					Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
     				Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

     				$chef->image = $fileName; 
				}
			}
    		$chef->save();
    		/*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
            return redirect('/admin/view-chef')->with('flash_message_success','Chef has been added successfully!');
    	}

    	$categories = Category::where(['parent_id'=>0])->get();
    	$categories_dropdown = "<option value='' selected disabled>Select</option>";
    	foreach($categories as $cat){
    		$categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
    		$sub_categories = Category::where(['parent_id'=>$cat->id])->get();
    		foreach ($sub_categories as $sub_cat) {
    			$categories_dropdown .= "<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
    		}
    	}
    	return view('admin.Chefs.add_chef')->with(compact('categories_dropdown'));
	}

	
	public function viewChefs(){
        $chefs = Chef::get();
        
        foreach($chefs as $key => $val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $chefs[$key]->category_name = $category_name->name;
		}
		
		$chefs = json_decode(json_encode($chefs));

        //echo "<pre>"; print_r($products); die;
        return view('admin.Chefs.view_chef')->with(compact('chefs'));
    }



public function editChef(Request $request,$id=null){

	if($request->isMethod('post')){
		$data = $request->all();
		//echo "<pre>"; print_r($data); die;

		

		// Upload Image
		if($request->hasFile('image')){
			$image_tmp = Input::file('image');
			if ($image_tmp->isValid()) {
				// Upload Images after Resize
				$extension = $image_tmp->getClientOriginalExtension();
				$fileName = rand(111,99999).'.'.$extension;
				$large_image_path = 'images/backend_images/product/large'.'/'.$fileName;
				$medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
				$small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  

				Image::make($image_tmp)->save($large_image_path);
				 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
				 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

			}
		}else if(!empty($data['current_image'])){
			$fileName = $data['current_image'];
		}else{
			$fileName = '';
		}
	
		Chef::where(['id'=>$id])->update(['category_id'=>$data['category_id'],'project_name'=>$data['project_name'],
			'chef_name'=>$data['chef_name'],'chef_number'=>$data['chef_number'],'chef_email'=>$data['chef_email'],'image'=>$fileName]);
	
		return redirect()->back()->with('flash_message_success', 'Chef has been edited successfully');
	}

	// Get Product Details start //
	$chefDetails = Chef::where(['id'=>$id])->first();
	// Get Product Details End //

	// Categories drop down start //
	$categories = Category::where(['parent_id' => 0])->get();

	$categories_drop_down = "<option value='' disabled>Select</option>";
	foreach($categories as $cat){
		if($cat->id==$chefDetails->category_id){
			$selected = "selected";
		}else{
			$selected = "";
		}
		$categories_drop_down .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
		$sub_categories = Category::where(['parent_id' => $cat->id])->get();
		foreach($sub_categories as $sub_cat){
			if($sub_cat->id==$chefDetails->category_id){
				$selected = "selected";
			}else{
				$selected = "";
			}
			$categories_drop_down .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";	
		}	
	}
	// Categories drop down end //

	return view('admin.chefs.edit_chef')->with(compact('chefDetails','categories_drop_down'));
	} 

	public function deleteChef($id = null){
		Chef::where(['id'=>$id])->delete();
		return redirect()->back()->with('flash_message_success', 'Chef has been deleted successfully');
	}

	//Blog////////////////////////////////////////////////////////////////////////////////////////////////
	public function addChefBlog(Request $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
			
            $chefBlog = new ChefBlog;
            $chefBlog->chef_id = $data['chef_id'];
            $chefBlog->project_name = $data['project_name'];
    		$chefBlog->blog_title = $data['blog_title'];
            $chefBlog->blog_brief = $data['blog_brief'];
            $chefBlog->blog_body = $data['blog_body'];    

    		// Upload Image
    		if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $image_path = 'assets/images/resource'.'/'.$fileName;
                    
	                Image::make($image_tmp)->save($image_path);
 				
     				$chefBlog->image = $fileName; 
				}
			}
			$chefBlog->save();
			return redirect()->back()->with('flash_message_success','Chefs Blogs has been added successfully!');

    		/*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
    	}
    	//return redirect()->back()->with('flash_message_success','Chefs Blogs has been added successfully!');

		return view('admin.Chefs.add_chef_blog')->with('flash_message_success','Chef has been added successfully!');
	}

	public function viewChefsBlogs(){
        $chefsBlogs = ChefBlog::get();
        $chefsBlogs = json_decode(json_encode($chefsBlogs));
    	
        return view('admin.Chefs.view_chef_blogs')->with(compact('chefsBlogs'));
	}

	public function editChefBlog(Request $request,$id=null){

		if($request->isMethod('post')){
			$data = $request->all();	
	
			// Upload Image
    		if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $image_path = 'assets/images/resource'.'/'.$fileName;
                    
	                Image::make($image_tmp)->save($image_path);
 				
     				$chefBlog->image = $fileName; 
				}
			}else if(!empty($data['current_image'])){
					$fileName = $data['current_image'];
			}else{
					$fileName = '';
			}
			

			ChefBlog::where(['id'=>$id])->update(['chef_id'=>$data['chef_id'],'project_name'=>$data['project_name'],
				'blog_title'=>$data['blog_title'],'blog_brief'=>$data['blog_brief'],'blog_body'=>$data['blog_body'],'image'=>$fileName]);
			
			return redirect()->back()->with('flash_message_success', 'Chef Blog has been edited successfully');
		}
	
		// Get Product Details start //
		$chefBlogDetails = ChefBlog::where(['id'=>$id])->first();

		return view('admin.chefs.edit_chef_blog')->with(compact('chefBlogDetails'));
	} 

	public function deleteChefBlog($id){
		ChefBlog::where(['id'=>$id])->delete();
		return redirect()->back()->with('flash_message_success', 'Chef Bllog has been deleted successfully');
	}
}

