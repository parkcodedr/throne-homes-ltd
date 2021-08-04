<!-- ========== SERVICES ========== -->
  <section class="services">
    <div class="container">
      @foreach($services as $service)
        @if($service->content_id==1)
          <div class="section-title">
            <h4>{{ $service->service_title }}</h4>
            <p class="section-subtitle">{{ $service->service_subtitle }}</p>
          </div>
        @endif
      @endforeach
      <div class="row">
        <div class="col-lg-7 col-12">
          <div data-slider-id="services" class="services-owl owl-carousel">
            @foreach($services as $service)
              <figure class="gradient-overlay">
                <img src="{{ asset($service->service_image) }}" class="img-fluid" alt="Image">
                <figcaption>
                  <h4>{{ $service->service }}</h4>
                </figcaption>
              </figure>
            @endforeach
          </div>
        </div>
        <div class="col-lg-5 col-12">
          <div class="owl-thumbs" data-slider-id="services">
            @foreach($services as $service)
              <div class="owl-thumb-item">
                <span class="media-left">
                  <i class="{{ $service->flaticon }}"></i>
                </span>
                <div class="media-body">
                  <h5>{{ $service->service }}</h5>
                  <p>{{ $service->service_details }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>