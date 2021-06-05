<!-- ========== BREADCRUMB ========== -->
    <div class="page-title gradient-overlay <?php if(substr_count(Route::current()->getName(), 'land_details')<=0): ?> op6 <?php else: ?> op4 <?php endif; ?>" style="background: url(<?php echo e(url($siteinfos->breadcrumb_img)); ?>); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>
                    <?php if(join(' ',explode('_',join('',explode('/',Route::current()->getName()))))=="confirmagentreg"||join(' ',explode('_',join('',explode('/',Route::current()->getName()))))=="become an agent"): ?>
                        <?php echo e("Influencer Registration"); ?> 
                    <?php else: ?> 
                        <?php echo e(join(' ',explode('_',join('',explode('/',Route::current()->getName()))))); ?> 
                    <?php endif; ?>
                </h1>
                <?php if(strtolower('room_details')==strtolower(join('',explode('/',Route::current()->getName())))||strtolower('hall_details')==strtolower(join('',explode('/',Route::current()->getName())))||strtolower('offer_details')==strtolower(join('',explode('/',Route::current()->getName())))): ?>
                    <div class="room-details-price">
                        <?php if($group!='offer'): ?>
                            <?php if($group=='hall'): ?>
                                N<?php echo e(number_format($roomdetails->room_price,2,".",",")); ?> <?php echo e($roomdetails->si_unit); ?> / No Food Inclusive 
                                <br>
                                N<?php echo e(number_format($roomdetails->room_with_food_price,2,".",",")); ?> <?php echo e($roomdetails->si_unit); ?> / Food Inclusive 
                            <?php else: ?>
                                N<?php echo e(number_format($roomdetails->room_price,2,".",",")); ?> <?php echo e($roomdetails->si_unit); ?>

                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($group=='offer'): ?>
                            N<?php echo e(number_format($roomdetails->offer_price,2,".",",")); ?> <?php echo e($roomdetails->si_unit); ?>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <?php if(strtolower('room_details')!=strtolower(join('',explode('/',Route::current()->getName()))) && strtolower('hall_details')!=strtolower(join('',explode('/',Route::current()->getName())))): ?>
                        <li><?php echo e(join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName()))))))); ?></li>
                    <?php endif; ?>
                    <?php if(strtolower('room_details')==strtolower(join('',explode('/',Route::current()->getName())))): ?>
                        <li><a href="<?php echo e(url('/rooms')); ?>">Rooms</a></li>
                        <li><?php echo e(join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName()))))))); ?></li>
                    <?php endif; ?>
                    <?php if(strtolower('hall_details')==strtolower(join('',explode('/',Route::current()->getName())))): ?>
                        <li><a href="<?php echo e(url('/halls')); ?>">Halls</a></li>
                        <li><?php echo e(join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName()))))))); ?></li>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/frontlayouts/breadcrumb.blade.php ENDPATH**/ ?>