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
            <center>
            <div class="container">
                <form name="postdata" id="postdata" action="https://thronehomesltd.daomnitraders.com/api/pay" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="booking_id" id="booking_id" value="{{ $orderid }}">
                    <input type="hidden" name="lastname" id="lastname" value="{{ $orderdetails->last_name }}">
                    <input type="hidden" name="firstname" id="firstname" value="{{ $orderdetails->first_name }}">
                    <input type="hidden" name="phone" id="phone" value="{{ $orderdetails->phonenumber }}">
                    <input type="hidden" name="email" id="email" value="{{ $orderdetails->emailaddress }}">
                    <input type="hidden" name="amount" id="amount" value="{{ $orderdetails->payamount }}">

                    @if ($orderdetails->numbermonthpay > 0)
                        <input type="hidden" name="description" id="description"
                            value=" Initial payment for {{ $orderdetails->selectedplot }} with {{ $orderdetails->numbermonthpay }} month payment plan ">
                    @else
                        <input type="hidden" name="description" id="description"
                            value=" Payment for {{ $orderdetails->selectedplot }}  purchase">

                    @endif
                    <input type="hidden" name="description" id="description" value="{{ $orderdetails->selectedplot }}">

                    <input type="hidden" name="return_url" id="return_url"
                        value="{{ url('') . '/receipt?' . 'identifier=' . md5(md5(0)) }}">
                    <input type="hidden" name="error_url" id="error_url"
                        value="{{ url('') . '/error_url?' . 'identifier=' . md5(md5(0)) }}">
                    <input type="hidden" name="notify_url" id="notify_url"
                        value="{{ url('') . '/notify_url?' . 'identifier=' . md5(md5(0)) }}">
                    <input type="hidden" name="subdomain" id="subdomain" value="https://daomnipay.thronehomesltd.com">
                    <button type="submit" class="btn mt50 float-left" name="booking_type" value="pay_now">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        PROCEED TO PAYMENT
                    </button>
                </form>
                <br><br><br>
            </div>
            </center>
        </main>
         <!-- start footer -->
        @include('home.frontlayouts.footer')
        <!-- end footer -->

        <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    @endsection
    @push('scripts')
    @endpush
