@extends('app')
    @section('content')
    @php
    $page='contact';
    @endphp

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Nous contacter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--contact map start-->
    <div class="contact_map mt-60">
       <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                     <!--her your aps-->
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>Nous contacter</h3>    
                         <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                            <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                            <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Dites-nous votre projet</h3> 
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                          {{Session::get('success')}}
                        </div>
                      @endif
                      @if(Session::get('fail'))
                        <div class="alert alert-danger">
                          {{Session::get('fail')}}
                        </div>
                      @endif  
                        <form  method="POST"  action="{{url('/sendemail')}}">
                            @csrf
                            <p>  
                               <label> Votre Nom (required)</label>
                                <input name="name" placeholder="nom *" type="text" >
                                <span style="color: red;">@error('name'){{$message}} @enderror</span>
                            </p>
                            <p>       
                               <label>  Votre e-mail (required)</label>
                                <input name="email" placeholder="email *" type="email">
                                <span style="color: red;">@error('email'){{$message}} @enderror</span>
                            </p>
                            <p>          
                               <label>  Subject</label>
                                <input name="subject" placeholder="Subject *" type="text">
                                <span style="color: red;">@error('subject'){{$message}} @enderror</span>
                            </p>    
                            <div class="contact_textarea">
                                <label>  Votre message</label>
                                <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea> 
                                <span style="color: red;">@error('message'){{$message}} @enderror</span>    
                            </div>   
                            <button type="submit"> Envoyer</button>  
                        </form> 
                    </div> 
                </div>
            </div>
        </div>    
    </div>
    <hr>

@endsection