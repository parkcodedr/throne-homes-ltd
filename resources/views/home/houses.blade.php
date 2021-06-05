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

        <!-- start index_rooms -->
          @include('home.frontlayouts.houses_houses')
        <!-- end index_rooms -->
    </main>

<!-- start footer -->
  @include('home.frontlayouts.footer')
<!-- end footer -->

@endsection
@push('scripts')


@endpush