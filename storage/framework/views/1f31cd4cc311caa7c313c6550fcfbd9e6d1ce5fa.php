<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <!-- start navigation -->
    <?php echo $__env->make('admin.backlayouts.all_contacts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end navigation -->




<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/all_contacts.blade.php ENDPATH**/ ?>