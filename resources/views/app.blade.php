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
        <link rel="shortcut icon" href={{asset('assets/img/logo/logochamal-.png')}}>
    
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

   //update profile 

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
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
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
        
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
      })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
        //add to card in the todaysdelas
        $(document).ready(function() {
        const inputsprice = document.querySelectorAll('.priceinput')
        const inputstoday = document.querySelectorAll('.id_todays_deals')
        const btnstoday = document.querySelectorAll('.btn_todays_deals')
        for (let i = 0; i < btnstoday.length; i++) {
          btnstoday[i].addEventListener('click', () => {
        let id = inputstoday[i].value;
        let price = inputsprice[i].value;;
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
        data: 'price= '+ price +'&qte=' + qte +'&id_products=' + id
     
    }).done(function(response){
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
      })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
});
        //add to card in the todaysdelas
        $(document).ready(function() {
        const price_best = document.querySelectorAll('.new_price_bestratting')
        const id_best = document.querySelectorAll('.id_products_bestratting')
        const btn_best = document.querySelectorAll('.btn_ratting')
        for (let i = 0; i < btn_best.length; i++) {
          btn_best[i].addEventListener('click', () => {
        let id_ = id_best[i].value;
        let price_ = price_best[i].value;;
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
        data: 'price= '+ price_ +'&qte=' + qte +'&id_products=' + id_
     
    }).done(function(response){
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
      })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
});

  //add to card in details page
  $(document).ready(function() {
      $(".add_to_card_details_page").click( function(){
         
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
        
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
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
        
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
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
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
      })
      $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}
  //add to card in  related product
        const inputsshoprelated = document.querySelectorAll('.idprice')
        const btnstshoprelated= document.querySelectorAll('.add_to_card_raltedproduct')
        for (let i = 0; i < btnstshoprelated.length; i++) {
          btnstshoprelated[i].addEventListener('click', () => {
        let price_related = inputsshoprelated[i].value;
        let id_pr = inputsshoprelated[i].getAttribute('id');
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
        data: 'price= '+ price_related +'&qte=' + qte +'&id_products=' + id_pr
     
    }).done(function(response){
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: response.icon,
        title: response.status,
      })
        $('.count_product').html("")
        $(response).each(function (key, value) {
  
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
      })
    })
}

//Modification of price and total of cars in page   details products-->
const deletebutton= document.querySelectorAll('.update')
const id_item_card= document.querySelectorAll('.item_card')
for (let i = 0; i < deletebutton.length; i++) {
  deletebutton[i].addEventListener('click', () => {
  let id_item =id_item_card[i].getAttribute('id'); 
          $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
        type: "POST",
        url: "/deleteUpdateItem",
        dataType:'JSON',
        data:'id_item=' + id_item
        
    }).done(function(response){
        
        Swal.fire({
        title: 'Succes',
        text: 'Element doit étre supprimmé',
        showConfirmButton: false,
        timer: 1500
        })
        
        $('.count_product').html("")
        $(response).each(function (key, value) {
            $('.count_product').append(``+ value.products_cards + `_Produit Total:`+value.total_price +`Dh`);
              })
          })
      });

    };

    //update profile
    $(document).ready(function() {
      $(".upd").click( function(){
         
       const name=$('.name').val();
       const email=$('.email').val();
       if(email === '' || email == null){
        Swal.fire({
       title: 'Error',
       text: 'email is required',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(email.length < 10){
        Swal.fire({
       title: 'Error',
       text: 'email must be 10 caractére',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(name === '' || name == null){
        Swal.fire({
       title: 'Error',
       text: 'name is required',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(name.length < 5){
        Swal.fire({
       title: 'Error',
       text: 'name must be 5 caractére or more',
       showConfirmButton: false,
       timer: 1500
       })
       }else{
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type: "POST",
        url: "/updateinfo",
        dataType:'JSON',
        data: 'name= '+ name + '&email=' + email
      
    }).done(function(response){
        
        Swal.fire({
        icon: 'success',
        title: 'success',
        text: 'votre profile updated',
        showConfirmButton: false,
        timer: 1500
        })
        })
       }
      });
    });
    //update pqsszord
    $(document).ready(function() {
      $(".updatepass").click( function(){
         
       const pass=$('.pass').val();
       const passA=$('.passA').val();
       if(pass === '' || pass == null){
        Swal.fire({
       title: 'Error',
       text: 'password is empty',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(passA === '' || passA == null){
        Swal.fire({
       title: 'Error',
       text: 'confirmation password is required',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(pass.length < 5){
        Swal.fire({
       title: 'Error',
       text: 'password doit étre 5 caractére ou plus',
       showConfirmButton: false,
       timer: 1500
       })
       }else if(pass != passA){
        Swal.fire({
       title: 'Error',
       text: 'confirmation password invalid',
       showConfirmButton: false,
       timer: 1500
       })
       }else{
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
        type: "POST",
        url: "/updatepassword",
        dataType:'JSON',
        data: 'pass= '+ pass + '&passA=' + passA
      
    }).done(function(response){
        
        Swal.fire({
        icon: 'success',
        title: 'success',
        text: 'your password updated',
        showConfirmButton: false,
        timer: 1500
        })
        })
       }
      });
    });

//increment and decrement of cantity of panier
    let addbtn=document.querySelector('#add');
    let subbtn=document.querySelector('#sub');
    let qte=document.querySelector('#qtebox');
    if(addbtn){
    addbtn.addEventListener('click',()=>{
        qte.value=parseInt(qte.value) + 1;
        if(qte.value > 10){
            qte.value=10;
        }
    })
  }
  if(subbtn){
    subbtn.addEventListener('click',()=>{
        qte.value=parseInt(qte.value) -1;
        if(qte.value < 1){
            qte.value=1;
        }
    })
  }


</script>
   



@livewireScripts
</body>
</html>