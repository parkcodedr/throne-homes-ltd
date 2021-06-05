@extends ('home.main')

@push('css')


@endpush

@section('content')
@include('home.frontlayouts.navigation')

<!-- ========== WRAPPER ========== -->
<div class="wrapper">
    <!-- ========== HEADER MENU ========== -->
    <!-- ========== PAGE TITLE ========== -->
    @include('home.frontlayouts.breadcrumb')

    <main>
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-lg-9 col-12">
                    <div class="section-title">
                        <h4>INFLUENCER REG. FORM</h4>
                        <p class="section-subtitle">Register to become an influencer and start earning <b>one million monthly</b></p>
                    </div>
                    <!-- BOOKING FORM -->
                    <form method="post" action="{{ route('confirmagentreg') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h4><b>PERSONAL INFORMATION</b></h4>
                            </div>
                            <br>
                            <br>

                           

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Title (Mr/Miss/Mrs/Chief/Dr/Bar)</label>
                                    <select name="title" type="text" class="form-control" required>
                                        <option value="">Select Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Chief">Chief</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Bar">Bar</option>
                                        <option value="Engr">Engr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">First Name</label>
                                    <input name="firstname" type="text" class="form-control" value="{{ explode(' ',Request::get('name'))[0] }}" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Other Name</label>
                                    <input name="othername" type="text" class="form-control" placeholder="Other Name" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Last Name</label>
                                    <input name="lastname" type="text" class="form-control" placeholder=" Last Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Phone Number</label>
                                    <input name="phone" type="text" class="form-control" value="{{ Request::get('phone_number') }}" placeholder="Your Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Email Address</label>
                                    <input class="form-control" name="email" type="email" value="{{ Request::get('email') }}" placeholder="Your Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Residential Address</label>
                                    <textarea class="form-control" rows="1" name="address"
                                        placeholder="Residential Address"
                                        required> </textarea>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">City/Country</label>
                                    <input class="form-control" name="city" type="text" placeholder="City/Country" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="text-dark">Generate Influencer Code</label> (...want influencer code)
                                    <select name="genagentcode" type="text" class="form-control" required>
                                        <option value="">Select Generate Influencer Code</option>
                                        <option value="yes" selected="selected">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div> 
                            <input class="form-control" name="agent" hidden value="emmanuel/1234567890" required>
                         

                            <div class="col-md-6">
                                    <button type="submit" class="btn mt50 float-right" id="confirmdetails" name="processform" value="processing">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        CONFIRM DETAILS
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <div class="contact-details">
                            <?php $count = 0;
                            $lands_name = 'beginning'; ?>
                            @foreach($lands as $land)
                            @if($land->content_id==1)
                            <div class="section-title">
                                <h4>{{ strtoupper($land->land_detail_others) }}</h4>
                                <p class="section-subtitle">{{ strtoupper($land->land_detail_available_info) }}</p>
                            </div>
                            @endif
                            @if($lands_name=='beginning')
                            <?php $lands_name = $land->lands_name; ?>
                            <div class="offer-item sm mb50">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="{{ url($land->land_details_link.'/'.$land->id) }}">
                                        <img src="{{ url($land->lands_img) }}" class="img-fluid" alt="Image">
                                    </a>
                                </figure>
                                <div class="ribbon">
                                    <span>{{ $land->lands_location }}</span>
                                </div>
                                <div class="offer-price uppercase">
                                    {{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_details)))))) }} N{{ number_format($land->lands_price/1000000,1,".",",") }}M
                                </div>
                                <h3 class="offer-title">
                                    <a href="" {{ url($land->lands_details_link.'/'.$land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))) }}</a>
                                </h3>
                            </div>
                            @endif
                            @if(join('',explode('600',join('',explode('500',join('',explode('450',$lands_name))))))!=join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))))
                            <?php $lands_name = $land->lands_name; ?>

                            <div class="offer-item sm mb50">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="{{ url($land->land_details_link.'/'.$land->id) }}">
                                        <img src="{{ url($land->lands_img) }}" class="img-fluid" alt="Image">
                                    </a>
                                </figure>
                                <div class="ribbon">
                                    <span>{{ $land->lands_location }}</span>
                                </div>
                                <div class="offer-price uppercase">
                                    {{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_details)))))) }} N{{ join('',explode('.0',join('',explode('.00',number_format($land->lands_price/1000000,1,".",","))))) }}M
                                </div>
                                <h3 class="offer-title">
                                    <a href="" {{ url($land->lands_details_link.'/'.$land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))) }}</a>
                                </h3>
                            </div>

                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- start footer -->
    @include('home.frontlayouts.footer')
    <!-- end footer -->
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var SITEURL = "{{ URL('/') }}";
            var originalcost = 0;
            var gTotal = 0;
            var codediscount = 0;
            var promodiscount = 0;
            $(".cost").hide();
            $(".tcost").hide();
            $(".suboption").hide();
            $("#discountmsg").hide();
            $("#isInstallment").hide();
            $("#promodiscount").hide();
            $("#discountcoupon").hide();
            $('.totalamount').formatCurrency();
            $("#plothouse").change(function() {
                var houseplot = $(this).children("option:selected").val();

                if (houseplot > 0) {

                    $("#selectedplot").val($(this).children("option:selected").data("name"));
                    $('#paymethod').removeAttr('disabled');
                    $("#plot").val($(this).children("option:selected").text());
                    $(".cost").show();
                    originalcost = $(this).children("option:selected").data("value");
                    $('#originalprice').val(originalcost);
                    var cost = originalcost;
                    $(".amount").text(cost);
                    $("#price").val(cost);
                    $('.amount').formatCurrency();

                    var discount = $("#discount").val();
                    promodiscount = discount;

                    $("input[name=valuediscount]").val(promodiscount);
                    if (discount > 0) {
                        cost = originalcost - ((discount * originalcost) / 100);
                        $("#valuediscount").text(discount);
                        $("#promodiscount").show();
                    }
                    if (codediscount > 1) {
                        cost = cost - ((originalcost * codediscount) / 100);
                        $("#discountcoupon").show();
                    }

                    gTotal = cost;
                    var payment = $("#paymethod").children("option:selected").val();
                    if (payment == "installments") {
                        var option = $('input[name=suboption]:checked').val();
                        var initialpay = $("#initialpay").val();
                        var monthcost = (cost - initialpay) / option;
                        $(".payamount").text(monthcost);
                        $("input[name=monthlypay]").val(monthcost);
                        $('.payamount').formatCurrency();
                        gTotal = $("#initialpay").val();

                    }

                    $(".totalamount").text(gTotal);
                    $('.totalamount').formatCurrency();
                    $('#grandtotal').val(gTotal);

                } else {
                    $(".cost").hide();
                    $('#paymethod').attr("disabled", "disabled");
                }

            });
            $("#paymethod").change(function() {

                var payment = $(this).children("option:selected").val();
                var price = originalcost;

                if (price > 0) {
                    if (payment == "installments") {
                        $("#3month").prop("checked", true);

                        if (codediscount > 1) {
                            price = price - ((originalcost * codediscount) / 100);
                        }
                        var discount = $("#discount").val();
                        if (discount > 0) {
                            price = price - ((discount * originalcost) / 100);
                            $("#valuediscount").text(discount);
                            $("#promodiscount").show();
                        }
                        var houseplotid = $("#plothouse").children("option:selected").val();
                        getinstallmentInitial(houseplotid, price);

                    } else {
                        $(".suboption").hide();
                        $(".tcost").hide();
                        $("#isInstallment").hide();
                        var discount = $("#discount").val();
                        if (discount > 0) {
                            price = originalcost - ((discount * originalcost) / 100);
                            $("#valuediscount").text(discount);
                            $("#promodiscount").show();
                        }
                        if (codediscount > 1) {
                            price = price - ((originalcost * codediscount) / 100);
                            $("#discountcoupon").show();

                        }
                        gTotal = price;
                    }

                    $(".totalamount").text(gTotal);
                    $('.totalamount').formatCurrency();
                    $('#grandtotal').val(gTotal);

                } else {
                    if (payment != "non") {
                        $('#paymethod').prop('selectedIndex', 0); // select 4th option
                        toastr.info("Select plot and house is required", {
                            timeOut: 5000
                        });
                    }

                }


            });

            const getDiscount = () => {
                $.ajax({
                    type: "GET",
                    url: SITEURL + "/get-discount",
                    data: {
                        requestmd5: $("#discountmd5").val(),
                    },
                    success: function(data) {

                        $("#discount").val(data.discount);
                        $("input[name=valuediscount]").val(data.discount);
                    }
                });
            }
            const getinstallmentInitial = (id, price) => {
                $.ajax({
                    type: "GET",
                    url: SITEURL + "/get-firstpay",
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $("#initialpay").val(data.initialpay);
                        $("#initialpay").text(data.initialpay);
                        $('#initialpay').formatCurrency();
                        var monthcost = (price - data.initialpay) / 3;
                        $(".payamount").text(monthcost);
                        $('.payamount').formatCurrency();

                        $(".totalamount").text(data.initialpay);
                        $('#grandtotal').val(data.initialpay);
                        $('.totalamount').formatCurrency();
                        $("input[name=monthlypay]").val(monthcost);
                        $('input[name=initialpayout]').val(data.initialpay);
                        $(".suboption").show();
                        $(".tcost").show();
                        $("#isInstallment").show();
                    },
                    error: function(data) {
                        toastr.warning('Error occur', {
                            timeOut: 5000
                        });

                    }
                });
            }


            const getCoupon = () => {
                $.ajax({
                    type: "GET",
                    url: SITEURL + "/get-coupon",
                    data: {
                        coupon: $("#coupon").val(),
                    },
                    success: function(data) {

                        if (data.coupondiscount > 0) {

                            $("#coupondiscount").val(data.coupondiscount);
                            codediscount = data.coupondiscount;
                            $("#userend").text(data.coupondiscount);
                            $("input[name=discountcoupon]").val(data.coupondiscount);
                            var cost = originalcost;
                            if (codediscount > 1) {
                                cost = cost - ((originalcost * codediscount) / 100);
                                $("#discountcoupon").show();
                            }
                            var discount = $("#discount").val();
                            if (discount > 0) {
                                cost = cost - ((discount * originalcost) / 100);
                                $("#valuediscount").text(discount);
                                $("#promodiscount").show();
                            }

                            var payment = $("#paymethod").children("option:selected").val();
                            if (payment == "installments") {
                                var option = $('input[name=suboption]:checked').val();
                                var initialpay = $("#initialpay").val();
                                var monthcost = (cost - initialpay) / option;
                                $(".payamount").text(monthcost);
                                $('.payamount').formatCurrency();
                                gTotal = $("#initialpay").val();
                                $("input[name=monthlypay]").val(monthcost);

                            } else {
                                gTotal = cost;
                            }

                            $("#coupon").val("");
                            $(".totalamount").text(gTotal);
                            $('#grandtotal').val(gTotal);
                            $('.totalamount').formatCurrency();
                        } else {
                            $("#getCoupon").prop('disabled', false);
                            toastr.error("Invalid Coupon", {
                                timeOut: 5000
                            });
                        }
                    }

                });
            }


            $('#getCoupon').click(function() {
                $("#getCoupon").prop('disabled', true);
                getCoupon();

            });



            $("input[name=suboption]").bind('change', function() {
                var option = $(this).val();
                var price = originalcost;
                if (codediscount > 1) {
                    price = price - ((originalcost * codediscount) / 100);
                    $("#discountcoupon").show();
                }
                var discount = $("#discount").val();
                if (discount > 0) {
                    price = price - ((discount * originalcost) / 100);
                    $("#valuediscount").text(discount);
                    $("#promodiscount").show();
                }

                var initialpay = $("#initialpay").val();

                var monthcost = (price - initialpay) / option;

                if (option == 6) {
                    monthcost = monthcost * 1.10;
                } else if (option == 12) {
                    monthcost = monthcost * 1.20;
                } else {
                    monthcost = monthcost * 1;
                    $("#3month").prop("checked", true);
                }
                $(".totalamount").text($("#initialpay").val());

                $('#grandtotal').val($("#initialpay").val());
                $('.totalamount').formatCurrency();
                $(".payamount").text(monthcost);
                $('.payamount').formatCurrency();
                $("input[name=monthlypay]").val(monthcost);
                $('input[name=initialpayout]').val(initialpay);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#passport-preview').attr('src', e.target.result);
                        var fileName = input.files[0].name;
                        $('.custom-file-label').text(fileName);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#custom-file-input").change(function() {

                readURL(this);
            });
            if ($("#discountmd5").val() != "") {
                getDiscount();
            }

        });
    </script>
    @endsection
    @push('scripts')
    @endpush