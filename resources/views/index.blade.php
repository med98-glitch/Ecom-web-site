
<!doctype html>
<html class="no-js" lang="en">
<!--to difine the active element in navbar-->
     @php
     $page='home';
     @endphp
@include('header');
<body>
    <!--Offcanvas menu area start-->

    <div class="off_canvars_overlay">
     
    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text">
                           <p>Welcome to <span>Electronics Store</span> </p>
                       </div>

                        <div class="top_right">
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
                        <div class="search-container">
                           <form action="#">
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">All Categories</option>
                                        @foreach($categorie as $cat)
                                        <option  value="{{$cat ->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                            <!--mini cart-->
                             <div class="mini_cart">
                                <div class="cart_item">
                                   <div class="cart_img">
                                       <a href="#"><img src="assets/img/s-product/product.jpg" loading="lazy" loading="lazy" alt=""></a>
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
                        <div id="menu" class="text-left ">
                             <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href='{{url('shop')}}'>Shop</a>

                                        </li>

                                <li class="menu-item-has-children">
                                    <a href="blog.html">blog</a>

                                </li>

                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->


    <!--slider area start-->
    <section class="slider_section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                   <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Categories</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                                @foreach($categorie as $cat)
                                <li><a href="{{url('shop/'. $cat->id)}}"><span><i class="{{$cat->icnos_cod}}"></i></span>{{ $cat->name}}</a></li>
                                @endforeach
                                
                                <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
                                <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
                                <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                            </ul>
                        </div>
                    </div>
               </div>
                <div class="col-lg-9">
                    <!--shipping area start-->
                    <div class="shipping_area">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i>
                            </div>
                            <div class="shipping_content">
                                <p>Free Shipping On Orders Over $99</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-replay-5"></i>
                            </div>
                            <div class="shipping_content">
                                <p>30 – Day Returns Moneyback Guarantee</p>
                            </div>
                        </div>
                        <div class="single_shipping last_child">
                            <div class="shipping_icone">
                                <i class="zmdi zmdi-phone-in-talk"></i>
                            </div>
                            <div class="shipping_content">
                                <p>24/7 Support Online Consultations</p>
                            </div>
                        </div>
                    </div>
                    <!--shipping area end-->
                    <div class="slider_area owl-carousel">
                        <div class="single_slider" data-bgimg="assets/img/slider/slider1.jpg" loading="lazy">
                            <div class="slider_content content_position_center">
                                <h1>New</h1>
                                <h2>Designer <span style="color: white;"> uniture!</span> </h2>
                                <span>elite collections! </span>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg" loading="lazy">
                            <div class="slider_content content_position_left">
                                <h1>New</h1>
                                <h2>Designer Funiture! </h2>
                                <span>elite collections! </span>
                                <a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--category product area start-->
    <section class="category_product_area mt-30 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category_product_carousel category_column4 owl-carousel">
                        @foreach($categorie as $row)
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{url('shop')}}"><img src="{{$row['image']}}" loading="lazy"alt="" width="20px"></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html">{{$row['name']}}</a></h2>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category product area end-->

    <!--deals product section area start-->
    <section class="deals_product_section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="deals_product_container">
                        <div class="section_title">
                            <h2>Today’s <span>Deals</span></h2>
                        </div>
                        <div class="deals_product_inner">
                            <div class="deals_tab_list">
                                <ul class="nav" role="tablist">
                                   
                                   
                                  
                                    @foreach($categorie as $cat)
                                   
                                    <li>
                                        @php  $activeCat = $cat->name; @endphp
                                        <a href="JavaScript:void(0)"   role="button"  aria-selected="false" class='catte' data-value='{{$cat['id']}}'>
                                            <i class="{{$cat['icnos_cod']}}"></i>
                                            <h3>{{$cat['name']}}</h3>
                                        </a>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                            <div class="deals_product_wrapper">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Funiture" role="tabpanel">
                                        <div class="deals_product_list">
                                        <div id='cnt'>
                                            
                                            
                                            @foreach($GetAll as $row)

                                            <div class="single_deals_product">
                                                <div class="product_thumb">
                                                    <a href="product-details.html"><img src="{{$row['img']}}" loading="lazy" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">sale</span>
                                                    </div>
                                                    <div class="quick_button">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                                    </div>
                                                    <div class="product_timing">
                                                        <div data-countdown="2030/12/15"></div>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h3><a href="product-details.html">{{$row['name']}}</a></h3>
                                                    </div>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                     <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                        <span class="old_price">$70.00</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                           <li class="wishlist"><a title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                                        </ul>
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
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>BEST  <span>SELLERS</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            @foreach($all_product_reduction as $row)
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/product3.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">{{$row['name']}}</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                          
                                            @php
                                            /*ratting*/
                                            $ratting=$row->ratting;    
                                            @endphp
                                            @for ($i = 0; $i < $ratting; $i++)
                                            <li><a href='#'><i class=' zmdi zmdi-star-outline'></i></a></li>
                                            @endfor
                                           
                                           
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                         @php
                                          //clalculer le prix du reduction
                                             //prix reéle
                                             $prixEnitial=$row->price;
                                             //prorssentage du reduction
                                             $porssantageReduction=$row->reductions;
                                             //clacluler prix du reduction
                                             $prixReduction=$prixEnitial*$porssantageReduction / 100;
                                             //le prix finnalle du reduction
                                             $newPrix=$prixEnitial-$prixReduction;
                                         @endphp
                                        <span class="current_price"><?= $newPrix?></span>
                                        <span class="old_price">{{$row['price']}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                       
                        <div class="sidebar_banner_thumb mt-30">
                            <a href="shop.html"><img src="assets/img/bg/banner1.jpg" loading="lazy" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deals product section area end-->

    <!--new product area start-->
    <div class="new_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>New <span>Products</span></h2>
                    </div>
                </div>
            </div>
            <div class="new_product_wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <div class="single_product_left_sidebar">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product9.jpg" loading="lazy" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product10.jpg" loading="lazy" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="single_product product_center">
                            <div class="product_thumb">
                                <a href="product-details.html"><img src="assets/img/product/product11.jpg" loading="lazy" alt=""></a>
                                <div class="quick_button">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_name">
                                    <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                </div>
                                <div class="product_rating">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    </ul>
                                </div>
                                 <div class="price_box">
                                    <span class="current_price">$65.00</span>
                                    <span class="old_price">$70.00</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                       <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                       <div class="single_product_right_sidebar">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product12.jpg" loading="lazy" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product13.jpg" loading="lazy"alt=""></a>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Vulputate justo Camera</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                           <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
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
    <!--new product area end-->

    <!--banner area start-->
    <div class="banner_area banner_column2 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner2.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner3.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home product area start-->
    <section class="home_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                            <h2>Computers <span>& Accessories</span></h2>
                        </div>
                         <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#leftop1" role="tab" aria-controls="leftop1" aria-selected="true">
                                        leftop
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#desktop1" role="tab" aria-controls="desktop1" aria-selected="false">
                                        desktop
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Camera1" role="tab" aria-controls="Camera1" aria-selected="false">
                                        Camera
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Digital" role="tab" aria-controls="Digital" aria-selected="false">
                                        Digital SLRs
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Speakers1" role="tab" aria-controls="Speakers1" aria-selected="false">
                                        Speakers
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#monitors" role="tab" aria-controls="monitors" aria-selected="false">
                                       monitors
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="leftop1" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product9.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product10.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="desktop1" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product24.jpg"  loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Camera1" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product12.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Digital" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg"  loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Speakers1" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="monitors" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg"loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product13.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
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
    </section>
    <!--home product area end-->

    <!--banner area start-->
    <div class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner4.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home product area start-->
    <section class="home_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                            <h2>Camera, Audio  <span> & Video</span></h2>
                        </div>
                         <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#Camera2" role="tab" aria-controls="Camera2" aria-selected="true">
                                        Camera
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Lenses2" role="tab" aria-controls="Lenses2" aria-selected="false">
                                        Lenses
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Digital2" role="tab" aria-controls="Digital2" aria-selected="false">
                                        Digital SLRs
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Headphones2" role="tab" aria-controls="Headphones2" aria-selected="false">
                                        Headphones
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Speakers2" role="tab" aria-controls="Speakers2" aria-selected="false">
                                        Speakers
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#monitors2" role="tab" aria-controls="monitors2" aria-selected="false">
                                       monitors
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Camera2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Lenses2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product12.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product13.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Digital2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Headphones2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Speakers2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="monitors2" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
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
    </section>
    <!--home product area end-->

    <!--banner area start-->
    <div class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner5.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home product area start-->
    <section class="home_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                            <h2>Electronics  <span> Store</span></h2>
                        </div>
                         <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#Washing" role="tab" aria-controls="Washing" aria-selected="true">
                                        Washing machines
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Laundry3" role="tab" aria-controls="Laundry3" aria-selected="false">
                                        Laundry3
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Cooking3" role="tab" aria-controls="Cooking3" aria-selected="false">
                                        Cooking3
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Refrigeration" role="tab" aria-controls="Refrigeration" aria-selected="false">
                                        Refrigeration
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Hoods3" role="tab" aria-controls="Hoods3" aria-selected="false">
                                        Cooker Hoods
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#monitors3" role="tab" aria-controls="monitors3" aria-selected="false">
                                       monitors
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Washing" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Laundry3" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Cooking3" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Refrigeration" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Hoods3" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy"  alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="monitors3" role="tabpanel">
                            <div class="product_carousel product_column4 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Aliquam Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Condimentum Watches</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Headphone ipsum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Epicuri per</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/product19.jpg"  loading="lazy"alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="product-details.html">Itaque earum</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                         <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
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
    </section>
    <!--home product area end-->

    <!--banner area start-->
    <div class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner6.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--custom product area start-->
    <section class="custom_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>Featured  <span>Products</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product15.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product16.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Donec eu libero</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product17.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Auctor gravida enim</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product18.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product19.jpg" loading="lazy" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Cras neque metus</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>Bestseller <span>Products</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Donec eu libero</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Donec eu libero</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product23.jpg"  loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Donec tempus</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy"  alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim Camera</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim Camera</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim Camera</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim Camera</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>top rated <span>Products</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product25.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Convallis quam sit</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product24.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis est</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product23.jpg"  loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product22.jpg" loading="lazy"  alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Aliquam lobortis</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Cras neque metus</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product20.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product21.jpg" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product22.jpg"  loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product23.jpg" loading="lazy"  alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">Condimentum posuere</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                     <div class="price_box">
                                        <span class="current_price">$65.00</span>
                                        <span class="old_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--custom product area end-->


    <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand.png" loading="lazy" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" loading="lazy" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" loading="lazy" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" loading="lazy" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png"  loading="lazy"alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png"  loading="lazy"alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" loading="lazy" alt=""></a>
                        </div>
                    </div>
                    <div class="newsletter_inner">
                        <div class="newsletter_content">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <div class="newsletter_form">
                            <form action="#">
                                <input placeholder="Email..." type="text">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        @foreach($GetAll as $row)
                        <div class="row">
                           
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{$row['img']}}" loading="lazy" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product24.jpg" loading="lazy"  alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product25.jpg" loading="lazy" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product22.jpg" loading="lazy" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/productbig1.jpg" loading="lazy" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/productbig2.jpg" loading="lazy" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/productbig4.jpg" loading="lazy" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/productbig5.jpg" loading="lazy" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>{{$row['name']}}</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">{{$row['reductions']}}</span>
                                        <span class="old_price" >{{$row['price']}}</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>{{$row['products.description']}}</p>
                                    </div>
                                    <div class="variants_selects">
                                       
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
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
    <!-- modal area end-->
    @include('footer');
    <script>
		$(document).ready(function() {
      $(".catte").click( function(){
        $('.catte').not(this).removeClass('active');
        $(this).addClass('active');

      
        var catego = $(this).data('value');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            type: "POST",
            url: "/getbyajax",
            dataType:'JSON',
            data: 'catego=' + catego 
            
          }).done(function(reponse){
            $('#cnt').html("")
           console.log(reponse)
           $(reponse).each(function (key, value) {
               var price = value.price;
               price+=500
             console.log(value.name)
            $('#cnt').append(`
                            <div class='single_deals_product'>
                                                <div class='product_thumb'>
                                                    <a href='product-details.html'><img src='`+ value.img + `' loading='lazy' alt=''></a>
                                                    <div class='label_product'>
                                                        <span class='label_sale'>sale</span>
                                                    </div>
                                    
                                                    <div class='quick_button'>
                                                        <a href='#' data-bs-toggle='modal' data-bs-target='#modal_box'  title='quick view'> <i class='zmdi zmdi-eye'></i></a>
                                                    </div>
                                                    <div class='product_timing'>
                                                        <div data-countdown='2030/12/15'></div>
                                                    </div>
                                                </div>
                                                <div class='product_content'>
                                                    <div class='product_name'>
                                                        
                                                        <h3><a href='product-details.html'>` + value.name + `</a></h3>
                                                    </div>
                                                    <div class='product_rating'>
                                                        <ul>
                                                          
                                                           
                                                            <li><a href='#'><i class='zmdi zmdi-star-outline'></i></a></li>
                                                            <li><a href='#'><i class='zmdi zmdi-star-outline'></i></a></li>
                                                            <li><a href='#'><i class='zmdi zmdi-star-outline'></i></a></li>
                                                            <li><a href='#'><i class='zmdi zmdi-star-outline'></i></a></li>
                                                            <li><a href='#'><i class='zmdi zmdi-star-outline'></i></a></li>
                                                        </ul>
                                                    </div>
                                                     <div class='price_box'>
                                                        <span class='current_price'>` +price+`</span>
                                                        <span class='old_price'>$70.00</span>
                                                    </div>
                                                    <div class='action_links'>
                                                        <ul>
                                                           <li class='wishlist'><a title='Add to Wishlist'><i class='fa fa-heart-o' aria-hidden='true'></i></a></li>
                                                            <li class='add_to_cart'><a href='cart.html' title='add to cart'><i class='zmdi zmdi-shopping-cart-plus'></i> add to cart</a></li>
                                                            <li class='compare'><a href='#' title='compare'><i class='zmdi zmdi-swap'></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>`);
              })
           
          })
           
        });
      });
	</script>

</body>

</html>


