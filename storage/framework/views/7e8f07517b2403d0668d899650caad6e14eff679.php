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
                        <h5><?php echo e(auth()->user()->name." 's Update Request"); ?></h5>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
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
                                                <input name="document_type" type="text" class="form-control" value="<?php echo e($userInfo->document_type); ?>" disabled>
                                                    
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark">Uploaded Document</label>
                                                <img src="<?php echo e(asset('uploads/documents/'.$userInfo->document_name )); ?>"height="210px" width="450px" >
                                            
                                            </div>
                                        </div>
                                          </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form method="POST" action="/update_request_list/<?php echo e($userInfo->user_id); ?>" autocomplete="off">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                   
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><b>PERSONAL INFORMATION UPDATE REQUEST</b></h4>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                        <?php if(Session::has('success')): ?>
                                    <p class="text-center text-success"><?php echo e(Session::get('success')); ?></p>
                                    <?php endif; ?>
                                    <?php if(Session::has('error')): ?>
                                    <p class="text-center text-danger"><?php echo e(Session::get('error')); ?></p>
                                    <?php endif; ?>
                                    </div>
                                        <br>
                                         
                                        <br>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Name</label>
                                                <input name="name" type="text" class="form-control" value="<?php echo e($userInfo->name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Last Name</label>
                                                <input name="lastname" type="text" class="form-control" placeholder=" Last Name"  value="<?php echo e($userInfo->lastname); ?>" 
                                                >
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Other Name</label>
                                                <input name="middlename" type="text" class="form-control" placeholder="Other Name"  value="<?php echo e($userInfo->middlename); ?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Date of Birth (dd/mm/yyyy) </label>
                                                <input name="dob" type="date" class="form-control" placeholder=" Date of Birth"  value="<?php echo e($userInfo->dob); ?>">
                                            </div>
                                        </div>
                                        
            
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Phone Number</label>
                                                <input name="phone" type="text"   class="form-control"  value="<?php echo e($userInfo["phone"]); ?>" >
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-dark">Email Address</label>
                                                <input class="form-control" name="email" type="email"   value="<?php echo e($userInfo["email"]); ?>" >
                                            </div>
                                        </div>
            
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit" <?php echo e($userInfo->approval_status=="Approved"?"disabled":""); ?>>Approve Request</button>
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
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/update_request_single.blade.php ENDPATH**/ ?>