    @extends('app')
    @section('content')
     @php
     $page='home';
     @endphp

    <!--slider area start-->
    <section class="slider_section mb-50">
        <div class="container-fluid">
            <div class="row no-gutters"> 
                <div class="col-12">
                    <div class="slider_area slider_four owl-carousel">
                        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/shopping-bag-cart.jpg">
                            <div class="slider_content slider_content_four content_position_center">
                                <h1> Meilleurs prix.</h1>
                                <span>
                                   
                                  Prix imbattables sur vos produits préférés</span>
                                <h4>Achetez plus pour moins cher</h4>
                                <a href="shop.html">Acheter</a>
                            </div>
                        </div>
                        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/gg.jpg">
                            <div class="slider_content slider_content_four content_position_left " id='dr2'>
                                <h1>le bon choix</h1>
                                <span>bienvenue sur chamal info choisissez votre produit maintenant </span>
                                <a href="shop.html">Acheter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        
    </section>
    <!--category product area start-->
    <section class="category_product_area mt-30 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category_product_carousel category_column4 owl-carousel">
                        @foreach($categorie as $row)
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{url('shop/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy"alt="" ></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="shop.html" >{{$row['name']}}</a></h2>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category product area end-->
    <livewire:todays-deals /> 
          
    <div class="new_product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>NOUVEAUX  <span >PRODUITS</span></h2>
                    </div>
                </div>    <div class="new_product_wrapper">
            </div>
        
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <div class="single_product_left_sidebar">
                           @foreach($leftProduct as $row)
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                    @php
                                    qte($row->qte)
                                    @endphp
                                    <div class="quick_button">
                                        <a href="{{url('details/'. $row->id)}}"   title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                        <input type="hidden" id='{{$row->id}}' value='{{$row['reductions']}}' class ='id_'>
                                        <input type="hidden" value='{{$row->id}}' class ='idprod'>
                                        <span class="current_price ">{{$row['reductions']}} Dh</span>
                                        <span class="old_price">{{$row['price']}} DH</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart" class="add_"><i class="zmdi zmdi-shopping-cart-plus"></i><input type="hidden" value='{{$row['id']}}' > Ajouter au panier </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        @foreach($cebterProducts as $row)
                        <div class="single_product product_center">
                            <div class="product_thumb">
                                <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                @php
                                qte($row->qte)
                                @endphp
                                <div class="quick_button">
                                    <a href="{{url('details/'. $row->id)}}"   title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                </div>
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
                                    <input type="hidden"  value='{{$row['reductions']}}' class ='price_center'>
                                    <input type="hidden"  value='{{$row->id}}' class ='id_center'>
                                    <span class="current_price">{{$row['reductions']}}DH</span>
                                    <span class="old_price">{{$row['price']}} DH</span>
                                </div>
                                <div class="action_links">
                                    <ul>               
                                        <li class="add_to_cart "><a href="JavaScript:void(0)" title="add to cart" class="id_btn_center"><i class="zmdi zmdi-shopping-cart-plus"></i> Ajouter au panier</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-3 col-md-12">
                       <div class="single_product_right_sidebar">
                        @foreach($righttProduct as $row)
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                 
                                        @php
                                        qte($row->qte)
                                        @endphp
                               
                                    <div class="quick_button">
                                        <a href="{{url('details/'. $row->id)}}" data-bs-toggle="modal" data-bs-target="#modal_box  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                        <input type="hidden" id='{{$row->id}}' value='{{$row['reductions']}}' class ='idall'>
                                        <span class="current_price">{{$row->reductions}} DH</span>
                                        <span class="old_price">{{$row['price']}} DH</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart" class="addto_"><i class=" zmdi zmdi-shopping-cart-plus"></i> Ajouter au panier</a></li>
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
    <!--new product area end-->

    <!--banner area start-->
    <div class="banner_area banner_column2 mb-50 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/ab.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/ac.jpg" loading="lazy" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <livewire:best-ratting/> 

    <!--banner area start-->
    <div class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/ad.jpg" loading="lazy" height="200px" alt=""></a>
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
                            <h2>meilleur  <span>prix</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                             <!--top reduction products-->
                            @foreach($topReductionProducts as $row)
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                        <span class="current_price">{{$row->reductions}} DH</span>
                                        <span class="old_price">{{$row['price']}} DH</span>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>DERNIERS  <span>PRODUITS</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            <!--last products-->
                            @foreach($latestpr as $row)
                           
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                        <span class="current_price">{{$row->reductions}} DH</span>
                                        <span class="old_price">{{$row['price']}} DH</span>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
             
                <div class="col-lg-4">
                    <div class="small_product_area">
                        <div class="section_title">
                            <h2>prix le  <span>plus bas</span></h2>
                        </div>
                        <div class="small_product_wrapper">
                            <!--top price products-->
                            @foreach($toppriceproducts as $row)
                            
                            <div class="small_product_items">
                                <div class="product_thumb">
                                    <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                </div>
                                <div class="product_content">
                                    <div class="product_name">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                        <span class="current_price">{{$row->reductions}} DH</span>
                                        <span class="old_price">{{$row['price']}} DH</span>
                                    </div>
                                </div>
                            </div>
                           @endforeach
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
                    
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    
   
    





@endsection



