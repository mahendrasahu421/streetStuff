@extends('users.users-layout.users-layout')
@section('page-content')
<!-- Header Close -->
<section class="section-header bg-1">
	<div class="container">
	  <div class="row">
		<div class="col-lg-12">
		  <div class="text-center">
			<h1 class="text-capitalize mb-4 font-lg text-white">Our Gallery</h1>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  <section class="section video-gallery">
	<div class="container">
		<div class="row  justify-content-center mb-5">
			<div class="col-lg-8 text-center">
				<span class="text-primary font-extra font-md text-capitalize">our gallery</span>
				<h2 class="mt-3 mb-4">Awesome place good decoration to spend quality time</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="video-item mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="00">
					<img src="{{ asset('users-asset/images/gallery/img-1.jpg') }}" alt="" class="img-fluid">
					<a data-video-id="jrkvirglgaQ" class="videoplay" ><i class="ti-control-play"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="video-item mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
					<img src="{{ asset('users-asset/images/gallery/img-2.jpg') }}" alt="" class="img-fluid">
					<a data-video-id="Srt3lTmRxzQ" class="videoplay"><i class="ti-control-play"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
				<div class="video-item">
					<img src="{{ asset('users-asset/images/gallery/img-3.jpg') }}" alt="" class="img-fluid">
					<a data-video-id="1wKDqma9Hl0" class="videoplay" ><i class="ti-control-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
  
  
  
<section class="section img-gallery border-top">
	<div class="container">
		<div class="row mb-5 align-items-center">
			<div class="col-lg-4 text-center">
				<h2 class="mt-3 mb-4">Lets check out some more</h2>
			</div>
			<div class="col-lg-8">
				<p>Step into a visual feast that tells the story of [Your Restaurant's/Company's Name]. Our gallery is a curated collection of moments, capturing the essence of our culinary creations, events, and the unique ambiance that defines us.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-3') }}.jpg">
					<img src="{{ asset('users-asset/images/gallery/img-3') }}.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-4.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-4.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-5.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-5.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>

			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-6.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-6.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-7.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-7.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-8.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-8.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-9.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-9.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-4" data-aos="fade-up" data-aos-delay="300">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-12.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-12.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-4" data-aos="fade-up" data-aos-delay="600">
				<a class="gallery-img popup-gallery" href="{{ asset('users-asset/images/gallery/img-10.jpg') }}">
					<img src="{{ asset('users-asset/images/gallery/img-10.jpg') }}" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</section>
  
  @endsection