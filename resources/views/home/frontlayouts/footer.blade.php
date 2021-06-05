<footer>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <!-- WIDGET -->
                <div class="col-md-6">
                    <div class="footer-widget">
                        <h3>{{ strtoupper($indexabout->section_title) }}</h3>
                        <div class="inner">
                            <p>{{ substr($indexabout->section_branding_info, 0, 654) }} <a
                                    href="{{ url($indexabout->section_link) }}"><strong>{{ strtoupper('...' . $indexabout->section_label) }}</strong></a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- WIDGET -->
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h3>{{ $indexlands->section_title }}</h3>
                        <div class="inner">
                            <ul class="useful-links">
                                <?php $lands_name = 'beginning'; $done = 0; ?>
                                @foreach ($foot_lands as $land)
                                    @if($lands_name=='beginning')
                                        @if ($land->id < 9)  
                                        <?php $lands_name = $land->lands_name; $lastid = $land->id; ?>
                                            <li><a
                                                    href="{{ url($land->lands_details_link . '/' . $land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',strtoupper($land->lands_name))))))) }} {{ $land->page_name }}</a>
                                            </li>
                                        @endif
                                    @endif
                                    @if(join('',explode('600',join('',explode('500',join('',explode('450',$lands_name))))))!=join('',explode('600',join('',explode('500',join('',explode('450',$land->lands_name)))))))
                                        @if ($land->id < 9)
                                        <?php $lands_name = $land->lands_name; $lastid = $land->id; ?>
                                            <li><a
                                                    href="{{ url($land->lands_details_link . '/' . $land->id) }}">{{ join('',explode('600',join('',explode('500',join('',explode('450',strtoupper($land->lands_name))))))) }} {{ $land->page_name }}</a>
                                            </li>
                                        @endif
                                    @endif
                                    @if ($lastid == 8 && $done==0)
                                        <?php $done = 1; ?>
                                        <li><a
                                                href="{{ url($indexlands->section_lands_link) }}">{{ '...more lands' }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3>{{ $siteinfos->contact_label }}</h3>
                        <div class="inner">
                            <ul class="contact-details">
                                <?php $countaddress = substr_count($siteinfos->coy_address, ':::'); ?>
                                @if ($countaddress == 0)
                                    <li>
                                        <a href="mailto:{{ $siteinfos->app_email }}">
                                            <i class="fa fa-map-marker"></i>{{ $siteinfos->coy_address }}
                                        </a>
                                    </li>
                                @endif
                                @if ($countaddress > 0)
                                    <?php $countaddressarray = explode(':::', $siteinfos->coy_address);
                                    ?>
                                    @for ($i = 0; $i <= $countaddress; $i++)
                                        <?php
                                        $countlocationsplit = substr_count($countaddressarray[$i], '>>>');
                                        if ($countlocationsplit > 0) {
                                        $locationsplit = explode('>>>', $countaddressarray[$i]);
                                        }
                                        ?>
                                        @if ($countlocationsplit == 0)
                                            <li>
                                                <a href="mailto:{{ $siteinfos->app_email }}">
                                                    <i class="fa fa-map-marker"></i>{{ $countaddressarray[$i] }}
                                                </a>
                                            </li>
                                        @endif
                                        @if ($countlocationsplit > 0)
                                            <li>
                                                <a href="mailto:{{ $siteinfos->app_email }}">
                                                    <b>{{ $locationsplit[0] }}:</b><br>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-map-marker">
                                                               @if('ABUJA OFFICE'==strtoupper($locationsplit[0])) <br><br><br><br> @endif
                                                               @if('LAGOS OFFICE'==strtoupper($locationsplit[0])) <br><br> @endif
                                                               @if('CALIFONIA OFFICE'==strtoupper($locationsplit[0])) <br><br> @endif</i>
                                                            </td>
                                                            <td>
                                                               {{ $locationsplit[1] }} 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                                            <td>{{ $locationsplit[2] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-envelope"></i>
                                                            <td>{{ $siteinfos->app_email }}</td>
                                                        </tr>
                                                    </table>                                                    
                                                </a>
                                            </li>
                                            <li>
                                            </li>
                                        @endif
                                    @endfor
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUBFOOTER -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyrights">&copy; <?php echo date('Y'); ?>
                        {{ join(' ', explode('_', $siteinfos->app_name)) }}</div>
                </div>
                <div class="col-md-6">
                    <div class="social-media">
                        <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                            href="{{ $siteinfos->coy_facebook }}" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" data-original-title="Twitter" data-toggle="tooltip"
                            href="{{ $siteinfos->coy_twitter }}" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="youtube" data-original-title="Youtube" data-toggle="tooltip"
                            href="{{ $siteinfos->coy_youtube }}" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- div that ends the WRAPPER that starts at discount_modal
<!-- ========== WRAPPER ========== -->

<!-- ========== CONTACT NOTIFICATION ========== -->
<div id="contact-notification" class="notification fixed"></div>
<!-- ========== BACK TO TOP ========== -->
<div class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
