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
                                    <a href="JavaScript:void(0)"   role="button"  aria-selected="false"  wire:click="sendid({{$cat->id}})" class="catte"  data-value='{{$cat['id']}}'>

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
                                        <?php
                                        //fonction to get qantity if all products
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
                                        @foreach($GetAll as $row)

                                        <div class="single_deals_product">
                                            <div class="product_thumb">
                                                <a href={{url('details/'. $row->id)}}><img src="{{$row->picture}}" loading="lazy" alt=""></a>
                                                @php
                                                qte($row->qte)
                                                @endphp
                                                <div class="quick_button">
                                                    <a href="{{url('details/'. $row->id)}}"  data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                                </div>
                                               
                                            </div>
                                            <div class="product_content">
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
                                                    <input type="hidden" id='{!!$row->id!!}' value='{!!$row['reductions']!!}' class ='id_todays_deals'>
                                                   <span class="current_price prcto">{{$row['reductions']}} DH</span>
                                                   <span class="old_price">{{$row['price']}} DH</span>
                                               </div>
                                                <div class="action_links">
                                                    <ul>
                                                       <li class="add_to_cart"  ><a href="JavaScript:void(0)" title="add to cart" class="btn_todays_deals" ><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
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
                                    <span class="current_price">{{$row['reductions']}} dh</span>
                                    <span class="old_price">{{$row['price']}} dh</span>
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