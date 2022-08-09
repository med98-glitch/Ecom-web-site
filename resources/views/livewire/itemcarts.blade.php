<div class="shopping_cart_area mt-60">
    <div class="container"> 
        
        <form action="#"> 
            <div class="row">
                <div class="col-12">
                    @if($productsincarts->count() > 0)
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                           
                        <table>
                        <thead>
                            <tr>
                                <th class="product_remove">effacer</th>
                                <th class="product_thumb">Image</th>
                                <th class="product_name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product_quantity">Quantité</th>
                                <th class="product_total">Total</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($productsincarts as $row)
                            <input type="hidden" class="item_card" id="{{$row->id}}" value="{{$row->id}}">
                            <tr>
                               <td class="product_remove"><a href="{{url('details_cart')}}"" class="update"><i class="fa fa-trash-o"></i></a></td>
                                <td class="product_thumb"><a href="#"><img src="{{$row->picture}}" width="100px" alt=""></a></td>
                                <td class="product_name"><a href="#">{{$row->name}}</a></td>
                                <td class="product-price">{{$row->price}} Dh</td>
                                <td class="product_quantity"><label>Quantité</label><button id="add" type="button" class="increment" wire:click.prevent=' modofiyincrement ({{$row->id}},{{$row->qte}}),{{$row->price}}'>+</button><input class="ml-5"  min="1" max="100" value="{{$row->qte}}" type="number"  readonly="" style="text-align: center;" id='qtebox' class="mt-2"><button id="sub" class="increment" type="button" wire:click.prevent=' modofiyindesinctemntt({{$row->id}},{{$row->qte}})' >-</button></td>
                                <td class="product_total">{{$row->total}} DH</td>

                            </tr>            
                          @endforeach
                        </tbody>
                    </table>   
                        </div>  
                        <div class="shop_toolbar t_bottom" >
                        @if($productsincarts->count() > 0)
                        {!! $productsincarts->links() !!}
                        @endif
                        </div>
                   
                            
                    </div>
                    @else
                    <div class="alert alert-warning" role="alert">
                        Aucun produit dans ce panier
                    </div>
                    @endif
                 </div>
             </div>
             <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">   
                                <p>Entrez votre code promo si vous en avez un.</p>                                
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Appliquer Coupon</button>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Totaux du panier</h3>
                            <div class="coupon_inner">
                               <div class="cart_subtotal">
                                   <p>Total sans TTC</p>
                                   <p class="cart_amount"> {{$productpricetotal}} DH</p>
                               </div>
                               <div class="cart_subtotal ">
                                   <p>Total avec TTC</p>
                                   <p class="cart_amount">{{$priceTTc}} DH</p>
                               </div>

                               <div class="cart_subtotal">
                                   <p>Total</p>
                                   <p class="cart_amount">{{$priceTTc}} DH</p>
                               </div>
                               <div class="checkout_btn">
                                   <a href="{{url('/checkout')}}">Passer à la caisse</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form> 
    </div>     
</div>

