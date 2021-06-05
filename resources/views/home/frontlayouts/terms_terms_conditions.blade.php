<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="text-uppercase text-orange">{{ $siteinfos->terms_conditions_title }}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="info-branding">
                    <p class="text-dark">
                    	<table class="table table-striped mt-3">
		                    <thead>
		                        <tbody>
		                            <?php $count = 0; ?>
		                            @foreach($terms_conditions as $term_condition)
		                            <?php $count++; ?>
		                            <tr>
		                                <td>{{ $count }}</td>
		                                <td>{{ $term_condition->terms_conditions }}</td>
		                            </tr>
		                            @if($count==0)
			                            <tr>
			                                <td>{{ $count }}</td>
			                                <td><center><h3><i>Please provide your terms and conditions, or go to settings under your admin and upload terms and conditions. <br><br>Thank you.</i></h3></center></td>
			                            </tr>
			                        @endif
		                            @endforeach
		                        </tbody>
		                    </thead>
		                </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>