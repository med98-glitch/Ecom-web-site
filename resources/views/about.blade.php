<!doctype html>
<html class="no-js" lang="en">
<!--the define the element active in the nav bar-->
<?php
$page='about';
?>
<body>

<!-- Main Wrapper Start -->
  @include('header');
    
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
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
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
                                       <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
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
                                       <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
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
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

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



    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
       <!--about section area -->
    <div class="about_section mt-60">
        <div class="container">  
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="assets/img/about/about1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_content">
                        <h1>Welcome To Pallas Store!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit velit maiores nemo perferendis facere a assumenda in sint illo provident pariatur ullam voluptates id eveniet optio neque perspiciatis dolores quod, quisquam! Repellendus alias laudantium nesciunt nostrum magnam debitis quidem aut temporibus expedita accusantium, illum ipsam eos, eveniet explicabo assumenda, laboriosam modi fugiat dolores dolor sit.</p>
                        <div class="view__work">
                            <a href="#">view work </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!--about section end-->


    <!--counterup area -->
    <div class="counterup_section">
        <div class="container">   
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                       <div class="counter_img">
                            <img src="assets/img/about/count.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2170</h2>
                            <p>happy customers</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="assets/img/about/count2.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">8080</h2>
                            <p>AWARDS won</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup">
                        <div class="counter_img">
                            <img src="assets/img/about/count3.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2150</h2>
                            <p>HOURS WORKED</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single_counterup count-two">
                        <div class="counter_img">
                            <img src="assets/img/about/count4.png" alt="">
                        </div>
                        <div class="counter_info">
                            <h2 class="counter_number">2170</h2>
                            <p>COMPLETE PROJECTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--counterup end-->

    <!--about progress bar -->
    <div class="about_progressbar">
        <div class="container">   
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="progressbar_inner">
                       <h2>We have Skills to show</h2>
                        <div class="progress_skill one">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span class="progress_persent">html/css</span>    
                                </div>
                            </div>
                            <span class="progress_discount">60%</span>
                        </div>
                        <div class="progress_skill two">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">ecommerce theme </span>
                                </div>

                            </div>
                             <span class="progress_discount">90%</span>
                        </div> 
                        <div class="progress_skill three">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Typhography </span>
                                </div>

                            </div>
                             <span class="progress_discount">70%</span>
                        </div> 
                         <div class="progress_skill four">
                            <div class="progress">
                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    <span class="progress_persent">Branding  </span>
                                </div>

                            </div>
                             <span class="progress_discount">80%</span>
                        </div> 
                    </div>           
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__img">
                        <img src="assets/img/about/about2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--about progress bar end -->
    
  <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
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

    @include('footer');
    



</body>

</html>