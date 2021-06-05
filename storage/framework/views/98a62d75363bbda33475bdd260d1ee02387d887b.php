<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(join(' ',explode('_',join('',explode('/',Route::current()->getName()))))!='login'): ?>
    <link rel="icon" href="<?php echo e(asset($siteinfos->hotel_icon)); ?>" type="image/ico" />
    <title><?php echo e($siteinfos->welcomenote); ?><?php echo e($title); ?></title>
    <?php endif; ?>
    <?php if(join(' ',explode('_',join('',explode('/',Route::current()->getName()))))=='login'): ?>
    <link rel="icon" href="" type="image/ico" />
    <title>
        <?php echo e(config('app.name', 'Throne Investment Homes Ltd - REMS') . '::' . ucfirst(strtolower(join(' ', explode('_', join('', explode('/', Route::current()->getName()))))))); ?>

    </title>
    <?php endif; ?>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('backend/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('backend/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('backend/vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/vendors/google-code-prettify/bin/prettify.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/switchery/dist/switchery.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/starrr/dist/starrr.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('backend/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/imageuploader/image-uploader.min.css')); ?>">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('backend/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/vendors/datatables.net/css/jquery.dataTables.min.css')); ?>">
    <!-- Datatables -->

    <link href="<?php echo e(asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>"
        rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('backend/build/css/custom.min.css')); ?>" rel="stylesheet">
</head>

<body class="nav-md login">

    <!-- start content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- end content -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('backend/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('backend/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('backend/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('backend/vendors/Chart.js/dist/Chart.min.js')); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo e(asset('backend/vendors/gauge.js/dist/gauge.min.js')); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo e(asset('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('backend/vendors/iCheck/icheck.min.js')); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo e(asset('backend/vendors/skycons/skycons.js')); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('backend/vendors/Flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/Flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/Flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/Flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/Flot/jquery.flot.resize.js')); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('backend/vendors/DateJS/build/date.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('backend/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('backend/vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo e(asset('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/jquery.hotkeys/jquery.hotkeys.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/google-code-prettify/src/prettify.js')); ?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo e(asset('backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js')); ?>"></script>
    <!-- Switchery -->
    <script src="<?php echo e(asset('backend/vendors/switchery/dist/switchery.min.js')); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('backend/vendors/select2/dist/js/select2.full.min.js')); ?>"></script>
    <!-- Parsley -->
    <script src="<?php echo e(asset('backend/vendors/parsleyjs/dist/parsley.min.js')); ?>"></script>
    <!-- Autosize -->
    <script src="<?php echo e(asset('backend/vendors/autosize/dist/autosize.min.js')); ?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo e(asset('backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')); ?>"></script>
    <!-- starrr -->
    <script src="<?php echo e(asset('backend/vendors/starrr/dist/starrr.js')); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo e(asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/jszip/dist/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('backend/build/js/custom.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laravel\thronehomesltd\resources\views/admin/main.blade.php ENDPATH**/ ?>