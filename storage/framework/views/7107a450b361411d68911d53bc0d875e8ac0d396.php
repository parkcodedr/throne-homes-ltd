<!-- ========== LANDS ========== -->
      <section class="rooms gray">
        <div class="container">
          <div class="section-title">
            <h4 class="text-orange"><?php echo e($indexlands->section_title); ?></h4>
            <p class="section-subtitle"><?php echo e($indexlands->section_subtitle); ?></p>
            <a href="<?php echo e(url($indexlands->section_lands_link)); ?>" class="view-all"><?php echo e($indexlands->section_lands); ?></a>
          </div>
          <div class="row">
            <!-- ITEM -->
            <?php $count = 0; $lands_name = 'beginning'; ?>
            <?php $__currentLoopData = $lands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $count++; ?>
              <?php if($count<=7): ?>
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
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </section><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/index_lands.blade.php ENDPATH**/ ?>