@extends('users.users-layout.users-layout')
@section('page-content')
    <!--  Banner start -->
    <section class="slider-hero hero-slider  hero-style-1  ">
        <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper">
                <!-- start slide-item -->
                <div class="swiper-slide slide-item">
                    <div class="slide-inner slide-bg-image main-sider-inner"
                        data-background="{{ asset('users-asset/images/banner/slide-1.jpg') }}">
                        <!-- <div class="overlay"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to
                                        restuarant</span>
                                    <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Fresh,Delicious meal
                                        to reach your optimum health and fitness</h1>
                                    <a href="menu" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide-item -->

                <!-- start slide-item -->
                <div class="swiper-slide slide-item">
                    <div class="slide-inner slide-bg-image main-sider-inner"
                        data-background="{{ asset('users-asset/images/banner/slide-2.jpg') }}">
                        <!-- <div class="overlay"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to
                                        restuarant</span>
                                    <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">Good food starts
                                        with good ingridients.Have a great time with us</h1>
                                    <a href="menu" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide-item -->

                <!-- start slide-item -->
                <div class="swiper-slide slide-item">
                    <div class="slide-inner slide-bg-image main-sider-inner"
                        data-background="{{ asset('users-asset/images/banner/slide-3.jpg') }}">
                        <!-- <div class="overlay"></div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span data-swiper-parallax="300" class="text-primary font-extra font-md">Welcome to
                                        restuarant</span>
                                    <h1 class="mt-3 mb-5 text-lg text-white" data-swiper-parallax="400">We deliver good
                                        quality food with great service to our customers</h1>
                                    <a href="menu" class="btn btn-main mr-3" data-swiper-parallax="500">View Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide-item -->
            </div>
            <!-- end swiper-wrapper -->
            <!-- swipper controls -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--  Banner End -->

    <!--  Intro start -->
    <section class="intro">
        <div class="container">
            <div class="intro-wrap bg-white w-100">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="intro-item" data-aos="fade-up">
                            <i class="icofont-soup-bowl"></i>
                            <h3 class="mt-3">Delicious Food</h3>
                            <p>Welcome to a culinary journey where every bite is a masterpiece and every dish tells a story
                                of craftsmanship and passion. At [Your Restaurant Name], we pride ourselves on creating an
                                extraordinary dining experience that revolves around one central theme — delicious food that
                                captivates the senses.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="intro-item bg-gray " data-aos="fade-up" data-aos-delay="300">
                            <i class="icofont-tasks"></i>
                            <h3 class="mt-3">Online Order</h3>
                            <p>At StreetStuff, we understand that sometimes you crave our delightful dishes without leaving
                                the comfort of your home. That's why we've made it easier than ever to indulge in our
                                mouthwatering menu with our convenient online ordering service. From the heart of our
                                kitchen to your doorstep, savor the same exceptional flavors in the convenience of your own
                                space. </p>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-4">
                      <div class="intro-item" data-aos="fade-up" data-aos-delay="600">
                          <i class="icofont-map-pins"></i>
                          <h3 class="mt-3">Free delivery</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia animi ipsam obcaecati. </p>
                      </div>
                  </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--  Intro End -->

    <!-- About start -->
    <section class="section about">
        <div class="container">
            <div class="row  justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="text-primary font-extra font-md">About Streetstuff</span>
                    <h2 class="mt-3 mb-4">We are a modern restaurant in the center of the city </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up">
                    <img src="{{ asset('users-asset/images/about/img-1.jpg') }}" alt="" class="img-fluid">
                    <div class="mt-3">
                        <h3>Quality Food</h3>
                        <p>At StreetStuff, we believe that exceptional dining experiences begin with quality ingredients and
                            expert craftsmanship. Our commitment to providing you with the finest in culinary offerings is
                            evident in every dish we serve. From farm-fresh produce to premium cuts of meat, each ingredient
                            is carefully selected to ensure a symphony of flavors that surpasses expectations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('users-asset/images/about/img-2.jpg') }}" alt="" class="img-fluid">
                    <div class="mt-3">
                        <h3>Friendly place</h3>
                        <p>Step into a world where warmth, hospitality, and delectable flavors come together seamlessly. At
                            [Your Restaurant Name], we take pride in creating more than just a dining experience; we
                            cultivate a friendly and inviting atmosphere where every guest feels like a cherished friend.
                            Join us for a journey of not just great food but also genuine warmth and camaraderie.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <img src="{{ asset('users-asset/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    <div class="mt-3">
                        <h3>Affordable price</h3>
                        <p>At StreetStuff, we believe that everyone deserves access to delicious, high-quality food without
                            breaking the bank. Our commitment to affordability is as strong as our dedication to flavor,
                            creating a dining experience where you can indulge in your favorite dishes without compromise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About  End -->

    <!-- CTA start -->
    <section class="section cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="font-extra text-md-2 text-white-70">Prepare The Best Dishes</span>
                    <h2 class="mt-3 text-white mb-4">Come & Experience Our Best of World Class Cousine</h2>

                    <a href="#reservation" class="btn btn-white">book now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA  End -->

    <!-- DISHES start -->
    <section class="section menu">
        <div class="container">
            <div class="row  justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="text-primary font-extra font-md">Streetstuff Dishes</span>
                    <h2 class="mt-3 mb-4">We provide quality food.We care about your health </h2>
                </div>
            </div>

            <div class="col-12 text-center mb-5">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn active">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                    </label>
                    <label class="btn">
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
                <div class="col-lg-6 col-md-6 mb-4 shuffle-item"
                    data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-1.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Vitello Tonato - <span>23$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-2.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Crema di Pomodoro - <span>34$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-3.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Oatmeal Cookie - <span>13$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex  align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-4.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Seasonal Soup - <span>10$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-5.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Pizza Pane - <span>28$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-6.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Carpacio - <span>20$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-7.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Insalata Rucola - <span>15$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 shuffle-item"
                    data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
                    <div class="menu-item position-relative ">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('users-asset/images/menu/menu-8.jpg') }}" alt=""
                                class="img-fluid mb-3 mb-lg-0">
                            <div>
                                <h4>Carpacio - <span>13$</span></h4>
                                <p>Chinese mustard/Chipotle aiol</p>
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
    <!-- DISHES  End -->

    <!--App start -->
    {{-- <section class="section download">
      <div class="container">
          <div class="row ">
              <div class="col-lg-10 col-md-12">
                  <div class="row align-items-center">
                      <div class="col-lg-6 col-md-6">
                          <img src="{{ asset('users-asset/images/about/2-mbl.png') }}" alt="" class="img-fluid"> 
  
  
                          <!-- for change phone model follow this link: https://marvelapp.github.io/devices.css/ -->
                          <div class="marvel-device iphone-x">
                              <div class="notch">
                                  <div class="camera"></div>
                                  <div class="speaker"></div>
                              </div>
                              <div class="top-bar"></div>
                              <div class="sleep"></div>
                              <div class="bottom-bar"></div>
                              <div class="volume"></div>
                              <div class="overflow">
                                  <div class="shadow shadow--tr"></div>
                                  <div class="shadow shadow--tl"></div>
                                  <div class="shadow shadow--br"></div>
                                  <div class="shadow shadow--bl"></div>
                              </div>
                              <div class="inner-shadow"></div>
                              <div class="screen">
                                  <img src="{{ asset('users-asset/images/CafeDine.jpg') }}" alt="" class="img-fluid">
                              </div>
                          </div>
                      </div>
  
                      <div class="col-lg-6 col-md-6">
                          <span class="text-primary font-md font-extra">Make it easy</span>
                          <h2 class="mt-3">Get the Streetstuff App</h2>
                          <p class="mt-4">Get instant access to recipes from celebrity Cafedia and world-renowed brands right in your
                              pocket. </p>
  
                          <div class="mt-5">
                              <a href="#" target="_blank" class="btn-download active mb-2">
                                  <i class="ti ti-android"></i>
                                  <div class="btn-text">
                                      <span>Get it on</span>
                                      Google Play
                                  </div>
                              </a>
                              <a href="#" target="_blank" class="btn-download">
                                  <i class="ti ti-apple"></i>
                                  <div class="btn-text">
                                      <span>Get it on</span>
                                      app store
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
    <!-- App  End -->

    
 <!-- section Our Gallery -->
    

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
                    <a data-video-id="jrkvirglgaQ" class="videoplay"><i class="ti-control-play"></i></a>
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
                    <a data-video-id="1wKDqma9Hl0" class="videoplay"><i class="ti-control-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section Our Gallery -->

    <!-- section chef  start -->
    <section class="section chef">
        <div class="container">
            <div class="row  justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="text-primary font-extra font-md">Meet The Chefs</span>
                    <h2 class="mt-3 mb-4">We have experienced and creative chefs to start</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4" data-aos="fade-up">
                    <div class="chef-item mb-5 mb-lg-0 text-center text-lg-left">
                        <img src="{{ asset('users-asset/images/chef/chef_1.jpg') }}" alt="" class="img-fluid">

                        <h3 class="mb-0 mt-4">Daniel Graham</h3>
                        <p class="text-sm font-weight-bold">Master chef</p>
                        <p>Far from the countries Vokalia and Consonantia, there live the blind texts. They live in
                            Bookmarksgrove.</p>

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
                        <p>Far from the countries Vokalia and Consonantia, there live the blind texts. They live in
                            Bookmarksgrove.</p>

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
                        <p>Far from the countries Vokalia and Consonantia, there live the blind texts. They live in
                            Bookmarksgrove.</p>

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
<!-- section chef  End -->

{{-- Section reservation --}}
<section class="section reservation" id="reservation">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 form-wrap">
          <span class="text-primary font-extra font-md">Reservation</span>
          <h2 class="mt-3 mb-5">Reserve your seat for betterment</h2>
  
          <form action="#">
            <div class="row mb-4">
              <div class="form-group col-md-4 mb-4">
                <label for="name" class="label">Name</label>
                <div class="form-field-icon-wrap">
                  <input type="text" class="form-control" id="name" placeholder="Full Name">
                </div>
              </div>
  
              <div class="form-group col-md-4 mb-4">
                <label for="email" class="label">Email</label>
                <div class="form-field-icon-wrap">
                  <input type="email" class="form-control" id="email" placeholder="Email Address">
                </div>
              </div>
  
              <div class="form-group col-md-4 mb-4 ">
                <label for="phone" class="label">Phone</label>
                <div class="form-field-icon-wrap">
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                </div>
              </div>
  
              <div class="form-group col-md-4 mb-4 mb-lg-0">
                <label for="persons" class="label">Number of Persons</label>
                <div class="form-field-icon-wrap">
                  <select name="persons" id="persons" class="form-control">
                    <option value="">1 person</option>
                    <option value="">2 persons</option>
                    <option value="">3 persons</option>
                    <option value="">4 persons</option>
                    <option value="">5+ persons</option>
                  </select>
                </div>
              </div>
  
              <div class="form-group col-md-4 mb-4 mb-lg-0">
                <label for="date" class="label">Date</label>
                <div class="form-field-icon-wrap">
                  <input type="text" autocomplete="off" placeholder="Select your Date" id="datepicker" class="datepicker-here form-control" data-language='en' data-position='bottom left'/>
                </div>
              </div>
  
              <div class="form-group col-md-4 mb-4 mb-lg-0">
                <label for="time" class="label">Time</label>
                <div class="form-field-icon-wrap">
                  <input type="text" class="form-control" id="timepicker" placeholder="Select your Time" autocomplete="off">
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="col-md-6 mt-4">
                <a href="shipping" class="btn btn-main">Reserve Now</a>
              </div>
            </div>
          </form>
        </div>
  
        <div class="col-lg-4">
          <div class="text-center py-5 form-2 secondary-bg mt-5 mt-lg-0">
            <span class="font-extra font-md text-primary">Check availabilty</span>
            <h3 class="font-md mb-5">Opening Times</h3>
  
            <ul class="list-unstyled">
              <li class="mb-4">
                <h4 class="mb-0">Monday - Thursday </h4>
                <span>9.00-12.00</span>
              </li>
              <li class="">
                <h4 class="mb-0 ">Friday - Sunday </h4>
                <span>2.00-8.00</span>
              </li>
            </ul>
  
            <div class="mt-5">
              <span class="font-extra text-capitalize font-md text-primary">Call us for</span>
              <h2 class="mb-0">8874752***</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Section end reservation --}}

    <!-- instgram position -->
    <section class="instgram position-relative">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <h3 class="insta-title">@Instagram</h3>

                <div class="swiper-container" id="gallery-slider">
                    <!-- for instagram post remove comments from bottom line and replace yourusers-asset id and access token -->
                    <!-- <div class="swiper-wrapper" id="instafeed" datausers-assetId="4044026246" data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div> -->

                    <!-- this is static images. after setup instagram, remove this bottom code to the end -->
                    <div class="swiper-wrapper" id="instafeed">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-4.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-3.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-5.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-7.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-1.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-1.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide ">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-2.jpg') }}">
                                <img src="{{ asset('users-asset/gallery/gallery-2.jpg') }}images/" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-3.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-4.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="popup-gallery" href="{{ asset('users-asset/images/gallery/gallery-5.jpg') }}">
                                <img src="{{ asset('users-asset/images/gallery/gallery-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
    </section>

    <!--Footer start -->
@endsection
