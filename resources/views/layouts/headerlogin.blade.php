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
                           
            
                            @guest
                            @if (Route::has('login'))
                             <li class="top_links"><a href="{{ route('login') }}"><i class="zmdi zmdi-account"></i>Connexion</a></li>
                            @endif
                            @if(Route::has('register'))
                            <li class="top_links"><a href="{{ route('register') }}"><i class="zmdi zmdi-account-add"></i> S'inscrire</a></li>
                            @endif
                            @else
                            <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> {{ Auth::user()->name  }} <i class="zmdi zmdi-caret-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Déconnexion </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                           
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header top start-->
    <!--header center area start-->
    <div class="header_middle header_middle_login">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo_login">
                        <a href="index.html"><img src="{{URL('assets/img/logo/logo-5.PNG')}}" loading="lazy" alt="" width="150px"></a>
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
                                
                                <li class=" <?php if($page=='home'){echo 'active';}?>"><a  href="{{url('/')}}"><i class="zmdi zmdi-home" ></i> home </i></a>
                                </li>
                                <li class="mega_items <?php if($page=='shop'){echo 'active';}?>"><a href="{{url('shop')}}"><i class="zmdi zmdi-shopping-basket"></i> shop </a>

                                <li class="<?php if($page=='about'){echo 'active';}?>"><a href="{{url('about')}}"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="{{url('contact')}}" class="text-center"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                              
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->
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

                        
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                          
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

</header>