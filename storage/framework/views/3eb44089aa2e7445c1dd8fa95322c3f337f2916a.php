<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(url('/home')); ?>" class="site_title"><i class="fa fa-institution"></i>
                <span><?php echo e(join(' ', explode('_', $siteinfos->app_name))); ?>!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <?php if($role == 'super'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                <?php echo e($role); ?></a></li>
                        <li class=""><a><i class="fa fa-book"></i> Subscriptions <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_subscription')); ?>">Lands' Subscriptions</a></li>
                                <li><a href="<?php echo e(url('/house_subscription')); ?>">Houses' Subscriptions</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-ticket"></i> Houses <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">Houses and Prices</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-suitcase"></i> Management <span
                                    class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('/update_request_list')); ?>">View Update Request</a></li>
                                    <li><a href="<?php echo e(url('/payment_process_list')); ?>">View Payment Documents</a></li>
                                    <li><a href="<?php echo e(url('/users')); ?>">View All Users</a></li>
                                        <li><a href="<?php echo e(url('/orders')); ?>">View All Orders</a></li>
                                        <li><a href="<?php echo e(url('/contacts')); ?>">View All Contacts</a></li>
                                </ul>
                            <ul class="nav child_menu">
                                <li><a href="#">Add New Land</a></li>
                                <li><a href="#">Add New House</a></li>
                                <li><a href="<?php echo e(url('/add_staffs')); ?>">Add Staffs</a></li>
                                <li><a href="<?php echo e(url('/add_fund')); ?>">Send Money</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-cogs"></i> Structural Settings <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">List/Edit Lands</a></li>
                                <li><a href="#">List/Edit Houses</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if($role == 'admin'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                <?php echo e($role); ?></a></li>
                        <li class=""><a><i class="fa fa-book"></i> Subscriptions <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_subscription')); ?>">Lands' Subscriptions</a></li>
                                <li><a href="<?php echo e(url('/house_subscription')); ?>">Houses' Subscriptions</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-ticket"></i> Houses <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">Houses and Prices</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-suitcase"></i> Management <span
                                    class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/update_request_list')); ?>">View Update Request</a></li>
                                        <li><a href="<?php echo e(url('/payment_process_list')); ?>">View Payment Documents</a></li>
                                        <li><a href="<?php echo e(url('/payment_process_list')); ?>">View Payment Documents</a></li>
                                        <li><a href="<?php echo e(url('/users')); ?>">View All Users</a></li>
                                        <li><a href="<?php echo e(url('/orders')); ?>">View All Orders</a></li>
                                        <li><a href="<?php echo e(url('/contacts')); ?>">View All Contacts</a></li>
                                   
                                </ul>
                                   
                            <ul class="nav child_menu">
                                <li><a href="#">Add New Land</a></li>
                                <li><a href="#">Add New House</a></li>
                                <li><a href="<?php echo e(url('/add_staffs')); ?>">Add Staffs</a></li>
                                <li><a href="<?php echo e(url('/add_fund')); ?>">Send Money</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-cogs"></i> Structural Settings <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">List/Edit Lands</a></li>
                                <li><a href="#">List/Edit Houses</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if($role == 'user'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                <?php echo e($role); ?></a></li>
                                <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                                    </ul>
                                </li>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo e(url('/request_name_update')); ?>">Request name update</a></li>
                                   
                                </ul>
                        <li class=""><a><i class="fa fa-book"></i> Subscriptions <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_subscription')); ?>">Lands' Subscriptions</a></li>
                                <li><a href="<?php echo e(url('/house_subscription')); ?>">Houses' Subscriptions</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-book"></i> My Land(s) <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/my_lands/lugbe')); ?>">Lugbe Details</a></li>
                                <li><a href="<?php echo e(url('/my_lands/idu')); ?>">IDU Details</a></li>
                                <li><a href="<?php echo e(url('/my_lands/apo')); ?>">APO Details</a></li>
                                <li><a href="<?php echo e(url('/my_lands/aco')); ?>">ACO Details</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-book"></i> My House(s) <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/my_house/lugbe')); ?>">Lugbe Details</a></li>
                                <li><a href="<?php echo e(url('/my_house/idu')); ?>">IDU Details</a></li>
                                <li><a href="<?php echo e(url('/my_house/apo')); ?>">APO Details</a></li>
                                <li><a href="<?php echo e(url('/my_house/aco')); ?>">ACO Details</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-bed"></i> Payments <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/my_payments')); ?>">My Payments</a></li>
                        
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if($role == 'agent'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                Influencer</a></li>
                                <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                        <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                                    </ul>
                                </li>
                               
                        <li class=""><a><i class="fa fa-book"></i> Subscriptions <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_subscription')); ?>">Lands' Subscriptions</a></li>
                                <li><a href="<?php echo e(url('/house_subscription')); ?>">Houses' Subscriptions</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-book"></i> Influencer Revenue <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/influencer_revenue">Users' List & Profit</a></li>
                            </ul>
                            
                        </li>
                        <li class=""><a><i class="fa fa-suitcase"></i> Management <span
                                    class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/request_name_update')); ?>">Request name update</a></li>
                                        <li><a href="<?php echo e(url('/users')); ?>">View All Users</a></li>
                                        <li><a href="<?php echo e(url('/orders')); ?>">View All Orders</a></li>
                                        <li><a href="<?php echo e(url('/contacts')); ?>">View All Contacts</a></li>
                                    </ul>
                            <ul class="nav child_menu">
                                <li><a href="/influencer_setting">Add / Modify Code</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if($role == 'frontdesk'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                <?php echo e($role); ?></a></li>
                                
                        <li class=""><a><i class="fa fa-book"></i> Subscriptions <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_subscription')); ?>">Lands' Subscriptions</a></li>
                                <li><a href="<?php echo e(url('/house_subscription')); ?>">Houses' Subscriptions</a></li>
                            </ul>
                        </li>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo e(url('/request_name_update')); ?>">Request name update</a></li>
                           
                        </ul>
                        <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-ticket"></i> Houses <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">Houses & Prices</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if($role == 'architectural'): ?>
                        <li class=""><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Dashboard -
                                <?php echo e($role); ?></a></li>
                                <li class=""><a><i class="fa fa-bed"></i> Lands <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/land_price')); ?>">Lands and Prices</a></li>
                                        <li><a href="<?php echo e(url('/view_land_growth')); ?>">Lands growth</a></li>
                                    </ul>
                                </li>
                        <li class=""><a><i class="fa fa-ticket"></i> Houses <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="view_house">Houses & Prices</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-suitcase"></i> Management <span
                                    class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?php echo e(url('/request_name_update')); ?>">Request name update</a></li>
                                       
                                    </ul>
                            <ul class="nav child_menu">
                                <li><a href="add_land">Add New Land</a></li>
                                <li><a href="add_house">Add New House</a></li>
                                <li><a href="#">Add Expenses/Request</a></li>
                            </ul>
                        </li>
                        <li class=""><a><i class="fa fa-cogs"></i> Structural Settings <span
                                    class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#">List/Edit Lands</a></li>
                                <li><a href="#">List/Edit Houses</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/backlayouts/sidebar_menu.blade.php ENDPATH**/ ?>