<main class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h4>{{ strtoupper($siteinfos->coy_contact_title) }}</h4>
                        <p class="section-subtitle">{{ strtoupper($siteinfos->coy_contact_subtitle) }}</p>
                    </div>
                    <p>{{ $siteinfos->coy_contact_note }}</p>
                    <!-- CONTACT FORM -->
                    @if(!empty($message_status))
                    <div class="x_content">
                        <?php if (array_key_exists("status",$message_status)||array_key_exists("error",$message_status)){?>                            
                            <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3><?php if(array_key_exists("status",$message_status)){ ?> {{ ucfirst($message_status["status"]) }} <?php } ?>
                                <?php if(array_key_exists("error",$message_status)){ ?> {{ ucfirst($message_status["error"]) }} <?php } ?></h3>
                                @if($message_status["message_id"]>0) <h3>{{ " Thank you, we have received your message!" }}</h3> @endif
                            </div>
                        <?php } ?>
                    </div>
                    @endif
                    <form action = "{{ url('/contact') }}" method = "POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" placeholder="Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="subject" placeholder="Subject" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="phone" placeholder="Phone" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn mt30" name="send_data" value="contact_message">{{ strtoupper($siteinfos->coy_contact_botton_name) }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="Sidebar">
                        <div class="contact-details">
                            <div class="section-title sm">
                                <h4>{{ $siteinfos->coy_contact_right }}</h4>
                                <p class="section-subtitle">{{ $siteinfos->coy_contact_rightsub }}</p>
                            </div>
                            <div class="contact-info">
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
                            <div class="social-media mt60">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="{{ $siteinfos->coy_facebook }}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="{{ $siteinfos->coy_twitter }}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="{{ $siteinfos->coy_youtube }}">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>