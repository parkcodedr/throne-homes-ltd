
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
                        <h3>Reserve New Room</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb" >
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/booking_list/0') }}">Booking</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reserve New Room</li>
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
                                <a href="{{ url('/booking_list/0') }}" class="btn btn-secondary btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-arrow-left"></i> &nbsp; Back to Booking List &nbsp; </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="{{ url('/bookings') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                @csrf

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-name">Customer Name<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="cust-name" name="name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-email">Customer Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="cust-email" name="email" required="required" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="roomtype">Room Type<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="roomtype" id="roomtype" class="form-control" title="Select Room Type" data-header="Select Room Type" required>
                                                <option value="">Select Room Type</option>
                                                @foreach($rooms as $room)
                                                  <option value="{{ $room->id }}" data-subtext="<span class='badge badge-info'>&#x20A6;{{ number_format($room->room_price,2,".",",") }} / night</span>">{{ $room->room_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input name="group" type="hidden" value="room">
                                    <div class="item form-group">
                                        <label for="guest" class="col-form-label col-md-3 col-sm-3 label-align">Guest</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="colmd-6 col-sm-6">
                                                    Adults
                                                    <select id="heard" name="adults" class="form-control" required>
                                                        <option value="">Choose..</option>
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                                <div class="colmd-6 col-sm-6">
                                                    Children
                                                    <select id="heard" name="children" class="form-control" required>
                                                        <option value="">Choose..</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <input name="discountpercent" type="hidden" value="{{ $discountpercent }}">
                                            <button class="btn btn-primary" type="button" name="booking_type" value="cancel_booking">Cancel</button>
                                            <button type="submit" class="btn btn-success" name="booking_type" value="processing">Start Processing...</button>
                                        </div>
                                    </div>

                                </form>
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
