@extends('users.users-layout.users-layout')
@section('page-content')
<!-- Header Close -->
<section class="section-header bg-1">
	<div class="container">
	  <div class="row">
		<div class="col-lg-12">
		  <div class="text-center">
			<h1 class="text-capitalize mb-4 font-lg text-white">Food menu</h1>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
  <section class="section menu">
	  <div class="container">
		  <div class="row  justify-content-center mb-5">
			  <div class="col-lg-8 text-center">
				  <span class="text-primary font-extra font-md">CafeDine Dishes</span>
				  <h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>
		  
			  </div>
		  </div>
  
		  <div class="col-12 text-center  mb-5">
			  <div class="btn-group btn-group-toggle " data-toggle="buttons">
				<label class="btn active ">
				  <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
				</label>
				<label class="btn ">
				  <input type="radio" name="shuffle-filter" value="design" />Starter
				</label>
				<label class="btn">
				  <input type="radio" name="shuffle-filter" value="branding" />Launch
				</label>
				<label class="btn">
				  <input type="radio" name="shuffle-filter" value="illustration" />Dinner
				</label>
			  </div>
		</div>
  
		  <div class="row shuffle-wrapper food-gallery">
				<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
					<div class="menu-item position-relative ">
					  <div class="d-flex align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-1.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Vitello Tonato - <span>23$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
  
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
				  <div class="menu-item position-relative ">
					   <div class="d-flex align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-2.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Crema di Pomodoro - <span>34$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
				 <div class="menu-item position-relative ">
					  <div class="d-flex align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-3.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Oatmeal Cookie - <span>13$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
  
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
				  <div class="menu-item position-relative ">
					   <div class="d-flex  align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-4.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Seasonal Soup - <span>10$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
				  <div class="menu-item position-relative ">
					   <div class="d-flex  align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-5.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Pizza Pane - <span>28$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
					 <div class="menu-item position-relative ">
					  <div class="d-flex  align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-6.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Carpacio - <span>20$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
				  <div class="menu-item position-relative ">
					   <div class="d-flex  align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-7.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Insalata Rucola - <span>15$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
  
			<div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
				  <div class="menu-item position-relative ">
					   <div class="d-flex  align-items-center">
						  <img src="{{ asset('users-asset/images/menu/menu-8.jpg') }}" alt="" class="img-fluid">
						  <div>
							  <h4>Carpacio - <span>13$</span></h4>
							  <p>Chinese mustard/Chipotle aiol</p>
							  <div class="mb-4">
								  <a href="cart" class="mt-2"><i class="ti-shopping-cart mr-2 text-primary"></i>Add to cart</a>
							  </div>
						  </div>
					  </div>
				  </div>
			</div>
		  </div>
  
		  <div class="row">
			  <div class="col-lg-12 text-center mt-5">
				  <a href="menu" class="btn btn-black ">View full menu</a>
			  </div>
		  </div>
	  </div>
  </section>
  
  
  
  <section class="section menu-3 secondary-bg">
	  <div class="container">
		  <div class="row  justify-content-center mb-5">
			  <div class="col-lg-8 text-center">
				  <span class="text-primary font-extra font-md">Main Dishes</span>
				  <h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>
			  </div>
		  </div>
  
		  <div class="row ">
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-5.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-3.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-4.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="00">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-5.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-4.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
				  <div class="card border-0 menu-item3">
					  <img src="{{ asset('users-asset/images/menu/m-5.jpg') }}" alt="" class="img-fluid">
  
					  <div class="card-body">
						  <h3 class="card-title">Tuna Roast Source - <span class="text-primary">23$</span></h3>
						  <p>Mushrooms, Ruccola, Pomodoro, Mozzarella, Olives </p>
						  <a href="cart" class="btn btn-main mt-2">Add to cart</a>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </section>
  
  @endsection