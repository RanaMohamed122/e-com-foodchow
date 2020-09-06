
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
                        <a href="{{asset("/cart")}}" title="Facebook" itemprop="url" target="_blank"><img src="{{asset('assets/images/icon3.png')}}"></a>
                       
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec" >
              <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="{{asset('assets/images/logo2.png')}}" alt="logo.png" itemprop="image"></a></h1></div>
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
                    <li class="breadcrumb-item"><a href="{{url('chefBlogs')}}" title="" itemprop="url">Blogs</a></li>
                    <li class="breadcrumb-item active">Blog Detail </li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="sec-box">
    							<div class="col-md-12 col-sm-12 col-lg-12">
    								<div class="blog-detail-wrapper">
    									
    									<div class="blog-detail-info">
    										<span class="post-detail-date red-clr"><i class="fa fa-clock-o"></i> {{$chefBlog->updated_at}}</span>
    										<div class="post-meta">
    											<!--<span><i class="fa fa-eye red-clr"></i>{{ $chefBlog->views}} Views</span>-->
    											<!--<span><i class="fa fa-comment-o red-clr"></i> {{$chefBlog->comments}} Comments</span>-->
    										</div>
    									</div>
                                        <h1 itemprop="headline">{{$chefBlog->blog_title}}</h1><br><br>
                                       
    										<div class="author-info">
    											<a class="red-clr" href="{{url('products_found/chefs_products/'.$chef->id)}}" title="Webinane" itemprop="url" target="_blank"><span style="color: black">More About</span> {{$chef->project_name}}</a>
    										</div><br>
    								
    									<p itemprop="description">{{$chefBlog->blog_body}}</p>
    									
                                    </div>
                                    
    								<!--<div class="author-info-wrapper">
                                    <h3 class="title4" href="" itemprop="headline">More About </h3>
    								</div>-->
                                    <!--
                                    <div class="comments-wrapper">
    									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Comm</span>ents (2)</h3>
    									<ul class="comments-thread">
    										<li>
    											<div class="comment">
    												<img class="brd-rd50" src="assets/images/resource/comment1.jpg" alt="comment1.jpg">
    												<div class="comment-info">
    													<h4 itemprop="headline"><a href="#" title="" itemprop="url">Johny Rewalt</a></h4>
    													<i>17 August 2018 at 12.00pm / <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i>
    													<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
    												</div>
    											</div>
    											<ul class="comment-reply">
    												<li>
    													<div class="comment">
    														<img class="brd-rd50" src="assets/images/resource/comment2.jpg" alt="comment2.jpg">
    														<div class="comment-info">
    															<h4 itemprop="headline"><a href="#" title="" itemprop="url">Rewalt Johny</a></h4>
    															<i>17 August 2018 at 08.00pm / <a class="comment-reply-link red-clr" href="#" title="" itemprop="url">Reply</a></i>
    															<p itemprop="description">Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. uni harum quidem sed rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihilares impedit quo repellendus eligendi optio cumque nihilare impedit quo minus id quod maxime.</p>
    														</div>
    													</div>
    												</li>
    											</ul>
    										</li>
    									</ul>
    								</div>
    								<div class="leav-comment-wrapper">
    									<h3 class="title4" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Leave</span> a Reply</h3>
    									<form class="reply-form">
    										<div class="row">
    											<div class="col-md-4 col-sm-6 col-lg-12">
    												<input class="brd-rd2" type="text" placeholder="Your Name">
    											</div>
    											<div class="col-md-4 col-sm-6 col-lg-12">
    												<input class="brd-rd2" type="email" placeholder="Your Email">
    											</div>
    											<div class="col-md-4 col-sm-12 col-lg-12">
    												<input class="brd-rd2" type="text" placeholder="Subject">
    											</div>
    											<div class="col-md-12 col-sm-12 col-lg-12">
    												<textarea class="brd-rd2" placeholder="Message"></textarea>
    											</div>
    											<div class="col-md-12 col-sm-12 col-lg-12">
    												<button class="brd-rd3 red-bg" type="submit">SEND MESSAGE</button>
    											</div>
    										</div>
    									</form>
    								</div>
    							</div>
                                    -->
                            </div><!-- Section Box -->
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
        </footer>
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
    </main><!-- Main Wrapper -->

    <script src={{asset("assets/js/jquery.min.js")}}></script>
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/js/plugins.js")}}></script>
    <script src={{asset("assets/js/main.js")}}></script>
</body>	

</html>