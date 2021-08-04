    <section class="about">
        <div class="container">
            <div class="section-title">
                <h4>{{ $lands_location }} LAND DETAILS & APPROVED PLANS</h4>
                <!--<p class="section-subtitle">This is what we have for our special guests</p>-->
                <a href="#" class="view-all">View all lands</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                        <div class="card">
                            <img class="gradient-overlay-hover card-img-top img-fluid" src="{{ url($landhousefrontview) }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="ribbon">
                                    <span> @if($countlandorders<=0) SOLD OUT (0) @else SELLING ({{ $countlandorders }}) @endif </span></div>
                                <div class="offer-price uppercase">&#x20A6;{{ join('',explode('.0',join('',explode('.00',number_format($daomnilandcontent->lands_price/1000000,1,".",","))))) }}M ({{ $daomnilandcontent->lands_size }} {{ $daomnilandcontent->lands_size_si_unit }})</div>
                                <h5><a href="#" class="text-orange">Approved {{ $bestfor->rates }} {{ ucfirst($bestfor->description) }} (Front View)</a></h5>
                            </div>
                            <div class="accordion" id="accordionBuilding1">
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#buildingspec"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Land Information
                                </button>
                                <div id="buildingspec" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <ul class="list-group list-group-flush">
                                        @foreach($landinformations as $landfacilityinfo)
                                            <li  class="list-group-item"><i class="fa fa-check-circle text-orange mr-2"></i>
                                                {{ $landfacilityinfo->facility_name }} @if(strtolower($landfacilityinfo->rates)!='yes') {{ $landfacilityinfo->rates }} @endif {{ $landfacilityinfo->description }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#floorplan300"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    View Floor Plan
                                </button>
                                <div id="floorplan300" class="collapse p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <img src="{{ url($floorplanimage) }}" class="img-fluid" alt="" />
                                </div>
                                <!--<button
                                    class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#groundfloor300"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    View Ground Floor Plan
                                </button>
                                <div id="groundfloor300" class="collapse p-4" aria-labelledby="headingOne" data-parent="#accordionBuilding1">
                                    <img src="{{ url('frontend/images/properties/propertiesdetails/groundfloor.png') }}" class="img-fluid" alt="" />
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-6">
                    <div class="offer-item animated fadeInUp wow" data-wow-offset="30" data-wow-delay=".2s">
                        <div class="card">
                            <img class="gradient-overlay-hover card-img-top img-fluid" src="{{ url($landhousebackview) }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="ribbon">
                                    <span>@if($countlandorders<=0) SOLD OUT (0) @else SELLING ({{ $countlandorders }}) @endif</span></div>
                                <div class="offer-price uppercase">&#x20A6;{{ join('',explode('.0',join('',explode('.00',number_format($daomnilandcontent->lands_price/1000000,1,".",","))))) }}M ({{ $daomnilandcontent->lands_size }} {{ $daomnilandcontent->lands_size_si_unit }})</div>
                                <h5><a href="#" class="text-orange"> Approved {{ $bestfor->rates }} {{ ucfirst($bestfor->description) }} (Back View)</a></h5>
                            </div>
                            <div class="accordion" id="accordionBuilding2">
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#buildingspec1"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    Building Specification
                                </button>
                                <div id="buildingspec1" class="collapse show p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <ul class="list-group list-group-flush">
                                        @foreach($buildingspecification as $buildingspec)
                                            <li  class="list-group-item"><i class="fa fa-check-circle text-orange mr-2"></i>
                                                 {{ $buildingspec->facility_name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--
                                <button class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#floorplan301"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    View Floor Plan
                                </button>
                                <div id="floorplan301" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <img src="{{ url('frontend/images/properties/propertiesdetails/floorplan.png') }}" class="img-fluid" alt="" />
                                </div>
                              -->
                                <button
                                        class="btn bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left position-relative"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#groundfloor301"
                                        aria-expanded="true"
                                        aria-controls="collapseOne">
                                    View Ground Floor Plan
                                </button>
                                <div id="groundfloor301" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionBuilding2">
                                    <img src="{{ url($groundfloorplanimage) }}" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($count_lands_in_a_location>1)
      @include('home.frontlayouts.lands_other_lands')
    @endif