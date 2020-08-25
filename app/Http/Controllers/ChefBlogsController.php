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
        return view('chefBlogs')->with('chefsBlogs',$chefsBlogs);
    }

}
