
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
                        <h3>Send Money to Frontdesk or Account</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb" >
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/booking_list') }}">Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Send Money</li>
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
                                @if(!empty($addfundstatus)) 
                                    <center>                           
                                            <div class="alert bg-green alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <center><h1> {{ $addfundstatus }} </h1><h1>Thank you.</h1></center> 
                                            </div>
                                    </center>
                                @endif
                                <form action="{{ url('/add_fund') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                @csrf

                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="staff_id">Select from Staff List<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select name="staff_id" id="staff_id" class="form-control" title="Select from Staff List" data-header="Select from User List" required>
                                                <option value="">Select Staff</option>
                                                @foreach($users as $staff)
                                                  <option value="{{ $staff->id }}">{{ strtoupper($staff->lastname)." ".ucfirst(strtolower($staff->name)) }}
                                                    @if($staff->role_id==3) {{ "(User)" }} @else {{ "(Staff)" }} @endif</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-email">Amount <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="amount" name="amount" required="required" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button" name="addnewfund" value="cancel_addfund">Cancel</button>
                                            <button type="submit" class="btn btn-success" name="addnewfund" value="processing">Send Money Now...</button>
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
