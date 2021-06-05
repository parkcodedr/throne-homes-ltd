$(document).ready(function() {
    var SITEURL = "{{URL('/thronehomesltd/public/')}}";
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
                cost = cost - ((cost * codediscount) / 100);
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

                var discount = $("#discount").val();
                if (discount > 0) {
                    price = price - ((discount * originalcost) / 100);
                    $("#valuediscount").text(discount);
                    $("#promodiscount").show();
                }
                if (codediscount > 1) {
                    price = price - ((price * codediscount) / 100);
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
                    price = price - ((price * codediscount) / 100);
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
            url: "/thronehomesltd/public/get-discount",
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
            url: "/thronehomesltd/public/get-firstpay",
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
            url: "/thronehomesltd/public/get-coupon",
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
                    var discount = $("#discount").val();
                    if (discount > 0) {
                        cost = cost - ((discount * originalcost) / 100);
                        $("#valuediscount").text(discount);
                        $("#promodiscount").show();
                    }
                    if (codediscount > 1) {
                        cost = cost - ((cost * codediscount) / 100);
                        $("#discountcoupon").show();
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
        var discount = $("#discount").val();
        if (discount > 0) {
            price = price - ((discount * originalcost) / 100);
            $("#valuediscount").text(discount);
            $("#promodiscount").show();
        }
        if (codediscount > 1) {
            price = price - ((price * codediscount) / 100);
            $("#discountcoupon").show();
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
                $('#custom-file-label').text(fileName);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readIDURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#idphoto-preview').attr('src', e.target.result);
                var fileName = input.files[0].name;
                $('#useridphoto').text(fileName);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#custom-file-input").change(function() {

        readURL(this);
    });

    $("#custom-idfile-input").change(function() {

        readIDURL(this);
    });
    if ($("#discountmd5").val() != "") {
        getDiscount();
    }

});