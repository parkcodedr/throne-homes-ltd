<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Name | Hospitality at its best</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!--Side Navigation-->
        <?php
        $home =""; $booking = "active"; $rooms = ""; $room_rate = ""; $pricing= ""; $management = ""; $pms = "";
        include 'side_nav.php';
        ?>
        <!--End Header-->

        <!-- top navigation -->
        <?php include 'top_nav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add New Booking</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-6 col-sm-6   form-group pull-right top_search">
                            <nav aria-label="breadcrumb" >
                                <ol class="breadcrumb pull-right" style="background: none">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Booking</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Booking</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row" style="display: block;">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <!--                                <h2>Default Example <small>Users</small></h2>-->
                                <a href="booking_list.php" class="btn btn-secondary btn-sm pull-right text-white mt-3 mb-3"><i class="fa fa-arrow-left"></i> &nbsp; Back to Booking List &nbsp; </a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left mt-5">

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-name">Customer Name<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="cust-name" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Customer Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="cust-email" name="cust-email" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Check-In Date and Time<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 30000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Check-Out Date and Time<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 30000);
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="roome-type" class="col-form-label col-md-3 col-sm-3 label-align">Room Type</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select id="roome-type" class="form-control" required>
                                                <option value="">Choose..</option>
                                                <option value="press">Standard</option>
                                                <option value="net">Internet</option>
                                                <option value="mouth">Word of mouth</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="roome-type" class="col-form-label col-md-3 col-sm-3 label-align">Units</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select id="roome-type" class="form-control" required>
                                                <option value="">Choose..</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="guest" class="col-form-label col-md-3 col-sm-3 label-align">Guest</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="row">
                                                <div class="colmd-6 col-sm-6">
                                                    Adult
                                                    <select id="heard" class="form-control" required>
                                                        <option value="">Choose..</option>
                                                        <option value="press">Standard</option>
                                                        <option value="net">Internet</option>
                                                        <option value="mouth">Word of mouth</option>
                                                    </select>
                                                </div>
                                                <div class="colmd-6 col-sm-6">
                                                    Children
                                                    <select id="heard" class="form-control" required>
                                                        <option value="">Choose..</option>
                                                        <option value="press">Standard</option>
                                                        <option value="net">Internet</option>
                                                        <option value="mouth">Word of mouth</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="cust-rate">Set Custom Rate<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="cust-rate" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="payment" class="col-form-label col-md-3 col-sm-3 label-align">Method of payment</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select id="roome-type" class="form-control" required>
                                                <option value="">Choose..</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="payment" class="col-form-label col-md-3 col-sm-3 label-align">Close Room in These Dates</label>
                                        <input type="checkbox" class="mt-2">
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div id="gender" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-secondary" data-toggle-class="btn-info" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                                                </label>
                                                <label class="btn btn-primary" data-toggle-class="btn-info" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="gender" value="female" class="join-btn"> Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="vendors/moment/min/moment.min.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="vendors/starrr/dist/starrr.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</body>
</html>
