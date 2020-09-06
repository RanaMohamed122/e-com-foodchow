<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Product;
use App\Chef;
use App\Cart;
use App\Order;
use App\OrderItem;
use App\User;
use App\Review;
use App\ChefBlog;
use Math;
use Auth;
use Session;
use DB;

class ChefBlogsController extends Controller
{
    //
    public function viewBlogs(){
        $chefsBlogs = ChefBlog::get();
        $categories = Category::all();

        return view('chefBlogs')->with('chefsBlogs',$chefsBlogs)->with('categories',$categories);
    }
    public function viewBlogDetail($id){

        $chefBlog = ChefBlog::find($id);
        $chef = Chef::find($chefBlog->chef_id);
        $categories = Category::all();

        return view('blogDetail')->with('chefBlog',$chefBlog)->with('chef',$chef)->with('categories',$categories);
    }

}
