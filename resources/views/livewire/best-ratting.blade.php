<section class="home_product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="product_header">
                    <div class="section_title">
                        <h2>MEILLEUR DÉRATISATION PAR <span>CATEGORIE</span></h2>
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
                              <?php
                              //fonction to get qantity if all products
                              function qtebestratting($qte){
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
                              <div class="row">
                                @if($topRatedProduct->count() > 0)
                                @foreach($topRatedProduct as $row)
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                        <div class="single_deals_product" id='singdl'>
                                            <div class="product_thumb " id="imagebestratiing">
                                                <a href={{url('details/'. $row->id)}}><img src="{{$row->picture}}" loading="lazy"  alt="" class="center"></a>
                                                    @php
                                                    qtebestratting($row->qte)
                                                    @endphp
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
                                                   
                                                    <input type="hidden" value='{{$row['id']}}' class ='id_products_bestratting'>
                                                    <input type="hidden" value='{{$row['reductions']}}' class ='new_price_bestratting'>

                                                   <span class="current_price">{{$row['reductions']}} DH</span>
                                                   <span class="old_price">{{$row['price']}} DH</span>
                                               </div>
                                                <div class="action_links">
                                                    <ul>
                                                    
                                                        <li class="add_to_cart"><a href="JavaScript:void(0)" class="btn_ratting" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> Ajouter au panier</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                        @else <div class="alert alert-warning m-5" role="alert">
                                            Aucun produit trouvé
                                          </div>
                                        @endif
                                    </div>      
                    </div>
         </div>
</section>
