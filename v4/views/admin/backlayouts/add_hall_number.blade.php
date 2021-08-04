
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
                        <h3>Add New Hall Number</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb" >
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Room Number</li>
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
                                <a href="{{ url('/home') }}" class="btn btn-secondary btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-arrow-left"></i> &nbsp; Back to Home &nbsp; </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="{{ url('/add_hall_numbers') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                @csrf
                                    @if($role=="super")
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-name">Admin ID<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="cust-name" name="room_number" placeholder="e.g. 2" required="required" class="form-control ">
                                            </div>
                                        </div>
                                    @endif
                                    @if($role=="admin")
                                        <input type="hidden" id="admin_id" name="admin_id" value="{{ $user }}" required="required">
                                    @endif
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="roomtype">Hall Type<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="roomtype" id="roomtype" class="form-control" title="Select Hall Type" data-header="Select Hall Type" required>
                                                <option value="">Select Hall Type</option>
                                                @foreach($rooms as $room)
                                                  <option value="{{ $room->id }}" data-subtext="<span class='badge badge-info'>&#x20A6;{{ number_format($room->room_price,2,".",",") }} / night</span>">{{ $room->room_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-name">New Hall Number<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="cust-name" name="room_number" placeholder="201 or 201-209" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button" name="add_room_number" value="cancel_newroomnumber">Cancel</button>
                                            <button type="submit" class="btn btn-success" name="add_room_number" value="newroomnumber">Add Hall Number</button>
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
