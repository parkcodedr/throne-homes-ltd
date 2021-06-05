<!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
          <ul>

            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- SLIDE NR. 1 -->
            <?php if($slider->content_id==1): ?>
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="<?php echo e(asset($slider->slider_img)); ?>" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <h1
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','50','40','30']"
                data-lineheight="['60','50','40','30']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">
                <?php echo e($slider->slider_caption); ?></h1>

              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="-120"
                data-y="420"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
                <a class="btn" href="<?php echo e(url($slider->slider_caption_link)); ?>">
                  <i class="fa fa-paper-plane"></i><?php echo e($slider->slider_caption_link_label); ?></a>
              </div>
              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="128"
                data-y="420"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
                <a class="btn" href="<?php echo e(url($slider->slider_last_link_1)); ?>">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo e($slider->slider_last_label_1); ?></a>
              </div>
              <!-- LAYER NR. 5 -->

              <div
                class="tp-caption tp_m_title tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="240"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['25','25','18','18']"
                data-lineheight="['25','25','18','18']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="color: #fff">
                  <?php echo e($slider->slider_last_label_2); ?>

              </div>
            </li>
            <?php endif; ?>

            <!-- SLIDE NR. 2 -->
            <?php if($slider->content_id==2): ?>
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="<?php echo e(asset($slider->slider_img)); ?>" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['70','50','40','25']"
                data-lineheight="['60','50','40','25']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;"><?php echo e($slider->slider_caption); ?>

              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;"><?php echo e($slider->slider_caption_link_label); ?>

              </div>
                <!-- LAYER NR. 3 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="-120"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_1)); ?>">
                        <i class="fa fa-paper-plane"></i><?php echo e($slider->slider_last_label_1); ?></a>
                </div>
                <!-- LAYER NR. 4 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="128"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_2)); ?>">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo e($slider->slider_last_label_2); ?></a>
                </div>
            </li>
            <?php endif; ?>


            <!-- SLIDE NR. 3 -->
            <?php if($slider->content_id==3): ?>
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="<?php echo e(asset($slider->slider_img)); ?>" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="305"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','70','60','40']"
                data-lineheight="['80','70','60','40']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;"><?php echo e($slider->slider_caption); ?>

              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;"><?php echo e($slider->slider_caption_link_label); ?>

              </div>
                <!-- LAYER NR. 3 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="-120"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_1)); ?>">
                        <i class="fa fa-paper-plane"></i><?php echo e($slider->slider_last_label_1); ?></a>
                </div>
                <!-- LAYER NR. 4 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="128"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_2)); ?>">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo e($slider->slider_last_label_2); ?></a>
                </div>
            </li>
            <?php endif; ?>

            <!-- SLIDE NR. 3 -->
            <?php if($slider->content_id>3): ?>
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="<?php echo e(asset($slider->slider_img)); ?>" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="305"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['80','70','60','40']"
                data-lineheight="['80','70','60','40']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;"><?php echo e($slider->slider_caption); ?>

              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;"><?php echo e($slider->slider_caption_link_label); ?>

              </div>
                <!-- LAYER NR. 3 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="-120"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_1)); ?>">
                        <i class="fa fa-paper-plane"></i><?php echo e($slider->slider_last_label_1); ?></a>
                </div>
                <!-- LAYER NR. 4 -->
                <div
                        class="tp-caption"
                        data-x="center"
                        data-hoffset="128"
                        data-y="470"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                    <a class="btn" href="<?php echo e(url($slider->slider_last_link_2)); ?>">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo e($slider->slider_last_label_2); ?></a>
                </div>
            </li>
            <?php endif; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <!-- start slider -->
          <?php echo $__env->make('home.frontlayouts.slider_booking_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end slider --><?php /**PATH C:\laragon\www\resources\views/home/frontlayouts/slider.blade.php ENDPATH**/ ?>