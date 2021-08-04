<!-- ========== ABOUT ========== -->
    <section class="about">
        <div class="container">
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-6 col-offset-md-3 " >
                    <h5 style="line-height: 30px">
                        {{ $siteinfos->pandemic_intro }}
                    </h5>

                </div>
            </div>
        </div>
    </section>

    <section class="about" style="background: #fafafa">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-offset-md-1">
                    <h5 class="text-center">{{ $siteinfos->pandemic_measure_caption }}</h5>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tbody>
                                <?php $count = 0; ?>
                                @foreach($pandemics as $pandemic)
                                <?php $count++; ?>
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $pandemic->measures }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>