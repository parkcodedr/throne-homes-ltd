<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="text-uppercase text-orange"><?php echo e($indexabout->section_title); ?></h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="info-branding">
                        <p class="text-dark"><?php echo e($indexabout->section_branding_info); ?>

                        </p>
                        <p class="text-dark">
                            <?php echo e($indexabout->section_branding_info_ext); ?>

                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo e(asset($indexabout->section_img)); ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section class="about gray">
        <div class="container">
            <div class="row">
                <!-- ITEM -->
                <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="<?php echo e($about->flaticon); ?>"></i>
                        <span class="number text-dark" data-count="<?php echo e($about->lands_total); ?>"></span> <?php echo e(join('',explode('/',$about->si_unit))); ?><?php if($about->lands_total>1): ?>s <?php endif; ?>
                        <div class="text text-orange"><?php echo e($about->lands_name); ?></div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/frontlayouts/about_about.blade.php ENDPATH**/ ?>