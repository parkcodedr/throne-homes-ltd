
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
                        <h3>Add New Staff</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb" >
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/booking_list') }}">Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Staff</li>
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
                                @if(!empty($addstaffstatus))<center><h1> {{ $addstaffstatus }} </h1><h1>Thank you.</h1></center> @endif
                                <form action="{{ url('/add_staffs') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                @csrf

                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">Select from User List<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="user_id" id="user_id" class="form-control" title="Select from User List" data-header="Select from User List" required>
                                                <option value="">Select User</option>
                                                @foreach($users as $user)
                                                  <option value="{{ $user->id }}">{{ strtoupper($user->lastname)." ".ucfirst(strtolower($user->name)) }}
                                                    @if($user->role_id==3) {{ "(User)" }} @else {{ "(Staff Already)" }} @endif</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Staff Role<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="role_id" id="role_id" class="form-control" title="Select Role" data-header="Select Role" required>
                                                <option value="">Select Role</option>
                                                @foreach($roles as $role)
                                                  <option value="{{ $role->id }}">{{ ucfirst(strtolower($role->role)) }}</option>
                                                @endforeach
                                            </select>
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
