<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
          <div class="section-title">
            <?php if(join('',explode('/',Route::current()->getName()))=='rooms'): ?>
              <h4 class="text-orange"><?php echo e($indexrooms->section_title); ?></h4>
              <p class="section-subtitle"><?php echo e($indexrooms->section_subtitle); ?></p>
            <?php endif; ?>
            <?php if(join('',explode('/',Route::current()->getName()))!='rooms'): ?>
              <h4 class="text-orange"><?php echo e(join('',explode('/',Route::current()->getName()))); ?></h4>
              <p class="section-subtitle"><?php echo e('Available '.join('',explode('/',Route::current()->getName()))); ?></p>
            <?php endif; ?>
          </div>
            <div class="row rooms-grid-view">
                <!-- ITEM -->
                <?php $count = 0; ?>
                <?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $count++; ?>
                    <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="<?php echo e(url($house->lands_details_link.'/'.$house->id)); ?>">
                            <img src="<?php echo e(asset($house->lands_img)); ?>" class="img-fluid" alt="<?php echo e($house->lands_name); ?>">
                          </a>
                          <div class="room-price text-oranage">N<?php echo e(join('',explode('.0',join('',explode('.00',number_format($house->lands_price/1000000,1,".",",")))))); ?>M <?php echo e($house->si_unit); ?></div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="<?php echo e(url($house->lands_details_link.'/'.$house->id)); ?>"><?php echo e(join(' ',explode('_',$house->lands_name))); ?></a>
                          </h2>
                          <p><?php echo e($house->lands_size); ?> <?php echo e($house->lands_size_si_unit); ?></p>
                        </div>
                      </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($count>9): ?>
                    <div class="col-md-12 load-more">LOAD MORE ROOMS</div>
                <?php endif; ?>

            </div>
        </div>
    </section><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/houses_houses.blade.php ENDPATH**/ ?>