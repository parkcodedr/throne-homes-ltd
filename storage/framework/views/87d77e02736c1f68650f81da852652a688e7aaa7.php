<!-- ========== PRELOADER ========== -->
<div class="loader loader3">
    <div class="loader-inner">
        <div class="spin">
            <span></span>
            <img src="<?php echo e(asset('frontend/images/thronehomes.png')); ?>" alt="Reiz Continental Hotel">
        </div>
    </div>
</div>
<!-- ========== MOBILE MENU ========== -->
<nav id="mobile-menu"></nav>
<!-- ========== WRAPPER ========== -->
<div class="wrapper">
    <!-- ========== HEADER MENU ========== -->


    <!-- ========== PAGE TITLE ========== -->


    <!-- ========== ABOUT ========== -->
    <section style="background: #eee; padding: 10px">
        <div class="container-fluid pl-sm-0 pr-sm-0">
            <div class="col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-2 mx-auto">
                <button class="btn btn-danger mt-3 pull-right mb-2" onclick="getPDF()"><b><i class="fa fa-download"></i> Download PDF</b></button>
                <div id="pdfArea">
                    <div class="clearfix"></div>
                    <div class="p-3 bg-white">
                        <div class="mb-3 text-center">
                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('frontend/images/thronehomes.png')); ?>" width="200" ></a>
                        </div>
                        <?php if($orderdetails->processform=='paycash'): ?>
                        <?php //echo $sendmail_message; ?>
                        <hr>
                        <h2 class="text-orange ">Hi, <?php echo e($bookings['first_name']); ?> <?php echo e($bookings['last_name']); ?></h2>
                        <h4>Thank you for staying with us</h4>
                        <p>You chose <?php echo e(join('',explode('600',join('',explode('500',join('',explode('450',$bookings['selectedplot']))))))); ?> <?php if(strtolower($selectedplot_detail->page_name)=='houses'||strtolower($selectedplot_detail->page_name)=='house'): ?> House <?php endif; ?>
                                    <?php if(strtolower($selectedplot_detail->page_name)=='lands'||strtolower($selectedplot_detail->page_name)=='land'): ?> Land <?php endif; ?>.
                            If you have chosen a wrong property  or want to change to a different land / house, please contact us!
                        </p>
                        <hr>
                        <div class="card">
                            <div class="card-header font-weight-bold text-center">
                                Transaction Reference : <?php echo e("No Payment Yet"); ?> 
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    
                                </h4>
                                    <hr>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="bg-secondary p-4 text-center text-white">
                                            <h1 class="pb-0 mb-0">&#x20A6;<?php echo e(number_format($bookings['payamount'],2,".",",")); ?></h1>
                                            <p class="py-0 my-0"><?php if($bookings['paymentmethod']=='installments'): ?> <?php echo e('First instalment to pay at office'); ?> <?php endif; ?>
                                            <?php if($bookings['paymentmethod']=='outright'): ?> Outright Payment <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm" style="background-image: url(<?php echo e(asset('frontend/images/thronehomes_fade.png')); ?>); background-size: 100%" width="100%">
                                        <tr>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's Email</p>
                                                <p class="mb-0"><?php echo e($bookings['emailaddress']); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's Phone</p>
                                                <p class="mb-0"><?php echo e($bookings['phonenumber']); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's Landline</p>
                                                <p class="mb-0"><?php echo e($bookings['phonenumber']); ?></p>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's Address</p>
                                                <p class="mb-0"><?php echo e($userdetails->address); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's City</p>
                                                <p class="mb-0"><?php echo e($userdetails->city); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Applicant's Country</p>
                                                <p class="mb-0"><?php echo e($userdetails->country); ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's Size</p>
                                                <p class="mb-0"><?php echo e($selectedplot_detail->lands_size); ?><?php echo e($selectedplot_detail->lands_size_si_unit); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's Location</p>
                                                <p class="mb-0"><?php echo e($selectedplot_detail->lands_location); ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's GPS</p>
                                                <p class="mb-0"><?php echo e(''); ?></p>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's City</p>
                                                <p class="mb-0">Abuja</p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's State</p>
                                                <p class="mb-0">FCT</p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Land's Country</p>
                                                <p class="mb-0">Nigeria</p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0">Mode of Payment</p>
                                                <p class="mb-0"> <?php if($orderdetailsprocessed->status=='standby'): ?> Pay at Office <?php endif; ?></p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0"> </p>
                                                <p class="mb-0"> </p>
                                            </td>
                                            <td style="border: none;">
                                                <p class="font-weight-bold pb-0 mb-0"> </p>
                                                <p class="mb-0"> </p><br><br>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/receipt_receipt_main2.blade.php ENDPATH**/ ?>