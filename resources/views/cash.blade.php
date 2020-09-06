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

    <div class="payment-popup-inner" style=" max-width: 70%; background-image: url(assets/images/payment-popup-bg.jpg);top: 42%;">
        <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment</h4>
        <div class="payment-popup-info">
            <h5 itemprop="headline">Billing Details</h5>
            <form enctype="multipart/form-data" class="payment-popup-info-inner" method="post" action="{{ url('add-order')}}" name="add_order" id="add_order" novalidate="novalidate">{{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <ul class="payment-info-list">
                        @if($flag==2)
                            <li><span>Name:</span> <textarea class="brd-rd3"  style="height:0%; color:black;padding-left:7px">{{$user->name}} </textarea></li>
                            <li><span>Email:</span> <input  type="email" id="user_email" style="padding:8px;color: #555;" value={{$user->email}}> </li>
                            <li><span>Phone:</span><input type="text" id="phone" name="phone" style="padding:8px;color: #555;" value={{$user->phone}}>  </li>
                            <li><span>Address:</span><textarea class="brd-rd3"  style="height: 30%">{{$user->address}} </textarea></li>
                        @elseif($flag==1)
                            <li><span>Name:</span> <input  type="text" id="user_name" name="user_name" required style="padding:8px;color: #555;"></li>
                            <li><span>Email:</span> <input  type="email" id="user_email" name="user_email" required style="padding:8px;color: #555;"> </li>
                            <li><span>Phone:</span><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required style="padding:8px;color: #555;">  </li>
                            <li><span>Address:</span><textarea class="brd-rd3" id="address" name="address" required style="height: 30%"> </textarea></li>     
                        @endif
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <label>Order Note <sup>*</sup></label>
                        <textarea class="brd-rd3" name="description" id="description" placeholder="Description..."></textarea>
                    </div>
                </div>
               
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>{{$subtotal}}L.E.</i></li>
                        <li><span>Delivery fee</span> <i>20L.E.</i></li>
                        <li><span>Total</span> <i>{{$subtotal + 20}}L.E.</i></li>

                    </ul>              
                
                   <div style="float: left;width: 100%;max-width: 50%;padding-left: 65px;text-align: center;color:white">
                    <input style="color: #fff; background-color: #1a1a1a;font-family: Poppins;font-size: 12px; padding: 22.5px 35px; display: inline-block; margin-top: 2px; border: 2px solid #1a1a1a; border-radius: 3px;" type="submit" value="CONFIRM ORDER">
                   </div>
                </div>       


            </form>
        </div>
    </div>          
    
</body>

<script src={{asset("assets/js/jquery.min.js")}}></script>
<script src={{asset("assets/js/bootstrap.min.js")}}></script>
<script src={{asset("assets/js/plugins.js")}}></script>
<script src={{asset("https://maps.googleapis.com/maps/api/js?v=3.exp")}}></script>
<script src={{asset("assets/js/google-map-int.js")}}></script>
<script src={{asset("../../www.google.com/recaptcha/api.js")}}></script>
<script src={{asset("assets/js/main.js")}}></script>

<script src="{{ asset('js/backend_js/jquery.min.js') }} "></script> 
<!-- <script src="{{ asset('js/backend_js/jquery.ui.custom.js') }} "></script> --> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }} "></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/matrix.js') }} "></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }} "></script>
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script>
<script src="{{ asset('js/backend_js/sweetalert.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>	

</html>