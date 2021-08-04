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
                        <h3>Land's Prices</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Land's Prices</li>
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
                                <!--                                <h2>Default Example <small>Users</small></h2>-->

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Land Name</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                          <th>Order Date</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($userLands)==0)
                                    <tr>
                                    <td colspan="5" class="text-center">You have no land in {{strtoupper($name) }} </td>
                                    </tr>
                                    @else
                                   
                                        @foreach ($userLands as $land)
                                            <tr>
                                                <td>{{ $land->land_name }}</td>
                                                <td>{{ $land->order_price }}</td>
                                                <td>{{ $land->land_size." sqm" }}</td>
                                                 <td>{{ $land->created_at}}</td>
                                                <td>{{ $land->status}}</td>
                                                @if($land->completePayment==false && $land->payment_plan=="installments")
                                                <td>
                                                    <a href="{{ url('/upload_payment')."/".$land->id }}">
                                                    <button class="btn btn-info">Pay now</button>
                                                    </a>
                                                </td>
                                                @else
                                                <td>Completed</td>
                                                @endif
                                  
                                            </tr>
                                            
                                        @endforeach
                                        @endif
                                       
                                    </tbody>
                                </table>

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
