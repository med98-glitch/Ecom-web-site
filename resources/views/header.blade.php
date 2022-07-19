<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chamal Info</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/logo/logomini.png')}}" >

    <!-- CSS
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href={{asset('assets/css/plugins.css')}}>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('assets/css/shop.css')}}>

</head>
    <!--header area start-->
    <header class="header_area">
        
        <!--header top start-->
        
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>
                            Bienvenue à <span>Chamal Info </span> </p>
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
                                        <li><a  href="{{url('profile')}}">
                                            Profile </a>
                                     </li>
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
        <!--header center area start-->
        
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{URL('assets/img/logo/logochamal.png')}}" loading="lazy" alt="" width="200px"></a>
                        </div>
                        
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
                                            <div class="row align-items-center">
                                                <div class="col-lg-4">
                                                 
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <div class="top_right ">
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
                                                            <li>
                                                                <a href="javascript:void(0)">Profile</a>
                                                             </li>  
                                                        @endguest
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                            
                                            </div>
                                        </div> 
                                        <div class="search-container">
                                            <form action="{{url('categories')}}" method="GET">
                                
                                                <div class="hover_category">
                                                     <select class="select_option" name="id" id="categori"  >
                                                         <option selected >All cataegorirees</option>
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
                                           
                                            <!--mini cart-->
                                            <div class="mini_cart_wrapper">
                                                <a href="{{url('details_cart')}}"><i class="zmdi zmdi-shopping-basket"></i> 
                                                    @guest
                                                    @if (Route::has('login'))
                                                    <span>0_Produit total:0Dh </span> 
                                                    @endif
                                                    @else
                                                    <span class="count_product">{{$products_cards}}_Produit Total:{{$total_price}}DH</span>
                                                   @endguest
                                                </a>
                                             
                                                <!--mini cart end-->
                                            </div>
                                            <!--mini cart end-->
                                        </div>
                                        <div id="menu" class="text-left ">
                                            <ul class="offcanvas_main_menu">
                                                <li class=" menu-item-has-children <?php if($page=='home'){echo 'active';}?>"><a  href="{{url('/')}}"> Acceuil </i></a>
                                                </li>
                                                <li class="menu-item-has-children  <?php if($page=='shop'){echo 'active';}?>"><a href="{{url('shop')}}">Boutique </a>
            
                                                <li class=" menu-item-has-children <?php if($page=='about'){echo 'active';}?>"><a href="{{url('about')}}"> Qui sommes-nous</a></li>
                                                <li class=" menu-item-has-children<?php if($page=='contact'){echo 'active';}?>"><a href="{{url('contact')}}">  Contactez-Nous</a></li>
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
                    <div class="col-lg-9">
                        <div class="header_middle_inner">
                            <div class="search-container">
                               <form action="{{url('categories')}}" method="GET">
                                
                                   <div class="hover_category">
                                        <select class="select_option" name="id" id="categori"  >
                                            <option selected >All cataegorirees</option>
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
                                <a href="{{url('details_cart')}}"><i class="zmdi zmdi-shopping-basket"></i> 
                                    @guest
                                    @if (Route::has('login'))
                                    <span>0_Produit total:0Dh </span> 
                                    @endif
                                    @else
                                    <span class="count_product">{{$products_cards}}_Produit Total:{{$total_price}}DH</span>
                                   @endguest
                                </a>
                             
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--header center area end-->

        <!--header middel start-->
        




        <div class="header_bottom header_bottom_four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                       <div class="categories_menu categori_four">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Categories</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    @foreach($firstencategorie as $cat)
                                    <li><a href="{{url('shop/'. $cat->id)}}"><span><i class="{{$cat->icnos_cod}}"></i></span>{{ $cat->name}}</a></li>
                                    @endforeach
                                    
                                    @foreach($lastcategories as $row)
                                    <li class="hidden"><a href="shop-left-sidebar.html">{{$row['name']}}</a></li>
                                    @endforeach
                                    <li><a href="#" id="more-btn"><i class="fa fa-plus" aria-hidden="true"></i> More Categories</a></li>
                                </ul>
                            </div>
                        </div>
                   </div>
                    <div class="col-lg-9">
                        <div class="main_menu menu_four header_position"> 
                            <nav>  
                                <ul>
                                    <li class=" <?php if($page=='home'){echo 'active';}?>"><a  href="{{url('/')}}"><i class="zmdi zmdi-home"></i> Acceuil </i></a>
                                    </li>
                                    <li class="mega_items <?php if($page=='shop'){echo 'active';}?>"><a href="{{url('shop')}}"><i class="zmdi zmdi-shopping-basket"></i> Boutique </a>

                                    <li class="<?php if($page=='about'){echo 'active';}?>"><a href="{{url('about')}}"><i class="zmdi zmdi-comments"></i> Qui sommes-nous</a></li>
                                    <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="{{url('contact')}}"><i class="zmdi zmdi-account-box-mail"></i>  Contactez-Nous</a></li>
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