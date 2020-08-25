<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Our Offers</title>
        <link rel="shortcut icon" href={{asset("assets/images/favicon.png")}} type="image/x-icon">
        
    
        <link rel="stylesheet" href={{asset("assets/css/icons.min.css")}}>
        <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>
        <link rel="stylesheet" href={{asset("assets/css/animate.min.css")}}>
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
    
                                    <ul class="dropdown-menu" style="min-width:10px; margin-left:-8%">
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
                            <a href="#" title="Facebook" itemprop="url" target="_blank"><img src="assets/images/icon3.png"></a>
                           
                        </div>
                    </div>                
                </div><!-- Topbar -->
                <div class="logo-menu-sec">
                  <div class="container">
                        <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1></div>
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
                                </ul>
                                
                            </div>
                        </nav><!-- Navigation -->
                    </div>
                </div>
                <div class="bread-crumbs-wrapper">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href={{asset("/")}} title="" itemprop="url">Home</a></li>
                                <li class="breadcrumb-item active">Offers</li>
                            </ol>
                        </div>
                    </div>
               
                <!-- Logo Menu Section -->
            </header><!-- Header -->
        
               
         
         
        <section>
              
            <div class="block less-spacing gray-bg top-padd30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box"style="margin-top:18%;">
                                    <div class="resturent-services remove-ext">
    									<div class="col-md-6 col-sm-6">
    										<div class="servise-box wow fadeIn" data-wow-delay="0.6s">
    											<figure>
    												<img src="assets/images/resource/resto-service5.jpg" alt="">
    											</figure>
    											<div class="uper-meta">
    												
    												<h4><a href="#" title="">Office Packages</a></h4>
    												
    											</div>
    										</div>
    									</div>
    									<div class="col-md-6 col-sm-6">
    										<div class="servise-box wow fadeIn" data-wow-delay="0.7s">
    											<figure>
    												<img src="assets/images/resource/resto-service6.jpg" alt="">
    											</figure>
    											<div class="uper-meta">
    												
    												<h4><a href="#" title="">Parties Packages</a></h4>
    												
    											</div>
    										</div>
    									</div>
    								</div>
                            
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
                                                <p itemprop="description">Food Chow is the best choice for your home-made food. Enjoy your food with us .</p>
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
                                                   <li><i class="fa fa-map-marker"></i> ASU Faculty of engineering</li>
                                                   <li><i class="fa fa-phone"></i> +20109345762</li>
                                                   <li><i class="fa fa-envelope"></i> <a href="#" title="" itemprop="url">Foodchow@gmail.com</a></li>
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

    <script src={{asset("assets/js/jquery.min.js")}}></script>
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/js/plugins.js")}}></script>
    <script src={{asset("assets/js/main.js")}}></script>
    </body>
</html>