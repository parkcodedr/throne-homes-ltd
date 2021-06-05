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
                        @if($status!=0 && $status!="processing")
                        <center>                           
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <center>
                                        <h1>Thank you.</h1>
                                        <h1>Login Details and Influencer Code</h1>
                                        <table id="credentialtable" name="credentialtable">
                                            <tr>
                                                <td>Your Username :</td><td><b>{{ $status["username"] }}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Your Password :</td><td><b>{{ $status["password"] }}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Influencer Code :</td><td><b>{{ $status["influencercode"] }}</b></td>
                                            </tr>
                                        </table>
                                        <b><i>@if(strtolower($status["check_upline"])!="agent exist") {{ $status["check_upline"] }} @endif </i></b>
                                    </center> 
                                </div>
                        </center>
                        @endif
                        @if($status=="processing")
                        <div class="section-title">
                            <h4>CONFIRM YOUR INFLUENCER REG.</h4>

                        </div>
                        <!-- BOOKING FORM -->
                        <form method="POST" action="{{ route('confirmagentreg') }}" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">Title</label>
                                        <input name="title" type="text" class="form-control"
                                            value="{{ $orderdetails->title }}" placeholder="Title" disabled
                                            required>
                                        <input class="form-control" name="first_name" hidden
                                            value="{{ Request::get('title') }} ">
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
                                        <input name="firstname" type="text" class="form-control"
                                            value="{{ $orderdetails->firstname }}" placeholder="First Name" disabled
                                            required>
                                        <input class="form-control" name="first_name" hidden
                                            value="{{ Request::get('firstname') }} ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">Other Name</label>
                                        <input name="othername" type="text" class="form-control" value="{{ $orderdetails->othername }}" disabled >
                                        <input name="othername" class="form-control" value="{{ Request::get('othername') }}" hidden >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-dark">Last Name</label>
                                        <input name="lastname" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->lastname }}" placeholder=" Last Name" required>
                                        <input class="form-control" name="last_name" hidden
                                            value="{{ Request::get('lastname') }} ">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">Phone Number</label>
                                        <input name="phone" type="text" class="form-control" disabled
                                            value="{{ $orderdetails->phone }}" required>
                                        <input class="form-control" name="phonenumber" hidden
                                            value="{{ Request::get('phone') }} ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark" for="">Residential Address</label>
                                        <textarea class="form-control" rows="2" name="address" disabled
                                            placeholder="Residential Address"
                                            required> {{ $orderdetails->address }}</textarea>
                                        <input class="form-control" name="homeaddress" hidden
                                            value="{{ Request::get('address') }}">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-dark">City/Country</label>
                                        <input class="form-control" name="city" type="text" value="{{ $orderdetails->city }}" disabled required>
                                        <input class="form-control" name="city" value="{{ Request::get('city') }}" hidden>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark">Generate Influencer Code</label> (...want influencer code)
                                        <input class="form-control" name="genagentcode" type="text" placeholder="{{ $orderdetails->genagentcode }}" disabled required>
                                        <input class="form-control" name="genagentcode" value="{{ Request::get('genagentcode') }}" hidden>
                                    </div>
                                </div> 

                                <input class="form-control" name="agent" value="{{ Request::get('agent') }}" hidden>

                                <div class="col-md-4">
                                    <button type="submit" class="btn mt50 float-left" name="processform" id="processform" value="edit">
                                        <i class="fa fa-edit  text-white-50" aria-hidden="true"></i>
                                        Edit
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn mt50 float-left" name="processform" id="processform" value="agentreg">
                                        <i class="fa fa-paper-plane"></i>
                                        Submit
                                    </button>
                                </div>
                                
                                <div class="col-md-4">
                                    <a href="{{ route('become_an_influencer') }}" class="btn mt50 float-left"> <i class="fa text-white-50"
                                            aria-hidden="true"></i>
                                        Cancel </a>
                                </div>
                            </div>
                        </form>
                        @endif
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
