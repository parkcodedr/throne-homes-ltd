<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4 class="text-orange">On-Going-Project and Completed-Project</h4>
            <!--<p class="section-subtitle">{{ $indexlands->section_subtitle }}</p>-->
            <!--<a href="{{ url($indexlands->section_lands_link) }}"-->
            <!--    class="view-all">{{ $indexlands->section_lands }}</a>-->
        </div>
        <main class="gallery-page">
            <!-- GALLERY -->
            <div class="container">
                <div class="row">
                    <!-- ITEM -->
                    @foreach ($projects as $project)
                        <div class="gallery-item col-md-3" style="margin:30px;">
                            <figure>
                                <a href="/projects_details/{{ $project->id }}">
                                 <img src="{{ url($project->feature_image) }}" alt="Image"
                                       style="height: 220px; width: 300px">
                                </a>
                                <figcaption  style="margin-left:20px;" >{{ $project->project_title }}</figcaption>
                            </figure>
                        </div>

                    @endforeach


                </div>
            </div>
        </main>

    </div>
</section>
