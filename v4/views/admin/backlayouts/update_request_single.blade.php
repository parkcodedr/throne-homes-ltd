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
                        <h5>{{ auth()->user()->name." 's Update Request" }}</h5>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update request list</li>
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
                     <div class="col-md-12">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Document Type</label>
                                                <input name="document_type" type="text" class="form-control" value="{{ $userInfo->document_type }}" disabled>
                                                    
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Uploaded Document</label>
                                                <img src="{{ asset('uploads/documents/'.$userInfo->document_name ) }}"height="210px" width="450px" >
                                            
                                            </div>
                                        </div>
                                          </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form method="POST" action="/update_request_list/{{$userInfo->user_id}}" autocomplete="off">
                                    @csrf
                                    @method('PUT')
                                   
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><b>PERSONAL INFORMATION UPDATE REQUEST</b></h4>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                        @if(Session::has('success'))
                                    <p class="text-center text-success">{{Session::get('success')}}</p>
                                    @endif
                                    @if(Session::has('error'))
                                    <p class="text-center text-danger">{{Session::get('error')}}</p>
                                    @endif
                                    </div>
                                        <br>
                                         
                                        <br>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Name</label>
                                                <input name="name" type="text" class="form-control" value="{{ $userInfo->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Last Name</label>
                                                <input name="lastname" type="text" class="form-control" placeholder=" Last Name"  value="{{ $userInfo->lastname }}" 
                                                >
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Other Name</label>
                                                <input name="middlename" type="text" class="form-control" placeholder="Other Name"  value="{{ $userInfo->middlename}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Date of Birth (dd/mm/yyyy) </label>
                                                <input name="dob" type="date" class="form-control" placeholder=" Date of Birth"  value="{{ $userInfo->dob}}">
                                            </div>
                                        </div>
                                        
            
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Phone Number</label>
                                                <input name="phone" type="text"   class="form-control"  value="{{ $userInfo["phone"] }}" >
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Email Address</label>
                                                <input class="form-control" name="email" type="email"   value="{{ $userInfo["email"] }}" >
                                            </div>
                                        </div>
            
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit" {{$userInfo->approval_status=="Approved"?"disabled":""  }}>Approve Request</button>
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
