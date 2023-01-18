@extends('layouts.app')
@section('content')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          <li>Book Ads</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here --> 
  <!-- Event Page Area Start Here -->
  <div class="event-page-area">
    <div class="container">
      <div class="row">
        <h2 class="title-default-left">Book Ads</h2>
      </div>
    </div>
    <div id="app" class="container">
      <div class="row">
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <div class="book-ads-left">
            <div class="registration-details-area inner-page-padding">
            <form method="post" enctype="multipart/form-data" id="checkout-form">
            @csrf
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label" for="first-name">Ads Name :</label>
                    <input type="text" required id="user-name" value="{{old('name')}}" name="name" class="form-control">
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
              </div> 
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label" for="first-name">Website :</label>
                    <input type="text" required id="user-name" value="{{old('website')}}" name="website" class="form-control">
                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label" for="first-name">Ads Detalis : </label>
                    <textarea  type="text" required  name="details" id="address-line1" class="form-control" rows="5">{{old('details')}}</textarea>
                    @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label" for="last-name">Contact Number :</label>
                    <input type="number" required id="last-name" value="{{old('contactNumber')}}" name="contactNumber" class="form-control">
                    @error('contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label" for="email">Email ID :</label>
                    <input type="email" required id="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="custom-file">
                    <label class="control-label" for="first-name">Select Your Ads Image  :</label>
                    <input type="file" required name="image" class="custom-file-input" id="customFile">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <!--<label class="custom-file-label" for="customFile">Choose file</label>--> 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="pLace-order mt-30">
                    <button class="submit-big-btn" type="submit" value="Login">Submit</button>
                    <button class="cancel-big-btn" type="submit" value="">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="sidebar">
            <div class="sidebar-box">
              <div class="sidebar-box-inner">
                <h3 class="sidebar-title">Advantages of Ads</h3>
                <div class="sidebar-find-course"> <img src="img/ads1.png" alt="">
                  <p>Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's fr
                    Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.</p>
                  <p>Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.Rmply dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's ee demo.</p>
                </div>
              </div>
              <img src="img/ads2.png" alt=""> <img src="img/ads3.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Page Area End Here --> 
@endsection