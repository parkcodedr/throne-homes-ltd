<!-- ========== BREADCRUMB ========== -->
    <div class="page-title gradient-overlay @if(substr_count(Route::current()->getName(), 'land_details')<=0) op6 @else op4 @endif" style="background: url({{ url($siteinfos->breadcrumb_img) }}); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>
                    @if(join(' ',explode('_',join('',explode('/',Route::current()->getName()))))=="confirmagentreg"||join(' ',explode('_',join('',explode('/',Route::current()->getName()))))=="become an agent")
                        {{ "Influencer Registration" }} 
                    @else 
                        {{ join(' ',explode('_',join('',explode('/',Route::current()->getName())))) }} 
                    @endif
                </h1>
                @if(strtolower('room_details')==strtolower(join('',explode('/',Route::current()->getName())))||strtolower('hall_details')==strtolower(join('',explode('/',Route::current()->getName())))||strtolower('offer_details')==strtolower(join('',explode('/',Route::current()->getName()))))
                    <div class="room-details-price">
                        @if($group!='offer')
                            @if($group=='hall')
                                N{{ number_format($roomdetails->room_price,2,".",",") }} {{ $roomdetails->si_unit }} / No Food Inclusive 
                                <br>
                                N{{ number_format($roomdetails->room_with_food_price,2,".",",") }} {{ $roomdetails->si_unit }} / Food Inclusive 
                            @else
                                N{{ number_format($roomdetails->room_price,2,".",",") }} {{ $roomdetails->si_unit }}
                            @endif
                        @endif
                        @if($group=='offer')
                            N{{ number_format($roomdetails->offer_price,2,".",",") }} {{ $roomdetails->si_unit }}
                        @endif
                    </div>
                @endif
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @if(strtolower('room_details')!=strtolower(join('',explode('/',Route::current()->getName()))) && strtolower('hall_details')!=strtolower(join('',explode('/',Route::current()->getName()))))
                        <li>{{ join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName())))))) }}</li>
                    @endif
                    @if(strtolower('room_details')==strtolower(join('',explode('/',Route::current()->getName()))))
                        <li><a href="{{ url('/rooms') }}">Rooms</a></li>
                        <li>{{ join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName())))))) }}</li>
                    @endif
                    @if(strtolower('hall_details')==strtolower(join('',explode('/',Route::current()->getName()))))
                        <li><a href="{{ url('/halls') }}">Halls</a></li>
                        <li>{{ join(' ',explode('_',ucfirst(strtolower(join('',explode('/',Route::current()->getName())))))) }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>