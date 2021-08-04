<section class="about">
    <div class="container">
        <div class="section-title">
            <h4> PROJECT DETAILS</h4>
            <!--<p class="section-subtitle">This is what we have for our special guests</p>-->
            <a href="/projects" class="view-all">View all projects</a>
        </div>
        <div class="container">
            <h2>{{ $projects->project_title }}</h2>
            <hr>
            <div class="entry">
                <div class="row image-gallery mb30">
                    <!-- ITEM -->
                    @foreach ($projectImgs as $projectImg)
                       
                        <div class="col-md-3">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{url($projectImg->project_image_link) }}">
                                    <img src="{{ url($projectImg->project_image_link) }}"
                                        style="height: 220px; width: 300px" alt="Image">
                                </a>
                            </figure>
                        </div>
                    @endforeach

                    <!-- ITEM -->

                </div>
                
                @if ( $projects->project_price >0)
                  <h3>Price</h3>
                   <h4 class="mb30">
                   ₦{{ $projects->project_price}}
                    </h4>
                @endif
                <?php 
                    $countbreak = substr_count($projects->project_details, '<br>');
                    $details =  explode('<br>',$projects->project_details); 
                ?>
                <p class="mb30">
                    @for($i=0; $i<=$countbreak; $i++) 
                        {{ $details[$i] }} <br>
                    @endfor

                </p>

                <!--<h3>PROJECT SUMMARY</h3>-->
                <!--<table class="mt20 mb20">-->
                <!--    <thead>-->
                <!--        <tr>-->
                <!--            <td>Name</td>-->
                <!--            <td>Nickname</td>-->
                <!--            <td>Number</td>-->
                <!--        </tr>-->
                <!--    </thead>-->
                <!--    <tbody>-->
                <!--        <tr>-->
                <!--            <td>Jane</td>-->
                <!--            <td>Doe</td>-->
                <!--            <td>13</td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td>Eve</td>-->
                <!--            <td>Doe</td>-->
                <!--            <td>94</td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td>Jane</td>-->
                <!--            <td>Doe</td>-->
                <!--            <td>77</td>-->
                <!--        </tr>-->
                <!--        <tr>-->
                <!--            <td>Ina</td>-->
                <!--            <td>Aldrich</td>-->
                <!--            <td>16</td>-->
                <!--        </tr>-->
                <!--    </tbody>-->
                <!--</table>-->
            </div>
        </div>
    </div>
</section>
