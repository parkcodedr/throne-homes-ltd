<!-- ========== ROOM DETAILS ========== -->
  <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            @foreach($roomdetailimages as $roomdetailimage)
                              <div class="item">
                                  <figure class="gradient-overlay-hover image-icon">
                                      <a href="{{ url($roomdetailimage->room_images) }}">
                                          <img class="img-fluid" src="{{ url($roomdetailimage->room_images) }}" alt="Image">
                                      </a>
                                  </figure>
                              </div>
                            @endforeach
                        </div>
                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            <!-- ITEM -->
                            @foreach($roomdetailimages as $roomdetailimage)
                              <div class="item"><img class="img-fluid" src="{{ url($roomdetailimage->room_images) }}" alt="Image"></div>
                            @endforeach
                        </div>
                    </div>
                    <p>
                      @if($group!='offer')
                        {{ $roomdetails->room_details }}
                      @endif
                      @if($group=='offer')
                        <b>{{ $roomdetails->offer_name }}</b> - {{ $roomdetails->offer_details }} N{{ number_format($roomdetails->offer_price,2,".",",") }} {{ $roomdetails->si_unit }}
                      @endif
                    </p>
                    <div class="section-title sm">
                      <?php $count = 0; $counta = 0; $countb = 0; $countc = 0; $countba = 0; $countca = 0; $countd = 0; $countda = 0; $countdb = 0; ?>
                      @if($group!='offer')
                        <h4>{{$roomdetails->section_title }}</h4>
                        <p>
                          {{$roomdetails->section_subtitle }}                   
                        </p>
                      @endif
                      @if($group=='offer')
                        <h4>{{$roomdetails->offer_service_title }}</h4>
                        <p>
                          {{$roomdetails->offer_service_subtitle }}                   
                        </p>
                      @endif
                    </div>
                    <div class="room-services-list">
                        <div class="row">
                            @foreach ($roomservices as $roomservice) <?php $count++; ?>
                                <div class="col-sm-4">
                                    <ul class="list-unstyled">
                                          <li class="@if($roomservice->available==0) no @endif"><i class="fa @if($roomservice->available==1) fa-check @endif @if($roomservice->available==0) fa-times @endif"></i>{{ join(' ',explode('_',$roomservice->room_services)) }}</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <p>
                        @if($roomdetails->section_info!='') 
                          <?php $counta++; ?>
                        @endif
                        @if($counta>0 && $countb==0)
                          <?php $countb = 1; ?>
                          {{ $roomdetails->section_info }}
                        @endif 
                      @if($counta==0)
                        <br>
                      @endif                     
                    </p>
                    <!-- ROOM REVIEWS -->

                    @if($group=='hall')
                    <!-- ADDITINAL FACILITIES AND RATES -->
                    <div class="section-title sm">
                      <h4>Additional Facilities and Rates</h4>
                    </div>
                    <div class="room-services-list">
                        <div class="row">
                          @foreach($additionalfacilitiesrates as $additionalfacilitiesrate) <?php $countdb++; ?>
                              <div class="col-sm-12">
                                  <ul class="list-unstyled">
                                        <li class="@if($additionalfacilitiesrate->available==0) no @endif"><i class="fa @if($additionalfacilitiesrate->available==1) fa-check @endif @if($additionalfacilitiesrate->available==0) fa-times @endif"></i>{{ join(' ',explode('_',$additionalfacilitiesrate->facility_name)) }} {{ ' ' }}<small><small>@if($additionalfacilitiesrate->available==1)inclusive @else not inclusive @endif ...@Rate = N{{ number_format($additionalfacilitiesrate->rates,2,".",",")  }} {{ $additionalfacilitiesrate->description }}</small></small></li>
                                  </ul>
                              </div>
                          @endforeach
                        </div>
                      </div>
                    @endif
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <!-- WIDGET -->
                        <aside class="widget noborder">
                            <div class="room-reviews" style="margin-top: 0">
                                <div class="rating-details">
                                    <div class="review-summary">
                                        <div class="average">@if($countavailablerooms>=0) {{ $countavailablerooms }} @else 0 @endif</div>
                                        <div class="rating">
                                          @if($group!='offer')
                                            <?php $othercount = 0; for ($i=1; $i <= (int)$roomdetails->room_star_voted; $i++) { $othercount++ ?>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <?php } ?>
                                          @endif
                                          @if($group=='offer')
                                            <?php $othercount = 0; for ($i=1; $i <= (int)$roomdetails->offer_star_voted; $i++) { $othercount++ ?>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <?php } ?>
                                          @endif
                                          @if($group!='offer')
                                            <?php if((int)$roomdetails->room_star_voted - $othercount>0) { 
                                                  for ($j=1; $j <= (int)$roomdetails->room_star_voted - $othercount; $j++) { 
                                            ?>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                            <?php }} ?> 
                                          @endif
                                          @if($group=='offer')
                                            <?php if((int)$roomdetails->offer_star_voted - $othercount>0) { 
                                                  for ($j=1; $j <= (int)$roomdetails->offer_star_voted - $othercount; $j++) { 
                                            ?>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                            <?php }} ?> 
                                          @endif                                           
                                        </div>
                                        <small>
                                          @if($group!='offer') {{ $roomdetails->room_detail_available_info }} @endif
                                          @if($group=='offer') {{ $roomdetails->offer_detail_available_info }} @endif
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title text-dark">
                                  @if($group!='offer') {{ $roomdetails->room_detail_booking }} @endif
                                  @if($group=='offer') {{ $roomdetails->offer_detail_booking }} @endif
                                </h3>
                                <div class="inner">
                                    <form action="{{ url('/bookings') }}" method="POST">
                                        @csrf
                                        <!-- EMAIL -->
                                        <div class="form-group">
                                            <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                                        </div>
                                        <!-- ROOM TYPE -->
                                        <div class="form-group">
                                          <select name="roomtype" class="form-control" title="Select Room Type" data-header="Select Room Type" required>
                                              @foreach($rooms as $room)
                                                @if($group!='offer')
                                                  <option @if($room->id==$roomtype_id) selected='selected' @endif value="{{ $room->id }}" data-subtext="<span class='badge badge-info'>&#x20A6;{{ number_format($room->room_price,2,".",",") }} / night</span>">{{ $room->room_name }}</option>
                                                @endif
                                                @if($group=='offer')
                                                  <option @if($room->id==$roomtype_id) selected='selected' @endif value="{{ $room->id }}" data-subtext="<span class='badge badge-info'>&#x20A6;{{ number_format($room->offer_price,2,".",",") }} / night</span>">{{ $room->offer_name }}</option>
                                                @endif
                                              @endforeach
                                          </select>
                                        </div>
                                        <!-- DATE -->
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control" name="date" placeholder="Select Arrival & Departure Date" readonly="readonly">
                                            </div>
                                        </div>
                                        <!-- GUESTS -->
                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker">Guests
                                                    <span class="gueststotal"></span></div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adults
                                                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="adults" class="booking-guests" value="{{ $roomdetails->total_adult }}">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Cildren
                                                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="children" class="booking-guests" value="{{ $roomdetails->total_children }}">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if($group=='hall')
                                          <div class="item form-group">
                                              <label>Hall with food</label>
                                              <div class="col-md-6 col-sm-6 ">
                                                  <div id="gender" class="btn-group" data-toggle="buttons">
                                                      <label class="btn btn-secondary" data-toggle-class="btn-info" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="food" value="no" class="join-btn" required> &nbsp; No &nbsp;
                                                      </label>
                                                      <label class="btn btn-primary" data-toggle-class="btn-info" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="food" value="yes" class="join-btn" required> Yes
                                                      </label>
                                                  </div>
                                              </div>
                                          </div>
                                        @endif
                                        <!-- BOOKING BUTTON -->
                                        <input name="discountpercent" type="hidden" value="{{ $discountpercent }}">
                                        <input name="group" type="hidden" value="{{ $group }}">
                                        <input name="name" type="hidden" value="">
                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20" name="booking_type" value="processing">BOOK NOW</button>
                                    </form>
                                </div>
                            </div>
                        </aside>

                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4> 
                              @if($group!='offer')
                                @if($roomdetails->room_detail_others!='') 
                                  <?php $countda++; ?>
                                @endif
                                @if($countda>0 && $countd==0)
                                  <?php $countd = 1; ?>
                                  {{ $roomdetails->room_detail_others }}
                                @endif
                              @endif
                              @if($group=='offer')
                                @if($roomdetails->offer_detail_others!='') 
                                  <?php $countda++; ?>
                                @endif
                                @if($countda>0 && $countd==0)
                                  <?php $countd = 1; ?>
                                  {{ $roomdetails->offer_detail_others }}
                                @endif
                              @endif 
                            </h4>
                        </div>
                        <div class="row">
                            <!-- ITEM -->
                            <?php $count = 0; ?>
                            @foreach($rooms as $room) <?php if($room->id!=$roomtype_id){ $count++; } ?>
                              @if($count<=3 && $room->id!=$roomtype_id)
                                @if($group!='offer')
                                  <div class="col-lg-4 col-md-6">
                                    <div class="room-grid-item">
                                      <figure class="gradient-overlay-hover link-icon">
                                        <a href="{{ url($room->room_details_link.'/'.$room->id) }}">
                                          <img src="{{ asset($room->room_img) }}" class="img-fluid" alt="{{ $room->room_name }}">
                                        </a>
                                        <div class="room-price text-oranage">N{{ number_format($room->room_price,2,".",",") }} / night</div>
                                      </figure>
                                      <div class="room-info">
                                        <h2 class="room-title">
                                          <a href="{{ url($room->room_details_link.'/'.$room->id) }}">{{ $room->room_name }}</a>
                                        </h2>
                                        <p>{{ $room->room_details }}</p>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                                @if($group=='offer')
                                  <div class="col-lg-4 col-md-6">
                                    <div class="room-grid-item">
                                      <figure class="gradient-overlay-hover link-icon">
                                        <a href="{{ url($room->offer_details_link.'/'.$room->id) }}">
                                          <img src="{{ asset($room->offer_img) }}" class="img-fluid" alt="{{ $room->offer_name }}">
                                        </a>
                                        <div class="room-price text-oranage">N{{ number_format($room->offer_price,2,".",",") }} {{ $roomdetails->si_unit }}</div>
                                      </figure>
                                      <div class="room-info">
                                        <h2 class="room-title">
                                          <a href="{{ url($room->offer_details_link.'/'.$room->id) }}">{{ $room->offer_name }}</a>
                                        </h2>
                                        <p>{{ $room->offer_details }} N{{ number_format($roomdetails->offer_price,2,".",",") }} {{ $roomdetails->si_unit }}</p>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                              @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
