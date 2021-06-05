<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-institution"></i> <span>Hotel Name</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php echo $home;?>"><a><i class="fa fa-home"></i> Dashboard</a></li>
                    <li class="<?php echo $booking;?>"><a><i class="fa fa-book"></i> Booking <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="booking_list.php">Booking List</a></li>
                            <li><a href="add_new_booking.php">Add New Booking</a></li>
                            <li><a href="check_list.php">Checking List</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $rooms;?>"><a><i class="fa fa-bed"></i> Rooms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Menu Name 1</a></li>
                            <li><a href="#">Menu Name 2</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $rooms_rate;?>"><a><i class="fa fa-folder"></i> Room Rate <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Menu Name 1</a></li>
                            <li><a href="#">Menu Name 2</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $pricing;?>"><a><i class="fa fa-tags"></i> Pricing <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Menu Name 1</a></li>
                            <li><a href="#">Menu Name 2</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $management;?>"><a><i class="fa fa-suitcase"></i> Manangement <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Menu Name 1</a></li>
                            <li><a href="#">Menu Name 2</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $pms;?>"><a><i class="fa fa-tasks"></i> PMS <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Menu Name 1</a></li>
                            <li><a href="#">Menu Name 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>