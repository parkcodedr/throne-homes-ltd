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
                        <h3>Order Details</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                    
                                <p>Orders</p>
                               
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              
                               <div class="row">
                                <dl class="col-md-12">
                                    <div class="col-md-4">
                                        <dt>Title</dt>
                                    <dd><?php echo e($order->title); ?></dd>
                                    <dt>Firstname</dt>
                                    <dd><?php echo e($order->firstname); ?></dd>
                                    <dt>Lastname</dt>
                                    <dd><?php echo e($order->lastname); ?></dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Othername</dt>
                                    <dd><?php echo e($order->othername); ?></dd>
                                    <dt>Date of birth</dt>
                                    <dd><?php echo e($order->date_of_birth); ?></dd>
                                    <dt> Gender</dt>
                                    <dd><?php echo e($order->gender); ?></dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Email</dt>
                                    <dd><?php echo e($order->email); ?></dd>
                                    <dt>Phone</dt>
                                    <dd><?php echo e($order->phone); ?></dd>
                                    <dt>Address</dt>
                                    <dd><?php echo e($order->address); ?></dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Order Category</dt>
                                    <dd><?php echo e($order->group); ?></dd>
                                    <dt>Payment Mode</dt>
                                    <dd><?php echo e($order->payment_mode); ?></dd>
                                    <dt>Payment Plan</dt>
                                    <dd><?php echo e($order->payment_plan); ?></dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Amount</dt>
                                    <dd><?php echo e($order->order_price); ?></dd>
                                    <dt>Installment</dt>
                                    <dd><?php echo e($order->price_pay); ?></dd>
                                    <dt> Monthly Pay</dt>
                                    <dd><?php echo e($order->pay_monthly); ?></dd>
                                    </div>
                                    <div class="col-md-4">
                                        <dt>Employer</dt>
                                    <dd><?php echo e($order->employer); ?></dd>
                                    <dt>Office Address</dt>
                                    <dd><?php echo e($order->officeaddress); ?></dd>
                                    <dt> City</dt>
                                    <dd><?php echo e($order->city); ?></dd>
                                    </div>
                                  
                                        <p class="lead">Next of Kin</p>
                                        <hr>
                                        <div class="col-md-4">
                                            <dt>Name</dt>
                                        <dd><?php echo e($order->kin_name); ?></dd>
                                        <dt>Relationship</dt>
                                        <dd><?php echo e($order->kin_relationship); ?></dd>
                                        <dt> Phone</dt>
                                        <dd><?php echo e($order->kin_phone); ?></dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt>Email</dt>
                                        <dd><?php echo e($order->kin_email); ?></dd>
                                        <dt>Address</dt>
                                        <dd><?php echo e($order->kin_address); ?></dd>
                                        <dt> City</dt>
                                        <dd><?php echo e($order->kin_city); ?></dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt>Preferred Location</dt>
                                        <dd><?php echo e($order->preferred_location); ?></dd>
                                        <dt>Plot</dt>
                                        <dd><?php echo e($order->plot); ?></dd>
                                        <dt> Agent</dt>
                                        <dd><?php echo e($order->agent); ?></dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt> Date</dt>
                                        <dd><?php echo e($order->created_at); ?></dd>
                                        <dt>Status</dt>
                                        <dd><?php echo e($order->status); ?></dd>
                                        <dt> Transaction Reference</dt>
                                        <dd><?php echo e($order->transaction_reference); ?></dd>
                                        </div>
                                        <div class="col-md-4">
                                            <dt> ID Type</dt>
                                        <dd><?php echo e($order->idtype); ?></dd>
                                        <dt>Card No:</dt>
                                        <dd><?php echo e($order->idard); ?></dd>
                                        <dt> Learn About</dt>
                                        <dd><?php echo e($order->learn_about); ?></dd>
                                        </div>
                                  
                                    
                                </dl>
                              
                                </div

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
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/single_order.blade.php ENDPATH**/ ?>