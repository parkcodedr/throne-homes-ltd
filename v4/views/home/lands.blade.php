@extends ('home.main')

@section('title', ' :: Home')
@push('css')


@endpush

@section('content')
<!-- start navigation -->
<?php $checklands = 0; $checklands = substr_count(Route::current()->getName(), 'lands'); ?>
	@if($checklands>0)
  		@include('home.frontlayouts.navigation')
  	@endif
<!-- end navigation -->
<div class="wrapper">
	<!-- start breadcrumb -->
	  @include('home.frontlayouts.breadcrumb')
	<!-- end breadcrumb -->
	<main>
		<!-- start index_rooms -->
		  @include('home.frontlayouts.lands_lands')
		<!-- end index_rooms -->
	</main>


<!-- start footer -->
  @include('home.frontlayouts.footer')
<!-- end footer -->

@endsection
@push('scripts')


@endpush