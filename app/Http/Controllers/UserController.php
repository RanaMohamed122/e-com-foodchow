<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class UserController extends Controller
{
    public function UserInfo()
    {
        //

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('UserProfile')->with('user',$user);
    }

    public function addUserInfo(Request $request)
    {
        //

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        echo "hello";

        if($request->isMethod('post')){
			$data = $request->all();

            $user->name = $data['UserName'];
            $user->phone = $data['UserPhone'];
            $user->address= $data['address'];
            $user->BuildingNumber = $data['BuildingNumber'];      
            $user->FloorNumber = $data['FloorNumber'];
            
            // Upload Image
            if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $image_path = 'assets/images/resource'.'/'.$fileName;
	                Image::make($image_tmp)->save($image_path);
 					
     				$user->image = $fileName; 
				}
			}
               
			$user->save();
        }

        return view('UserProfile')->with('user',$user);
    }
}
