<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>User Profile</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        <header class="stick">
            <div class="topbar">
                <div class="container">
 
                    <div class="topbar-register">
                        @if(empty(Auth::user()->id))  
                            <a class="log-popup-btn"  itemprop="url" >LOGIN</a> /
                            <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                        @else                        
                            <li style="list-style: none;" class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="min-width:10px; margin-left:-8%">
                                    <li>
                                        <a href="{{ url('UserProfile') }}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        
                                        <a href="{{ route('logout') }}" style="background-color: snow;font-weight: 500;"
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
                        <a href="{{asset("/cart")}}" title="Facebook" itemprop="url" target="_blank"><img src="assets/images/icon3.png"></a>
                       
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo">
                        <h1 itemprop="headline">
                            <a href="index-2.html" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- Logo Menu Section -->
        </header>
        <!-- Header -->

        <div class="responsive-header">
            <div class="responsive-topbar">
                
            </div>
            <div class="responsive-logomenu">
                <div class="logo">
                    <h1 itemprop="headline">
                        <a href="index-2.html" title="Home" itemprop="url"><img src="assets/images/logo.png" alt="logo.png" itemprop="image"></a>
                    </h1>
                </div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                    
                </div>
                <div class="topbar-register">
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                </div>
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">
                    <a class="yellow-bg brd-rd4" href="register-reservation.html" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                </div>
            </div>
            <!-- Responsive Menu -->
        </div>
        <!-- Responsive Header -->

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="dashboard-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s" style="width: 380px;">
                                                <div class="profile-sidebar-inner brd-rd5" style="width: 300px; height: 499px;">
                                                    <div class="user-info red-bg" style="width: 300px">
                                                        <img     style="height: 76px; width: 76px;"class="brd-rd50" src="{{ asset('/assets/images/resource/'.$user->image) }}" alt="user-avatar.jpg" itemprop="image">
                                                        <div class="user-info-inner">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url">{{$user->name}}</a></h5>
                                                            <span><a href="#" title="" itemprop="url">{{$user->email}}</a></span>
                                                            <!--<a class="brd-rd3 sign-out-btn yellow-bg" href="{" title="" itemprop="url"><i class="fa fa-sign-out"></i> SIGN OUT</a>-->>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                                                        <li><a href="#my-reviews" data-toggle="tab"><i class="fa fa-comments"></i> MY REVIEWS</a></li>
                                                        <!--<li><a href="#shortlists" data-toggle="tab"><i class="fa fa-heart"></i> SHORTLISTS</a></li>-->
                                                        <li><a href="#statement" data-toggle="tab"><i class="fa fa-wpforms"></i> MY ORDERS</a></li>
                                                        <li><a href="#account-settings" data-toggle="tab"><i class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="dashboard">
                                                    <div class="dashboard-wrapper brd-rd5">
                                                      <!--  <div class="welcome-note yellow-bg brd-rd5">
                                                            <h4 itemprop="headline">WELCOME TO YOUR ACCOUNT</h4>
                                                            <p itemprop="description">Things that get tricky are things like burgers and fries, or things that are deep-fried. We do have a couple of burger restaurants that are capable of doing a good</p>
                                                            <img src="assets/images/resource/welcome-note-img.png" alt="welcome-note-img.png" itemprop="image">
                                                            <a class="remove-noti" href="#" title="" itemprop="url"><img src="assets/images/close-icon.png" alt="close-icon.png" itemprop="image"></a>
                                                        </div>-->
                                                        <div class="dashboard-title">
                                                            <h4 itemprop="headline">SUGGESTED DISHES</h4>
                                                            <!--<span>Define <a class="red-clr" href="#" title="" itemprop="url">Search criteria</a> to search for specific</span>-->
                                                        </div>
                                                        <div class="restaurants-list">
                                                            <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/featured-restaurant-food-thumb-img3.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Dish1</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i ></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 12</span>
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">Ingredients</a>
                                                                </div>
                                                            </div>
                                                            <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.3s">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/order-img1.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Dish2</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i ></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 20</span>
                                                                    <!--<a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>-->
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">Ingredients</a>
                                                                                                                                        

                                                                </div>
                                                            </div>
                                                            <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.4s">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/dish-img1-4.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Dish3</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i ></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                    <span class="red-bg brd-rd4 post-likes"><i class="fa fa-heart-o"></i> 15</span>
                                                                    <!--<a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>-->
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">Ingredients</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                                <div class="tab-pane fade" id="my-reviews">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY REVIEWS</h4>
                                                        @foreach ($reviews as $review)
                                                        <div class="review-list">
                                                            <div class="review-box brd-rd5">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$review->project_name}}</a></h4>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star off"></i>
                                                                    <i class="fa fa-star off"></i>
                                                                </div>
                                                                <br>
                                                                <p itemprop="description"> {{$review->review}}</p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!--
                                                        <div class="review-list">
                                                            <div class="review-box brd-rd5">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">DISH DEMO</a></h4>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star off"></i>
                                                                    <i class="fa fa-star off"></i>
                                                                </div>
                                                                <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                                <div class="review-info">
                                                                    <img class="brd-rd50" src="assets/images/resource/reviewr-img1.jpg" alt="reviewr-img1.jpg" itemprop="image">
                                                                    <div class="review-info-inner">
                                                                        <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                        <i class="red-clr">2 months Ago</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-box brd-rd5">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">DISH DEMO</a></h4>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star off"></i>
                                                                </div>
                                                                <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                                <div class="review-info">
                                                                    <img class="brd-rd50" src="assets/images/resource/reviewr-img2.jpg" alt="reviewr-img2.jpg" itemprop="image">
                                                                    <div class="review-info-inner">
                                                                        <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                        <i class="red-clr">2 months Ago</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-box brd-rd5">
                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">DISH DEMO</a></h4>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                    <i class="fa fa-star on"></i>
                                                                </div>
                                                                <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                                <div class="review-info">
                                                                    <img class="brd-rd50" src="assets/images/resource/reviewr-img3.jpg" alt="reviewr-img3.jpg" itemprop="image">
                                                                    <div class="review-info-inner">
                                                                        <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                        <i class="red-clr">2 months Ago</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        -->
                                                        
                                                        <!-- Review List -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="my-orders">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY ORDERS</h4>
                                                        <div class="select-wrap-inner">
                                                            <div class="select-wrp2">
                                                                <select>
                                                                    <option>Select Orders Status</option>
                                                                    <option>Select Orders Status</option>
                                                                    <option>Select Orders Status</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-wrp2">
                                                                <select>
                                                                    <option>Select Date Range</option>
                                                                    <option>Select Date Range</option>
                                                                    <option>Select Date Range</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="order-list">
                                                            <div class="order-item brd-rd5">
                                                                <div class="order-thumb brd-rd5">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/order-img1.jpg" alt="order-img1.jpg" itemprop="image"></a>
                                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                </div>
                                                                <div class="order-info">
                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>

                                                                    <span class="price">$85.00</span>
                                                                    <span class="processing brd-rd3">PROCESSING</span>
                                                                    <a class="brd-rd2" href="#" title="" itemprop="url">Order Detail</a>
                                                                </div>
                                                            </div>
                                                            <div class="order-item brd-rd5">
                                                                <div class="order-thumb brd-rd5">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/order-img2.jpg" alt="order-img2.jpg" itemprop="image"></a>
                                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 3.0</span>
                                                                </div>
                                                                <div class="order-info">
                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>

                                                                    <span class="price">$85.00</span>
                                                                    <span class="completed brd-rd3">COMPLETED</span>
                                                                    <a class="brd-rd2" href="#" title="" itemprop="url">Order Detail</a>
                                                                </div>
                                                            </div>
                                                            <div class="order-item brd-rd5">
                                                                <div class="order-thumb brd-rd5">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/order-img3.jpg" alt="order-img3.jpg" itemprop="image"></a>
                                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                                                </div>
                                                                <div class="order-info">
                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>

                                                                    <span class="price">$85.00</span>
                                                                    <span class="completed brd-rd3">COMPLETED</span>
                                                                    <a class="brd-rd2" href="#" title="" itemprop="url">Order Detail</a>
                                                                </div>
                                                            </div>
                                                            <div class="order-item brd-rd5">
                                                                <div class="order-thumb brd-rd5">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/order-img4.jpg" alt="order-img4.jpg" itemprop="image"></a>
                                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.30</span>
                                                                </div>
                                                                <div class="order-info">
                                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>

                                                                    <span class="price">$85.00</span>
                                                                    <span class="completed brd-rd3">COMPLETED</span>
                                                                    <a class="brd-rd2" href="#" title="" itemprop="url">Order Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagination-wrapper text-center style2">
                                                            <ul class="pagination justify-content-center">
                                                                <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                                <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                                <li class="page-item">........</li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                                <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- Pagination Wrapper -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="shortlists">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">SHORTLISTS</h4>
                                                        <div class="restaurants-list">
                                                            <div class="featured-restaurant-box style3 brd-rd5">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/jambalaya.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Jampalia Dish</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i ></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                               <!-- <div class="view-menu-liks">
                                                                    <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                                </div>-->
                                                            </div>
                                                            <div class="featured-restaurant-box style3 brd-rd5">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/cioppino.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Cioppino Dish</a></h4>
                                                                    <ul class="post-meta">
                                                                        <li><i ></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                   <!-- <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>-->
                                                                </div>
                                                            </div>
                                                            <div class="featured-restaurant-box style3 brd-rd5">
                                                                <div class="featured-restaurant-thumb">
                                                                    <a href="#" title="" itemprop="url"><img src="assets/images/resource/cobb-salad.jpg" alt="" itemprop="image"></a>
                                                                </div>
                                                                <div class="featured-restaurant-info">
                                                                   <!-- <span class="red-clr">5th Avenue New York 68</span>-->
                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">Cobb Salad</a></h4>
                                                                  <ul class="post-meta">
                                                                        <li><i></i> Add to cart</li>
                                                                        <li><i ></i> Remove</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="view-menu-liks">
                                                                <!--    <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pagination-wrapper text-center style2">
                                                            <ul class="pagination justify-content-center">
                                                                <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                                <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                                <li class="page-item">........</li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                                <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- Pagination Wrapper -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="statement">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">STATEMENTS</h4>
                                                        <div class="select-wrap-inner">
                                                            <div class="select-wrp2"></div>
                                                            <div class="select-wrp2">
                                                                <!--<select>
                                                                    <option>Select Date Range</option>
                                                                    <option>Select Date Range</option>
                                                                    <option>Select Date Range</option>
                                                                </select>-->
                                                            </div>
                                                        </div>
                                                        <div class="statement-table">
                                                            @if (!(empty(Auth::user()->id)))
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <!--<th>TRANSACTION ID</th>-->
                                                                        <th>ORDER ID</th>
                                                                        <th>DATE</th>
                                                                        <th>DETAIL</th>
                                                                        <th>AMOUNT</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($userOrders as $userOrder)
                                                                    <tr>
                                                                        <td>{{$userOrder->id}}</td>
                                                                        <td>{{$userOrder->created_at}}</td>
                                                                        <td style="text-align: left">
                                                                        @foreach ($orderItems as $orderItem)
                                                                            @if ($orderItem->order_id == $userOrder->id)
                                                                                {{$orderItem->product_name}}<br> 
                                                                            @endif
                                                                        @endforeach
                                                                        </td>
                                                                        <td><span class="red-clr">{{$userOrder->total + $userOrder->delivery_fees}} L.E.</span></td>
                                                                    </tr>
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                                            </table> 
                                                            @else{
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <!--<th>TRANSACTION ID</th>-->
                                                                            <th>ORDER ID</th>
                                                                            <th>DATE</th>
                                                                            <th>DETAIL</th>
                                                                            <th>AMOUNT</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table> 
                                                            }
                                                            @endif
                                                            
                                                        </div>
                                                        <!-- Statement Table -->
                                                        <div class="pagination-wrapper text-center style2">
                                                            <ul class="pagination justify-content-center">
                                                                <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                                <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                                <li class="page-item">........</li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                                <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- Pagination Wrapper -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-settings">
                                                    <div class="tabs-wrp account-settings brd-rd5">
                                                        <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
                                                        <div class="account-settings-inner">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                                    <div class="profile-info text-center">
                                                                        <div class="profile-thumb brd-rd50">
                                                                            <img id="profile-display" src="assets/images/resource/profile-img1.jpg" alt="profile-img1.jpg" itemprop="image">
                                                                        </div>
                                                                        <a class="red-clr change-password" href="#" title="" itemprop="url">Change Password</a>
                                                                        <div class="profile-img-upload-btn">
                                                                            <label class="fileContainer brd-rd5 yellow-bg">
                                                                                UPLOAD PICTURE
                                                                                <input id="profile-upload" type="file" name="image">
                                                                            </label>
                                                                        </div>
                                                                        <p itemprop="description">Upload a profile picture or choose one of the following</p>
                                                                        <div class="default-img-lst">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb1.jpg" alt="profile-thumb1.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb2.jpg" alt="profile-thumb2.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb3.jpg" alt="profile-thumb3.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb4.jpg" alt="profile-thumb4.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb5.jpg" alt="profile-thumb5.jpg" itemprop="image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                                    <div class="profile-info-form-wrap">
                                                                        <form class="profile-info-form" method="post" action="{{ url('addUserInfo') }}" name="addUserInfo" id="addUserInfo" novalidate="novalidate">{{ csrf_field() }}
                                                                            <div class="row mrg20">
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Complete Name <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Name" name="UserName" id="UserName">
                                                                                </div>
                                                                                <!--<div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Email Address <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="email" placeholder="Enter Your Email Address" name="UserEmail" id="UserEmail">
                                                                                </div> -->
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Phone No <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Phone No" name="UserPhone" id="UserPhone">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Address <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="textarea" placeholder="Enter Your adress" name="address" id="address">                                 
                                                                                </div>
                                                                                
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Building Number <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Bulding no" name="BuildingNumber" id="BuildingNumber">                                 
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Floor Number <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your floor No" name="FloorNumber" id="FloorNumber">                                 
                                                                                </div>
                                                                               <!-- <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Latitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Longitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>-->
                                                                                <div class="profile-img-upload-btn">

                                                                                        <input id="submit" type="submit" style=" background-color: #ffbe00; border-radius: 4px; color: black">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                               <!-- <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="loc-map2">
                                                                        <div class="loc-map brd-rd3" id="loc-map"></div>

                                                                        <div class="loc-srch">
                                                                            <input class="brd-rd3" type="text" placeholder="Type Your Address">
                                                                            <button class="brd-rd3 red-bg" type="submit">Search Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Section Box -->
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
                                            <div class="logo">
                                                <h1 itemprop="headline">
                                                    <a href="#" title="Home" itemprop="url"><img src="assets/images/logo.png" alt="logo.png" itemprop="image"></a>
                                                </h1>
                                            </div>
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
                            </div>
                            <!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div>
        <!-- Bottom Bar -->

        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN IN</h4>
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username or Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
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
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>