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
                        <h5>Payment Document</h5>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Upload Payment Document</li>
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
                    
                                <form action="/upload_payment/<?php echo e($id); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php if ($errors->has('photo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('photo'); ?>
                                    <p class="text-center text-danger"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    <?php if(Session::has('success')): ?>
                                    <p class="text-center text-success"><?php echo e(Session::get('success')); ?></p>
                                    <?php endif; ?>
                                    <?php if(Session::has('error')): ?>
                                    <p class="text-center text-danger"><?php echo e(Session::get('error')); ?></p>
                                    <?php endif; ?>
                                <div class="row">
                                   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Upload Payment Document</label>
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
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/upload_payment.blade.php ENDPATH**/ ?>