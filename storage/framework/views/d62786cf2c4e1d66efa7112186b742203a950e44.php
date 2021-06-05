

<?php $__env->startSection('title', ' :: Home'); ?>
<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- start navigation -->
<?php $checklands = 0; $checklands = substr_count(Route::current()->getName(), 'lands'); ?>
	<?php if($checklands>0): ?>
  		<?php echo $__env->make('home.frontlayouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  	<?php endif; ?>
<!-- end navigation -->
<div class="wrapper">
	<!-- start breadcrumb -->
	  <?php echo $__env->make('home.frontlayouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- end breadcrumb -->
	<main>
		<!-- start index_rooms -->
		  <?php echo $__env->make('home.frontlayouts.lands_lands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- end index_rooms -->
	</main>


<!-- start footer -->
  <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end footer -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/lands.blade.php ENDPATH**/ ?>