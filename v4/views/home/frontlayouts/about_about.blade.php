<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="text-uppercase text-orange">{{ $indexabout->section_title }}</h4>
                    </div>
                </div>
                <?php 
                    $count_title = substr_count($indexabout->section_branding_info, "<title>"); 
                    $about = explode("<title>",$indexabout->section_branding_info);
                ?>
                <div class="col-lg-8">
                    <div class="info-branding">
                        <p class="text-dark">
                            <?php for($i=1; $i<=$count_title; $i++){ 
                                $content = explode("</title>", $about[$i]); 
                            ?>
                                <b><?php echo $content[0]; ?></b><br><?php echo $content[1]; ?>
                            <?php } ?>
                        </p>
                        <p class="text-dark">
                            {{ $indexabout->section_branding_info_ext }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset($indexabout->section_img) }}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT ========== -->
    <section class="about gray">
        <div class="container">
            <div class="row">
                <!-- ITEM -->
                @foreach($abouts as $about)
                <div class="col-md-3 col-6">
                    <div class="countup-box box-shadow-005">
                        <i class="{{ $about->flaticon }}"></i>
                        <span class="number text-dark" data-count="{{ $about->lands_total }}"></span> {{ join('',explode('/',$about->si_unit)) }}@if($about->lands_total>1)s @endif
                        <div class="text text-orange">{{ join(' ',explode('_',$about->lands_name)) }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>