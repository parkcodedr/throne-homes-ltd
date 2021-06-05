<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  
    <!-- start discount modal -->
    <?php echo $__env->make('home.frontlayouts.discount_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end discount modal -->

    <!-- start navigation -->
    <?php echo $__env->make('home.frontlayouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end navigation -->
    <?php if($source=='mobile'): ?>
<div class="wrapper">
    <main>
        <?php endif; ?>
        <!-- start slider -->
        <?php echo $__env->make('home.frontlayouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end slider -->

        <!-- start index_about -->
        <?php echo $__env->make('home.frontlayouts.index_about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end index_about -->

        <!-- start index_rooms -->
        <?php echo $__env->make('home.frontlayouts.index_lands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end index_rooms -->

        <!-- start index_services -->
        <?php echo $__env->make('home.frontlayouts.index_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end index_services -->
    <?php if($source=='mobile'): ?>
    </main>
        <?php endif; ?>


    <!-- start footer -->
    <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end footer -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/index.blade.php ENDPATH**/ ?>