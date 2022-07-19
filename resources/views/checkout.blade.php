@extends('app')
    @section('content')
    <?php 
   $page='checkout';
    ?>
    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
       <div class="container">
            <div class="row">
               <div class="col-12">
                    <div class="user-actions">
                        <h3> 
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>     

                        </h3>
                         <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <form>
                                    
                                    <input placeholder="Coupon code" type="text" name='code'>
                                    <button type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>    
                    </div>    
               </div>
            </div>
            <form action="{{url('/addorder')}}" method="POST">
                @csrf
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-lg-6 mb-20">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" name="firstName" value="{{old('firstName')}}">  
                                    <span style="color: red;">@error('firstName'){{$message}} @enderror</span>  
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Last Name  <span>*</span></label>
                                    <input type="text" name="lastName" value="{{old('lastName')}}">
                                    <span style="color: red;">@error('lastName'){{$message}} @enderror</span>
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="country">Ville <span>*</span></label>
                                    <select class="niceselect_option" name="cuntry" id="country"> 
                                        <option value="Tanger">Tanger</option>      
                                        <option value="Tetouan">Tetouan</option> 
                                        <option value="CasaBlanca">CasaBlanca</option>    
                                        <option value="Rabat">Rabat</option>    
                                        <option value="Fes">Fes</option>    
                                        <option value="Meknas">Meknas</option>    
                                        <option value="Agadir">Agadir</option>    
                                        <option value="Elhocema">Elhocema</option>   

                                    </select>
                                </div>

                                <div class="order-notes">
                                    <label for="order_note">Adresse</label>
                                   <textarea id="order_note" placeholder="Adresse complete..." name="adresse" value="{{old('adresse')}}"></textarea>
                                   <span style="color: red;">@error('adresse'){{$message}} @enderror</span>
                               </div> 
                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input type="text" name="phone" value="{{old('phone')}}">
                                    <span style="color: red;">@error('phone'){{$message}} @enderror</span> 

                                </div> 
                                 <div class="col-lg-6 mb-20">
                                    <label> Email Address   <span>*</span></label>
                                      <input type="email" name="email" value="{{old('email')}}">
                                      <span style="color: red;">@error('email'){{$message}} @enderror</span> 
                                </div> 
          	    	    	    	    	    	    
                            </div>
                       
                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                            <h3>Your order</h3> 
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order as $row)
                                        <tr>
                                            <td> {{$row->name}} <strong> x {{$row->qte}}</strong></td>
                                            <td> {{$row->pricebyone * $row->qte}}</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>total net</th>
                                            <td>{{$productpricetotal}}</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>{{$priceTTc_total}} DH</strong></td>
                                            <input type="hidden" value="{{$priceTTc_total}}" name="total">
                                        </tr>
                                    </tfoot>
                                   
                                </table>     
                            </div>
                            <div class="col-12 mb-20">
                                <button type="submit" class="btn btn-warning">Apply coupon</button>
                            </div>
                             
                    </div>
                </div> 
            </div> 
            </form>
        </div>       
    </div>
    <!--Checkout page section end-->
 
   <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
@endsection