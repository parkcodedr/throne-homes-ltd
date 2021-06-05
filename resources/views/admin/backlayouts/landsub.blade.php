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
            @include('admin.backlayouts.top_tiles')
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Land's Subscription</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Land's Subscription</li>
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
                                            <th>Customer Name</th>
                                            <th>Land Name</th>
                                            <th>Land Cost</th>
                                            <th>Amount Paid</th>
                                            <th>Payment Plan</th>
                                            <th>Transaction Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ strtoupper($order->lastname) . ' ' . $order->firstname }}</td>
                                                <td>{{ $order->lands_name }}</td>
                                                <td>{{ $order->order_price }}</td>
                                                <td>{{ $order->price_pay }}</td>
                                                <td>{{ $order->payment_plan }}</td>
                                                <td>{{ $order->created_at }}</td>
                                            </tr>
                                        @endforeach
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
