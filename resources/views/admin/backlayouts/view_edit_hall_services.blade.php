
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
                    @if($currenturlcheckdisplay==1)
                        <h3>View/Edit {{ $titlename->room_name }} Services</h3>
                    @endif
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/list_edit_roomtypes') }}">Structural Settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View/Edit Room Services</li>
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
                            <a href="{{ url('/view_edit_room_services/0') }}" class="btn btn-success btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-plus"></i> &nbsp; Add New Room Service &nbsp; </a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(!empty($addroomservices_status)&&!empty($addroomservices_status["status"]!="error"))
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h3>{{ $addroomservices_status["status"] }}</h3>
                                </div>
                            @endif
                            <h1>{{ "Please note: $limit services is currently available."}}</h1>
                            @if($currenturlcheckdisplay==1)
                                @if(strtolower($role)=='super'||strtolower($role)=='admin')
                                <form action="{{ url('/view_edit_hall_services/'.$daomniroomtypes_id) }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                    @csrf
                                    @foreach($all_room_services as $all_room_service)
                                    <input type="hidden" id="id" name="id{{ $all_room_service['id'] }}" value="{{ $all_room_service["id"] }}">
                                    <input type="hidden" id="content_id" name="content_id{{ $all_room_service['id'] }}" value="{{ $all_room_service["content_id"] }}">
                                    <input type="hidden" id="group" name="group{{ $all_room_service['id'] }}" value="{{ $all_room_service["group"] }}">
                                    <input type="hidden" id="daomniroomtypes_id" name="daomniroomtypes_id{{ $all_room_service['id'] }}" value="{{ $all_room_service["daomniroomtypes_id"] }}">
                                    <div class="item form-group">
                                        @foreach($room_service_keys as $room_service_key)
                                            @if(strtolower($role)=='super')
                                                <input type="hidden" id="display" name="display{{ $all_room_service['id'] }}" value="{{ $all_room_service["display"] }}">
                                                @if($room_service_key!='id'&&$room_service_key!='group'&&$room_service_key!='daomniroomtypes_id'&&$room_service_key!='display'&&$room_service_key!='content_id'&&$room_service_key!='created_at'&&$room_service_key!='updated_at')
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{ $room_service_key }}">{{ strtoupper(join(' ',explode('_',$room_service_key))) }} @if(trim($all_room_service[$room_service_key])=='') <span class="required">*</span>@endif  </label>
                                                        @if(strtolower($room_service_key)!="available")
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" id="{{ $room_service_key }}" name="{{ $room_service_key }}{{ $all_room_service['id'] }}" @if($daomniroomtypes_id>0) value="{{ $all_room_service[$room_service_key] }}" @endif @if(trim($all_room_service[$room_service_key])=='') required="required" @endif class="form-control ">
                                                            </div>
                                                        @endif

                                                        @if(strtolower($room_service_key)=="available")
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <select id="{{ $room_service_key }}" name="{{ $room_service_key }}{{ $all_room_service['id'] }}" class="form-control" required>
                                                                    @if($all_room_service[$room_service_key]==0 )
                                                                        <option value="0" selected>No</option>
                                                                        <option value="1">Yes</option> 
                                                                    @endif
                                                                    @if($all_room_service[$room_service_key]==1)
                                                                        <option value="0">No</option>
                                                                        <option value="1" selected>Yes</option> 
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        <a href="{{ url('/remove_room_services/'.$all_room_service["id"]) }}">
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <button class="btn btn-primary" type="button" name="remove_room_service" value="{{ $all_room_service["id"] }}">Remove</button>
                                                            </div>
                                                        </a>
                                                        @endif
                                                @endif
                                            @endif

                                            @if(strtolower($role)=='admin')
                                                <input type="hidden" id="admin_id" name="admin_id{{ $all_room_service['id'] }}" value="{{ $all_room_service["admin_id"] }}">
                                                <input type="hidden" id="display" name="display{{ $all_room_service['id'] }}" value="{{ $all_room_service["display"] }}">
                                                @if($room_service_key!='id'&&$room_service_key!='group'&&$room_service_key!='daomniroomtypes_id'&&$room_service_key!='display'&&$room_service_key!='admin_id'&&$room_service_key!='content_id'&&$room_service_key!='created_at'&&$room_service_key!='updated_at')
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{ $room_service_key }}">{{ strtoupper(join(' ',explode('_',$room_service_key))) }} @if(trim($all_room_service[$room_service_key])=='') <span class="required">*</span>@endif  </label>
                                                        @if(strtolower($room_service_key)!="available")
                                                            <div class="col-md-2 col-sm-2 ">
                                                                <input type="text" id="{{ $room_service_key }}" name="{{ $room_service_key }}{{ $all_room_service['id'] }}" @if($daomniroomtypes_id>0) value="{{ $all_room_service[$room_service_key] }}" @endif @if(trim($all_room_service[$room_service_key])=='') required="required" @endif class="form-control ">
                                                            </div>
                                                        @endif

                                                        @if(strtolower($room_service_key)=="available")
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <select id="{{ $room_service_key }}" name="{{ $room_service_key }}{{ $all_room_service['id'] }}" class="form-control" required>
                                                                    @if($all_room_service[$room_service_key]==0 )
                                                                        <option value="0" selected>No</option>
                                                                        <option value="1">Yes</option> 
                                                                    @endif
                                                                    @if($all_room_service[$room_service_key]==1)
                                                                        <option value="0">No</option>
                                                                        <option value="1" selected>Yes</option> 
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        <a href="{{ url('/remove_room_services/'.$all_room_service["id"]) }}">
                                                            <div class="col-md-1 col-sm-1 ">
                                                                <button class="btn btn-primary" type="button" name="remove_room_service" value="{{ $all_room_service["id"] }}">Remove</button>
                                                            </div>
                                                        </a>
                                                        @endif
                                                @endif
                                            @endif

                                        @endforeach
                                    </div>
                                @endforeach
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-primary" type="button" name="add_room_services" value="cancel_add_service">Cancel</button>
                                                <button type="submit" class="btn btn-success" name="add_room_services" value="@if($daomniroomtypes_id>0) {{ "update_room_services" }} @else  {{ "add_new_room_services" }} @endif">
                                                    @if($daomniroomtypes_id>0) {{ "Update Hall Service..." }}@else  {{ "Add New Hall Service..." }} @endif</button>
                                            </div>
                                        </div>
                                </form>                            
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
