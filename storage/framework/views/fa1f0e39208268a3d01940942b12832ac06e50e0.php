<!-- ========== BOOKING FORM ========== -->
<div class="horizontal-booking-form">
    <div class="container">
        <div class="inner box-shadow-007">
            <!-- ========== BOOKING NOTIFICATION ========== -->
            <div id="notification" class="notification"></div>
            <form action="<?php echo e(url('/buynow')); ?>" method="GET">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="text-dark">Name
                                <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Your first name and last name">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </label>
                            <input class="form-control" name="name" type="text" data-trigger="hover"
                                placeholder="Your Firstname Lastname" required>
                        </div>
                    </div>
                    <!-- EMAIL -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="text-dark">Email
                                <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Your email address">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </label>
                            <input class="form-control" name="email" type="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <!-- PHONE NUMBER -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="text-dark">Phone Number
                                <a href="#" title="Your Phone Number" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Your phone number">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </label>
                            <input class="form-control" name="phone_number" type="phone_number"
                                placeholder="Your Phone Number" required>
                        </div>
                    </div>
                    <!-- LAND/HOUSE TYPE -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="text-dark">Property Type
                                <a href="#" title="Property Type" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Please select room type">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </label>
                            <select class="form-control" name="propertype" title="Select Property Type"
                                data-header="Property Type" required>
                                <option value="Lands">Lands</option>
                                <option value="Houses">Houses</option>
                                <option value="Rent/Lease">Rent/Lease</option>
                            </select>
                        </div>
                    </div>
                    <!-- LOCATIONS -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="text-dark">Location
                                <a href="#" title="Location" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Please select Location">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </label>
                            <select class="form-control" name="location" title="Select Location"
                                data-header="Location Type" required>
                                <option value="Lugbe">Lugbe</option>
                                <option value="Idu">Idu</option>
                            </select>
                        </div>
                    </div>
                    <!-- BOOKING BUTTON -->
                    <div class="col-md-2">
                        <input name="discountpercent" type="hidden" value="<?php echo e($discountpercent); ?>">
                        <input name="group" type="hidden" value="<?php echo e($group); ?>">
                        <button type="submit" class="btn btn-book" name="processing_type" value="processing"><?php echo e($siteinfos->booking_btn); ?></button>
                        <div class="advanced-form-link">
                            <a href="<?php echo e(url('/buynow')); ?>">
                                Advanced Subscription Form
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/slider_booking_form.blade.php ENDPATH**/ ?>