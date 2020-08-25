<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Chef profile</title>
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
                            <a href="#" title="Facebook" itemprop="url" target="_blank"><img src={{asset("assets/images/icon3.png")}}></a>
                           
                        </div>
                    </div>                
                </div><!-- Topbar -->
                <div class="logo-menu-sec">
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
                                </ul>
                                
                            </div>
                        </nav><!-- Navigation -->
                    </div>
                </div>
               
               
                <!-- Logo Menu Section -->
            </header><!-- Header -->

        <div class="bread-crumbs-wrapper" >
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href={{asset("/categories")}} title="" itemprop="url">Categories</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="restaurant-detail-wrapper">
                                                <div class="restaurant-detail-info" style=" width: 115%;margin-left: 12%;" >
                                                    <div class="restaurant-detail-thumb">
                                                        <ul class="restaurant-detail-img-carousel">
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-big-img1-1.jpg")}} alt="restaurant-detail-big-img1-1.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-big-img1-2.jpg")}} alt="restaurant-detail-big-img1-2.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-big-img1-3.jpg")}} alt="restaurant-detail-big-img1-3.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-big-img1-4.jpg")}} alt="restaurant-detail-big-img1-4.jpg" itemprop="image"></li>
                                                        </ul>
                                                        <ul class="restaurant-detail-thumb-carousel">
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-small-img1-1.jpg")}} alt="restaurant-detail-small-img1-1.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-small-img1-2.jpg")}} alt="restaurant-detail-small-img1-2.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-small-img1-3.jpg")}} alt="restaurant-detail-small-img1-3.jpg" itemprop="image"></li>
                                                            <li><img class="brd-rd3" src={{asset("assets/images/resource/restaurant-detail-small-img1-4.jpg")}} alt="restaurant-detail-small-img1-4.jpg" itemprop="image"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="restaurant-detail-title">
                                                        @foreach ($products as $pro)
                                                        <h1 itemprop="headline">{{$pro->project_name}}</h1>
                                                    
                                                        <div class="rating-wrapper">
                                                            <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-star"></i> Rate <i>4.0</i></a>
                                                            <div class="rate-share brd-rd5">
                                                                <div class="rating-box-wrapper">
                                                                    <span>Rate</span>
                                                                    <div class="rating-box">
                                                                        <span class="brd-rd2 clr1 on"></span>
                                                                        <span class="brd-rd2 clr2 on"></span>
                                                                        <span class="brd-rd2 clr3 on"></span>
                                                                        <span class="brd-rd2 clr4 on"></span>
                                                                        <span class="brd-rd2 clr5 on"></span>
                                                                        <span class="brd-rd2 clr6 on"></span>
                                                                        <span class="brd-rd2 clr7 off"></span>
                                                                        <span class="brd-rd2 clr8 off"></span>
                                                                        <i>4.0</i>
                                                                    </div>
                                                                </div>
                                                                <div class="share-wrapper">
                                                                    <div class="fb-share">
                                                                        <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="switch-slider brd-rd30"></span>
                                                                        </label>
                                                                        <a class="facebook brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-facebook-square"></i> Share on Facebook</a>
                                                                    </div>
                                                                    <div class="fb-share">
                                                                        <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="switch-slider brd-rd30"></span>
                                                                        </label>
                                                                        <a class="twitter brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-twitter"></i> Share on Twitter</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i class="fa fa-cutlery"></i> Menu</a></li>
                                                            <li><a href="#tab1-2" data-toggle="tab"><i class="fa fa-picture-o"></i> Gallery</a></li>
                                                            <li><a href="#tab1-3" data-toggle="tab"><i class="fa fa-star"></i> Reviews</a></li>
                                                            <li><a href="#tab1-5" data-toggle="tab"><i class="fa fa-info"></i> Chef Info</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="search-dish">
                                                                    <input type="text" placeholder="Search here">
                                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                                </form>
                                                                <div class="dishes-list-wrapper">
                                                                    
                                                                    <ul class="dishes-list">
                                                                     

                                                                        <li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                            <div class="featured-restaurant-box">
                                                                                <div class="featured-restaurant-thumb">
                                                                                    <a href="#" title="" itemprop="url"><img src={{asset("assets/images/resource/dish-img1-1.jpg")}} alt="dish-img1-1.jpg" itemprop="image"></a>
                                                                                </div>
                                                                                <div class="featured-restaurant-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$pro->product_name}}</a></h4><br>
                                                                                    <span class="price">{{$pro->price}} L.E.</span><br>

                                                                                    <p itemprop="description">{{$pro->description}}</p>
                                                                                    <span class="post-rate red-bg brd-rd2"><i class="fa fa-star-o"></i>{{$pro->rating}}</span><br>

                                                                                    <ul class="post-meta">
                                                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                        <li><i class="flaticon-transport"></i> {{$pro->delivery_time}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ord-btn">
                                                                                    <a class="brd-rd2" href="{{ url('/chefs_products/cart/'.$pro->id) }}" title="Order Now" itemprop="url">Add to Cart</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>  

                                                                        
                                                                        @endforeach
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="dishes-list-wrapper">
                                                                   
                                                                   
                                                                    <ul class="dishes-list">
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-2">
                                                                <div class="restaurant-gallery">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Nik B</span>aker's Gallery</h4>
                                                                    <div class="remove-ext">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="assets/images/resource/restaurant-gallery-img1.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/restaurant-gallery-img1.jpg" alt="restaurant-gallery-img1.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="assets/images/resource/restaurant-gallery-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/restaurant-gallery-img2.jpg" alt="restaurant-gallery-img2.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="restaurant-gallery-img"><a href="assets/images/resource/restaurant-gallery-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/restaurant-gallery-img3.jpg" alt="restaurant-gallery-img3.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="assets/images/resource/restaurant-gallery-img4.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/restaurant-gallery-img4.jpg" alt="restaurant-gallery-img4.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a href="assets/images/resource/restaurant-gallery-img5.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="assets/images/resource/restaurant-gallery-img5.jpg" alt="restaurant-gallery-img5.jpg" itemprop="image"></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="customer-review-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Custo</span>mer Reviews</h4>
                                                                    <ul class="comments-thread customer-reviews">
                                                                       
                                                                        @foreach ($reviews as $review)
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="{{ asset('/assets/images/resource/'.$review->user_image) }}" alt="review-img3.jpg" itemprop="image" style=" width: 10%;">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">{{$review->user_name}}</a></h4>
                                                                                    <p itemprop="description">{{$review->review}}</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li> 
                                                                        @endforeach
                                                                        <!--
                                                                        
                                                                            <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="assets/images/resource/review-img1.jpg" alt="review-img1.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="assets/images/resource/review-img2.jpg" alt="review-img2.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50" src="assets/images/resource/review-img3.jpg" alt="review-img3.jpg" itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                        -->
                                                                    </ul>
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Write</span> Review Here</h4>
                                                                    <form class="review-form" method="POST" action="{{url('add_review/'.$chef_id)}}" name="add_review" id="add_review" novalidate="novalidate">{{ csrf_field() }}
                                                                            <textarea class="brd-rd5" id="review" name="review" placeholder="Write your Review"></textarea>
                                                                            <button class="brd-rd2 red-bg" type="submit">POST REVIEW</button>
                                                                            <div class="rate-box">
                                                                                <span>RATE US</span>
                                                                                <div class="rating-box">
                                                                                    <span class="brd-rd2 clr1 on"></span>
                                                                                    <span class="brd-rd2 clr2 on"></span>
                                                                                    <span class="brd-rd2 clr3 on"></span>
                                                                                    <span class="brd-rd2 clr4 on"></span>
                                                                                    <span class="brd-rd2 clr5 on"></span>
                                                                                    <span class="brd-rd2 clr6 on"></span>
                                                                                    <span class="brd-rd2 clr7 off"></span>
                                                                                    <span class="brd-rd2 clr8 off"></span>
                                                                                    <i>4.0</i>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-4">
                                                                <div class="book-table">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h4>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-user"></i> <input type="text" placeholder="NAME"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-phone"></i> <input type="text" placeholder="PHONE"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="select-wrp2">
                                                                                    <select>
                                                                                        <option>Questions</option>
                                                                                        <option>Questions No 1</option>
                                                                                        <option>Questions No 2</option>
                                                                                        <option>Questions No 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-envelope"></i> <input type="email" placeholder="EMAIL"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-calendar"></i> <input class="datepicker" type="text" placeholder="SELECT DATE"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i class="fa fa-clock-o"></i> <input class="timepicker" type="text" placeholder="SELECT Time"></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="textarea-field brd-rd2"><i class="fa fa-pencil"></i> <textarea placeholder="Your Instruction"></textarea></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <button class="brd-rd2 red-bg" type="submit">POST PREVIEW</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-5">
                                                                <div class="restaurant-info-wrapper">
                                                                    <h3 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h3>
                                                                    <div class="loc-map" id="loc-map"></div>
                                                                    <ul class="restaurant-info-list">
                                                                        <li>
                                                                            <i class="fa fa-map-marker red-clr"></i>
                                                                            <strong>Address :</strong>
                                                                            <span>2nd Street, East-West Mansion Flat A2 231 Newyork NY 10003</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-phone red-clr"></i>
                                                                            <strong>Call us & Hire us</strong>
                                                                            <span>+32 (0) 598 65 8968</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-envelope-o red-clr"></i>
                                                                            <strong>Have any questions?</strong>
                                                                            <span>Support@webinane.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-fax red-clr"></i>
                                                                            <strong>Fax</strong>
                                                                            <span>+652 235 89658965</span>
                                                                        </li>
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

        <div class="payment-popup-wrapper cash-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment</h4>
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