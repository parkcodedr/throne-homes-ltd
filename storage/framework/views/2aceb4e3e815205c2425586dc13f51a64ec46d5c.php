<!-- ========== SERVICES ========== -->
  <section class="services">
    <div class="container">
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($service->content_id==1): ?>
          <div class="section-title">
            <h4><?php echo e($service->service_title); ?></h4>
            <p class="section-subtitle"><?php echo e($service->service_subtitle); ?></p>
          </div>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <div class="col-lg-7 col-12">
          <div data-slider-id="services" class="services-owl owl-carousel">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <figure class="gradient-overlay">
                <img src="<?php echo e(asset($service->service_image)); ?>" class="img-fluid" alt="Image">
                <figcaption>
                  <h4><?php echo e($service->service); ?></h4>
                </figcaption>
              </figure>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="col-lg-5 col-12">
          <div class="owl-thumbs" data-slider-id="services">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="owl-thumb-item">
                <span class="media-left">
                  <i class="<?php echo e($service->flaticon); ?>"></i>
                </span>
                <div class="media-body">
                  <h5><?php echo e($service->service); ?></h5>
                  <p><?php echo e($service->service_details); ?></p>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </section><?php /**PATH C:\laravel\thronehomesltd\resources\views/home/frontlayouts/index_services.blade.php ENDPATH**/ ?>