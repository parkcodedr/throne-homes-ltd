
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
                    <h3>Reservation List</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/booking_list') }}">Reservation</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reservation List</li>
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
                            <a href="{{ url('/newbookings') }}" class="btn btn-success btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-plus"></i> &nbsp; Add New Reservation &nbsp; </a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Adults</th>
                                    <th>Rooms</th>
                                    <th>Check-In Date</th>
                                    <th>Check-Out Date</th>
                                    <th>Status</th>
                                    <th>Select Room Number</th>
                                    <th>Check-In Now</th>
                                    @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                        <th>Channel</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td scope="row">{{ $booking->id }}</td>
                                        <td>{{ strtoupper($booking->lastname).' '.$booking->firstname }}</td>
                                        <td>{{ $booking->adults }}</td>
                                        <td>{{ $booking->getRoomtypes($booking->roomtype) }}</td>
                                        <td>{{ $booking->arrival_date }}</td>
                                        <td>{{ $booking->departure_date }}</td>
                                        <td>@if(ucfirst(strtolower($booking->status))=="Standby")<span class="badge badge-primary p-2">@endif
                                            @if(ucfirst(strtolower($booking->status))=="Confirmed")<span class="badge badge-success p-2">@endif
                                            {{ ucfirst(strtolower($booking->status)) }}</span>
                                        </td>
                                        <td>
                                            @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2">{{ "Make Payment First" }}</span>@endif
                                            @if($booking->status=="confirmed" && (int)$booking->room_number==0)
                                                <span class="badge badge-success p-2">
                                                        <select name="room_number" id="room_number" class="form-control" title="Select Room Number" data-header="Select Room Number" required>
                                                            <option value="">Select Room Number</option>
                                                            @foreach($booking->getAllRoomNumber($booking->roomtype) as $room)
                                                              <option value="{{ $room["room_number"] }}>{{ $room["room_number"]." ".$booking->getRoomtypes($booking->roomtype)." ".$booking->group }}</option>
                                                            @endforeach
                                                        </select>
                                                </span>
                                            @endif
                                            @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                            @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Room is assigned" }}</span>@endif
                                        </td>
                                        <td>
                                            @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2">{{ "Make Payment First" }}</span>@endif
                                            @if($booking->status=="confirmed" && (int)$booking->room_number==0)
                                                <span class="badge badge-success p-2">
                                                    {{ "Check-In Now" }}
                                                </span>
                                            @endif
                                            @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                            @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Already Checked-In" }}</span>@endif
                                        </td>
                                        @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                            <td>{{ $booking->channel }}</td>
                                        @endif
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
