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
            <!-- top tiles -->
         
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Payment Under Process List</h3>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payment Documents</li>
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
                                @if(Session::has('success'))
                                <p class="text-center text-success">{{Session::get('success')}}</p>
                                @endif
                                @if(Session::has('error'))
                                <p class="text-center text-danger">{{Session::get('error')}}</p>
                                @endif
                                
                            </div>
                            
                            <div class="x_content">

                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Payment Plan</th>
                                            <th>Payment Type</th>
                                            <th>Amount Pay</th>
                                            <th>Payment Mode</th>
                                            <th>Payment Status </th>
                                            <th>Approval Status </th>
                                             <th>Confirmed by </th>
                                             <th>Date </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if(count($paymentProcessDocument)<1)
                                        <tr>
                                            <td class="text-center" colspan="7">
                                        </tr>
                                        @else --}}
                                        
                                            <tr>
                                                <td>{{ $paymentProcessDocument->payment_plan }}</td>
                                                <td>{{ $paymentProcessDocument->payment_type }}</td>
                                                <td>{{ $paymentProcessDocument->amount_pay }}</td>
                                                <td>{{ $paymentProcessDocument->payment_mode}}</td>
                                                <td>{{ $paymentProcessDocument->payment_status}}</td>
                                                <td>{{ $paymentProcessDocument->approval_status}}</td>
                                                 <td>{{ $paymentProcessDocument->confirmed_by}}</td>
                                                  <td>{{ $paymentProcessDocument->created_at}}</td>
                                                
                                                
                                                
                                            </tr>
                                        
                                        {{-- @endif --}}
                                    </tbody>
                                </table>
                               
                               
                            </div>
                            
                            <section class="row">
                                <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark h4">Payment Document</label>
                                        <img src="{{ asset('uploads/documents/'.$paymentProcessDocument->payment_document ) }}"height="560px" width="450px" >
                                    
                                    </div>
                
                                </div>
                                <form method="POST" action="{{url('/confirm_payment_process')."/".$paymentProcessDocument->id  }}">
                                @csrf
                               
                                    
                                <div class="col-md-3">
                                    <select class="form-control form-select-lg mb-3" name="action">
                                        <option selected>Select Action</option>
                                        <option value="approve">Approve</option>
                                        <option value="decline">decline</option>
                                      </select>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                                </section>
                            
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
