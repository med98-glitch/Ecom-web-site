<section class="home_product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="product_header">
                    <div class="section_title">
                        <h2>Best Ratting<span>Products</span> {{$test}}</h2>
                    </div>
                     <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <!--get categories-->
                            @foreach($categorie as $cat)
                                 <li>
                                    <a  href="JavaScript:void(0)"   role="button"  data-bs-toggle="tab"   aria-selected="true"  wire:click="sendid({{$cat->id}})" data-value='{{$cat['id']}}'>
                                        {{$cat->name}}
                                    </a>
                                 </li>
                                    @endforeach
                        </ul>
                    </div>
                </div>
                              <div class="row">
                                
                                @foreach($topRatedProduct as $row)
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                        <div class="single_deals_product" id='singdl'>
                                            <div class="product_thumb " id="imagebestratiing">
                                                <a href={{url('details/'. $row->id)}}><img src="{{$row->picture}}" loading="lazy"  alt="" class="center"></a>
                                                <div class="label_product">
                                                    <span class="label_sale">sale</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="{{url('details/'. $row->id)}}"  data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                                </div>
                                               
                                            </div>
                                            <div class="product_content mt-3" id="prductscnt">
                                                <div class="product_name">
                                                    <h3><a href={{url('details/'. $row->id)}}>{{$row['name']}}</a></h3>
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
                                                   
                                                    <input type="hidden" data-value='{{$row['id']}}' class ='id_products'>
                                                    <input type="hidden" data-value='{{$row['reductions']}}' class ='new_price'>

                                                   <span class="current_price">{{$row['reductions']}} DH</span>
                                                   <span class="old_price">{{$row['price']}} DH</span>
                                               </div>
                                                <div class="action_links">
                                                    <ul>
                                                    
                                                        <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                                                                         </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                    </div>
                                        
        </div>
    </div>
</section>
