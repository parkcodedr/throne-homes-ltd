<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <!-- sidebar menu -->
                <?php echo $__env->make('admin.backlayouts.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <?php echo $__env->make('admin.backlayouts.menu_footer_buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <?php echo $__env->make('admin.backlayouts.top_navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h5><?php echo e(auth()->user()->name." 's Profile"); ?></h5>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
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
                                <!--                                <h2>Default Example <small>Users</small></h2>-->

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form method="post" action="<?php echo e(route('profile')); ?>" enctype="multipart/form-data" autocomplete="off">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <input type="text" id="discountmd5" value="<?php echo e(Request::get('buynow_type')); ?>" hidden>
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
                                                <input name="name" type="text" class="form-control" value="<?php echo e($userInfo["name"]); ?>"   disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Last Name</label>
                                                <input name="lastname" type="text" class="form-control" placeholder=" Last Name"  value="<?php echo e($userInfo["lastname"]); ?>" 
                                                placeholder=" Last Name"  disabled>
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Other Name</label>
                                                <input name="othername" type="text" class="form-control" placeholder="Other Name"  value="<?php echo e($userInfo["middlename"]); ?>"   disabled>
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
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
            
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Marital Status</label>
                                                <select name="mstatus" type="text" class="form-control" required>
                                                    <option value="">Marital Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="text-dark">Phone Number</label>
                                                <input name="phone" type="text"  disabled class="form-control"  value="<?php echo e($userInfo["phone"]); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark" for="">contact Address</label>
                                                <input class="form-control" name="address" placeholder="contact Address"  value="<?php echo e($userInfo["address"]); ?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Email Address</label>
                                                <input class="form-control" name="email" type="email" disabled  value="<?php echo e($userInfo["email"]); ?>" >
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">City</label>
                                                <input class="form-control" name="city" type="text" placeholder="City"  value="<?php echo e($userInfo['city']); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Country</label>
                                                <input class="form-control" name="country" type="text" placeholder="Country"  value="<?php echo e($userInfo['country']); ?>" >
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
<?php echo $__env->make('admin.backlayouts.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /footer content -->
</div>
</div>
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/view_profile.blade.php ENDPATH**/ ?>