<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Category;
use DB;


class CategoryController extends Controller
{
    public function addCategory(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$category = new Category;
    		$category->name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->description = $data['description'];
            
            // Upload Image
    		if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $image_path = 'assets/images/resource'.'/'.$fileName;
                    //$medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
                    //$small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($image_path);
 					//Image::make($image_tmp)->resize(600, 600)->save($image_path);
     				//Image::make($image_tmp)->resize(300, 300)->save($image_path);

     				$category->image = $fileName; 
				}
			}
    		$category->save();
    		return redirect('/admin/view-categories')->with('flash_message_success','Category added Successfully!');
    	}

        $levels = Category::where(['parent_id'=>0])->get();

    	return view('admin.categories.add_category')->with(compact('levels'));
    }

    public function editCategory(Request $request, $id = null){
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
                    $image_path = 'assets/images/resource'.'/'.$fileName;
                    //$medium_image_path = 'images/backend_images/product/medium'.'/'.$fileName;  
                    //$small_image_path = 'images/backend_images/product/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($image_path);
 					//Image::make($image_tmp)->resize(600, 600)->save($image_path);
     				//Image::make($image_tmp)->resize(300, 300)->save($image_path);

				}
			}
			
			
			else if(!empty($data['current_image'])){
				$fileName = $data['current_image'];
			}else{
				$fileName = '';
			}
			
			
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'description'=>$data['description'], 'image'=>$fileName]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category updated Successfully!');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));
    }

	public function deleteCategoryImage($id=null){

		// Get Product Image
		$categoryImage = Category::where('id',$id)->first();

		// Get Product Image Paths
		$image_path = 'assets/images/resource';
		

		// Delete Large Image if not exists in Folder
        if(file_exists($image_path.$categoryImage->image)){
            unlink($large_image_path.$categoryImage->image);
        }

        // Delete Medium Image if not exists in Folder
        if(file_exists($mage_path.$categoryImage->image)){
            unlink($image_path.$categoryImage->image);
        }

        // Delete Small Image if not exists in Folder
        if(file_exists($image_path.$categoryImage->image)){
            unlink($image_path.$categoryImage->image);
        }

        // Delete Image from Products table
        Category::where(['id'=>$id])->update(['image'=>'']);

        return redirect()->back()->with('flash_message_success', 'Category image has been deleted successfully');
	}

    public function deleteCategory(Request $request, $id = null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Successfully!');
        }
    }

    public function viewCategories(){

    	$categories = Category::get();
    	$categories = json_decode(json_encode($categories));
    	/*echo "<pre>"; print_r($categories); die;*/
    	return view('admin.categories.view_categories')->with(compact('categories'));
    }
}
