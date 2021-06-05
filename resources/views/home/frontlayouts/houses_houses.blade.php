<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
          <div class="section-title">
            @if(join('',explode('/',Route::current()->getName()))=='rooms')
              <h4 class="text-orange">{{ $indexrooms->section_title }}</h4>
              <p class="section-subtitle">{{ $indexrooms->section_subtitle }}</p>
            @endif
            @if(join('',explode('/',Route::current()->getName()))!='rooms')
              <h4 class="text-orange">{{ join('',explode('/',Route::current()->getName())) }}</h4>
              <p class="section-subtitle">{{ 'Available '.join('',explode('/',Route::current()->getName())) }}</p>
            @endif
          </div>
            <div class="row rooms-grid-view">
                <!-- ITEM -->
                <?php $count = 0; ?>
                @foreach($houses as $house) <?php $count++; ?>
                    <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="{{ url($house->lands_details_link.'/'.$house->id) }}">
                            <img src="{{ asset($house->lands_img) }}" class="img-fluid" alt="{{ $house->lands_name }}">
                          </a>
                          <div class="room-price text-oranage">N{{ join('',explode('.0',join('',explode('.00',number_format($house->lands_price/1000000,1,".",","))))) }}M {{ $house->si_unit }}</div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="{{ url($house->lands_details_link.'/'.$house->id) }}">{{ join(' ',explode('_',$house->lands_name)) }}</a>
                          </h2>
                          <p>{{ $house->lands_size }} {{ $house->lands_size_si_unit }}</p>
                        </div>
                      </div>
                    </div>
                @endforeach
                @if($count>9)
                    <div class="col-md-12 load-more">LOAD MORE ROOMS</div>
                @endif

            </div>
        </div>
    </section>