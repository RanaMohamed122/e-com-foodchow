<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Products</title>
    <link rel="shortcut icon" href={{asset("assets/images/favicon.png")}} type="image/x-icon">
    

    <link rel="stylesheet" href={{asset("assets/css/icons.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/main.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/red-color.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/yellow-color.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>
</head>
<body>
        <header class="stick">
            <div class="topbar">
                <div class="container">
 
                    <div class="topbar-register">
                        @if(empty(Auth::user()->id))  
                            <a class="log-popup-btn"  itemprop="url" >LOGIN</a> /
                            <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                        @else                        
                            <li style="list-style: none;" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('UserProfile') }}">
                                            Profile
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>
                    <div class="social1" style="margin-top: 5px;width: 3%;margin-right: -5%;">
                        <a href="/cart" title="Facebook" itemprop="url" target="_blank"><img src={{asset("assets/images/icon3.png")}}></a>
                       
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec" >
              <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src={{asset("assets/images/logo2.png")}} alt="logo.png" itemprop="image"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href={{asset("/offers")}} title="HOMEPAGES" itemprop="url">Our Offers</a>
                                   <ul class="sub-dropdown">
                                        <li><a href="#" title="HOMEPAGE 1" itemprop="url">Office Packages</a></li>
                                        <li><a href="#" title="HOMEPAGE 2" itemprop="url">Parties Packages</a></li>
                                    </ul> 
                                </li>
                                <li class="menu-item-has-children"><a href={{asset("/services")}} title="RESTAURANTS" itemprop="url">Our Services</a>
                                 
                                </li>
                                <li class="menu-item-has-children"><a href={{asset("/categories")}} title="PAGES" itemprop="url">All Categoires</a>
                                   
                                    <ul >
                                        @foreach($categories as $category)
                                    <li><a href="{{ url('/categories/products_found/'.$category->id) }}" title="" itemprop="url">{{$category->name}}</a> </li>
                                        @endforeach
                                    </ul>
                                <li><a href={{asset("/contact-us")}} title="CONTACT US" itemprop="url">Contact Us</a></li>
                                <li class="menu-item-has-children"><a href={{asset("/chefBlogs")}} title="PAGES" itemprop="url">Blogs</a></li>

                            </ul>
                            
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div>
            <!-- Logo Menu Section -->
        </header><!-- Header -->


        


        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li>
                    <li class="breadcrumb-item active">Restaurants Found</li>
                </ol>
            </div>
        </div>
     
              
                   

        <section>
               
            <div class="block gray-bg bottom-padd210 top-padd30">
                <div class="container">
                    <div class="row" style= "margin-left:0px ;margin-right:0px">
                            
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box" style = "margin-top:7%;margin-left:-6%;width: 120%;">
                                <div class="sec-wrapper">
                                    <div class="row">
                                       <!-- <div class="col-md-2 col-sm-2 col-lg-2">
                                            <div class="sidebar left">
                                                <div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Categoires</h4>
                                                    <div class="widget-data">

                                                        <ul>
                                                            @foreach($categories as $category)
                                                        <li><a href="{{ url('/categories/products_found/'.$category->id) }}" title="" itemprop="url">{{$category->name}}</a> </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                              

                                                
                                             
                                            </div>

                                        </div> -->
                                       
                                        @foreach($products as $product)
                                        
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="sec-box" >
                                                <div class="remove-ext">
                                                    <div class="row">
                                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                                            <div class="popular-dish-thumb">
                                                                <a href="food-detail.html" title="" itemprop="url"><img src="{{asset('/assets/images/resource/'.$product->image)}}" alt="popular-dish-img1.jpg" itemprop="image"  /></a>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                            </div>
                                                            <div class="popular-dish-info">
                                                                <h4 itemprop="headline"><a  title="" itemprop="url">{{$product->product_name}}</a></h4>
                                                            <p itemprop="description">{{$product->description}}</p>
                                                                <span class="price">{{$product->price}} L.E</span>
                                                                <a class="brd-rd4 " href="{{ url('/chefs_products/cart/'.$product->id)}}" title="Order Now" itemprop="url">Add to cart</a>
                                                                <div class="restaurant-info">
                                                                        <img src={{asset("assets/images/resource/restaurant-logo1.png")}} alt="restaurant-logo3.png" itemprop="image">
                                                                        <div class="restaurant-info-inner">
                                                                            <h6 itemprop="headline"><a href="{{ url('/products_found/chefs_products/'.$product->chef_id) }}" title="" itemprop="url">{{$product->project_name}}</a></h6>
                                                                            
                                                                        </div>
                                                                
                                                            </div>
                                                            
                                                                </div>
                                                        </div><!-- Popular Dish Box -->
                                                    </div>
                                                </div>   
                           
                        
                                           </div>      
                                                   
                                        </div>
                                        @endforeach 
                                    </div>  
                                </div>     
                          
                          
                             </div>      
                        </div>
                    </div>
                </div>    

                
        </section>  
        
                      
                                      

       

        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src="assets/images/logo.png" alt="logo.png" itemprop="image"></a></h1></div>
                                            <p itemprop="description">Food Ordering is a Premium HTML Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                            <div class="social2">
                                                <a class="brd-rd50" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd50" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="brd-rd50" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd50" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget information_links wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title" itemprop="headline">INFORMATION</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Careers</a></li>
                                                <li><a href="#" title="" itemprop="url">Investor Relations</a></li>
                                                <li><a href="#" title="" itemprop="url">Press Releases</a></li>
                                                <li><a href="#" title="" itemprop="url">Shop with Points</a></li>
                                                <li><a href="#" title="" itemprop="url">More Branches</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget customer_care wow fadeIn" data-wow-delay="0.3s">
                                            <h4 class="widget-title" itemprop="headline">CUSTOMER CARE</h4>
                                            <ul>
                                                <li><a href="#" title="" itemprop="url">Returns</a></li>
                                                <li><a href="#" title="" itemprop="url">Shipping Info</a></li>
                                                <li><a href="#" title="" itemprop="url">Gift Cards</a></li>
                                                <li><a href="#" title="" itemprop="url">Size Guide</a></li>
                                                <li><a href="#" title="" itemprop="url">Money Back</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget get_in_touch wow fadeIn" data-wow-delay="0.4s">
                                            <h4 class="widget-title" itemprop="headline">GET IN TOUCH</h4>
                                            <ul>
                                               <li><i class="fa fa-map-marker"></i> 123 New Design Str, ABC Building, melbourne, Australia.</li>
                                               <li><i class="fa fa-phone"></i> (0044) 8647 1234 587</li>
                                               <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">hello@yourdomain.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
       

        <div class="log-popup text-center">
                <div class="sign-popup-wrapper brd-rd5">
                    <div class="sign-popup-inner brd-rd5">
                        <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                        <div class="sign-popup-title text-center">
                            <h4 itemprop="headline">SIGN IN</h4>
                           
                        </div>
                       
                        <span class="popup-seprator text-center" style="margin: 22px 0;"></span>
                        <form class="sign-form" style="margin-left: -6%;" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <input class="brd-rd3 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus type="email" id="email" placeholder="Username or Email">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <input class="brd-rd3 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" type="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="sign-popup text-center">
                <div class="sign-popup-wrapper brd-rd5">
                    <div class="sign-popup-inner brd-rd5">
                        <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                        <div class="sign-popup-title text-center">
                            <h4 itemprop="headline">SIGN UP</h4>
                            <span class="popup-seprator text-center" style="margin:22px 0;"></span>
                        
                        </div>
                        
                      
                        <form class="sign-form" style="margin-left:-6%;" method="POST" action="{{ route('register') }}">{{ csrf_field() }}    
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <input class="brd-rd3 form-control{{ $errors->has('name') ? ' has-error' : '' }}" id="name" type="text" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <input class="brd-rd3 form-control"{{ $errors->has('email') ? ' has-error' : '' }} id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <input class="brd-rd3 form-control {{ $errors->has('password') ? ' has-error' : '' }}" id="password" type="password" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">

                                 <input class="brd-rd3 form-control"id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button class="red-bg brd-rd3 " style="margin-left: 8%;width: 97%;" type="submit">REGISTER NOW</button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
   

    <script src={{asset("assets/js/jquery.min.js")}}></script>
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/js/plugins.js")}}></script>
    <script src={{asset("assets/js/main.js")}}></script>
</body>	

</html>