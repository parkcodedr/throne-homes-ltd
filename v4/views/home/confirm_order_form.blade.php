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
                    <div class="col-lg-12 col-12">
                        <div class="section-title">
                            <h4>CONFIRM YOUR REGISTRATION</h4>

                        </div>
                        <!-- BOOKING FORM -->
                        <form method="POST" action="{{ route('paynow') }}" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Title</label>
                                        <input name="title" type="text" class="form-control"
                                            value="{{ $orderdetails->title }}" placeholder="Title" disabled>
                                        <input class="form-control" name="_title" hidden
                                            value="{{ Request::get('title') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">First Name</label>
                                        <input name="firstname" type="text" class="form-control"
                                            value="{{ $orderdetails->firstname }}" disabled>
                                        <input class="form-control" name="first_name" hidden
                                            value="{{ Request::get('firstname') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Last Name</label>
                                        <input name="lastname" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->lastname }}">
                                        <input class="form-control" name="last_name" hidden
                                            value="{{ Request::get('lastname') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Other Name</label>
                                        <input name="othername" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->othername }}">
                                        <input class="form-control" name="other_name" hidden
                                            value="{{ Request::get('othername') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Date of Birth</label>
                                        <input name="dob" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->dob }}">
                                        <input class="form-control" name="d_o_b" hidden
                                            value="{{ Request::get('dob') }} ">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Gender</label>
                                        <input name="gender" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->gender }}" required>
                                        <input class="form-control" name="_gender" hidden
                                            value="{{ Request::get('gender') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Martial Status</label>
                                        <input name="ms" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->ms }}" required>
                                        <input class="form-control" name="_ms" hidden value="{{ Request::get('ms') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Phone Number</label>
                                        <input name="phone" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->phone }}" required>
                                        <input class="form-control" name="phonenumber" hidden
                                            value="{{ Request::get('phone') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="">Contact Address</label>
                                        <textarea class="form-control" rows="2" name="address" disabled
                                            required> {{ $orderdetails->address }}</textarea>
                                        <input class="form-control" name="homeaddress" hidden
                                            value="{{ Request::get('address') }} ">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Email Address</label>
                                        <input class="form-control" name="email" type="email" disabled
                                            value="{{ $orderdetails->email }}">
                                        <input class="form-control" name="emailaddress" hidden
                                            value="{{ Request::get('email') }} ">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Employer Name</label>
                                        <input class="form-control" name="employer" type="text"
                                            value="{{ Request::get('employer') }}" disabled>
                                        <input class="form-control" name="_employer" hidden
                                            value="{{ Request::get('employer') }} ">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark">Office Address</label>
                                        <input class="form-control" name="office" type="text"
                                            value="{{ Request::get('office') }}" disabled>
                                        <input class="form-control" name="_office" hidden
                                            value="{{ Request::get('office') }} ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">City/Country</label>
                                        <input class="form-control" name="city" type="text"
                                            value="{{ Request::get('city') }}" disabled>
                                        <input class="form-control" name="_city" hidden
                                            value="{{ Request::get('city') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">ID Card Type</label>
                                        <input class="form-control" name="id_type" type="text"
                                            value="{{ Request::get('id_type') }}" disabled>
                                        <input class="form-control" name="_idtype" hidden
                                            value="{{ Request::get('id_type') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">ID Card Number</label>
                                        <input class="form-control" name="id_card" type="text" disabled
                                            value="{{ Request::get('id_card') }}" required>
                                        <input class="form-control" name="_idcard" hidden
                                            value="{{ Request::get('id_card') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6 " style="margin-bottom: 20px">
                                    <div>
                                        <label for="" class="text-dark text-center">Passport photography</label>
                                    </div>
                                    <div class="col">
                                        <img src="{{ $imgPath }}" id="passport-preview" height="100px" width="100px"
                                            alt="">
                                        <input type="text" name="passport" hidden value="{{ $imgPath }}">
                                    </div>
                                </div>


                                <div class="col-md-6" style="margin-bottom: 20px">
                                    <div>
                                        <label for="" class="text-dark  text-center">ID Card photography</label>
                                    </div>
                                    <div class="col">
                                        <img src="{{ $imgPathuseridphoto }}" id="passport-preview" height="100px"
                                            width="100px" alt="">
                                        <input type="text" name="idpassport" hidden value="{{ $imgPathuseridphoto }}">
                                    </div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <h4 class="text-dark">WHAT TO BUY</h4>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Available Plot and House</label>
                                        <input class="form-control" name="plothouse" type="text" disabled
                                            value="{{ Request::get('selectedplot') }}" required>
                                        <input class="form-control" name="selectedplot" hidden
                                            value="{{ Request::get('selectedplot') }} ">

                                    </div>
                                    <div class="cost">
                                        <h5 class="text-dark">Original Cost: <span
                                                class="amount">{{ Request::get('originalprice') }}</span></h5>
                                        <input class="form-control" name="originalcost" hidden
                                            value="{{ Request::get('originalprice') }} ">

                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h4 class="text-dark ">MODE OF PAYMENT</h4>
                                </div>
                                <div class="col-md-12">


                                    <input class="form-control" name="paymode" type="text"
                                        style=" text-transform: uppercase;" disabled
                                        value="{{ Request::get('paymethod') }}">
                                    <input class="form-control" name="paymentmethod" hidden
                                        value="{{ Request::get('paymethod') }} ">

                                    @if ($orderdetails->paymethod == 'installments')
                                        <div class="tcost" style="text-align: left">
                                            <input class="form-control" name="paypermonth" hidden
                                                value="{{ Request::get('monthlypay') }} ">
                                            <input class="form-control" name="initialpayout" hidden
                                                value=" {{ Request::get('initialpayout') }}">
                                            <input class="form-control" name="numbermonthpay" hidden
                                                value=" {{ Request::get('suboption') }}">
                                            <h6 class="text-dark">Payment plan: {{ Request::get('suboption') }} month
                                            </h6>
                                            <span id="initialpay">{{ Request::get('initialpayout') }} </span>
                                            <span>Initial
                                                Payment</span> </br>
                                            <span class="payamount">{{ Request::get('monthlypay') }} </span>
                                            <span>Monthly</span>
                                        </div>
                                    @else


                                    @endif


                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark">Full Name</label>
                                        <input name="kin_name" type="text" class="form-control"
                                            value="{{ Request::get('kin_name') }}" disabled>
                                        <input class="form-control" name="_kinname" hidden
                                            value="{{ Request::get('kin_name') }} ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">Relationship</label>
                                        <input name="relationship" type="text" class="form-control"
                                            value="{{ Request::get('relationship') }}" disabled>
                                        <input class="form-control" name="_relationship" hidden
                                            value="{{ Request::get('relationship') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Phone Number</label>
                                        <input name="kin_phone" type="text" class="form-control"
                                            value="{{ Request::get('kin_phone') }}" disabled>
                                        <input class="form-control" name="_kinphone" hidden
                                            value="{{ Request::get('kin_phone') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Email Address</label>
                                        <input class="form-control" name="kin_email" type="email"
                                            value="{{ Request::get('kin_email') }}" disabled>
                                        <input class="form-control" name="_kinemail" hidden
                                            value="{{ Request::get('kin_email') }} ">
                                    </div>
                                </div>



                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="text-dark" for="">contact Address</label>
                                        <input class="form-control" name="kin_address" disabled
                                            value="{{ Request::get('kin_address') }}">
                                        <input class="form-control" name="_kinaddress" hidden
                                            value="{{ Request::get('kin_address') }} ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">City/Country</label>
                                        <input class="form-control" name="kin_city" type="text" disabled
                                            value="{{ Request::get('kin_city') }}">
                                        <input class="form-control" name="_kincity" hidden
                                            value="{{ Request::get('kin_city') }} ">
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="col-md-12" style="margin-top: 40px; margin-bottom:15px">
                                    <h4><b>OTHER INFORMATION</b></h4>
                                </div>
                                <br><Br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Preferred Location</label>
                                        <input class="form-control" name="preferred_location" type="text"
                                            value="{{ Request::get('preferred_location') }}" disabled>
                                        <input class="form-control" name="_preferred_location" hidden
                                            value="{{ Request::get('preferred_location') }} ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Plot Size/NUMBER OF UNIT(S)</label>
                                        <input class="form-control" name="plot" type="text"
                                            value="{{ Request::get('plot') }}" disabled>
                                        <input class="form-control" name="_plot" hidden
                                            value="{{ Request::get('plot') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Agent Name/Agent Code</label>
                                        <input class="form-control" name="agent" type="text"
                                            value="{{ Request::get('agent') }}" disabled>
                                        <input class="form-control" name="_agent" hidden
                                            value="{{ Request::get('agent') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px">
                                    <div class="form-group">
                                        <label class="text-dark">How did you learn about Thronehomes?</label>
                                        <input class="form-control" name="learnaboutthronehomes" disabled
                                            value="{{ Request::get('learnaboutthronehomes') }}">
                                        <input class="form-control" name="learnabout" hidden
                                            value="{{ Request::get('learnaboutthronehomes') }} ">
                                    </div>
                                </div>


                                <div class=" col-md-12 grandtotal" style=" text-align: left">
                                    <h1 class="text-dark mt40">Grand Total:</h1>
                                    <input class="form-control" name="payamount" hidden
                                        value=" {{ Request::get('grandtotal') }}">

                                    @if ($orderdetails->paymethod == 'installments')
                                        <h2 class="text-dark"><span class="totalamount">
                                                {{ Request::get('grandtotal') }}</span> <span id="isInstallment">Initial
                                                Payment</span>
                                            @if ($orderdetails->discountcoupon > 0)
                                                <br> <span style="font-size: 14px">With
                                                    {{ $orderdetails->discountcoupon }} code discount</span>
                                            @endif
                                            @if ($orderdetails->valuediscount > 0)
                                                <br> <span style="font-size: 14px">With
                                                    {{ $orderdetails->valuediscount }} promo discount</span>
                                            @endif

                                        </h2>
                                    @else
                                        <h2 class="text-dark"><span class="totalamount">
                                                {{ Request::get('grandtotal') }}</span>
                                            @if ($orderdetails->discountcoupon > 0)
                                                <br><span style="font-size: 14px">With
                                                    {{ $orderdetails->discountcoupon }} code discount</span>
                                            @endif
                                            @if ($orderdetails->valuediscount > 0)
                                                <br> <span style="font-size: 14px">With
                                                    {{ $orderdetails->valuediscount }} promo discount</span>
                                            @endif

                                        </h2>
                                    @endif


                                </div>

                                <input class="form-control" name="payoperation" id="payoperation" hidden value="">
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="edit">
                                        <i class="fa fa-edit  text-white-50" aria-hidden="true"></i>
                                        Edit
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="payonline">
                                        <i class=" fa fa-credit-card text-white-50" aria-hidden="true"></i>
                                        Pay now
                                    </button>


                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn mt50 float-right" name="processform" id="processform"
                                        value="paycash">
                                        <i class="fa  fa-money text-white-50" aria-hidden="true"></i>
                                        Pay with cash
                                    </button>


                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('buynow') }}" class="btn mt50 float-right"> <i
                                            class="fa text-white-50" aria-hidden="true"></i>
                                        Cancel </a>
                                </div>
                            </div>
                        </form>
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
                $('.amount').formatCurrency();
                $('.totalamount').formatCurrency();
                $('.payamount').formatCurrency();
                $('#initialpay').formatCurrency();


                $('#edit').click(function() {
                    $("#payoperation").val("edit");

                });
                $('#payonline').click(function() {
                    $("#payoperation").val("online");

                });

                $('#paycash').click(function() {
                    $("#paycash").val("cash");

                });

                $('#cancel').click(function() {
                    $("#payoperation").val("cancel");

                });


            });

        </script>
    @endsection
    @push('scripts')
    @endpush
