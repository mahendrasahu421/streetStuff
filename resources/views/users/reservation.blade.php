@extends('users.users-layout.users-layout')
@section('page-content')
<!-- Header Close -->
<section class="section-header bg-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-4 font-lg text-white">Reservation</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section reservation">
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
            <h2 class="mb-0">02 34597879</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  @endsection