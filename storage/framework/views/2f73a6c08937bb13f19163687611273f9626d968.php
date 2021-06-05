    <section class="about">
        <div class="container">
            <div class="section-title">
                <h4><?php echo e($lands_location); ?> LAND DETAILS & APPROVED PLANS</h4>
                <!--<p class="section-subtitle">This is what we have for our special guests</p>-->
                <a href="#" class="view-all">View all lands</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                        <div class="card">
                            <img class="gradient-overlay-hover card-img-top img-fluid" src="<?php echo e(url($landhousefrontview)); ?>" alt="Card image cap">
                            <div class="card-body">
                                <div class="ribbon">
                                    <span> <?php if($countlandorders<=0): ?> SOLD OUT (0) <?php else: ?> SELLING (<?php echo e($countlandorders); ?>) <?php endif; ?> </span></div>
                                <div class="offer-price uppercase">&#x20A6;<?php echo e(join('',explode('.0',join('',explode('.00',number_format($daomnilandcontent->lands_price/1000000,1,".",",")))))); ?>M (<?php echo e($daomnilandcontent->lands_size); ?> <?php echo e($daomnilandcontent->lands_size_si_unit); ?>)</div>
                                <h5><a href="#" class="text-orange">Approved <?php echo e($bestfor->rates); ?> <?php echo e(ucfirst($bestfor->description)); ?> (Front View)</a></h5>
                            </div>
                            <div class="accordion" id="accordionBuilding1">
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#buildingspec"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Land Information
                                </button>
                                <div id="buildingspec" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <ul class="list-group list-group-flush">
                                        <?php $__currentLoopData = $landinformations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $landfacilityinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li  class="list-group-item"><i class="fa fa-check-circle text-orange mr-2"></i>
                                                <?php echo e($landfacilityinfo->facility_name); ?> <?php if(strtolower($landfacilityinfo->rates)!='yes'): ?> <?php echo e($landfacilityinfo->rates); ?> <?php endif; ?> <?php echo e($landfacilityinfo->description); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#floorplan300"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    View Floor Plan
                                </button>
                                <div id="floorplan300" class="collapse p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <img src="<?php echo e(url($floorplanimage)); ?>" class="img-fluid" alt="" />
                                </div>
                                <!--<button
                                    class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#groundfloor300"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    View Ground Floor Plan
                                </button>
                                <div id="groundfloor300" class="collapse p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <img src="<?php echo e(url('frontend/images/properties/propertiesdetails/groundfloor.png')); ?>" class="img-fluid" alt="" />
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                        <div class="card">
                            <img class="gradient-overlay-hover card-img-top img-fluid" src="<?php echo e(url($landhousebackview)); ?>" alt="Card image cap">
                            <div class="card-body">
                                <div class="ribbon">
                                    <span><?php if($countlandorders<=0): ?> SOLD OUT (0) <?php else: ?> SELLING (<?php echo e($countlandorders); ?>) <?php endif; ?></span></div>
                                <div class="offer-price uppercase">&#x20A6;<?php echo e(join('',explode('.0',join('',explode('.00',number_format($daomnilandcontent->lands_price/1000000,1,".",",")))))); ?>M (<?php echo e($daomnilandcontent->lands_size); ?> <?php echo e($daomnilandcontent->lands_size_si_unit); ?>)</div>
                                <h5><a href="#" class="text-orange"> Approved <?php echo e($bestfor->rates); ?> <?php echo e(ucfirst($bestfor->description)); ?> (Back View)</a></h5>
                            </div>
                            <div class="accordion" id="accordionBuilding2">
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#buildingspec1"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Building Specification
                                </button>
                                <div id="buildingspec1" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <ul class="list-group list-group-flush">
                                        <?php $__currentLoopData = $buildingspecification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buildingspec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li  class="list-group-item"><i class="fa fa-check-circle text-orange mr-2"></i>
                                                 <?php echo e($buildingspec->facility_name); ?>

                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <!--
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#floorplan301"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    View Floor Plan
                                </button>
                                <div id="floorplan301" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <img src="<?php echo e(url('frontend/images/properties/propertiesdetails/floorplan.png')); ?>" class="img-fluid" alt="" />
                                </div>
                              -->
                                <button
                                        class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#groundfloor301"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    View Ground Floor Plan
                                </button>
                                <div id="groundfloor301" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <img src="<?php echo e(url($groundfloorplanimage)); ?>" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if($count_lands_in_a_location>1): ?>
      <?php echo $__env->make('home.frontlayouts.lands_other_lands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?><?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/frontlayouts/land_details_lands.blade.php ENDPATH**/ ?>