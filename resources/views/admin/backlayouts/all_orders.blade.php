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
                        <h3>All Orders</h3>
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
                                <!--                                <h2>Default Example <small>Users</small></h2>-->

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Title</th>
                                            <th>Name</th>
                                            <th>Middlename</th>
                                            <th>Lastname</th>
                                            <th>Gender</th>
                                         <th>Email</th>
                                         
                                         <th>Address</th>
                                       
                                         <th>Phone</th>
                                         <th>Action</th>
                                        
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach ($orders as $key => $order)
                                        
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $order->title }}</td>
                                                <td>{{ $order->firstname }}</td>
                                                <td>{{ $order->lastname }}</td>
                                                <td>{{ $order->othername}}</td>
                                                <td>{{ $order->gender}}</td>
                                                <td>{{ $order->email}}</td>
                                                <td>{{ $order->address}}</td>
                                               
                                                <td>{{ $order->phone}}</td>
                                                <td>
                                                    <a href="{{url('/orders')."/".$order->id}}">
                                                        <button class="btn btn-primary">
                                                            View
                                                        </button>
                                                    </a>
                                                   
                                                </td>
                                  
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
