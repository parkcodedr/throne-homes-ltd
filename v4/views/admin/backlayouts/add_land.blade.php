<div class="container body">
    @if (session('status'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong style="text-decoration: white;">{{ session('status') }}</strong>
        </div>
    @endif
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
                        <h3>Add New Land Project</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Land</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Land Project</li>
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
                                <a href="{{ url('/home') }}"
                                    class="btn btn-secondary btn-sm pull-right text-white mt-3 mb-3"><i
                                        class="fa fa-arrow-left"></i> &nbsp; Back to Home &nbsp; </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="{{ url('/save_land') }}" method="POST" id="demo-form2" enctype="multipart/form-data"
                                    data-parsley-validate class="form-horizontal form-label-left mt-5">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="cust-name">Project Title
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="project-title" name="title"
                                                placeholder="Project Title" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="details">Project Details
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea name="details" id="project_details" rows="10"
                                                style="width: 100%"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="details">Project Cost
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="" name="cost" placeholder="Project Cost"
                                                required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="details">Project Price
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="" name="price" placeholder="Project Selling Price"
                                                required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="details">Project Images
                                            <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="input-field">
                                                <div class="input-images-1" tyle="padding-top: .5rem;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button" value="cancel">Cancel</button>
                                            <button type="submit" class="btn btn-success" value="nadd">Submit</button>
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
    </div>
</div>
<!-- /page content -->

<!-- footer content -->
@include('admin.backlayouts.menu_footer')
<!-- /footer content -->
<script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/vendors/imageuploader/image-uploader.min.js') }}"></script>
<script type="text/javascript">
    $('.input-images-1').imageUploader({
        imagesInputName: 'project_image',
        maxSize: 2 * 1024 * 1024,
        maxFiles: 15
    });

</script>
