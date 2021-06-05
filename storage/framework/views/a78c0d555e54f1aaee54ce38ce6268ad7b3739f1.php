<!-- ========== PRELOADER ========== -->
<?php if(strtolower(join('',explode('/',Route::current()->getName())))=='index'): ?>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php if($source != 'pc'): ?>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button><?php endif; ?>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-md-6 pl-0 pr-0" id="promo1">
                            <div class="bttm_info">
                                <div class="bttm_text">
                                    <h1><?php echo e($modaldiscount->advert1_discount_percent); ?>% Off</h1>
                                    <h6>A plot of Land at LUGBE</h6>
                                </div>
                                <a href="<?php echo e(url('/buynow/?buynow_type=' . md5(md5('advert1_discount_percent')) . '&group=land&propertytype=0')); ?>&location=Lugbe"
                                    class="btn bttn-white btn-block"><?php echo e($siteinfos->booking_btn); ?></a>
                            </div>
                        </div>
                        <div class="col-md-6 p-0" id="promo2">
                            <div class="bttm_info">
                                <div class="bttm_text">
                                    <h1><?php echo e($modaldiscount->advert2_discount_percent); ?>% Off</h1>
                                    <h6>A plot of Land at IDU</h6>
                                </div>
                                <a href="<?php echo e(url('/buynow/?buynow_type=' . md5(md5('advert2_discount_percent')) . '&group=land&propertytype=0')); ?>&location=Idu"
                                    class="btn bttn-white btn-block"><?php echo e($siteinfos->booking_btn); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/discount_modal.blade.php ENDPATH**/ ?>