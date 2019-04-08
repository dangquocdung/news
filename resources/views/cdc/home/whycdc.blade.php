<!-- FEATURES
================================================== -->
<section class="section mt-40 mb-20" id="feature">
	<div class="container">

		<div class="row justy-content-center">
			@foreach($Banners->where('section_id',10) as $Banner)
			<div class="col-lg-3 col-md-6">
				<div class="text-center feature-block">
					<div class="feature-icon-block mb-4">
							<i class="fa {{$Banner->icon}}"></i>
						</div>
					<h4 class="mb-3 ">{{$Banner->title_vi}}</h4>
					{{-- <p>{{$Banner->code}}</p> --}}
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- / .container -->
</section>