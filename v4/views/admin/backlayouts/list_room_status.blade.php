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
                    <a href="{{ url('/roomstatus/0') }}"><h3>Rooms Status / Blocked Rooms Status / Check-In</h3></a>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/roomstatus/0') }}">Room Status</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Current Status</li>
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
                            @if(!empty($roomstatus_status)) 
                                <center>
                                    <?php if (array_key_exists("room_number",$roomstatus_status)){?>
                                        <form name="processcheckin" id="processcheckin" action="" method="post">@csrf
                                            <input type="hidden" name="room_number" id="room_number" value="{{ $roomstatus_status["room_number"] }}" required> 
                                            <input type="hidden" name="roomtype" id="roomtype" value="{{ $roomstatus_status["roomtypes_id"] }}" required> 
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="booking_id">Select from Booking/Reservation List<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="booking_id" id="booking_id" class="form-control" title="Select from Booking/Reservation List" data-header="Select from Booking List" required>
                                                        <option value="">Select Booking</option>
                                                        <?php $count = 0; ?>
                                                        @foreach($bookings as $booking)
                                                        <?php $count++; ?>
                                                          <option value="{{ $booking->id }}">{{ strtoupper($booking->lastname)." ".ucfirst(strtolower($booking->firstname)) }}
                                                            @if($user->role_id==3) {{ "(User)" }} @else {{ "(Staff)" }} @endif</option>
                                                        @endforeach
                                                        <?php if($count<=0){ ?>
                                                            <option value="">No Booking with confirmed payment</option>
                                                        <?php } ?>
                                                            @if($blockstatus==0) <option value="1"> @else <option value="0"> @endif @if($blockstatus==0) Block @else Unblock @endif  Room {{ $roomstatus_status["room_number"] }}</option>
                                                    </select><br>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <button type="submit" class="btn btn-success" name="processcheckin" value="assign_new_room"><h1>Check-in to room number : {{ $roomstatus_status["room_number"] }}</h1><br></button>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <button type="submit" class="btn btn-info" name="@if($blockstatus==0) processblocking @else processunblocking @endif" value="block_room"><h1>@if($blockstatus==0) Block @else Unblock @endif room number : {{ $roomstatus_status["room_number"] }}</h1><br></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                    @if(!empty($rawdata_process))
                                    <?php if (array_key_exists("status",$rawdata_process)||array_key_exists("error",$rawdata_process)){?>                            
                                        <div class="alert bg-green alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h3><?php if(array_key_exists("status",$rawdata_process)){ ?> {{ $rawdata_process["status"] }} <?php } ?>
                                            <?php if(array_key_exists("error",$rawdata_process)){ ?> {{ $rawdata_process["error"] }} <?php } ?></h3>
                                            <h3>{{ " Thank you, check-in/blocking process is completed!" }}</h3>
                                            <meta http-equiv="Refresh" content="2;url={{ url('/roomstatus/0') }}">
                                        </div>
                                    <?php } ?>
                                    @endif
                                </center>
                            @endif

                            @if($display_enabled>0)
                                @if(strtolower($role)=='super'||strtolower($role)=='admin'||strtolower($role)=='frontdesk')
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Rooms' Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                @foreach($roomnumbers as $roomnumber)
                                                    @if($roomnumber->current_booking_id==0)<a href="{{ url('/checkin_route/'.$roomnumber["id"]) }}">@endif
                                                        <div class="col-md-1 col-sm-1 ">
                                                            <button @if($roomnumber->block==0) @if($roomnumber->current_booking_id>0) class="btn btn-warning" @else class="btn btn-primary" @endif @else class="btn btn-info" @endif type="button" name="remove_room_service" value="{{ $roomnumber["id"] }}">{{ $roomnumber->room_number }}<br>{{ ucfirst(strtolower($roomnumber->GetRoomData($roomnumber->roomtypes_id,$admin_id)["room_name"])) }} @if(strtolower($roomnumber->group)=="room") {{ strtolower($roomnumber->group) }} @endif</button>
                                                        </div>
                                                    @if($roomnumber->current_booking_id==0)</a>@endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @endif
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
