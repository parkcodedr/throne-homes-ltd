

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

        <!-- start about_about -->
          <?php echo $__env->make('home.frontlayouts.project_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end about_about -->
    </main>

<!-- start footer -->
  <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end footer -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/project.blade.php ENDPATH**/ ?>