
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
                    <h3>Checked-In List</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/checked_in_list') }}">Checked-In</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checked-In List</li>
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
                            @if(!empty($checkindata)) 
                                <center>
                                    <?php if (array_key_exists("checkout",$checkindata)){?>
                                        <form name="processcheckout" id="processcheckout" action="" method="post">@csrf
                                            <input type="hidden" name="room_number" id="room_name" value="{{ $checkindata["room_number"] }}" required> 
                                            <button type="submit" class="btn btn-success" name="processcheckout" value="{{ $checkindata["checkout"] }}"><h1>Please confirm</h1><h1>and</h1><h1>complete the check out proccess</h1><h1>of room number : {{ $checkindata["room_number"] }}</h1><br><br></button>
                                        </form>
                                    <?php } ?>
                                    <?php if (array_key_exists("processcheckout",$checkindata)){?>                            
                                        <div class="alert bg-green alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h3>{{ " Thank you, check-out process is completed for Room Number : ".$checkindata["room_number"] }}</h3>
                                            @if(!empty($checkinprocess)) <h3> {{ $checkinprocess["status"] }} @endif
                                        </div>
                                    <?php } ?>
                                </center>
                            @endif
                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Adults</th>
                                    <th>Room/Hall/Offer</th>
                                    <th>Facility Number</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Status</th>
                                    <th>Room Status</th>
                                    <th>Check-In Now</th>
                                    @if(strtolower($role)=='super'||strtolower($role)=='admin'||strtolower($role)=='frontdesk')
                                        <th>Action</th>
                                    @endif
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
                                        <td>{{ $booking->room_number }}</td>
                                        <td>{{ $booking->arrival_date }}</td>
                                        <td>{{ $booking->departure_date }}</td>
                                        <td>@if(ucfirst(strtolower($booking->status))=="Standby")<span class="badge badge-primary p-2">@endif
                                            @if(ucfirst(strtolower($booking->status))=="Confirmed")<span class="badge badge-success p-2">@endif
                                            {{ ucfirst(strtolower($booking->status)) }}</span>
                                        </td>
                                        <td>
                                            @if($todaytimedigit<$booking->int_departure_date)
                                                @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2">{{ "Make Payment First" }}</span>@endif
                                                @if($booking->status=="confirmed" && (int)$booking->room_number==0)<span class="badge badge-success p-2">{{ "Assign Room Now" }}</span>@endif
                                                @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                                @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Room is assigned" }}</span>@endif
                                            @endif
                                            @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number==0)
                                                <span class="badge badge-danger p-2">{{ "No Show" }}</span>
                                            @endif
                                            @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number>0)
                                                <span class="badge badge-danger p-2">{{ $booking->Process_Checked_Out($booking->id,$booking->room_number)["status"] }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->Process_Checked_Out_Status($booking->id,$booking->room_number)["status"]=="It has been checked-out")
                                            {{ "Completed" }}
                                            @else
                                            @if($todaytimedigit>$booking->int_arrival_date && $todaytimedigit<$booking->int_departure_date)
                                                @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2">{{ "Make Payment First" }}</span>@endif
                                                @if($booking->status=="confirmed" && (int)$booking->room_number==0)<span class="badge badge-success p-2">{{ "Assign Room Now" }}</span>@endif
                                                @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                                @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Already Checked-In" }}</span>@endif
                                            @endif
                                            @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number==0)
                                                <span class="badge badge-danger p-2">{{ "No Show" }}</span>
                                            @endif
                                            @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number>0)
                                                <span class="badge badge-danger p-2">{{ $booking->Process_Checked_Out($booking->id,$booking->room_number)["status"] }}</span>
                                            @endif

                                            @if($todaytimedigit<$booking->int_arrival_date && $todaytimedigit<$booking->int_departure_date && (int)$booking->room_number>0)
                                                <form action="checkout" method="post" name="checkoutform" id="checkoutform">
                                                    @csrf
                                                    <input type="hidden" name="room_number" id="room_name" value="{{ $booking->room_number }}" required>
                                                    <button type="submit" class="btn btn-danger" name="checkout" value="{{ $booking->id }}">Check Out</button>
                                                </form>
                                            @endif
                                            @endif
                                        </td>
                                        @if(strtolower($role)=='super'||strtolower($role)=='admin'||strtolower($role)=='frontdesk')
                                            <td>
                                                @if($booking->Process_Checked_Out_Status($booking->id,$booking->room_number)["status"]=="It has been checked-out")
                                                {{ "Completed" }}
                                                @else
                                                @if($booking->status=="confirmed" && (int)$booking->room_number>0 && $todaytimedigit>$booking->int_departure_date)
                                                    <?php if($booking->Process_Checked_Out($booking->id,$booking->room_number)["status"]!="Checked-Out Previously"&&$booking->Process_Checked_Out($booking->id,$booking->room_number)["status"]!="Checked-Out"){ ?>
                                                        <form action="checkout" method="post" name="checkoutform" id="checkoutform">
                                                            @csrf
                                                            <input type="hidden" name="room_number" id="room_name" value="{{ $booking->room_number }}" required>
                                                            <button type="submit" class="btn btn-success" name="checkout" value="{{ $booking->id }}">Check Out</button>
                                                        </form>
                                                    <?php } ?>
                                                    <?php if($booking->Process_Checked_Out($booking->id,$booking->room_number)["status"]=="Checked-Out Previously"||$booking->Process_Checked_Out($booking->id,$booking->room_number)["status"]=="Checked-Out"){ ?>
                                                        {{ "Completed" }}
                                                    <?php } ?>
                                                @endif

                                                @if($booking->status=="confirmed" && (int)$booking->room_number>0 && $todaytimedigit>$booking->int_arrival_date && $todaytimedigit<$booking->int_departure_date)
                                                    <form action="checkout" method="post" name="checkoutform" id="checkoutform">
                                                        @csrf
                                                        <input type="hidden" name="room_number" id="room_name" value="{{ $booking->room_number }}" required>
                                                        <button type="submit" class="btn btn-success" name="checkout" value="{{ $booking->id }}">Check Out</button>
                                                    </form>
                                                @endif

                                                @if($todaytimedigit<$booking->int_arrival_date && $todaytimedigit<$booking->int_departure_date && (int)$booking->room_number>0)
                                                    <form action="checkout" method="post" name="checkoutform" id="checkoutform">
                                                        @csrf
                                                        <input type="hidden" name="room_number" id="room_name" value="{{ $booking->room_number }}" required>
                                                        <button type="submit" class="btn btn-danger" name="checkout" value="{{ $booking->id }}">Check Out</button>
                                                    </form>
                                                @endif
                                                @endif
                                            </td>
                                        @endif
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
