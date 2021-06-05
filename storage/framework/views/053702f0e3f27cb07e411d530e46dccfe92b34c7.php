<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <meta name="keywords" content="<?php echo e($siteinfos->meta_keywords); ?>" />
    <meta name="author" content="Administrator" />
    <meta name="description" content="<?php echo e($siteinfos->meta_description); ?>" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo e($siteinfos->welcomenote); ?><?php echo e($title); ?></title>
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset($siteinfos->hotel_apple_icon)); ?>"/>
    <link rel="icon" href="<?php echo e(asset($siteinfos->hotel_icon)); ?>">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.mmenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/revolution/css/layers.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/revolution/css/settings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/revolution/css/navigation.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/daterangepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/custom.css')); ?>">


    <!-- ========== ICON FONTS ========== -->
    <link href="<?php echo e(asset('frontend/fonts/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/fonts/flaticon.css')); ?>" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
</head>
<body>
    <!-- start content -->
       <?php echo $__env->yieldContent('content'); ?>
    <!-- end content -->

    <!-- ========== FOOTER ========== -->


</div>
<!-- ========== CONTACT NOTIFICATION ========== -->
<div id="contact-notification" class="notification fixed"></div>
<!-- ========== BACK TO TOP ========== -->
<div class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<!-- ========== JAVASCRIPT ========== -->
<script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap-select.min.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/js/jquery.mmenu.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.inview.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.countdown.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl.carousel.thumbs.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/imagesloaded.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/masonry.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/countup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/smoothscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/instafeed.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/html2pdf.bundle.js')); ?>"></script>
<script>
    function getPDF() {
        // Get the element.
        var element = document.getElementById('pdfArea');

        // Generate the PDF.
        html2pdf().from(element).set({
            margin: .5,
            filename: '<?php echo $orderdetailsprocessed->firstname."_".$orderdetailsprocessed->lastname."_".$selectedplot_detail->lands_name; ?>.pdf',
            html2canvas: { scale: 2 },
            jsPDF: {orientation: 'portrait', unit: 'in', format: 'a4', compressPDF: true}
        }).save();
    }
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\thronehomesltd\resources\views/home/receipt_main.blade.php ENDPATH**/ ?>