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
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>@if($display_enabled==1) List & Edit Roomtypes @else List of Rooms & Rates @endif</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Structural Settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List and Edit Roomtypes</li>
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
                            <a href="{{ url('/view_edit_roomtypes/0') }}" class="btn btn-success btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-plus"></i> &nbsp; Add New Room Type &nbsp; </a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(strtolower($role)=='super'||strtolower($role)=='admin'||strtolower($role)=='frontdesk')
                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Room Name</th>
                                    <th>Room Details</th>
                                    <th>Room Price</th>
                                    <th>Total Adult</th>
                                    <th>Total Children</th>
                                    <th>Total Rooms</th>
                                    @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                        @if($display_enabled==1)
                                            <th>Manage Room Types</th>
                                            <th>Manage Room Services</th>
                                        @endif
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roomtypes as $roomtype)
                                    <tr>
                                        <td scope="row">{{ $roomtype->id }}</td>
                                        <td>{{ ucfirst(strtolower($roomtype->room_name)).' '.strtolower($roomtype->page_name) }}</td>
                                        <td>{{ $roomtype->room_details }}</td>
                                        <td>{{ number_format($roomtype->room_price,2,".",",") }}</td>
                                        <td>{{ $roomtype->total_adult }}</td>
                                        <td>{{ $roomtype->total_children }}</td>
                                        <td>{{ $roomtype->room_total }}</td>
                                    @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                        @if($display_enabled==1)
                                            <td><a href="{{ url('/view_edit_roomtypes/'.$roomtype->id) }}">View/Edit</a></td>
                                            <td><a href="{{ url('/view_edit_room_services/'.$roomtype->id) }}">View/Edit</a></td>
                                        @endif
                                    @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @endif
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
