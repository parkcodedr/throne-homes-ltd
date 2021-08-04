<!-- ========== ABOUT ========== -->
<section class="about mt30" style="padding-bottom: 70px">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="section-title borderless">
          <h4 class="text-uppercase text-orange">{{ $indexabout->section_title }}</h4>
          <p class="section-subtitle">{{ $indexabout->section_subtitle }}</p>
        </div>
      </div>
      <div class="col-lg-8 offset-lg-2">
          <?php 
              $count_title = substr_count($indexabout->section_branding_info, "<title>"); 
              $about = explode("<title>",$indexabout->section_branding_info);
          ?>
        <div class="info-branding">
          <p class="text-dark">
            <?php for($i=1; $i<=$count_title; $i++){ 
                $content = explode("</title>", $about[$i]); 
            ?>
                <b><?php echo $content[0]; ?></b><br><?php echo $content[1]; ?>
            <?php } ?>
          </p>
            <a href="{{ url($indexabout->section_link) }}" class="btn btn-book mt-4">{{ $indexabout->section_label }} &nbsp; &nbsp; <i class="fa fa-caret-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>