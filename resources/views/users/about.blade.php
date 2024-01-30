@extends('users.users-layout.users-layout')
@section('page-content')
    <!--  Banner start -->
	<section class="section-header bg-1">
		<div class="container">
		  <div class="row">
			<div class="col-lg-12">
			  <div class="text-center">
				<h1 class="text-capitalize mb-4 font-lg text-white">About us</h1>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
    <!--  Banner End -->



	<section class="section about-section position-relative border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mb-5 mb-lg-0 col-md-6">
					<img src="{{ asset('users-asset/images/about/about-img.jpg') }}" alt="" class="img-fluid">
	
				</div>
	
				<div class="col-lg-4 mb-5 mb-lg-0 col-md-6">
					<img src="{{ asset('users-asset/images/about/about-2.jpg') }}" alt="" class="img-fluid">
				</div>
	
				<div class="col-lg-5">
					<h2 class="mb-4">About us</h2>
					<p>Welcome to <strong>StreetStuff</strong> where culinary excellence meets warm hospitality. Established in [Year], we take pride in offering a delightful dining experience that tantalizes the taste buds and creates lasting memories</p>
	
					<p class="mb-4">At <strong>StreetStuff</strong> our journey began with a passion for crafting exceptional dishes using only the finest ingredients. Inspired by [mention any specific culinary influences or themes], we embarked on a mission to create a haven for food enthusiasts seeking an unforgettable gastronomic adventure.</p>
	
					<ul class="list-unstyled">
						<li>
							<h4>- Clean Environment</h4>
						</li>
	
						<li>
							<h4>- Experience chefs</h4>
						</li>
	
						<li>
							<h4>- Fresh and creative dishes</h4>
						</li>
					</ul>
	
					<h3 class="booking">Book Now ! <br>+34567890</h3>
				</div>
			</div>
		</div>
	</section>
   
	<section class="section chef">
		<div class="container">
			<div class="row  justify-content-center mb-5">
				<div class="col-lg-8 text-center">
					<span class="text-primary font-extra font-md">Meet The Chefs</span>
					
					<h5 class="mt-3 mb-4">Meet the talented individuals behind the scenes who bring our vision to life. Our chefs, sommeliers, and dedicated staff work tirelessly to exceed your expectations, ensuring that every visit to <strong><b>StreetStuff</b></strong> is a memorable one.</h5>
				</div>
			</div>
	
			<div class="row">
				<div class="col-lg-4 col-md-4" data-aos="fade-up">
					<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
						<img src="{{ asset('users-asset/images/chef/chef_1.jpg') }}" alt="" class="img-fluid">
	
						<h3 class="mb-0 mt-4">Daniel Graham</h3>
						<p class="text-sm font-weight-bold">Master chef</p>
						<p >With a culinary journey spanning over Daniel Graham years, Chef Graham is the driving force behind the innovation in our kitchen. Trained in [Culinary School or Notable Institutions], Chef Graham blends classical techniques with avant-garde creativity to craft dishes that are as visually stunning as they are delicious.</p>
	
						<ul class="list-inline mb-0">
							<li class="li list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
					<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
						<img src="{{ asset('users-asset/images/chef/chef_2.jpg') }}" alt="" class="img-fluid">
	
						<h3 class="mb-0 mt-4">Nick Browning</h3>
						<p class="text-sm font-weight-bold">Master chef</p>
						<p>A seasoned professional with a penchant for culinary alchemy, Chef Browning infuses each dish with a symphony of flavors. Hailing from [Chef 2's Culinary Background], Chef Browning brings a unique perspective to our kitchen, ensuring that every bite is a harmonious blend of tradition and innovation.</p>
	
						<ul class="list-inline  mb-0">
							<li class="li list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
					<div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
						<img src="{{ asset('users-asset/images/chef/chef_3.jpg') }}" alt="" class="img-fluid">
	
						<h3 class="mb-0 mt-4">Willium Jack</h3>
						<p class="text-sm font-weight-bold">Master chef</p>
						<p>Desserts at StreetStuff are a sweet symphony curated by Chef Jack. Trained in the art of patisserie at [Chef 3's Culinary Background], Chef Jack elevates the dining experience with decadent creations that captivate the senses.</p>
	
						<ul class="list-inline  mb-0">
							<li class="li list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
							<li class="li list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- DISHES start -->
	<section class="section service">
		<div class="container">
			<div class="row  justify-content-center mb-5">
				<div class="col-lg-8 text-center">
					<span class="text-primary font-extra font-md">Our services</span>
					<h2 class="mt-3 mb-4">We provide good services with lots of facilities</h2>
				</div>
			</div>
	
			<div class="row">
				<div class="col-lg-4 col-md-6" data-aos="fade-up">
					<div class="service-item mb-5">
						<i class="icofont-cocktail"></i>
						<h3>Fresh Food</h3>
						<p>At StreetStuff, we believe that great meals start with fresh, high-quality ingredients. Our commitment to serving you the finest dishes begins with a dedication to sourcing the freshest produce, meats, and seafood available.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="service-item mb-5">
						<i class="icofont-food-basket"></i>
						<h3>Quality Cuisine</h3>
						<p>Welcome to StreetStuff, where culinary excellence is not just a goal but a commitment. At the heart of our dining experience is a dedication to providing you with the highest quality cuisine that exceeds your expectations.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
					<div class="service-item mb-5">
						<i class="icofont-layered-cake"></i>
						<h3>Bread & Pancake</h3>
						<p>Indulge your taste buds in a symphony of flavors with our exceptional Bread & Pancake selections at StreetStuff. Crafted with passion and precision, our culinary team brings you a delightful array of baked goods and pancakes that promise to elevate your dining experience.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="00">
					<div class="service-item mb-5 mb-lg-0">
						<i class="icofont-fruits"></i>
						<h3>Fresh Vegies Salad</h3>
						<p>At StreetStuff, we believe in the vibrant and refreshing goodness of Fresh Veggie Salads. Our culinary team is dedicated to creating salads that not only tantalize your taste buds but also celebrate the abundance of nature's bounty. Join us on a journey of crisp textures, vibrant colors, and incredible flavors.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="service-item mb-5 mb-lg-0">
						<i class="icofont-dining-table"></i>
						<h3>Event Management</h3>
						<p>Welcome to StreetStuff, where we transform ordinary moments into extraordinary memories. With a passion for precision and an eye for detail, our dedicated team is committed to delivering unparalleled event management services tailored to your vision.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
					<div class="service-item mb-5 mb-lg-0">
						<i class="icofont-restaurant"></i>
						<h3>Reserve Now</h3>
						<p>Ready to experience the extraordinary at StreetStuff ? Secure your spot by making a reservation now. Whether it's a romantic dinner, a family celebration, or a corporate event, we're here to ensure your time with us is exceptional.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- DISHES  End -->

  

    
 <!-- section Our Gallery -->
    
 <section class="section testimonial secondary-bg">
	<div class="container">
		<div class="row  justify-content-center mb-5">
		  <div class="col-lg-8 text-center">
			<span class="text-primary font-extra font-md">customers review</span>
			<h2 class="mt-3 mb-4">Our customers say about us.Lets check out some</h2>
		  </div>
		</div>
		
		<div class="row justify-content-center text-center aos-init aos-animate" data-aos="fade-up">
			<div class="col-md-12 col-lg-8">
				   <!-- Swiper -->
				  <div class="swiper-container testimonial-slider" id="testimonial-slider">
					<div class="swiper-wrapper">
					  <div class="swiper-slide">
						  <blockquote class="testimonial">
							<p>“A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.”</p>
							<div class="author ">
							  <img src="{{ asset('users-asset/images/about/p-1.jpg') }}" alt="Image placeholder" class="mb-3">
								<h4 class="mb-0">Maxim Smith</h4>
								<p>CEO, Founder</p>
							</div>
						  </blockquote>
					  </div>
					  <div class="swiper-slide">
						  <blockquote class="testimonial">
							  <p>“Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.”</p>
							  <div class="author">
								<img src="{{ asset('users-asset/images/about/p-2.jpg') }}" alt="Image placeholder" class="mb-3">
								<h4 class="mb-0">Geert Green</h4>
								<p>CEO, Founder</p>
							  </div>
							</blockquote>
					  </div>
					  <div class="swiper-slide">
						  <blockquote class="testimonial">
							<p>“Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.”</p>
							<div class="author">
							  <img src="{{ asset('users-asset/images/about/p-3.jpg') }}" alt="Image placeholder" class="mb-3">
							  <h4 class="mb-0">Dennis Roman</h4>
							  <p>CEO, Founder</p>
							</div>
						  </blockquote>
					  </div>
					  <div class="swiper-slide">
						  <blockquote class="testimonial">
							<p>“The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.”</p>
							<div class="author">
							  <img src="{{ asset('users-asset/images/about/p-2.jpg') }}" alt="Image placeholder" class="mb-3">
							  <h4 class="mb-0">Geert Green</h4>
							  <p>CEO, Founder</p>
							</div>
						  </blockquote>
					  </div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
		  </div>
	  </div>
  </div>
</section>    


    

    <!--Footer start -->
@endsection
