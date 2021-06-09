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
            <div class="container">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-lg-12 col-12">
                        <div class="section-title">
                            <h4>CONFIRM YOUR REGISTRATION</h4>

                        </div>
                        <!-- BOOKING FORM -->
                        <form method="POST" action="<?php echo e(route('paynow')); ?>" enctype="multipart/form-data"
                            autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Title</label>
                                        <input name="title" type="text" class="form-control"
                                            value="<?php echo e($orderdetails->title); ?>" placeholder="Title" disabled>
                                        <input class="form-control" name="_title" hidden
                                            value="<?php echo e(Request::get('title')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">First Name</label>
                                        <input name="firstname" type="text" class="form-control"
                                            value="<?php echo e($orderdetails->firstname); ?>" disabled>
                                        <input class="form-control" name="first_name" hidden
                                            value="<?php echo e(Request::get('firstname')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Last Name</label>
                                        <input name="lastname" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->lastname); ?>">
                                        <input class="form-control" name="last_name" hidden
                                            value="<?php echo e(Request::get('lastname')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Other Name</label>
                                        <input name="othername" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->othername); ?>">
                                        <input class="form-control" name="other_name" hidden
                                            value="<?php echo e(Request::get('othername')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Date of Birth</label>
                                        <input name="dob" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->dob); ?>">
                                        <input class="form-control" name="d_o_b" hidden
                                            value="<?php echo e(Request::get('dob')); ?> ">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Gender</label>
                                        <input name="gender" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->gender); ?>" required>
                                        <input class="form-control" name="_gender" hidden
                                            value="<?php echo e(Request::get('gender')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Martial Status</label>
                                        <input name="ms" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->ms); ?>" required>
                                        <input class="form-control" name="_ms" hidden value="<?php echo e(Request::get('ms')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Phone Number</label>
                                        <input name="phone" type="text" class="form-control" disabled
                                            value="<?php echo e($orderdetails->phone); ?>" required>
                                        <input class="form-control" name="phonenumber" hidden
                                            value="<?php echo e(Request::get('phone')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="">Contact Address</label>
                                        <textarea class="form-control" rows="2" name="address" disabled
                                            required> <?php echo e($orderdetails->address); ?></textarea>
                                        <input class="form-control" name="homeaddress" hidden
                                            value="<?php echo e(Request::get('address')); ?> ">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Email Address</label>
                                        <input class="form-control" name="email" type="email" disabled
                                            value="<?php echo e($orderdetails->email); ?>">
                                        <input class="form-control" name="emailaddress" hidden
                                            value="<?php echo e(Request::get('email')); ?> ">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Employer Name</label>
                                        <input class="form-control" name="employer" type="text"
                                            value="<?php echo e(Request::get('employer')); ?>" disabled>
                                        <input class="form-control" name="_employer" hidden
                                            value="<?php echo e(Request::get('employer')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark">Office Address</label>
                                        <input class="form-control" name="office" type="text"
                                            value="<?php echo e(Request::get('office')); ?>" disabled>
                                        <input class="form-control" name="_office" hidden
                                            value="<?php echo e(Request::get('office')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">City/Country</label>
                                        <input class="form-control" name="city" type="text"
                                            value="<?php echo e(Request::get('city')); ?>" disabled>
                                        <input class="form-control" name="_city" hidden
                                            value="<?php echo e(Request::get('city')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">ID Card Type</label>
                                        <input class="form-control" name="id_type" type="text"
                                            value="<?php echo e(Request::get('id_type')); ?>" disabled>
                                        <input class="form-control" name="_idtype" hidden
                                            value="<?php echo e(Request::get('id_type')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">ID Card Number</label>
                                        <input class="form-control" name="id_card" type="text" disabled
                                            value="<?php echo e(Request::get('id_card')); ?>" required>
                                        <input class="form-control" name="_idcard" hidden
                                            value="<?php echo e(Request::get('id_card')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-6 " style="margin-bottom: 20px">
                                    <div>
                                        <label for="" class="text-dark text-center">Passport photography</label>
                                    </div>
                                    <div class="col">
                                        <img src="<?php echo e($imgPath); ?>" id="passport-preview" height="100px" width="100px"
                                            alt="">
                                        <input type="text" name="passport" hidden value="<?php echo e($imgPath); ?>">
                                    </div>
                                </div>


                                <div class="col-md-6" style="margin-bottom: 20px">
                                    <div>
                                        <label for="" class="text-dark  text-center">ID Card photography</label>
                                    </div>
                                    <div class="col">
                                        <img src="<?php echo e($imgPathuseridphoto); ?>" id="passport-preview" height="100px"
                                            width="100px" alt="">
                                        <input type="text" name="idpassport" hidden value="<?php echo e($imgPathuseridphoto); ?>">
                                    </div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <h4 class="text-dark">WHAT TO BUY</h4>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Available Plot and House</label>
                                        <input class="form-control" name="plothouse" type="text" disabled
                                            value="<?php echo e(Request::get('selectedplot')); ?>" required>
                                        <input class="form-control" name="selectedplot" hidden
                                            value="<?php echo e(Request::get('selectedplot')); ?> ">

                                    </div>
                                    <div class="cost">
                                        <h5 class="text-dark">Original Cost: <span
                                                class="amount"><?php echo e(Request::get('originalprice')); ?></span></h5>
                                        <input class="form-control" name="originalcost" hidden
                                            value="<?php echo e(Request::get('originalprice')); ?> ">

                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h4 class="text-dark ">MODE OF PAYMENT</h4>
                                </div>
                                <div class="col-md-12">


                                    <input class="form-control" name="paymode" type="text"
                                        style=" text-transform: uppercase;" disabled
                                        value="<?php echo e(Request::get('paymethod')); ?>">
                                    <input class="form-control" name="paymentmethod" hidden
                                        value="<?php echo e(Request::get('paymethod')); ?> ">

                                    <?php if($orderdetails->paymethod == 'installments'): ?>
                                        <div class="tcost" style="text-align: left">
                                            <input class="form-control" name="paypermonth" hidden
                                                value="<?php echo e(Request::get('monthlypay')); ?> ">
                                            <input class="form-control" name="initialpayout" hidden
                                                value=" <?php echo e(Request::get('initialpayout')); ?>">
                                            <input class="form-control" name="numbermonthpay" hidden
                                                value=" <?php echo e(Request::get('suboption')); ?>">
                                            <h6 class="text-dark">Payment plan: <?php echo e(Request::get('suboption')); ?> month
                                            </h6>
                                            <span id="initialpay"><?php echo e(Request::get('initialpayout')); ?> </span>
                                            <span>Initial
                                                Payment</span> </br>
                                            <span class="payamount"><?php echo e(Request::get('monthlypay')); ?> </span>
                                            <span>Monthly</span>
                                        </div>
                                    <?php else: ?>


                                    <?php endif; ?>


                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark">Full Name</label>
                                        <input name="kin_name" type="text" class="form-control"
                                            value="<?php echo e(Request::get('kin_name')); ?>" disabled>
                                        <input class="form-control" name="_kinname" hidden
                                            value="<?php echo e(Request::get('kin_name')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">Relationship</label>
                                        <input name="relationship" type="text" class="form-control"
                                            value="<?php echo e(Request::get('relationship')); ?>" disabled>
                                        <input class="form-control" name="_relationship" hidden
                                            value="<?php echo e(Request::get('relationship')); ?> ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Phone Number</label>
                                        <input name="kin_phone" type="text" class="form-control"
                                            value="<?php echo e(Request::get('kin_phone')); ?>" disabled>
                                        <input class="form-control" name="_kinphone" hidden
                                            value="<?php echo e(Request::get('kin_phone')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Email Address</label>
                                        <input class="form-control" name="kin_email" type="email"
                                            value="<?php echo e(Request::get('kin_email')); ?>" disabled>
                                        <input class="form-control" name="_kinemail" hidden
                                            value="<?php echo e(Request::get('kin_email')); ?> ">
                                    </div>
                                </div>



                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark" for="">contact Address</label>
                                        <input class="form-control" name="kin_address" disabled
                                            value="<?php echo e(Request::get('kin_address')); ?>">
                                        <input class="form-control" name="_kinaddress" hidden
                                            value="<?php echo e(Request::get('kin_address')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">City/Country</label>
                                        <input class="form-control" name="kin_city" type="text" disabled
                                            value="<?php echo e(Request::get('kin_city')); ?>">
                                        <input class="form-control" name="_kincity" hidden
                                            value="<?php echo e(Request::get('kin_city')); ?> ">
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-md-12" style="margin-top: 40px; margin-bottom:15px">
                                    <h4><b>OTHER INFORMATION</b></h4>
                                </div>
                                <br><Br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Preferred Location</label>
                                        <input class="form-control" name="preferred_location" type="text"
                                            value="<?php echo e(Request::get('preferred_location')); ?>" disabled>
                                        <input class="form-control" name="_preferred_location" hidden
                                            value="<?php echo e(Request::get('preferred_location')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Plot Size/NUMBER OF UNIT(S)</label>
                                        <input class="form-control" name="plot" type="text"
                                            value="<?php echo e(Request::get('plot')); ?>" disabled>
                                        <input class="form-control" name="_plot" hidden
                                            value="<?php echo e(Request::get('plot')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Agent Name/Agent Code</label>
                                        <input class="form-control" name="agent" type="text"
                                            value="<?php echo e(Request::get('agent')); ?>" disabled>
                                        <input class="form-control" name="_agent" hidden
                                            value="<?php echo e(Request::get('agent')); ?> ">
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div class="form-group">
                                        <label class="text-dark">How did you learn about Thronehomes?</label>
                                        <input class="form-control" name="learnaboutthronehomes" disabled
                                            value="<?php echo e(Request::get('learnaboutthronehomes')); ?>">
                                        <input class="form-control" name="learnabout" hidden
                                            value="<?php echo e(Request::get('learnaboutthronehomes')); ?> ">
                                    </div>
                                </div>


                                <div class=" col-md-12 grandtotal" style=" text-align: left">
                                    <h1 class="text-dark mt40">Grand Total:</h1>
                                    <input class="form-control" name="payamount" hidden
                                        value=" <?php echo e(Request::get('grandtotal')); ?>">

                                    <?php if($orderdetails->paymethod == 'installments'): ?>
                                        <h2 class="text-dark"><span class="totalamount">
                                                <?php echo e(Request::get('grandtotal')); ?></span> <span id="isInstallment">Initial
                                                Payment</span>
                                            <?php if($orderdetails->discountcoupon > 0): ?>
                                                <br> <span style="font-size: 14px">With
                                                    <?php echo e($orderdetails->discountcoupon); ?> code discount</span>
                                            <?php endif; ?>
                                            <?php if($orderdetails->valuediscount > 0): ?>
                                                <br> <span style="font-size: 14px">With
                                                    <?php echo e($orderdetails->valuediscount); ?> promo discount</span>
                                            <?php endif; ?>

                                        </h2>
                                    <?php else: ?>
                                        <h2 class="text-dark"><span class="totalamount">
                                                <?php echo e(Request::get('grandtotal')); ?></span>
                                            <?php if($orderdetails->discountcoupon > 0): ?>
                                                <br><span style="font-size: 14px">With
                                                    <?php echo e($orderdetails->discountcoupon); ?> code discount</span>
                                            <?php endif; ?>
                                            <?php if($orderdetails->valuediscount > 0): ?>
                                                <br> <span style="font-size: 14px">With
                                                    <?php echo e($orderdetails->valuediscount); ?> promo discount</span>
                                            <?php endif; ?>

                                        </h2>
                                    <?php endif; ?>


                                </div>

                                <input class="form-control" name="payoperation" id="payoperation" hidden value="">
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="edit">
                                        <i class="fa fa-edit  text-white-50" aria-hidden="true"></i>
                                        Edit
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="payonline">
                                        <i class=" fa fa-credit-card text-white-50" aria-hidden="true"></i>
                                        Pay now
                                    </button>


                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="paycash">
                                        <i class="fa  fa-money text-white-50" aria-hidden="true"></i>
                                        Pay with cash
                                    </button>


                                </div>
                                <div class="col-md-3">
                                    <a href="<?php echo e(route('buynow')); ?>" class="btn mt50 float-right"> <i
                                            class="fa text-white-50" aria-hidden="true"></i>
                                        Cancel </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main> <!-- start footer -->
        <?php echo $__env->make('home.frontlayouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end footer -->

        <script src="<?php echo e(asset('backend/vendors/jquery/dist/jquery.min.js')); ?>"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var SITEURL = "<?php echo e(URL('/')); ?>";
                $('.amount').formatCurrency();
                $('.totalamount').formatCurrency();
                $('.payamount').formatCurrency();
                $('#initialpay').formatCurrency();


                $('#edit').click(function() {
                    $("#payoperation").val("edit");

                });
                $('#payonline').click(function() {
                    $("#payoperation").val("online");

                });

                $('#paycash').click(function() {
                    $("#paycash").val("cash");

                });

                $('#cancel').click(function() {
                    $("#payoperation").val("cancel");

                });


            });

        </script>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\thronehomesltd\resources\views/home/confirm_order_form.blade.php ENDPATH**/ ?>