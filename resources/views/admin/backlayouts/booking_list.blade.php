<style>
#alink {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
</style>
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
                                <li class="breadcrumb-item"><a href="{{ url('/booking_list/0') }}">Bookig List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Booking List</li>
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
                            @if($display_enabled>0)
                            <center>
                                @if(!empty($payment_status)) 
                                    <center>                           
                                            <div class="alert bg-green alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <center><h1> {{ $payment_status }} </h1><h1>Thank you.</h1></center> 
                                                <meta http-equiv="Refresh" content="2;url={{ url('/booking_list/0') }}">
                                            </div>
                                    </center>
                                @endif
                                @if(empty($payment_status)) 
                                    <form name="pay_for_booking" id="pay_for_booking" action="" method="post">@csrf
                                        <input type="hidden" name="booking_id" id="booking_id" value="{{ $booking_id }}" required> 
                                                <h1>Please, note that you are making payment for <br>Name : {{ $booking["lastname"]." ".$booking["firstname"] }}, <br>Amount : {{ $booking["amounttopay"] }} <br>from your wallet balance of {{ $walletbalance }}</h1>
                                                <button type="submit" class="btn btn-success" name="process_pay_for_booking" value="pay_for_booking"><h1>Pay for : {{ $booking["lastname"]." ".$booking["firstname"] }}</h1><br></button>
                                    </form>
                                @endif
                            </center>
                            @endif

                            @if($display_enabled==0)
                                @if(!empty($assignedroomresponse)) 
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    @if(!empty($assignedroomresponse))
                                        <center><h3>{{ $assignedroomresponse["status"] }}</h3></center>
                                        <meta http-equiv="Refresh" content="2;url={{ url('/booking_list/0') }}">
                                    @endif
                                </div> 
                                @endif
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
                                        <th>Room Status</th>
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

                                            <form action="{{ url('/booking_list/'.$booking->id) }}" method="POST">
                                            @csrf
                                            <td>
                                                @if($todaytimedigit<$booking->int_departure_date)
                                                    @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2"><a href="{{ url('/make_payment_for/'.$booking->id) }}" id="alink"> @if($walletbalance>=$booking->amounttopay) {{ "Make Payment First" }} @else {{ "Make Payment(Low Balance)" }} @endif </a></span>@endif
                                                    @if($booking->status=="confirmed" && (int)$booking->room_number==0)
                                                        <?php 
                                                            echo '<span class="badge badge-success p-2">
                                                                <select name="room_number" id="room_number" class="form-control" title="Room Number" data-header="Room Number" required>'; 
                                                            echo "<option value=''>Room Number</option>";
                                                            $rooms = $booking->getAllRoomNumber($booking->roomtype);
                                                            foreach ($rooms  as $room){
                                                                $roomnumbers = $room["room_number"]." ";
                                                                echo "<option value='".$roomnumbers."'>".ucfirst($booking->group)." ".$roomnumbers."</option>";
                                                            }
                                                            echo "</select></span>";
                                                        ?>
                                                    @endif
                                                    @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                                    @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Room is assigned" }}</span>@endif
                                                @endif
                                                @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number==0)
                                                    <span class="badge badge-danger p-2">{{ "No Show" }}</span>
                                                @endif
                                                @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number>0)
                                                    <span class="badge badge-danger p-2">{{ "Checked-Out" }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($todaytimedigit<$booking->int_departure_date)
                                                    @if($booking->status=="standby" && (int)$booking->room_number==0)<span class="badge badge-primary p-2"><a href="{{ url('/make_payment_for/'.$booking->id) }}" id="alink"> @if($walletbalance>=$booking->amounttopay) {{ "Make Payment First" }} @else {{ "Make Payment(Low Balance)" }} @endif </a></span>@endif
                                                    @if($booking->status=="confirmed" && (int)$booking->room_number==0)
                                                        <span class="badge badge-success p-2">
                                                            <input type="hidden" id="bookin_id" name="booking_id" value="{{ $booking->id }}">
                                                            <input type="hidden" id="roomtype" name="roomtype" value="{{ $booking->roomtype }}">
                                                            <button type="submit" class="btn btn-success" name="checkin" value="Check-In Now">{{ "Check-In Now" }}</button>
                                                        </span>
                                                    @endif
                                                    @if($booking->status=="standby" && (int)$booking->room_number>0)<span class="badge badge-danger p-2">{{ "System Bypass, please check!" }}</span>@endif
                                                    @if($booking->status=="confirmed" && (int)$booking->room_number>0)<span class="badge badge-success p-2">{{ "Already Checked-In" }}</span>@endif
                                                @endif
                                                @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number==0)
                                                    <span class="badge badge-danger p-2">{{ "No Show" }}</span>
                                                @endif
                                                @if($todaytimedigit>$booking->int_departure_date && (int)$booking->room_number>0)
                                                    <span class="badge badge-danger p-2">{{ "Checked-Out" }}</span>
                                                @endif
                                            </td>
                                            </form>
                                            @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                                <td>{{ $booking->channel }}</td>
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
