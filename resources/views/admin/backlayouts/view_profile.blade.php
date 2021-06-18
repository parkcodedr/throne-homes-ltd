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
                        <h5>{{ auth()->user()->name." 's Profile" }}</h5>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                    
                                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @error('photo')
                                    <p class="text-center text-danger">{{$message}}</p>
                                    @enderror
                                    @if(Session::has('success'))
                                    <p class="text-center text-success">{{Session::get('success')}}</p>
                                    @endif
                                    @if(Session::has('error'))
                                    <p class="text-center text-danger">{{Session::get('error')}}</p>
                                    @endif
                                <div class="row">
                                   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Update Profile Photo</label>
                                        <input class="form-control" name="file" type="file">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 26px">
                                    <button class="btn btn-primary" type="submit">Upload</button>
                                </div>
                            </div>
                        </form>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form method="post" action="{{ route('profile') }}" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" id="discountmd5" value="{{ Request::get('buynow_type') }}" hidden>
                                    <input type="text" id="discount" value="0" hidden>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><b>PERSONAL INFORMATION</b></h4>
                                        </div>
                                        <br>
                                        <br>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Name</label>
                                                <input name="name" type="text" class="form-control" value="{{ $userInfo["name"] }}"   disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Last Name</label>
                                                <input name="lastname" type="text" class="form-control" placeholder=" Last Name"  value="{{ $userInfo["lastname"] }}" 
                                                placeholder=" Last Name"  disabled>
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Other Name</label>
                                                <input name="othername" type="text" class="form-control" placeholder="Other Name"  value="{{ $userInfo["middlename"] }}"   disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Date of Birth (dd/mm/yyyy) </label>
                                                <input name="dob" type="date" class="form-control" placeholder=" Date of Birth"  disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Gender</label>
                                                <select name="gender" type="text" class="form-control" >
                                                    <option value="">Select Gender</option>
                                                    <option value="Male" {{ $user->gender =='Male'? 'selected':'' }}>Male</option>
                                                    <option value="Female" {{ $user->gender =='Female'? 'selected':'' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
            
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Marital Status</label>
                                                <select name="mstatus" type="text" class="form-control" required>
                                                    <option value="">Marital Status</option>
                                                    <option value="Single" {{ $user->mstatus =='Single'? 'selected':'' }}>Single</option>
                                                    <option value="Married" {{ $user->mstatus =='Married'? 'selected':'' }}>Married</option>
                                                    <option value="Divorced" {{ $user->mstatus =='Divorced'? 'selected':'' }}>Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="text-dark">Phone Number</label>
                                                <input name="phone" type="text"  disabled class="form-control"  value="{{ $userInfo["phone"] }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark" for="">contact Address</label>
                                                <input class="form-control" name="address" placeholder="contact Address"  value="{{ $userInfo["address"] }}"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Email Address</label>
                                                <input class="form-control" name="email" type="email" disabled  value="{{ $userInfo["email"] }}" >
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">City</label>
                                                <input class="form-control" name="city" type="text" placeholder="City"  value="{{ $userInfo['city'] }}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Country</label>
                                                <input class="form-control" name="country" type="text" placeholder="Country"  value="{{ $userInfo['country'] }}" >
                                            </div>
                                        </div>
                                        

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit">Update</button>
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
