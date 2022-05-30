<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecommerce web site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href={{asset('assets/img/favicon.ico')}}>
    
        <!-- CSS
        ========================= -->
    
        <!-- Plugins CSS -->
        <link rel="stylesheet" href={{asset('assets/css/plugins.css')}}>
    
        <!-- Main Style CSS -->
        <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/shop.css')}}>
     
        @livewireStyles
    </head>
</head>
<body>
       <!---all contenet her-->
       @include('header');

       @yield('content')

       @include('footer');
       <!--news letter popup start-->
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
       <script  src="https://www.google.com/jsapi"></script>
       <script src="assets/js/map.js"></script>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
   
   <!-- JS
   ============================================ -->
   
   <!-- Plugins JS -->
   <script src={{asset('assets/js/plugins.js')}}></script>
   
   <!-- Main JS -->
   <script src={{asset('assets/js/main.js')}}></script>
   
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
    $(document).ready(function() {
  $(".catte").click( function(){
    $('.catte').not(this).removeClass('active');
    $(this).addClass('active');

  
    var catego = $(this).data('value');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    $.ajax({
        type: "POST",
        url: "/getbyajax",
        dataType:'JSON',
        data: 'catego=' + catego 
        
      }).done(function(reponse){
        $('#cnt').html("")
       console.log(reponse)
       $(reponse).each(function (key, value) {
           //get price
           var price = value.price;
           //get reduction
           var reduction =value.reductions;
           //calcluer reduction
           var pricReduction = price * reduction / 100;
           //new price
           var newPrice = price - pricReduction
           //get ratting
           var ratting = value.ratting;
          
           function loopRatting(){
            let text="<ul>";
            for(var i=0;i< ratting;i++){
                text += "<li><a href='#'><i class=' zmdi zmdi-star-outline'></i></a></li>"
            }
            text +="</ul>";
            return text
            }
         
        
         
        $('#cnt').append(`
                        <div class='single_deals_product'>
                                            <div class='product_thumb'>
                                                <a href='details/`+ value.id + `'><img src='`+ value.img + `' loading='lazy' alt=''></a>
                                                <div class='label_product'>
                                                    <span class='label_sale'>sale</span>
                                                </div>
                                
                                                <div class='quick_button'>
                                                    <a href='details/`+ value.id + `' title='quick view'> <i class='zmdi zmdi-eye'></i></a>
                                                </div>
                                               
                                            </div>
                                            <div class='product_content'>
                                                <div class='product_name'>
                                                    
                                                    <h3><a href='details/`+ value.id + `'> ` + value.name + `</a></h3>
                                                </div>
                                                <div class='product_rating'>
                                                   
                                                        
                                                        `+loopRatting()+`
                                                      
                                                    
                                                </div>
                                                 <div class='price_box'>
                                                    <input type="hidden" value='`+value.id+ `' class ='id_products'>
                                         <input type="hidden" value=`+newPrice+ ` class ='new_price'>
                                                    <span class='current_price'>`+newPrice+` DH</span>
                                                    <span class='old_price'>` +price+`DH</span>
                                                </div>
                                                <div class='action_links'>
                                                    <ul>
                                                       <li class='wishlist'><a title='Add to Wishlist'><i class='fa fa-heart-o' aria-hidden='true'></i></a></li>
                                                        <li class='add_to_cart'><a href='JavaScript:void(0)' title='add to cart'><i class='zmdi zmdi-shopping-cart-plus'></i> add to cart</a></li>
                                                        <li class='compare'><a href='#' title='compare'><i class='zmdi zmdi-swap'></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                    </div>`);
          })
       
      })
       
    });
  });
</script>
    

<script>
    $(document).ready(function() {
  $(".caty").click( function(){ 
    var categorie = $(this).data('value');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    $.ajax({
        type: "POST",
        url: "/gatbyCategorie",
        dataType:'JSON',
        data: 'categorie=' + categorie 
        
      }).done(function(reponse){
        $('.contenue').html("")
       console.log(reponse)
       $(reponse).each(function (key, value) {
               //get price
               var price = value.price;
               //get reduction
               var reduction =value.reductions;
               //calcluer reduction
               var pricReduction = price * reduction / 100;
               //new price
               var newPrice = price - pricReduction
               //get ratting
               var ratting = value.ratting;
              
               function loopRatting(){
                let text="<ul>";
                for(var i=0;i< ratting;i++){
                    text += "<li><a href='#'><i class=' zmdi zmdi-star-outline'></i></a></li>"
                }
                text +="</ul>";
                return text
                }
             
            
             
            $('.contenue').append(`
         
                               <div class='owl-item cloned'>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href='details/`+ value.id + `'><img src="`+ value.img + `" alt="" class='imageAjax'></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href='details/`+ value.id + `'   title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href='details/`+ value.id + `'>`+ value.name + `</a></h3>
                                        </div>
                                        <div class="product_rating">
                                            `+loopRatting()+`
                                        </div>
                                         <div class="price_box">
                                            
                                            <span class="current_price">`+newPrice+ ` DH</span>
                                            <span class="old_price">`+ value.price + ` DH</span>   
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                               <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="add_to_cart"><a href="JavaScript:void(0)" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>`);
              })
       
       
          })
        
      });
  });


  //add to card in details page
  $(document).ready(function() {
      $(".add_to_cart").click( function(){
         
        var id_products = $('.id_products').val();
        var price = $('.new_price').val();
        var qte = $('.qte').val();
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/addtocard",
        dataType:'JSON',
        data: 'price= '+ price +'&qte=' + qte +'&id_products=' + id_products
     
    }).done(function(response){
        
        Swal.fire({
        icon: response.icon,
        title: response.title,
        text: response.status,
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
               
             
            
             
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })

      })
      });

    });
</script>

@livewireScripts
</body>
</html>