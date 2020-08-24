<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering HTML Template</title>
    <link rel="shortcut icon" href={{asset("assets/images/favicon.png")}} type="image/x-icon">
    

    <link rel="stylesheet" href={{asset("assets/css/icons.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/main.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/red-color.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/yellow-color.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>
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
                        <a class="log-popup-btn"  itemprop="url" >LOGIN</a> /
                        <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                    </div>
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href={{asset("/")}} title="Home" itemprop="url"><img src={{asset("assets/images/logo2.png")}} alt="logo.png" itemprop="image"></a></h1></div>
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
                                  <!--  <ul class="sub-dropdown">
                                        <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">RESTAURANT 1</a></li>
                                        <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                        <li><a href="restaurant-detail.html" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                        <li><a href="food-recipes.html" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                        <li><a href="our-articles.html" title="RESTAURANT DETAILS" itemprop="url">OUR ARTICLES</a></li>
                                        <li><a href="our-menu.html" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                        <li><a href="our-services.html" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url">All Categoires</a>
                                    <ul class="sub-dropdown">
                                        <li class="menu-item-has-children"><a href="#" title="BLOG" itemprop="url">BLOG</a>
                                            <ul class="sub-dropdown">
                                                <li class="menu-item-has-children"><a href="#" title="BLOG LAYOUTS" itemprop="url">BLOG LAYOUTS</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-right-sidebar.html" title="BLOG WITH RIGHT SIDEBAR" itemprop="url">BLOG (W.R.S)</a></li>
                                                        <li><a href="blog-left-sidebar.html" title="BLOG WITH LEFT SIDEBAR" itemprop="url">BLOG (W.L.S)</a></li>
                                                        <li><a href="blog.html" title="BLOG WITH NO SIDEBAR" itemprop="url">BLOG</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG DETAIL" itemprop="url">BLOG DETAIL</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-right-sidebar.html" title="BLOG DETAIL WITH RIGHT SIDEBAR" itemprop="url">BLOG DETAIL (W.R.S)</a></li>
                                                        <li><a href="blog-detail-left-sidebar.html" title="BLOG DETAIL WITH LEFT SIDEBAR" itemprop="url">BLOG DETAIL (W.L.S)</a></li>
                                                        <li><a href="blog-detail.html" title="BLOG DETAIL WITH NO SIDEBAR" itemprop="url">BLOG DETAIL</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG FORMATES" itemprop="url">BLOG FORMATES</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-video.html" title="BLOG DETAIL WITH VIDEO" itemprop="url">BLOG DETAIL (VIDEO)</a></li>
                                                        <li><a href="blog-detail-audio.html" title="BLOG DETAIL WITH AUDIO" itemprop="url">BLOG DETAIL (AUDIO)</a></li>
                                                        <li><a href="blog-detail-carousel.html" title="BLOG DETAIL WITH CAROUSEL" itemprop="url">BLOG DETAIL (CAROUSEL)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="SPECIAL PAGES" itemprop="url">SPECIAL PAGES</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="404.html" title="404 ERROR" itemprop="url">404 ERROR</a></li>
                                                <li><a href="search-found.html" title="SEARCH FOUND" itemprop="url">SEARCH FOUND</a></li>
                                                <li><a href="search-not-found.html" title="SEARCH NOT FOUND" itemprop="url">SEARCH NOT FOUND</a></li>
                                                <li><a href="coming-soon.html" title="COMING SOON" itemprop="url">COMING SOON</a></li>
                                                <li><a href="login-register.html" title="LOGIN & REGISTER" itemprop="url">LOGIN & REGISTER</a></li>
                                                <li><a href="price-table.html" title="PRICE TABLE" itemprop="url">PRICE TABLE</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="GALLERY" itemprop="url">GALLERY</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="gallery.html" title="FOOD GALLERY" itemprop="url">FOOD GALLERY</a></li>
                                                <li><a href="gallery-detail.html" title="GALLERY DETAIL" itemprop="url">GALLERY DETAIL</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="register-reservation.html" title="REGISTER RESERVATION" itemprop="url">REGISTER RESERVATION</a></li>
                                        <li><a href="how-it-works.html" title="HOW IT WORKS" itemprop="url">HOW IT WORKS</a></li>
                                        <li><a href="dashboard.html" title="USER PROFILE" itemprop="url">USER PROFILE</a></li>
                                        <li><a href="about-us.html" title="ABOUT US" itemprop="url">ABOUT US</a></li>
                                        <li><a href="food-detail.html" title="FOOD DETAIL" itemprop="url">FOOD DETAIL</a></li>
                                    </ul>
                                </li>
                                <li><a href={{asset("/contact-us")}} title="CONTACT US" itemprop="url">Contact Us</a></li>
                            </ul>
                            <a class="red-bg brd-rd4" href="register-reservation.html" title="Register" itemprop="url">Register as a Chef</a>
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Categories</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>

        <div class="block gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="sec-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-lg-4" style="margin-left: 0%; width:90%; margin-top: 5%; margin-bottom:5%">
                                        <div class="order-wrapper right wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                            <div class="order-inner gradient-brd">
                                                <h4 itemprop="headline">Your Order</h4>
                                                <div class="order-list-wrapper">
                                                    <ul class="order-list-inner">
                                                        @foreach ($cart as $c)
                                                        <li>
                                                            <div class="dish-name">
                                                            <i> </i> <h6 itemprop="headline">{{$c->product_name}}</h6> <span class="price">{{$c->price}}L.E.</span>
                                                            <td class="cart_quantity">
                                                                <div class="cart_quantity_button">
                                                                    <a class="cart_quantity_up" href="{{ url('/cart/update-quantity/'.$c->id.'/1') }}"> + </a>
                                                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{ $c->quantity }}" autocomplete="off" size="2">
                                                                    @if($c->quantity>1)
                                                                        <a class="cart_quantity_down" href="{{ url('/cart/update-quantity/'.$c->id.'/-1') }}"> - </a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td class="cart_delete">
                                                                <a class="cart_quantity_delete" href="{{ url('/cart/delete-product/'.$c->id) }}"><i class="fa fa-times"></i></a>
                                                            </td>
                                                            </div>
                                                            
                                                        </li>
                                                        @endforeach
                                                        
                    
                                                        <!--
                                                        <li>
                                                            <div class="dish-name">
                                                                <i>.1</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$85.00</span>
                                                            </div>
                                                            <div class="dish-ingredients">
                                                                <span class="check-box"><input type="checkbox" id="checkbox1-1"><label for="checkbox1-1"><span>Drink</span> <i>$12</i></label></span>
                                                                <span class="check-box"><input type="checkbox" id="checkbox1-2"><label for="checkbox1-2"><span>Butter</span> <i>$12</i></label></span>
                                                            </div>
                                                            <div class="mor-ingredients">
                                                                <a class="red-clr" href="#" title="" itemprop="url">Edit</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="dish-name">
                                                                <i>.2</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$90.00</span>
                                                            </div>
                                                            <div class="dish-ingredients">
                                                                <span class="check-box"><input type="checkbox" id="checkbox2-1"><label for="checkbox2-1"><span>Drink</span> <i>$10</i></label></span>
                                                                <span class="check-box"><input type="checkbox" id="checkbox2-2"><label for="checkbox2-2"><span>Butter</span> <i>$20</i></label></span>
                                                            </div>
                                                            <div class="mor-ingredients">
                                                                <a class="red-clr" href="#" title="" itemprop="url">Edit</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="dish-name">
                                                                <i>.3</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$100.00</span>
                                                            </div>
                                                            <div class="dish-ingredients">
                                                                <span class="check-box"><input type="checkbox" id="checkbox3-1"><label for="checkbox3-1"><span>Drink</span> <i>$30</i></label></span>
                                                            </div>
                                                            <div class="mor-ingredients">
                                                                <a class="red-clr" href="#" title="" itemprop="url">Edit</a>
                                                                <div class="ingradient-list yellow-bg">
                                                                    <span class="check-box"><input type="checkbox" id="checkbox4-1"><label for="checkbox4-1"><span>Extra Drink</span></label></span>
                                                                    <span class="check-box"><input type="checkbox" id="checkbox4-2"><label for="checkbox4-2"><span>Extra Drink</span></label></span>
                                                                    <span class="check-box"><input type="checkbox" id="checkbox4-3"><label for="checkbox4-3"><span>Extra Drink</span></label></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    

                                                        -->
                                                    </ul>
                                                        <ul class="order-total">
                                                       
                                                    </ul>
                                                    <ul class="order-method brd-rd2 red-bg">
                                                        <li><span class="radio-box cash-popup-btn"><label for="pay1-1"><a href="{{ url('pay_cash') }}"> Cash</a></label></span> <span class="radio-box card-popup-btn"><input type="radio" name="method" id="pay1-2"><label for="pay1-2"><i class="fa fa-credit-card-alt"></i> Card</label></span></li>
                                                        <!--<li><a class="brd-rd2" href="#" title="" itemprop="url">CONFIRM ORDER</a></li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="block top-padd80 bottom-padd80 dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="widget about_widget wow fadeIn" data-wow-delay="0.1s">
                                            <div class="logo"><h1 itemprop="headline"><a href="#" title="Home" itemprop="url"><img src={{asset("assets/images/logo.png")}} alt="logo.png" itemprop="image"></a></h1></div>
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
        <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
            </div>
        </div><!-- Bottom Bar -->

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

        <!--<div class="payment-popup-wrapper cash-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment</h4>
                <div class="payment-popup-info">
                    <h5 itemprop="headline">Billing Details</h5>
                    <form class="payment-popup-info-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <ul class="payment-info-list">
                                <li><span>Name:</span> <input  type="text" id="user_name" style="padding:3px;color: #555;"></li>
                                    <li><span>Email:</span> <input  type="email" id="user_email" style="padding:3px;color: #555;"> </li>
                                    <li><span>Phone:</span><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" style="padding:3px;color: #555;">  </li>
                                    <li><span>Address:</span> <input  type="text" id="adress" style="padding:3px;color: #555;"></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Order Note <sup>*</sup></label>
                                <textarea class="brd-rd3" placeholder="Description..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>$158</i></li>
                        <li><span>Delivery fee</span> <i>$70</i></li>
                        <li><span>Tax</span> <i>$12</i></li>
                    </ul>
                    <div class="confrm-order-btn">
                        <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="payment-popup-wrapper card-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Card Payment</h4>
                <div class="payment-popup-info">
                    <h5 itemprop="headline">Billing Details</h5>
                    <form class="payment-popup-info-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <ul class="payment-info-list">
                                    <li><span>Name:</span> John Smith</li>
                                    <li><span>Email:</span> john@domain.com</li>
                                    <li><span>Phone:</span> 0231456879</li>
                                    <li><span>Country:</span> India</li>
                                    <li><span>Address:</span> 121 King Street Melbourne Victoria Austrailia <a class="red-clr" href="#" title="" itemprop="url"><i class="fa fa-pencil"></i> Edit</a></li>
                                </ul>
                                <h5 itemprop="headline">Payment Method</h5>
                                <ul class="payment-method">
                                    <li>
                                        <div class="radio-box">
                                            <input type="radio" name="mthd22" id="mthd2-1">
                                            <label for="mthd2-1"><img src="assets/images/card-img.jpg" alt="card-img.jpg" itemprop="image"></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-box">
                                            <input type="radio" name="mthd22" id="mthd2-2">
                                            <label for="mthd2-2"><img src="assets/images/bank-img.jpg" alt="bank-img.jpg" itemprop="image"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Order Note <sup>*</sup></label>
                                <textarea class="brd-rd3" placeholder="Description..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>$158</i></li>
                        <li><span>Delivery fee</span> <i>$70</i></li>
                        <li><span>Tax</span> <i>$12</i></li>
                    </ul>
                    <div class="confrm-order-btn">
                        <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-popup-wrapper thanks-message text-center">
            <div class="payment-popup-inner red-bg">
                <a class="thanks-close" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <i><img src="assets/images/tick-icon.png" alt="tick-icon.png" itemprop="image"></i>
                <h3 itemprop="headline">Thanks For Your Order</h3>
                <p itemprop="description">You Will Receive an email Confirmation Shortly at <a href="#" title="" itemprop="url">info@domain.com</a></p>
                <img class="thanks-message-mockup right" src="assets/images/resource/thanks-message-mockup.png" alt="thanks-message-mockup.png" itemprop="image">
            </div>
        </div>
    </main><!-- Main Wrapper -->
    

    <script src={{asset("assets/js/jquery.min.js")}}></script>
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/js/plugins.js")}}></script>
    <script src={{asset("https://maps.googleapis.com/maps/api/js?v=3.exp")}}></script>
    <script src={{asset("assets/js/google-map-int.js")}}></script>
    <script src={{asset("../../www.google.com/recaptcha/api.js")}}></script>
    <script src={{asset("assets/js/main.js")}}></script>
</body>	

</html>