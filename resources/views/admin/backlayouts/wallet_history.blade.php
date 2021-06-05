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
                    <h3>Wallet History</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wallet History</li>
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
                                        <th>Booking ID</th>
                                        <th>Room/Hall/Offer</th>
                                        <th>Guest Name</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Transaction Date</th>
                                        @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                            <th>Staff ID</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wallets as $wallet)
                                        <tr>
                                            <td scope="row">{{ $wallet->id }}</td>
                                            <td>@if(empty($wallet->booking_id)) 0 @else {{ $wallet->booking_id }} @endif</td>
                                            <td>@if($wallet->booking_id>0) {{ $wallet->GetRoomName($wallet->booking_id) }} @else {{ "Fund Transfer"}} @endif</td>
                                            <td>@if($wallet->booking_id>0) {{ $wallet->CheckBooking($wallet->booking_id)["lastname"] }} {{ $wallet->CheckBooking($wallet->booking_id)["firstname"] }} @else {{ "---"}} @endif</td>
                                            <td>{{ $wallet->fund_type }}</td>
                                            <td>{{ $wallet->amount }}</td>
                                            <td>{{ $wallet->created_at }}</td>
                                            @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                                <td>{{ $wallet->staff_id }}</td>
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
