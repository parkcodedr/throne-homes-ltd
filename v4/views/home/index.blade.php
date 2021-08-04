@extends ('home.main')

@push('css')


@endpush

@section('content')
  
    <!-- start discount modal -->
    @include('home.frontlayouts.discount_modal')
    <!-- end discount modal -->

    <!-- start navigation -->
    @include('home.frontlayouts.navigation')
    <!-- end navigation -->
    @if($source=='mobile')
<div class="wrapper">
    <main>
        @endif
        <!-- start slider -->
        @include('home.frontlayouts.slider')
        <!-- end slider -->

        <!-- start index_about -->
        @include('home.frontlayouts.index_about')
        <!-- end index_about -->

        <!-- start index_rooms -->
        @include('home.frontlayouts.index_lands')
        <!-- end index_rooms -->

        <!-- start index_services -->
        @include('home.frontlayouts.index_services')
        <!-- end index_services -->
    @if($source=='mobile')
    </main>
        @endif


    <!-- start footer -->
    @include('home.frontlayouts.footer')
    <!-- end footer -->

@endsection
@push('scripts')


@endpush
