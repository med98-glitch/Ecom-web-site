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
       @include('header')

       @yield('content')

       @include('footer')
       <!--news letter popup start-->
      
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

        })
     });
        //add to card in the left products
        const inputs = document.querySelectorAll('.id_')
        const btns = document.querySelectorAll('.add_')
        for (let i = 0; i < btns.length; i++) {
          btns[i].addEventListener('click', () => {
        let valid = inputs[i].value;
        let idVal = inputs[i].getAttribute('id');
        let qte=1;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/addtocard",
        dataType:'JSON',
        data: 'price= '+ valid +'&qte=' + qte +'&id_products=' + idVal
     
    }).done(function(response){
        
        Swal.fire({
       
        icon: response.icon,
        title: response.title,
        text: response.status,
        showConfirmButton: false,
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
        //add to card in the right products
        const inputsall = document.querySelectorAll('.idall')
        const btnsadd = document.querySelectorAll('.addto_')
        for (let i = 0; i < btnsadd.length; i++) {
          btnsadd[i].addEventListener('click', () => {
        let valid = inputsall[i].value;
        let idVal = inputsall[i].getAttribute('id');
        let qte=1;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/addtocard",
        dataType:'JSON',
        data: 'price= '+ valid +'&qte=' + qte +'&id_products=' + idVal
     
    }).done(function(response){
        
        Swal.fire({
       
        icon: response.icon,
        title: response.title,
        text: response.status,
        showConfirmButton: false,
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
        //add to card in the todaysdelas
        const inputstoday = document.querySelectorAll('.id_todays_deals')
        const btnstoday = document.querySelectorAll('.btn_todays_deals')
        for (let i = 0; i < btnstoday.length; i++) {
          btnstoday[i].addEventListener('click', () => {
        let valid = inputstoday[i].value;
        let idVal = inputstoday[i].getAttribute('id');
        let qte=1;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/addtocard",
        dataType:'JSON',
        data: 'price= '+ valid +'&qte=' + qte +'&id_products=' + idVal
     
    }).done(function(response){
        
        Swal.fire({
       
        icon: response.icon,
        title: response.title,
        text: response.status,
        showConfirmButton: false,
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
        
    

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
        showConfirmButton: false,
       
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
      });
    });
  //add to today_deals in center page
  $(document).ready(function() {
      $(".id_btn_center").click( function(){
         
        var id_products = $('.id_center').val();
        var price = $('.price_center').val();
        var qte = 1;
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
        showConfirmButton: false,
       
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
      });
    });
  //add to card in  shp page
        const inputsshop = document.querySelectorAll('.price_id')
        const btnstshop = document.querySelectorAll('.add_to_card_shop')
        for (let i = 0; i < btnstshop.length; i++) {
          btnstshop[i].addEventListener('click', () => {
        let price = inputsshop[i].value;
        let id_pr = inputsshop[i].getAttribute('id');
        let qte=1;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/addtocard",
        dataType:'JSON',
        data: 'price= '+ price +'&qte=' + qte +'&id_products=' + id_pr
     
    }).done(function(response){
        
        Swal.fire({
       
        icon: response.icon,
        title: response.title,
        text: response.status,
        showConfirmButton: false,
        timer: 1500
        })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}

//Modification of price and total of cars in page   details products-->

$(document).ready(function() {
      $(".update").click( function(){
         
       var price='1'
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/deleteUpdateItem",
        dataType:'JSON',
        data: 'price= '+ price 
     
    }).done(function(response){
        
        $('.count_product').html("")
        $(response).each(function (key, value) {
     
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
          })
      });

    });
//increment and decrement of cantity of panier
    let addbtn=document.querySelector('#add');
    let subbtn=document.querySelector('#sub');
    let qte=document.querySelector('#qtebox');

    addbtn.addEventListener('click',()=>{
        qte.value=parseInt(qte.value) + 1;
        if(qte.value > 10){
            qte.value=10;
        }
    })
    subbtn.addEventListener('click',()=>{
        qte.value=parseInt(qte.value) -1;
        if(qte.value < 1){
            qte.value=1;
        }
    })

</script>
   



@livewireScripts
</body>
</html>