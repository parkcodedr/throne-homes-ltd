<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home.frontlayouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== HEADER MENU ========== -->
        <!-- ========== PAGE TITLE ========== -->
        <?php echo $__env->make('home.frontlayouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
        
        <main>
            <center>
            <div class="container">
                <form name="postdata" id="postdata" action="https://thronehomesltd.daomnitraders.com/api/pay" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="booking_id" id="booking_id" value="<?php echo e($orderid); ?>">
                    <input type="hidden" name="lastname" id="lastname" value="<?php echo e($orderdetails->last_name); ?>">
                    <input type="hidden" name="firstname" id="firstname" value="<?php echo e($orderdetails->first_name); ?>">
                    <input type="hidden" name="phone" id="phone" value="<?php echo e($orderdetails->phonenumber); ?>">
                    <input type="hidden" name="email" id="email" value="<?php echo e($orderdetails->emailaddress); ?>">
                    <input type="hidden" name="amount" id="amount" value="<?php echo e($orderdetails->payamount); ?>">

                    <?php if($orderdetails->numbermonthpay > 0): ?>
                        <input type="hidden" name="description" id="description"
                            value=" Initial payment for <?php echo e($orderdetails->selectedplot); ?> with <?php echo e($orderdetails->numbermonthpay); ?> month payment plan ">
                    <?php else: ?>
                        <input type="hidden" name="description" id="description"
                            value=" Payment for <?php echo e($orderdetails->selectedplot); ?>  purchase">

                    <?php endif; ?>
                    <input type="hidden" name="description" id="description" value="<?php echo e($orderdetails->selectedplot); ?>">

                    <input type="hidden" name="return_url" id="return_url"
                        value="<?php echo e(url('') . '/receipt?' . 'identifier=' . md5(md5(0))); ?>">
                    <input type="hidden" name="error_url" id="error_url"
                        value="<?php echo e(url('') . '/error_url?' . 'identifier=' . md5(md5(0))); ?>">
                    <input type="hidden" name="notify_url" id="notify_url"
                        value="<?php echo e(url('') . '/notify_url?' . 'identifier=' . md5(md5(0))); ?>">
                    <input type="hidden" name="subdomain" id="subdomain" value="https://daomnipay.thronehomesltd.com">
                    <button type="submit" class="btn mt50 float-left" name="booking_type" value="pay_now">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        PROCEED TO PAYMENT
                    </button>
                </form>
                <br><br><br>
            </div>
            </center>
        </main>
         <!-- start footer -->
        <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end footer -->

        <script src="<?php echo e(asset('backend/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/paynow.blade.php ENDPATH**/ ?>