<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecommerce web site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('assets/img/favicon.ico')}}>

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href={{asset('assets/css/plugins.css')}}>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>

</head>
    <!--header area start-->
    <header class="header_area">
        
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>Welcome to <span>Electronics Store</span> </p>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top_right text-right">
                            <ul>
                                <li class="currency"><a href="#"><i class="fa fa-dollar"></i> US Dollar <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                               <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English1 <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li>
                                <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header center area start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{URL('assets/img/logo/logo.png')}}" loading="lazy" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="col-lg-9">
                        <div class="header_middle_inner">
                            <div class="search-container">
                               <form action="{{url('categories')}}" method="GET">
                                
                                   <div class="hover_category">
                                        <select class="select_option" name="id" id="categori"  >
                                          
                                            @foreach($categorie as $row)<!--Done-->
                                            <option  value="{{$row['id'] }}" name='id'> {{$row['name'] }}</option>
                                            @endforeach
                                        </select>
                                   </div>
                                    <div class="search_box">
                                        <input name='name' placeholder="Search product..." type="text"  >
                                        <button type="submit" ><i class="zmdi zmdi-search"></i></button>
                                    </div>
                                </form>
                              
                            </div>
                        
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" loading="lazy" loading="lazy"loading="lazy" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Condimentum Watches</a>

                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$60.00</span>

                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" loading="lazy" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Officiis debitis</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$69.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--header center area end-->

        <!--header middel start-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>

                                    <li class=" <?php if($page=='home'){echo 'active';}?>"><a  href="{{url('/')}}"><i class="zmdi zmdi-home"></i> home </i></a>
                                    </li>
                                    <li class="mega_items <?php if($page=='shop'){echo 'active';}?>"><a href="{{url('shop')}}"><i class="zmdi zmdi-shopping-basket"></i> shop </a>

                                    <li class="<?php if($page=='about'){echo 'active';}?>"><a href="{{url('about')}}"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                    <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="{{url('contact')}}"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

    </header>
    <!--header area end-->