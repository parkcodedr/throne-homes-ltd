<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4 class="text-orange">On-Going-Project and Completed-Project</h4>
            <!--<p class="section-subtitle"><?php echo e($indexlands->section_subtitle); ?></p>-->
            <!--<a href="<?php echo e(url($indexlands->section_lands_link)); ?>"-->
            <!--    class="view-all"><?php echo e($indexlands->section_lands); ?></a>-->
        </div>
        <main class="gallery-page">
            <!-- GALLERY -->
            <div class="container">
                <div class="row">
                    <!-- ITEM -->
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="gallery-item col-md-3" style="margin:30px;">
                            <figure>
                                <a href="/projects_details/<?php echo e($project->id); ?>">
                                 <img src="<?php echo e(url($project->feature_image)); ?>" alt="Image"
                                       style="height: 220px; width: 300px">
                                </a>
                                <figcaption  style="margin-left:20px;" ><?php echo e($project->project_title); ?></figcaption>
                            </figure>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </main>

    </div>
</section>
<?php /**PATH /home/thronehomesltd/public_html/homes/homes/resources/views/home/frontlayouts/project_page.blade.php ENDPATH**/ ?>