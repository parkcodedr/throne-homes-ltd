<div class="loader loader3">
    <div class="loader-inner">
        <div class="spin">
            <span></span>
            <img src="<?php echo e(asset($siteinfos->coy_logo)); ?>" alt="<?php echo e($siteinfos->app_name); ?>">
        </div>
    </div>
</div>

  <!-- ========== MOBILE MENU ========== -->
  <nav id="mobile-menu"></nav>

<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            <?php if($source != 'pc'): ?>Welcome to <?php echo e(join(' ',explode('_',$siteinfos->app_name))); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/login')); ?>">LOGIN</a> <?php else: ?> <?php echo e(join(' ',explode('_',$siteinfos->welcomenote))); ?> <?php endif; ?>
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:<?php echo e($siteinfos->app_phone); ?>">
                        <i class="fa fa-phone"></i>Hotline : <?php echo e($siteinfos->app_phone); ?>

                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:<?php echo e($siteinfos->app_email); ?>">
                        <i class="fa fa-envelope-o "></i><?php echo e($siteinfos->app_email); ?></a>
                </li>                
                <?php $__currentLoopData = $navs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strtoupper($nav->nav_name) != 'LOGIN' && substr_count($nav, 'covid')>0): ?>
                        <li class="d-none d-md-inline"><a href="<?php if($nav->nav_link == '/index'): ?> <?php echo e(url('/')); ?> <?php else: ?>
                                <?php echo e(url($nav->nav_link)); ?> <?php endif; ?>"><?php echo e(strtoupper($nav->nav_name)); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $navs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strtoupper($nav->nav_name) == 'LOGIN'): ?>
                        <?php if(strtoupper($user_logon) == strtoupper($nav->nav_name)): ?>
                            <li class="d-none d-md-inline"><a
                                    href="<?php if($nav->nav_link == '/index'): ?> <?php echo e(url('/')); ?> <?php else: ?> <?php echo e(url($nav->nav_link)); ?> <?php endif; ?>"><?php echo e(strtoupper($nav->nav_name)); ?></a></li>
                        <?php endif; ?>
                        <?php if(strtoupper($user_logon) != strtoupper($nav->nav_name)): ?>
                            <li class="d-none d-md-inline"><a
                                    href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(strtoupper($user_logon)); ?></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;"> <?php echo csrf_field(); ?> </form>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset($siteinfos->coy_logo)); ?>"
                        alt="<?php echo e(join(' ', explode('_', $siteinfos->app_name))); ?>" width="155">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <?php $__currentLoopData = $navs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(strtoupper($nav->nav_name) != 'LOGIN' && substr_count($nav, 'covid')<=0): ?>
                        <?php if(empty($nav->nav_dropdown)): ?>
                        <li class="menu-item <?php if(Route::current()->getName() ==
                                $nav->nav_link): ?> <?php echo e('active '); ?> <?php endif; ?>"><a href="<?php if($nav->nav_link == '/index'): ?> <?php echo e(url('/')); ?> <?php else: ?>
                                    <?php echo e(url($nav->nav_link)); ?> <?php endif; ?>"><?php echo e(strtoupper(join(' ',explode('_',$nav->nav_name)))); ?></a></li>
                        <?php endif; ?>
                        <?php if(!empty($nav->nav_dropdown)): ?>
                        <li class="menu-item dropdown <?php if(Route::current()->getName() ==
                                $nav->nav_link): ?> <?php echo e('active '); ?> <?php endif; ?>"><a href="#"><?php echo e(strtoupper($nav->nav_name)); ?></a>
                            <ul class="submenu">
                                <?php if(url(!empty($nav->nav_submenu0))): ?>
                                    <li class="menu-item"><a href="<?php echo e(url($nav->nav_submenu0)); ?>" style="color: #101010"><?php echo e(strtoupper(join('',explode('/',$nav->nav_submenu0)))); ?></a></li>
                                <?php endif; ?>
                                <?php if(url(!empty($nav->nav_submenu1))): ?>
                                    <li class="menu-item"><a href="<?php echo e(url($nav->nav_submenu1)); ?>" style="color: #101010"><?php echo e(strtoupper(join('',explode('/',$nav->nav_submenu1)))); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="menu-item menu-btn">
                    <a href="<?php echo e(url('/buynow')); ?>" class="btn">
                        <i class="fa fa-paper-plane"></i>
                        <?php echo e($siteinfos->booking_btn); ?></a>
                </li>
            </ul>
        </nav>
    </div>
</header><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/frontlayouts/navigation.blade.php ENDPATH**/ ?>