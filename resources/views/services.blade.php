@extends('app')
    @section('content')
    @php
    $page='services';
    @endphp


 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--services img area-->
    <div class="services_gallery mt-60">
        <div class="container">  
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services1.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services2.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services3.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
     <!--services img end-->

     <!--our services area-->
    <div class="our_services">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="services_title">
                        <h2>OUR SERVICES</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore<br>
                            eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-sliders" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>BRANDING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="services_desc">
                            <h3>WEB DESIGN</h3>

                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">

                            <i class="fa fa-camera"></i>

                        </div>
                        <div class="services_desc">
                            <h3>PHOTOGRAPHY</h3>

                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="services_desc">
                            <h3>WEB DEVELOPMENT</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-file-code-o" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>CODING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>MARKETING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="services_desc">
                            <h3>SUPPORT</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="services_desc">
                            <h3>GRAPHIC DESIGN</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>
     <!--our services area end-->


   
<!-- Plugins JS -->
@endsection