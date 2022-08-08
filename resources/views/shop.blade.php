@extends('app')
    @section('content')
    @php
    $page='shop';
    @endphp
  
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
                                        <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" alt=""></a>
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
                    
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        
                        <!--sekection fillter
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
                         --->
                        <div class="page_amount">
                   
                            <p>Nombre items trouver : {{$count}}</p>
                         
                        </div>
                    </div>
                    <!--shop toolbar end-->

     
                    <?php
                    function qte($qte){
                        if($qte == 0){
                        ?>
                          <div class="label_product">
                            <span class="label_sale" style="background-color: red;">Not in stock</span>
                        </div>
                        <?php
                        }elseif ($qte <= 5) {
                            ?>
                            
                            <div class="label_product">
                            <span class="label_sale" style="background-color: gold;color:black;">Stock limité</span>
                        </div>
                        <?php
                        } else {
                            ?>
                            <div class="label_product">
                            <span class="label_sale" style="background-color: rgb(10, 102, 240);">En stock</span>
                        </div>
                        <?php
                        }
                        }
                        ?>
       
  
     @if($productsByCategorie->count() > 0) 
     <div class="row no-gutters shop_wrapper">
        @foreach($productsByCategorie as $row)
       <div class="col-lg-4 col-md-4 col-12 ">
           <div class="single_product">
               <div class="product_thumb">
                   
                   <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" alt=""  width="390px"></a>
                  @php
                  qte($row->qte)
                  @endphp
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
                        <input type="hidden" id='{{$row->id}}' value='{{$row['newprice']}}' class ='price_id'>
                       <span class="current_price">{{$row['newprice']}} Dh</span>
                       <span class="old_price">{{$row['price']}} Dh</span>   
                   </div>
                   <div class="action_links">
                       <ul>
                    
                           <li class="add_to_cart "><a href="JavaScript:void(0)" class="add_to_card_shop" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>           
                       </ul>
                   </div>
               </div>
               <div class="product_content list_content">
                   <div class="product_name mt-2">
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
                       <span class="current_price">{{$row['newprice']}} DH</span>
                       <input type="hidden" id='{{$row->id}}' value='{{$row['newprice']}}' class ='price_id'>
                       <span class="old_price">{{$row->price}} DH</span>   
                   </div>
                   <div class="action_links">
                       <ul>
                        <li class="add_to_cart "><a href="JavaScript:void(0)" class="add_to_card_shop" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
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
              @if($productsByCategorie->count() > 0)
                <div class="shop_toolbar t_bottom">
                         
                            {{ $productsByCategorie->appends(['id' => $row['catid'] ])->links() }}
                </div>
                @endif
          
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
                            <a href="#"><img src="{{URL('assets/img/brand/1.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/2.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/3.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/4.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/5.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/6.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{URL('assets/img/brand/1.png')}}" alt=""></a>
                        </div>
                    </div>
                 
            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <script>

		/*$(document).ready(function() {
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
                                     @if($productsByCategorie->count() > 0)
                                    <span class="current_price">{{$row['price']}}</span>
                                    @endif
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
                                    @if($productsByCategorie->count() > 0)
                                    <h3><a href="product-details.html">{{$row['nama']}}</a></h3>
                                    @endif
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
                                    @if($productsByCategorie->count() > 0)
                                    <span class="current_price">{{$row['price']}}</span>
                                    @endif
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
*/
	</script>

@endsection