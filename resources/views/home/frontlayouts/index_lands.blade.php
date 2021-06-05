<!-- ========== LANDS ========== -->
      <section class="rooms gray">
        <div class="container">
          <div class="section-title">
            <h4 class="text-orange">{{ $indexlands->section_title }}</h4>
            <p class="section-subtitle">{{ $indexlands->section_subtitle }}</p>
            <a href="{{ url($indexlands->section_lands_link) }}" class="view-all">{{ $indexlands->section_lands }}</a>
          </div>
          <div class="row">
            <!-- ITEM -->
            <?php $count = 0; $lands_name = 'beginning'; ?>
            @foreach($lands as $land) <?php $count++; ?>
              @if($count<=7)
                 @if($lands_name=='beginning')
                    <?php $lands_name = $land->lands_name; ?>
                      <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="{{ url($land->lands_details_link.'/'.$land->id) }}">
                            <img src="{{ asset($land->lands_img) }}" class="img-fluid" alt="{{ $land->lands_name }}">
                          </a>
                          <div class="room-price text-oranage">N{{ join('',explode('.0',join('',explode('.00',number_format($land->lands_price/1000000,1,".",","))))) }}M {{ $land->si_unit }}</div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="{{ url($land->lands_details_link.'/'.$land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))) }}</a>
                          </h2>
                          <p>{{ $land->lands_size }} {{ $land->lands_size_si_unit }}</p>
                        </div>
                      </div>
                    </div>
                  @endif
                  @if(join('',explode('600',join('',explode('500',join('',explode('450',$lands_name))))))!=join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))))
                    <?php $lands_name = $land->lands_name; ?>
                      <div class="col-md-4">
                      <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="{{ url($land->lands_details_link.'/'.$land->id) }}">
                            <img src="{{ asset($land->lands_img) }}" class="img-fluid" alt="{{ $land->lands_name }}">
                          </a>
                          <div class="room-price text-oranage">N{{ join('',explode('.0',join('',explode('.00',number_format($land->lands_price/1000000,1,".",","))))) }}M {{ $land->si_unit }}</div>
                        </figure>
                        <div class="room-info">
                          <h2 class="room-title">
                            <a href="{{ url($land->lands_details_link.'/'.$land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))) }}</a>
                          </h2>
                          <p>{{ $land->lands_size }} {{ $land->lands_size_si_unit }}</p>
                        </div>
                      </div>
                    </div>
                  @endif
              @endif
            @endforeach
          </div>
        </div>
      </section>