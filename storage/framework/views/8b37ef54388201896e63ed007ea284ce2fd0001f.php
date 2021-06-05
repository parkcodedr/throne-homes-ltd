<footer>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!-- WIDGET -->
                <div class="col-md-6">
                    <div class="footer-widget">
                        <h3><?php echo e(strtoupper($indexabout->section_title)); ?></h3>
                        <div class="inner">
                            <p><?php echo e(substr($indexabout->section_branding_info, 0, 654)); ?> <a
                                    href="<?php echo e(url($indexabout->section_link)); ?>"><strong><?php echo e(strtoupper('...' . $indexabout->section_label)); ?></strong></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- WIDGET -->
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h3><?php echo e($indexlands->section_title); ?></h3>
                        <div class="inner">
                            <ul class="useful-links">
                                <?php $lands_name = 'beginning'; $done = 0; ?>
                                <?php $__currentLoopData = $foot_lands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($lands_name=='beginning'): ?>
                                        <?php if($land->id < 9): ?>  
                                        <?php $lands_name = $land->lands_name; $lastid = $land->id; ?>
                                            <li><a
                                                    href="<?php echo e(url($land->lands_details_link . '/' . $land->id)); ?>"><?php echo e(join('',explode('600',join('',explode('500',join('',explode('450',strtoupper($land->lands_name)))))))); ?> <?php echo e($land->page_name); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if(join('',explode('600',join('',explode('500',join('',explode('450',$lands_name))))))!=join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name))))))): ?>
                                        <?php if($land->id < 9): ?>
                                        <?php $lands_name = $land->lands_name; $lastid = $land->id; ?>
                                            <li><a
                                                    href="<?php echo e(url($land->lands_details_link . '/' . $land->id)); ?>"><?php echo e(join('',explode('600',join('',explode('500',join('',explode('450',strtoupper($land->lands_name)))))))); ?> <?php echo e($land->page_name); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($lastid == 8 && $done==0): ?>
                                        <?php $done = 1; ?>
                                        <li><a
                                                href="<?php echo e(url($indexlands->section_lands_link)); ?>"><?php echo e('...more lands'); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3><?php echo e($siteinfos->contact_label); ?></h3>
                        <div class="inner">
                            <ul class="contact-details">
                                <?php $countaddress = substr_count($siteinfos->coy_address, ':::'); ?>
                                <?php if($countaddress == 0): ?>
                                    <li>
                                        <a href="mailto:<?php echo e($siteinfos->app_email); ?>">
                                            <i class="fa fa-map-marker"></i><?php echo e($siteinfos->coy_address); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if($countaddress > 0): ?>
                                    <?php $countaddressarray = explode(':::', $siteinfos->coy_address);
                                    ?>
                                    <?php for($i = 0; $i <= $countaddress; $i++): ?>
                                        <?php
                                        $countlocationsplit = substr_count($countaddressarray[$i], '>>>');
                                        if ($countlocationsplit > 0) {
                                        $locationsplit = explode('>>>', $countaddressarray[$i]);
                                        }
                                        ?>
                                        <?php if($countlocationsplit == 0): ?>
                                            <li>
                                                <a href="mailto:<?php echo e($siteinfos->app_email); ?>">
                                                    <i class="fa fa-map-marker"></i><?php echo e($countaddressarray[$i]); ?>

                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if($countlocationsplit > 0): ?>
                                            <li>
                                                <a href="mailto:<?php echo e($siteinfos->app_email); ?>">
                                                    <b><?php echo e($locationsplit[0]); ?>:</b><br>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-map-marker">
                                                               <?php if('ABUJA OFFICE'==strtoupper($locationsplit[0])): ?> <br><br><br><br> <?php endif; ?>
                                                               <?php if('LAGOS OFFICE'==strtoupper($locationsplit[0])): ?> <br><br> <?php endif; ?>
                                                               <?php if('CALIFONIA OFFICE'==strtoupper($locationsplit[0])): ?> <br><br> <?php endif; ?></i>
                                                            </td>
                                                            <td>
                                                               <?php echo e($locationsplit[1]); ?> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                                            <td><?php echo e($locationsplit[2]); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-envelope"></i>
                                                            <td><?php echo e($siteinfos->app_email); ?></td>
                                                        </tr>
                                                    </table>                                                    
                                                </a>
                                            </li>
                                            <li>
                                            </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUBFOOTER -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyrights">&copy; <?php echo date('Y'); ?>
                        <?php echo e(join(' ', explode('_', $siteinfos->app_name))); ?></div>
                </div>
                <div class="col-md-6">
                    <div class="social-media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                            href="<?php echo e($siteinfos->coy_facebook); ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip"
                            href="<?php echo e($siteinfos->coy_twitter); ?>" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="youtube" data-original-title="Youtube" data-toggle="tooltip"
                            href="<?php echo e($siteinfos->coy_youtube); ?>" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- div that ends the WRAPPER that starts at discount_modal
<!-- ========== WRAPPER ========== -->

<!-- ========== CONTACT NOTIFICATION ========== -->
<div id="contact-notification" class="notification fixed"></div>
<!-- ========== BACK TO TOP ========== -->
<div class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/frontlayouts/footer.blade.php ENDPATH**/ ?>