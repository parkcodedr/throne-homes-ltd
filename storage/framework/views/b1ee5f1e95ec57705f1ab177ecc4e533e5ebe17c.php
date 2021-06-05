<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
          <div class="section-title">
              <?php $ok = "bad"; ?>
            <?php if(join('',explode('/',Route::current()->getName()))=='lands' && $ok=="bad"): ?>
              <h4 class="text-orange"><?php echo e($indexlands->section_title); ?></h4>
              <p class="section-subtitle"><?php echo e($indexlands->section_subtitle); ?></p>
              <?php $ok = "ok"; ?>
            <?php endif; ?>
            <?php if(join('',explode('/',Route::current()->getName()))=='land_details' && $ok=="bad"): ?>
              <h4 class="text-orange"><?php echo e('Other Lands Available'); ?></h4>
              <p class="section-subtitle"><?php echo e('These are our favourite lands to all our clients'); ?></p>
              <?php $ok = "ok"; ?>
            <?php endif; ?>
            <?php if(join('',explode('/',Route::current()->getName()))!='lands' && join('',explode('/',Route::current()->getName()))!='land_details' && $ok=="bad"): ?>
              <h4 class="text-orange"><?php echo e('Our '.join('',explode('/',Route::current()->getName()))); ?></h4>
              <p class="section-subtitle"><?php echo e('Our favourite '.join('',explode('/',Route::current()->getName()))); ?></p>
              <?php $ok = "ok"; ?>
            <?php endif; ?>

          </div>
            <div class="row rooms-grid-view">
                <!-- ITEM -->
                <?php $count = 0; $lands_name = 'beginning'; ?>
                <?php $__currentLoopData = $lands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $count++; ?>
                  <?php if($lands_name=='beginning'): ?>
                    <?php $lands_name = $land->lands_name; ?>
                      <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="<?php echo e(url($land->lands_details_link.'/'.$land->id)); ?>">
                            <img src="<?php echo e(asset($land->lands_img)); ?>" class="img-fluid" alt="<?php echo e($land->lands_name); ?>">
                          </a>
                          <div class="room-price text-oranage">N<?php echo e(join('',explode('.0',join('',explode('.00',number_format($land->lands_price/1000000,1,".",",")))))); ?>M <?php echo e($land->si_unit); ?></div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="<?php echo e(url($land->lands_details_link.'/'.$land->id)); ?>"><?php echo e(join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name))))))); ?></a>
                          </h2>
                          <p><?php echo e($land->lands_size); ?> <?php echo e($land->lands_size_si_unit); ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if(join('',explode('600',join('',explode('500',join('',explode('450',$lands_name))))))!=join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name))))))): ?>
                    <?php $lands_name = $land->lands_name; ?>
                      <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="<?php echo e(url($land->lands_details_link.'/'.$land->id)); ?>">
                            <img src="<?php echo e(asset($land->lands_img)); ?>" class="img-fluid" alt="<?php echo e($land->lands_name); ?>">
                          </a>
                          <div class="room-price text-oranage">N<?php echo e(join('',explode('.0',join('',explode('.00',number_format($land->lands_price/1000000,1,".",",")))))); ?>M <?php echo e($land->si_unit); ?></div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="<?php echo e(url($land->lands_details_link.'/'.$land->id)); ?>"><?php echo e(join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name))))))); ?></a>
                          </h2>
                          <p><?php echo e($land->lands_size); ?> <?php echo e($land->lands_size_si_unit); ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($count>9): ?>
                    <div class="col-md-12 load-more">LOAD MORE ROOMS</div>
                <?php endif; ?>

            </div>
        </div>
    </section><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/lands_lands.blade.php ENDPATH**/ ?>