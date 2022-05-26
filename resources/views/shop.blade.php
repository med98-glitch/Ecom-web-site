@extends('app')
    @section('content')
    @php
    $page='shop';
    @endphp
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
                                       <a href="#"><img src="{{URL('assets/img/s-product/product.jpg')}}" alt=""></a>
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
                                       <a href="#"><img src="{{URL('assets/img/s-product/product2.jpg')}}" alt=""></a>
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
                                   <a href="shop.html">Shop</a>
                                   
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
                            <li><a href="{{url('index')}}">home</a></li>
                            @foreach($nameCategories as $row)
                            <li>{{$row['name']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h2>categories</h2>
                            <ul>
                               
                               @foreach($categoriesBynombreProductsproduct as $row)
                                <li>
                                    <a href="{{url('shop/'.$row['idcat'])}}"  >{{$row['name']}} <span>{{$row['total']}}</span></a> 
                                </li>
                               
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="{{url('fillterbyprice')}}" method='GET'> 
                                <div id="slider-range"></div>
                                <div class='slider_input'>
                                    <input type="text" name="price1" id="amount1" readonly/> 
                                    <input type="text" name="price2" id="amount2" readonly />
                                    
                                </div>
                                <button type="submit">Filter</button>
                            </form> 
                        </div>
                        
                        
                        <div class="widget_list recent_product">
                            <h2>Top Rated Products</h2>
                            <div class="recent_product_container">
                               
                               @foreach($topRatedProduct as $row)
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="{{url('details/'. $row->id)}}"><img src="{{URL($row['img'])}}" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="{{url('details/'. $row->id)}}">{{$row['name']}}</a></h3>
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
                                            <span class="current_price">{{$row['newprice']}}</span>
                                            <span class="old_price">{{$row['price']}}</span>   
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_banner">
                        <img src="{{URL('assets/img/bg/produit.png')}}" alt="">
                    </div>
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">

                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>


                        </div>
                        <div class="page_amount">
                   
                            <p>Nombre items trouver : {{$count}}</p>
                         
                        </div>
                    </div>
                    <!--shop toolbar end-->

     

       
     <?php ?>
     @if($productsByCategorie->count() > 0) 
     <div class="row no-gutters shop_wrapper">
        @foreach($productsByCategorie as $row)
       <div class="col-lg-4 col-md-4 col-12 ">
           <div class="single_product">
               <div class="product_thumb">
                   
                   <a href="{{url('details/'. $row->id)}}"><img src="{{URL($row['img'])}}" alt=""  width="390px"></a>
                   <div class="label_product">
                       <span class="label_sale">sale</span>
                   </div>
                   <div class="quick_button">
                       <a href="{{url('details/'. $row->id)}}"   title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                   </div>
               </div>	
               <div class="product_content grid_content">
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
                       <span class="current_price">{{$row['newprice']}}</span>
                       <span class="old_price">{{$row['price']}}</span>   
                   </div>
                   <div class="action_links">
                       <ul>
                          <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                           <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                       </ul>
                   </div>
               </div>
               <div class="product_content list_content">
                   <div class="product_name">
                       <h3><a href="{{url('details/'. $row->id)}}">{{$row['nama']}}</a></h3>
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
                       <span class="current_price">{{$row['newprice']}}</span>
                       <span class="old_price">{{$row['price']}}</span>   
                   </div>
                   <div class="action_links">
                       <ul>
                          <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                           <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                       </ul>
                   </div>

                   <div class="product_desc">
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus. </p>
                   </div>
               </div>
           </div>
       </div>
    @endforeach
   </div>
   @else
   <div class="alert alert-danger" role="alert">
    Aucun produit trouvé
  </div>
   @endif

                <div class="shop_toolbar t_bottom">
                        

                            {{ $productsByCategorie->appends(['id' => $row['catid'] ])->links() }}
                      
                </div>
            
          
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
        
     
            </div>
        </div>
    </div>
    <!--shop  area end-->
    
  <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand1.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand2.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand3.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand4.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand5.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/brand1.png')}}" alt=""></a>
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

    <script>
		$(document).ready(function() {
      $(".categor").click( function(){
    
        var catego = $(this).data('value');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            type: "POST",
            url: "/getbycategories",
            dataType:'JSON',
            data: 'catego=' + catego 
            
          }).done(function(reponse){
            
           console.log(reponse)
           
          }).done(function(reponse){
            $('#contenue_ajax').html("");
            var dataAjax=reponse.data;
            $(dataAjax).each(function (key, value) {
              
                console.log({"Data":value.data});
              
                $('#contenue_ajax').append(`
                <div class="col-lg-4 col-md-4 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                
                                <a href="product-details.html"><img src='`+value.img+`' alt=""  width="390px"></a>
                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>	
                            <div class="product_content grid_content">
                                <div class="product_name">
                                    <h3><a href="product-details.html">`+value.name+`</a></h3>
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
                                    <span class="current_price">{{$row['price']}}</span>
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
                            <div class="product_content list_content">
                                <div class="product_name">
                                    <h3><a href="product-details.html">{{$row['nama']}}</a></h3>
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
                                    <span class="current_price">{{$row['price']}}</span>
                                    <span class="old_price">$70.00</span>   
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                    </ul>
                                </div>

                                <div class="product_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus. </p>
                                </div>
                            </div>
                        </div>
             
                </div>
                
                `
          
                );
              })
          
          })
           
        });
      });

	</script>

@endsection