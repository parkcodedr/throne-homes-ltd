<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- start login -->
  <?php echo $__env->make('admin.backlayouts.login_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end login -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/auth/login.blade.php ENDPATH**/ ?>