@extends('app')
    @section('content')
    <?php 
   $page='profile';
    ?>
   <!-- my account start  -->
  
   <section class="main_content_area">
    <div class="container">   
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a></li>
                            <li><a  href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a></li>
                        </ul>
                    </div>    
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3>Dashboard </h3>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                        </div>
                     
                        <div class="tab-pane fade" id="orders">
                          @if($orders->count() > 0)
                            <h3>Orders</h3>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>	 	 	 	
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @php $i = 1 @endphp
                                      @foreach($orders as $row)
                                       
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$row->date}}</td>
                                            <td><span class="success">{{$row->statu}}</span></td>
                                            <td>{{$row->total}}</td>
                                            <td><a href="{{url('details_cart')}}" class="view">view</a></td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="alert alert-danger" role="alert">
                              Aucun Order trouver
                            </div>
                            @endif
                        </div>
                       
                        <div class="tab-pane fade" id="account-details">
                            <h3>Update your Account info</h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                          @foreach($infouser as $row)
                                            <label>Name</label>
                                            <input type="text" name="name" class="name" value="{{$row->name}}">
                                            <label>Email</label>
                                            <input type="text" name="email-name" class="email" value="{{$row->email}}">
                                            <div class="save_button primary_btn default_button">
                                            <button type="button" class="upd" >Save</button>
                                            @endforeach
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-12">
                                             <div class="user-actions">
                                                 <p> 
                                                     <i class="fa fa-file-o" aria-hidden="true"></i>
                                                     Changer le mot de pass?
                                                     <a  href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click ici</a>     
                         
                                                 </p>
                                                  <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                                                     <div class="checkout_info">
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
                                                         <form >
                                                             @csrf
                                                             <input placeholder="Nouvelle mot de pass" type="text" name='pass' class="pass">
                                                             <input placeholder="confirme mot de pass" type="text" name='passA' class="passA">
                                                             <button type="button" class="updatepass">modifier</button>
                                                         </form>
                                                     </div>
                                                 </div>    
                                             </div>    
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>        	
</section>			
<!-- my account end   --> 

<!--brand newsletter area start-->

<!--brand area end-->
@endsection