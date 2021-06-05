<?php $__env->startSection('title', ' :: Home'); ?>
<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- start navigation -->
  <?php echo $__env->make('home.frontlayouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end navigation -->

<div class="wrapper">
	<!-- start breadcrumb -->
	  <?php echo $__env->make('home.frontlayouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- end breadcrumb -->
	<main>

        <!-- start index_rooms -->
          <?php echo $__env->make('home.frontlayouts.land_details_lands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end index_rooms -->
    </main>

<!-- start footer -->
  <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end footer -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/land_details.blade.php ENDPATH**/ ?>