<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Review;
use App\User;
use App\Chef;
use Image;
use Auth;

class ReviewsController extends Controller
{
    //
    public function create_review(Request $request, $id)
    {
        $chef = Chef::find($id);
        $review = new Review;

        if(!(empty(Auth::user()->id))){
            $user_id = Auth::user()->id;
            $user = User::find($user_id);
            $review->user_id = $user->id;
            $review->user_name = $user->name;
            $review->user_image = $user->image;
        }else{
            $review->user_name = 'Unknown';
           // $image = 'assets/images/resource/223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png';
 			//$review->user_image = $image;
        }

        $review->chef_id = $chef->id;
        $review->project_name = $chef->project_name;

        if($request->isMethod('post')){
            $data = $request->all();
            $review->review = $data['review'];
        }

        $review->save();
        

        return view('welcome');
    }
}
