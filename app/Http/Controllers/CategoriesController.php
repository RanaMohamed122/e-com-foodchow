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
use Math;
use Auth;
use Session;
use DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$categories = Category::with('categories')->where(['parent_id' => 0])->get();
    	//$categories = json_decode(json_encode($categories));
        //return view('categories')->with(compact('categories'));
        $categories = Category::all();
    	//$categories = json_decode(json_encode($categories));
        return view('categories')->with('categories',$categories);
    }
   
    public function ViewProduct($id)
    {
        $categories = Category::all();
        //$category_id = category()->id;
        $category = Category::find($id);

        return view('products_found')->with('products', $category->products)->with('categories',$categories);
    }

    

    public function ViewChefProduct($id){

        //$category_id = category()->id;
        $categories = Category::all();
        $products = Product::all();
        $chef = Chef::find($id);
        $reviews = '';
        if(!(empty(Review::all()))){
            $reviews = Review::all();
        }

        return view('chefs_products')->with('chef',$chef)->with('chef_id',$id)->with('products', $chef->products)->with('reviews', $chef->reviews)->with('categories',$categories);

    }

    public function AddtoCart($id){
        $product = Product::find($id);

        $session_id = Session::get('session_id');
        if(!isset($session_id)){
        $session_id = str_random(40);
        Session::put('session_id',$session_id);
        }  

        if(Cart::all()->count() == 0){
            if(empty(Auth::user()->email)){
                DB::table('cart')->insert(['product_id' => $product->id, 'product_name' => $product->product_name, 'description'=> $product->description, 'price'=>$product->price,'user_email' => ' ', 'session_id' => $session_id, 'quantity' => '1']);
            }else{
                DB::table('cart')->insert(['product_id' => $product->id, 'product_name' => $product->product_name, 'description'=> $product->description, 'price'=>$product->price,'user_email' => Auth::user()->email, 'session_id' => $session_id, 'quantity' => '1']);
            }
        }elseif(Cart::all()->count() > 0){
            if(!(empty(Auth::user()->email))){
                if(Cart::where(['user_email'=> Auth::user()->email])->where(['product_id' => $product->id])->count() > 0){
                    $cart = Cart::where(['user_email'=> Auth::user()->email])->where(['product_id'=> $product->id])->first();
                    $cart->quantity +=1;
                    $cart->save();
                }else{
                    DB::table('cart')->insert(['product_id' => $product->id, 'product_name' => $product->product_name, 'description'=> $product->description, 'price'=>$product->price,'user_email' => Auth::user()->email, 'session_id' => $session_id, 'quantity' => '1']);
                }
            }elseif(empty(Auth::user()->email)){
                if(Cart::Where(['session_id' => Session::get('session_id')])->where(['product_id' => $product->id])->count() > 0){
                    $cart = Cart::where(['session_id'=> Session::get('session_id')])->where(['product_id'=> $product->id])->first();
                    $cart->quantity +=1;
                    $cart->save();
                }else{
                    DB::table('cart')->insert(['product_id' => $product->id, 'product_name' => $product->product_name, 'description'=> $product->description, 'price'=>$product->price,'user_email' => ' ', 'session_id' => $session_id, 'quantity' => '1']);
                   
                }
            }                  
            
        }
       
       
        return redirect()->back();
    }

    
    public function ViewCart(){
        $categories = Category::all();
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();     
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();    
        }

        return view('cart')->with('cart', $userCart)->with('categories',$categories);
    }

    public function updateCartQuantity($id=null,$quantity=null){
        
        $cart_product = Cart::find($id);
        $productQuantity = $cart_product->quantity;
        $updated_quantity = $productQuantity + 1;
        $cart_product->quantity = $updated_quantity;
        //$cart_product->product_name = "pro";
        $cart_product->save();
        return redirect()->back();   
    }

    public function updateCartQuantity2($id=null,$quantity=null){
        
        $getProductSKU = DB::table('cart')->select('product_id','quantity')->where('id',$id)->first();
      //  $getProductStock = ProductsAttribute::where('sku',$getProductSKU->product_code)->first();
        $updated_quantity = $getProductSKU->quantity+$quantity;
        //if($getProductStock->stock>=$updated_quantity){
            DB::table('cart')->where('id',$id)->increment('quantity',$quantity); 
            return redirect('cart')->with('flash_message_success','Product Quantity has been updated in Cart!');   
        //}else{
          //  return redirect('cart')->with('flash_message_error','Required Product Quantity is not available!');    
       // }//
    }

    public function deleteCartProduct($id){
        DB::table('cart')->where('id',$id)->delete();
        return redirect('cart')->action('CategoriesController@ViewCart');
    }

    public function pay_cash(){
        
     $subtotal=0;
     $user = '';
        if(empty(Auth::user()->id)){
            $cart_pros = DB::table('cart')->where('session_id', Session::get('session_id'))->get();
            $flag = 1;
            
        }
        else{
            $userid = Auth::user()->id;
            $user = User::find($userid);
            $cart_pros = DB::table('cart')->where('user_email', $user->email)->get();
            $flag = 2;

        }

        foreach($cart_pros as $cart_pro)
        {
            $subtotal += ( $cart_pro->price * $cart_pro->quantity);
        }
        return view('cash')->with('user',$user)->with('subtotal',$subtotal)->with('flag',$flag);
    }
    
    public function confirm_order1(Request $request){
        $order = new Order;
        $data = $request->all();

        if(empty(Auth::user()->id)){
            if($request->isMethod('post')){
                //$data = $request->all();
                $order->user_name = $data['user_name'];
                $order->user_email = $data['user_email'];
                $order->phone = $data['phone'];	
                $order->address = $data['address'];	
                $order->save();
            }
            $cart_pros = DB::table('cart')->where('session_id', Session::get('session_id'))->get();
        }
        else{
            $userId = Auth::user()->id;
            $user = User::find($userId);

            $cart_pros = DB::table('cart')->where('user_email', $user->email)->get();

            $order->user_id = $user->id;
            $order->user_name = $user->name;
            $order->user_email = $user->email;
            $order->phone = $user->phone;	
            $order->address = $user->address;	
            $order->save();
        }
            
        $total=0;

        foreach($cart_pros as $cart_pro)
        {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cart_pro->product_id;
            $orderItem->product_name = $cart_pro->product_name;
            $orderItem->quantity = $cart_pro->quantity;
            $orderItem->price = $cart_pro->price;
            $total += ($orderItem->price*$orderItem->quantity);
            $orderItem->save();
        }
            
        $order->total = $total;	
        if(empty($data['description'])){
            $data['description'] = '';
        }
        $order->description	= $data['description'];

        $order->delivery_fees = 50;
        $order->payment_method = 'cash';

        $order->save();

        if(!(empty(Auth::user()->id))){
            DB::table('cart')->where('user_email', $user->email)->delete();
        }elseif(empty(Auth::user()->id)){
            DB::table('cart')->where('session_id', Session::get('session_id'))->delete();
        }
        
        return view('ThankYou');    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
