
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
                    <h3>View/Edit Roomtypes</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb pull-right" style="background: none">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/list_edit_roomtypes') }}">Structural Settings</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View/Edit Roomtypes</li>
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
                            {{ var_dump($addroomtypes_status) }}
                            @if(strtolower($role)=='super'||strtolower($role)=='admin')
                            <form action="{{ url('/view_edit_roomtypes/'.$roomtype_id) }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">
                                @csrf
                                    @foreach($roomtype_keys as $roomtype_key)
                                        <input type="hidden" id="id" name="id" value="{{ $roomtypes["id"] }}">
                                        <input type="hidden" id="content_id" name="content_id" value="{{ $roomtypes["content_id"] }}">
                                        <input type="hidden" id="page_name" name="page_name" value="{{ $roomtypes["page_name"] }}">
                                        @if($roomtype_key=='room_img')
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{ $roomtype_key }}">{{ strtoupper(join(' ',explode('_',$roomtype_key))) }} @if(trim($roomtypes[$roomtype_key])=='') @endif
                                                    </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="file" name="room_img" id="room_img" class="form-control">
                                                </div>
                                            </div>
                                        @endif
                                        @if(strtolower($role)=='admin')
                                            <input type="hidden" id="admin_id" name="admin_id" value="{{ $roomtypes["admin_id"] }}">
                                            @if($roomtype_key!='room_img'&&$roomtype_key!='id'&&$roomtype_key!='admin_id'&&$roomtype_key!='content_id'&&$roomtype_key!='page_name'&&$roomtype_key!='created_at'&&$roomtype_key!='updated_at')
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{ $roomtype_key }}">{{ strtoupper(join(' ',explode('_',$roomtype_key))) }} @if(trim($roomtypes[$roomtype_key])=='') <span class="required">*</span>@endif
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" id="{{ $roomtype_key }}" name="{{ $roomtype_key }}" @if($roomtype_id>0) value="{{ $roomtypes[$roomtype_key] }}" @endif @if(trim($roomtypes[$roomtype_key])=='') required="required" @endif class="form-control ">
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        @if(strtolower($role)=='super')
                                            @if($roomtype_key!='room_img'&&$roomtype_key!='id'&&$roomtype_key!='content_id'&&$roomtype_key!='page_name'&&$roomtype_key!='created_at'&&$roomtype_key!='updated_at')
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{ $roomtype_key }}">{{ strtoupper(join(' ',explode('_',$roomtype_key))) }} @if(!empty(trim($roomtypes[$roomtype_key]))) <span class="required">*</span> @endif
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" id="{{ $roomtype_key }}" name="{{ $roomtype_key }}" @if($roomtype_id>0) value="{{ $roomtypes[$roomtype_key] }}" @endif @if(!empty(trim($roomtypes[$roomtype_key]))) required="required" @endif class="form-control ">
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-primary" type="button" name="add_roomtypes" value="cancel_add_roomtypes">Cancel</button>
                                            <button type="submit" class="btn btn-success" name="add_roomtypes" value="@if($roomtype_id>0) {{ "update_roomtypes" }}@else  {{ "add_roomtypes" }} @endif">@if($roomtype_id>0) {{ "Update Room Type..." }}@else  {{ "Add New Room Type..." }} @endif</button>
                                        </div>
                                    </div>

                                </form>

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
