@extends('layouts.app')
@section('content')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here --> 
  <!-- Contact Us Page 2 Area Start Here -->
  <div class="contact-us-page2-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <h2 class="title-default-left title-bar-high">Information</h2>
          <div class="contact-us-info2">
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>A-705 Saltlake Kolkata - 700091</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>+91 3 8376 6284</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>teachergallery@gmail.co</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h2 class="title-default-left title-bar-high">Contact With Us</h2>
            </div>
          </div>
          <div class="row">
            <div class="contact-form2">
            <div class="book-ads-left thankyouRow">
          @if (session('success'))
          <div class="alert alert-success">
          <p> {{ session('success') }}</p>  
          </div>
          @endif
              <form method="POST" id="contact-form">
              @csrf
                <fieldset>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" placeholder="Email*" class="form-control" name="email" id="form-name" data-error="Name field is required" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="number" placeholder="Contact Number" class="form-control" name="phone" id="form-email" data-error="Email field is required" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                    <div class="form-group margin-bottom-none">
                      <button type="submit" class="default-big-btn">Send Message</button>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                    <div class='form-response'></div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Us Page 2 Area End Here --> 
@endsection