    @extends('app')
    @section('content')
    @php
    $page='contact';
    @endphp
    <!--Offcanvas menu area start-->
    
    
    <!--Offcanvas menu area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Panier</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
     <livewire:itemcarts /> 
     <!--shopping cart area end -->
    
  
   @endsection

