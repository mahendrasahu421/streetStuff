@extends('users.users-layout.users-layout')
@section('page-content')
<!-- Header Close -->
<section class="section-header bg-1">
	<div class="container">
	  <div class="row">
		<div class="col-lg-12">
		  <div class="text-center">
			<h1 class="text-capitalize mb-4 font-lg text-white">Blog single</h1>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  
  <section class="section blog-post">
	  <div class="container">
		  <div class="row">
			  <div class="col-lg-8">
				  <article class="single-post">
	  <img src="{{ asset('users-asset/images/blog/1.jpg') }}" alt="" class="img-fluid w-100">
  
	  <div class="single-post-content mt-4">
		  <div class="blog-meta position-relative">
			  <ul class="list-inline">
				  <li class="list-inline-item"><a class="post-cat" href="#">cooking</a></li>
				  <li class="list-inline-item"><span class="date">Oct 16, 2019</span></li>
				  <li class="list-inline-item"><span class="post-comment">| 06 Comment (s)</span></li>
			  </ul>
		  </div>
		  
		  <h2>If you are starting off with a new domain name with no traffic so to speak of you.</h2>
  
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro odio aperiam nostrum sequi mollitia, sapiente eos aspernatur obcaecati molestias cupiditate autem, tempora dicta esse. Reprehenderit unde, maiores at expedita repellendus.</p>
  
		  <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happinesso one rejects dislikes actual teachings of the great explorer of the truth the master-builder of human </p>
  
		  <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
  
		  <div class="share mt-4 border-top border-bottom py-4">
			  <ul class="list-inline mb-0">
				  <li class="list-inline-item">Share Now :</li>
				  <li class="list-inline-item mr-3"><a href="#"><i class="ti-facebook mr-2"></i> Facebook</a></li>
				  <li class="list-inline-item mr-3"><a href="#"><i class="ti-twitter mr-2"></i> Twitter</a></li>
				  <li class="list-inline-item mr-3"><a href="#"><i class="ti-linkedin mr-2"></i> Linkedin</a></li>
				  <li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i> Pinterest</a></li>
			  </ul>
		  </div>	
	  </div>
  </article>
  
  <div class="comments mt-4">
	  <h3 class="mb-5 font-md ">3 Comments</h3>
  
	  <div class="latest-comments">
		  <ul class="list-unstyled">
			  <li>
				  <div class="media comments-box mb-45">
					  <img src="{{ asset('users-asset/images/blog/author1.jpg') }}" alt="" class="img-fluid mr-4">
					  <div class="comments-text media-body">
						  <h4>John Doe</h4>
						  <p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget consequat </p>
						  <a href="#" class="text-sm text-muted"> <i class="ti-new-window mr-2"></i>Reply</a>
  
						  <div class="media my-5 ">
							  <img src="{{ asset('users-asset/images/blog/author2.jpg') }}" alt="" class="img-fluid mr-4">
							  <div class="media-body comments-text">
								  <div class="avatar-name">
									  <h4>Jennifer S. Bowen</h4>
								  </div>
								  <p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget </p>
								  <a href="#" class="text-sm text-muted"> <i class="ti-new-window mr-2"></i>Reply</a>
							  </div>
						  </div>
					  </div>
				  </div>
			  </li>
  
			  <li>
				  <div class="media">
					  <img src="{{ asset('users-asset/images/blog/author1.jpg') }}" alt="" class="img-fluid mr-4">
					  <div class="media-body comments-text">
						  <h4>Omar Elnagar</h4>
						  <p>Maecenas fermentum consequat mi Donec fermentum Pelle maleuada nulla amiuis sapien sem aliquet nec commodo eget consequat </p>
						  <a href="#" class="text-sm text-muted"> <i class="ti-new-window mr-2"></i>Reply</a>
					  </div>
				  </div>
			  </li>
		  </ul>
	  </div>
  </div>
  
  <div class="comment-form secondary-bg p-5 mt-5">
	  <h4 class="mb-4">Leave a comment</h4>
	  <form action="#" class="comment-form">
		  <div class="form-row">
			  <div class="form-group col-lg-6">
				  <input type="text" class="form-control" placeholder="Your name">
			  </div>
			  <div class="form-group col-lg-6">
				  <input type="text" class="form-control" placeholder="Your Email">
			  </div>
		  </div>
		  <div class="form-group">
			  <textarea name="msg" id="msg" cols="30" rows="8" class="form-control" placeholder="Your Comment"></textarea>
		  </div>
  
		  <a href="#" class="btn btn-main">Post Comment</a>
		  
	  </form>
  </div>
			  </div>
  
			  <div class="col-lg-4">
				  <div class="sidebar-widget mt-5 mt-lg-0">
	  <div class="widget mb-5">
		  <div id="search" class="widget widget_search">
			  <form role="search" class="search-form-widget">
				  <input type="search" class="search-field form-control" placeholder="Search..." value="" name="s" title="Search..">
				  <button type="submit" class="search-submit">
					  <i class="ti-search"></i>
				  </button>
			  </form>
		  </div>
	  </div>
  
	  <div class="widget mb-5 follow">
		  <h4 class="mb-3 widget-title font-extra font-md">Follow us</h4>
		  <hr>
		  <ul class="list-inline">
			  <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
			  <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
			  <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
			  <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
			  <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
			  <li class="list-inline-item"><a href="#"><i class="ti-dribbble"></i></a></li>
		  </ul>
	  </div>
  
  
	  <div class="widget mb-5">
		  <h4 class="mb-3 widget-title font-extra font-md">Popular Posts</h4>
		  <hr>
		  <ul class="list-unstyled mt-4">
			  <li class="d-flex mb-4">
				  <img src="{{ asset('users-asset/images/blog/news-sm-img1.jpg') }}" alt="" class="img-fluid mr-3">
				  <div class="post-body">
					  <a href="#"><h4>Salted fried chicken recipe. </h4></a>
					  <p>May 16, 2019</p>
				  </div>
			  </li>
			  <li class="d-flex mb-4">
				  <img src="{{ asset('users-asset/images/blog/news-sm-img2.jpg') }}" alt="" class="img-fluid mr-3">
				  <div class="post-body">
					  <a href="#"><h4>Lemon rosemary rice cooking. </h4></a>
					  <p>May 16, 2019</p>
				  </div>
			  </li>
			  <li class="d-flex">
				  <img src="{{ asset('users-asset/images/blog/news-sm-img3.jpg') }}" alt="" class="img-fluid mr-3">
				  <div class="post-body">
					  <a href="#"><h4>Join Us For a Delicious Event</h4></a>
					  <p>May 16, 2019</p>
				  </div>
			  </li>
		  </ul>
	  </div>
  
	  <div class="widget category mb-5">
		  <h4 class="mb-3 widget-title font-extra font-md">Categories</h4>
		  <hr>
		  <ul class="list-unstyled mt-4">
			<li class="">
			  <a href="#">Web Design</a>
			  <span class="cat-count">(14)</span>
			</li>
			<li class="">
			   <a href="#">Development</a>
			  <span class="cat-count">(12)</span>
			</li>
			<li class="d">
			   <a href="#">Marketing</a>
			  <span class="cat-count">(10)</span>
			</li>
			<li class="">
			   <a href="#">Video Production</a>
			  <span class="cat-count">(1)</span>
			</li>
		  </ul>
	  </div>
	  <div class="widget tags mb-5 ">
		  <h4 class="mb-3 widget-title  font-extra font-md">Popular Tags</h4>
		  <hr>
		  <ul class="list-inline mt-4">
			  <li class="list-inline-item"><a href="#">Design</a></li>
			  <li class="list-inline-item"><a href="#">Marketing</a></li>
			  <li class="list-inline-item"><a href="#">Development</a></li>
			  <li class="list-inline-item"><a href="#">Seo</a></li>
			  <li class="list-inline-item"><a href="#">agency</a></li>
			  <li class="list-inline-item"><a href="#">wordpress</a></li>
		  </ul>
	  </div>
  </div>
			  </div>
		  </div>
	  </div>
  </section>
  
  @endsection