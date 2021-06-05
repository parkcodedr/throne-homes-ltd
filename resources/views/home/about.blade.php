@extends ('home.main')

@section('title', ' :: Home')
@push('css')


@endpush

@section('content')

<!-- start navigation -->
  @include('home.frontlayouts.navigation')
<!-- end navigation -->

<div class="wrapper">
	<!-- start breadcrumb -->
	  @include('home.frontlayouts.breadcrumb')
	<!-- end breadcrumb -->
	<main>

        <!-- start about_about -->
          @include('home.frontlayouts.about_about')
        <!-- end about_about -->
    </main>

<!-- start footer -->
  @include('home.frontlayouts.footer')
<!-- end footer -->

@endsection
@push('scripts')


@endpush