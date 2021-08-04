<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <!-- sidebar menu -->
                @include('admin.backlayouts.sidebar_menu')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                @include('admin.backlayouts.menu_footer_buttons')
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        @include('admin.backlayouts.top_navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Order Details</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row" style="display: block;">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            
                            <div class="x_title">
                    
                                <p>Orders</p>
                               
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              
                               <div class="row">
                                <dl class="col-md-12">
                                    <div class="col-md-4">
                                        <dt>Title</dt>
                                    <dd>{{ $order->title }}</dd>
                                    <dt>Firstname</dt>
                                    <dd>{{ $order->firstname }}</dd>
                                    <dt>Lastname</dt>
                                    <dd>{{ $order->lastname }}</dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Othername</dt>
                                    <dd>{{ $order->othername }}</dd>
                                    <dt>Date of birth</dt>
                                    <dd>{{ $order->date_of_birth }}</dd>
                                    <dt> Gender</dt>
                                    <dd>{{ $order->gender }}</dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Email</dt>
                                    <dd>{{ $order->email }}</dd>
                                    <dt>Phone</dt>
                                    <dd>{{ $order->phone }}</dd>
                                    <dt>Address</dt>
                                    <dd>{{ $order->address }}</dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Order Category</dt>
                                    <dd>{{ $order->group }}</dd>
                                    <dt>Payment Mode</dt>
                                    <dd>{{ $order->payment_mode }}</dd>
                                    <dt>Payment Plan</dt>
                                    <dd>{{ $order->payment_plan }}</dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Amount</dt>
                                    <dd>{{ $order->order_price }}</dd>
                                    <dt>Installment</dt>
                                    <dd>{{ $order->price_pay }}</dd>
                                    <dt> Monthly Pay</dt>
                                    <dd>{{ $order->pay_monthly }}</dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Employer</dt>
                                    <dd>{{ $order->employer }}</dd>
                                    <dt>Office Address</dt>
                                    <dd>{{ $order->officeaddress }}</dd>
                                    <dt> City</dt>
                                    <dd>{{ $order->city }}</dd>
                                    </div>
                                  
                                        <p class="lead">Next of Kin</p>
                                        <hr>
                                        <div class="col-md-4">
                                            <dt>Name</dt>
                                        <dd>{{ $order->kin_name }}</dd>
                                        <dt>Relationship</dt>
                                        <dd>{{ $order->kin_relationship }}</dd>
                                        <dt> Phone</dt>
                                        <dd>{{ $order->kin_phone }}</dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt>Email</dt>
                                        <dd>{{ $order->kin_email }}</dd>
                                        <dt>Address</dt>
                                        <dd>{{ $order->kin_address }}</dd>
                                        <dt> City</dt>
                                        <dd>{{ $order->kin_city }}</dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt>Preferred Location</dt>
                                        <dd>{{ $order->preferred_location }}</dd>
                                        <dt>Plot</dt>
                                        <dd>{{ $order->plot }}</dd>
                                        <dt> Agent</dt>
                                        <dd>{{ $order->agent }}</dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt> Date</dt>
                                        <dd>{{ $order->created_at }}</dd>
                                        <dt>Status</dt>
                                        <dd>{{ $order->status }}</dd>
                                        <dt> Transaction Reference</dt>
                                        <dd>{{ $order->transaction_reference }}</dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt> ID Type</dt>
                                        <dd>{{ $order->idtype }}</dd>
                                        <dt>Card No:</dt>
                                        <dd>{{ $order->idard }}</dd>
                                        <dt> Learn About</dt>
                                        <dd>{{ $order->learn_about }}</dd>
                                        </div>
                                  
                                    
                                </dl>
                              
                                </div

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page content -->

        <div class="row">

        </div>



        <div class="col-md-8 col-sm-8 ">



            <div class="row">

            </div>
            <div class="row">


                <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 ">

                </div>
                <!-- End to do list -->

                <!-- start of weather widget -->
                <div class="col-md-6 col-sm-6 ">


                </div>
                <!-- end of weather widget -->
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->
@include('admin.backlayouts.menu_footer')
<!-- /footer content -->
</div>
</div>
