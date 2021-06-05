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
                        <h4>REGISTRATION FORM</h4>
                        <p class="section-subtitle">Register and become the latest property owner</p>
                    </div>
                    <!-- BOOKING FORM -->
                    <form method="post" action="{{ route('confirmorder') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="text" id="discountmd5" value="{{ Request::get('buynow_type') }}" hidden>
                        <input type="text" id="discount" value="0" hidden>
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
                                    <label class="text-dark">First Name</label>
                                    <input name="firstname" type="text" class="form-control" value="{{ explode(' ',Request::get('name'))[0] }}" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Last Name</label>
                                    <input name="lastname" type="text" class="form-control" placeholder=" Last Name" value="{{ str_replace(explode(' ', Request::get('name'))[0], ' ', Request::get('name')) }}"
                                    placeholder=" Last Name" required>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Other Name</label>
                                    <input name="othername" type="text" class="form-control" placeholder="Other Name" value="{{ Request::get('othername') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Date of Birth (dd/mm/yyyy) </label>
                                    <input name="dob" type="date" class="form-control" placeholder=" Date of Birth" value="{{ Request::get('dob') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Gender</label>
                                    <select name="gender" type="text" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Marital Status</label>
                                    <select name="ms" type="text" class="form-control" required>
                                        <option value="">Marital Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="text-dark">Phone Number</label>
                                    <input name="phone" type="text" class="form-control" value="{{ Request::get('phone_number') }}" placeholder="Your Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">contact Address</label>
                                    <input class="form-control" name="address" placeholder="contact Address" value="{{ Request::get('adddress') }}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Email Address</label>
                                    <input class="form-control" name="email" type="email" value="{{ Request::get('email') }}" placeholder="Your Email Address" required>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="text-dark">Employer Name</label>
                                    <input class="form-control" name="employer" type="text" placeholder="Your Employer Name" value="{{ Request::get('employer') }}" required>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="text-dark">Office Address</label>
                                    <input class="form-control" name="office" type="text" placeholder="Office Address" value="{{ Request::get('office') }}"  required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">City/Country</label>
                                    <input class="form-control" name="city" type="text" placeholder="City/Country" value="{{ Request::get('city') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">ID Card Type</label>
                                    <select name="id_type" class="form-control" required>
                                        <option value="">ID Card Type</option>
                                        <option value="Driver's License">Driver's License</option>
                                        <option value="International Passport">International Passport</option>
                                        <option value="Voter's Card">Voter's Card</option>
                                        <option value="National ID Card">National ID Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">ID Card Number</label>
                                    <input class="form-control" name="id_card" type="text" placeholder="ID Card Number" value="{{ Request::get('id_card') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6 text-center" style="margin-bottom: 10px" >
                                <div style="display: block; margin: auto;">
                                    <label for="" class="text-dark">Passport photography</label>

                                    <div class="col" style="display: block;  margin: auto;">
                                        <img src="{{ asset('/backend/images/placeholder.png') }}" style="text-align: center;" id="passport-preview" height="100px" width="100px" alt="">
                                    </div>

                                </div>
                                
                                <div class="custom-file" style="margin-top: 5px">
                                    <input type="file" class="custom-file-input form-control" id="custom-file-input" name="userpassport">
                                    <label id="custom-file-label" class="custom-file-label" value="" for="custom-file-input">Choose
                                        file</label>
                                </div>
                                <br><br>
                            </div>

                            <div class="col-md-6 text-center" style="margin-bottom: 10px" >
                                <div style="display: block; margin: auto;">
                                    <label for="" class="text-dark">ID Card photography</label>

                                    <div class="col" style="display: block;  margin: auto;">
                                        <img src="{{ asset('/backend/images/placeholder.png') }}" style="text-align: center;" id="idphoto-preview" height="100px" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="custom-file" style="margin-top: 5px">
                                    <input type="file" class="custom-file-input form-control" id="custom-idfile-input" name="useridphoto">
                                    <label class="custom-file-label" id="useridphoto" value="" for="custom-file-input">Choose
                                        file</label>
                                </div>
                                <br><br>
                            </div>
                            <br><br><br>
                            <div class="col-md-12" style="margin-top: 40px; margin-bottom:15px">
                                <h4><b>NEXT OF KIN</b></h4>
                            </div>
                            <br><Br>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="text-dark">Full Name</label>
                                    <input name="kin_name" type="text" class="form-control" value="{{ Request::get('kin_name') }}"  placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">Relationship</label>
                                    <input name="relationship" type="text" class="form-control" value="{{ Request::get('relationship') }}"  placeholder="Relationship" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Phone Number</label>
                                    <input name="kin_phone" type="text" class="form-control" value="{{ Request::get('kin_phone') }}"  placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Email Address</label>
                                    <input class="form-control" name="kin_email" type="email" value="{{ Request::get('kin_email') }}" placeholder="Email Address" required>
                                </div>
                            </div>



                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="text-dark" for="">contact Address</label>
                                    <input class="form-control" name="kin_address" placeholder="contact Address" value="{{ Request::get('kin_address') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-dark">City/Country</label>
                                    <input class="form-control" name="kin_city" type="text" placeholder="City/Country" value="{{ Request::get('kin_city') }}" required>
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
                                    <input class="form-control" name="preferred_location" type="text" value="{{ Request::get('preferred_location') }}" placeholder="Preferred Location" required>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark">Plot Size/NUMBER OF UNIT(S)</label>
                                    <input class="form-control" name="plot" type="text" value="{{ Request::get('plot') }}" placeholder="Plot Size" required>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="text-dark">Agent Name/Agent Code</label>
                                    <input class="form-control" name="agent" type="text" value="{{ Request::get('agent') }}" placeholder="Enter Agent Name/Agent Code" required>
                                </div>
                            </div> 
                         



                            <div class="col-md-12 text-center">
                                <h4 class="text-dark">WHAT TO BUY</h4>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="text-dark">Available Plot and House</label>
                                    <input type="text" name="selectedplot" id="selectedplot" hidden>
                                    <select id="plothouse" name="plot" class="form-control">
                                        <option value="" selected>Select plot and house</option>
                                        @foreach ($foot_lands as $land)
                                        @if (Request::get('location') !== null)
                                        @if (str_contains(strtolower($land->lands_name), strtolower(Request::get('location'))))
                                        <option value="{{ $land->id }}" data-value="{{ $land->lands_price }}" data-name="{{ $land->lands_name }}">
                                            {{ $land->lands_name }}
                                        </option>

                                        @endif
                                        @else
                                        <option value="{{ $land->id }}" data-value="{{ $land->lands_price }}" data-name="{{ $land->lands_name }}">
                                            {{ $land->lands_name }}
                                        </option>

                                        @endif


                                        @endforeach
                                    </select>
                                </div>
                                <div class="cost">
                                    <input type="text" name="amount" id="plotamount" hidden>
                                    <h5 class="text-dark">Cost: <span class="amount"></span></h5>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <h4 class="text-dark">MODE OF PAYMENT</h4>
                                <select name="paymethod" id="paymethod" class="form-control">
                                    <option value="non" selected>Payment options</option>
                                    <option value="outright">Outright payment</option>
                                    <option value="installments">Installments</option>

                                </select>

                                <div class="suboption" style="margin-top: 10px; text-align: left">
                                    <label class="radio-inline" style="margin-right: 10px"><input value="3" id="3month" type="radio" name="suboption" checked> 3 Months</label>
                                    <label class="radio-inline" style="margin-right: 10px"><input id="6month" type="radio" name="suboption" value="6"> 6 Months</label>
                                    <label class="radio-inline"><input id="12month" type="radio" name="suboption" value="12"> 12
                                        Months</label>
                                </div>
                                <div class="tcost" style=" text-align: left">
                                    <input type="text" name="initialpayout" value="" hidden>
                                    <input type="text" name="monthlypay" value="" hidden>
                                    <h6 class="text-dark">Payment plan: </h6><span id="initialpay"></span> Initial Payment </br>
                                    <span class="payamount"></span> <span> monthly</span>
                                </div>

                            </div>
                            <div class="col-md-12" style="margin-top: 20px">
                                <div class="form-group">
                                    <label class="text-dark">How did you learn about Thronehomes?</label>
                                    <textarea class="form-control" name="learnaboutthronehomes" placeholder="Your answer..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 float-left">
                                <div class="form-group has-success has-feedback">
                                    <label class="text-dark">Do you have a discount code?</label>
                                    <div>
                                        <input type="text" name="codediscount" id="plot" hidden>
                                        <input class="form-control" type="text" name="coupon" id="coupon" placeholder="Enter CODE">
                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                    </div>
                                    <input type="text" class="coupondiscount" name="coupondiscount" id="coupondiscount" value="0" hidden>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <a class="btn mt40 float-right" id="getCoupon" style=" color: white;"> Get Discount</a>
                            </div>

                            <div class=" col-md-6 grandtotal" style=" text-align: left">
                                <h1 class="text-dark mt40">Grand Total:</h1>
                                <input type="text" name="grandtotal" id="grandtotal" value="" hidden>
                                <input type="text" name="originalprice" id="originalprice" value="" hidden>
                                <input type="text" name="valuediscount" value="" hidden>
                                <input type="text" name="discountcoupon" value="" hidden>
                                <h2 class="text-dark"><span class="totalamount">0</span> <span id="isInstallment">Initial Payment</span></h2>
                                <h6 id="discountcoupon"> with <span id="userend"></span> code discount</h6>
                                <h6 id="promodiscount"> with <span id="valuediscount"></span>% promo discount</h6>
                            </div> 
                            <div class="col-md-6">
                                    <button type="submit" class="btn mt50 float-right" id="confirmdetails">
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

    <script src="{{ asset('js/orderform.js') }}"></script>
    @endsection
    @push('scripts')
    @endpush