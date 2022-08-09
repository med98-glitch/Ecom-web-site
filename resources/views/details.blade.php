
@extends('app')
    @section('content')
    @php
    $page='details';
    @endphp
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--product details start-->
    <div class="product_details mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="product-details-tab">
                    @foreach($prductsdtailsproduct as $row)
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{$row->picture}}" data-zoom-image="{{$row->picture}}" alt="big-1">
                            </a>
                        </div>
                    @endforeach
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            @foreach($listimages as $row)
                            <li>
                                <a href="#" class="{{$row->picture}}" data-update="" data-image="{{$row->picture}}" data-zoom-image="{{$row->picture}}" loading="lazy">
                                    <img src="{{$row->picture}}" alt="zo-th-1" loading="lazy"/>
                                </a>

                            </li>
                          @endforeach
                        </ul>
                    </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        @foreach ($prductsdtailsproduct as $row)
                            
                      
                       <form action="#">
                           
                            <h1>{{$row['name']}}</h1>
                            <div class="product_nav">
                                
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
                                <input type="hidden" value='{{$row['id']}}' class ='id_products'>
                                <input type="hidden" value='{{$row->newprice}}' class ='new_price'>
                                <span class="current_price">{{$row->newprice}} DH</span>
                                <span class="old_price">{{$row->price}} DH</span>
                                
                            </div>
                            <div class="product_desc">
                                {!!$row->desc!!}</p>
                            </div>
                            <div class="product_variant quantity mt-5">
                                <label>Quantité</label>
                                <input min="1" max="10" value="1" type="number" class='qte'>
                            </div>
                             <div class="action_links">
                                <ul>
                                    <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart" class="add_to_card_details_page"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Catégorie: <a href="#">{{$idcat->name}}</a></span>
                            </div>
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    <!--product info start-->
    <div class="product_d_info">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">caractéristique</a>
                                </li>
                               
                            </ul>
                        </div>
                        @foreach ($prductsdtailsproduct as $row)
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    {!!$row->desc!!}
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                
                                <div class="product_info_content">
                                    {!!$row->carq!!}
                                </div>    
                            </div>

                            
                        </div>
                     @endforeach
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->
    <?php
    function qterelatedproducts($qte){
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
    <!--product area start-->
    <section class="product_area related_products mb-47">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Relationnel produits</h2>
                    </div>
                    <div class="product_carousel product_column4 owl-carousel">
                        @foreach($relatedproduct as $row)
                        <div class="single_product">
                            <div class="product_thumb">
                                <a href="{{url('details/'. $row->id)}}"><img src="{{$row->picture}}" alt=""></a>
                                @php
                                qterelatedproducts($row->qte)
                                @endphp
                                <div class="quick_button">
                                    <a href="{{url('details/'. $row->id)}}"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                          
                            <div class="product_content">
                                <div class="product_name">
                                    <h3><a href="product-details.html">{{$row->name}}</a></h3>
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
                                    <input type="hidden" id='{{$row->id}}' value='{{$row['newprice']}}' class ='idprice'>
                                    <span class="current_price">{{$row->newprice}} DH</span>
                                    <span class="old_price">{{$row->price}} DH</span>   
                                </div>
                                <div class="action_links">
                                  <ul>
                                        <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart" class="add_to_card_raltedproduct" ><i class="zmdi zmdi-shopping-cart-plus"></i> Ajouter au panier </a></li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>       
        </div>
    </section>
    <!--product area end-->
    
@endsection