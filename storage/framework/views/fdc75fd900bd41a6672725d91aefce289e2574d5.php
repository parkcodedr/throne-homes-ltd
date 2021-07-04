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
                        <h3>Land's Prices</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Land's Prices</li>
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

                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Land Name</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                          <th>Order Date</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($userLands)==0): ?>
                                    <tr>
                                    <td colspan="5" class="text-center">You have no land in <?php echo e(strtoupper($name)); ?> </td>
                                    </tr>
                                    <?php else: ?>
                                   
                                        <?php $__currentLoopData = $userLands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($land->land_name); ?></td>
                                                <td><?php echo e($land->order_price); ?></td>
                                                <td><?php echo e($land->land_size." sqm"); ?></td>
                                                 <td><?php echo e($land->created_at); ?></td>
                                                <td><?php echo e($land->status); ?></td>
                                                <?php if($land->completePayment==false && $land->payment_plan=="installments"): ?>
                                                <td>
                                                    <a href="<?php echo e(url('/upload_payment')."/".$land->id); ?>">
                                                    <button class="btn btn-info">Pay now</button>
                                                    </a>
                                                </td>
                                                <?php else: ?>
                                                <td>Completed</td>
                                                <?php endif; ?>
                                  
                                            </tr>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                       
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
<?php echo $__env->make('admin.backlayouts.menu_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /footer content -->
</div>
</div>
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/my_lands.blade.php ENDPATH**/ ?>