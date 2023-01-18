@extends('layouts.app')
@section('content')
 <!-- Slider 1 Area Start Here -->
 <div class="slider1-area overlay-default">
    <div class="bend niceties preview-1">
      <div id="ensign-nivoslider-3" class="slides"> 
      @foreach($sliders as $item)
      <img src="{{asset($item->image)}}" alt="slider" title="#slider-direction-{{$item->id}}" />
       @endforeach
       </div>
       @foreach($sliders as $item)
      <div id="slider-direction-{{$item->id}}" class="t-cn slider-direction">
        <div class="slider-content s-tb slide-{{$item->id}}">
          <div class="title-container s-tb-c">
            <div class="title1">{{$item->title}}</div>
            <p>{{$item->subtitle}}</p>
          </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </div>
  <!-- Slider 1 Area End Here -->
  
  <div class="service2-area">
    <div class="search-area">
      <div class="container">
        <div class="row search-inner">
        <form action="searchteacher">
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
            <div class="search-input">
             
                <select style="height: 52px;
    width: 100%;
    padding: 15px" name="subject" class="search-form" placeholder="Choose a Subject.... " >
                <option value="">Choose a Subject</option>
                @foreach($subject as $sub)
                <option value="{{$sub->id}}">{{$sub->name}}</option>
              @endforeach
                </select>
             
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
            <div class="search-input">
              
                <input type="text" class="search-form" name="address" placeholder="Enter your address or city or PIN code..." >
              
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <div class="row">
              <div class="search-submit"> <button type="submit" class="join-now-btn">Find a Teacher</button> </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Lecturers Area Start Here -->
  <div class="lecturers-area">
    <div class="container">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="row">
          <h2 class="title-default-left">Our Teacher</h2>
        </div>
        <div class="row">
          <div class="rc-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
          @foreach($teacher as $item)
            <div class="single-item">
              <div class="lecturers1-item-wrapper">
                <div class="lecturers-img-wrapper"> <a href="#"><img style="height: 180px;" class="img-responsive" src="{{asset($item->image)}}" alt="team"></a> </div>
                <div class="lecturers-content-wrapper">
                  <h3 class="item-title"><a href="#">{{$item->name}}</a></h3>
                  <span class="item-designation">{{$item->teacherdatail->subjectname->name}}</span>
                
                  <div class="news-btn-holder"> <a href="{{url('/view-profile/'.$item->id)}}" class="view-all-accent-btn">View Profile</a> </div>
                 
                </div>
              </div>
            </div>
            @endforeach  
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      @if($ads->count() != 0)
       <img class="img-responsive" src="{{asset($ads[0]->image)}}" alt="team"> 
       @endif
       </div>
    </div>
  </div>
  
  <!-- Lecturers Area End Here --> 
  
  <!-- about -->
  
  <div class="about2-area">
    <div class="container">
      <h2 class="title-default-left">About Us</h2>
    </div>
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="row">
          <p>{{$about->content ?? ''}}</p>
          <!-- <p>Dummy text D of the printing and typesetting indust Lorem Ipsum has been theitry's snce simply dummy text of the printing. </p>
          <div class="news-btn-holder"> <a href="#" class="view-all-accent-btn">View All</a> </div> -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- about --> 
  
  <!-- Publications Area Start Here -->
  <div class="publications-area">
    <div class="container">
      <h2 class="title-default-left">Choose a Subjects</h2>
    </div>
    <div class="container">
      <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
        @foreach($subject as $item)
        <div class="single-item">
          <div class="single-item-wrapper">
            <div class="publications-img-wrapper"> <a href="#">
            @if($item->image != '')
            <img class="img-responsive" src="{{asset($item->image)}}" alt="{{$item->name}}">
            @else
            <img class="img-responsive" src="aaa" alt="{{$item->name}}">
            @endif
            </a> 

            </div>
            <div class="buy-now-btn-area"> <a href="#" class="ghost-btn">View</a> </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>
  <!-- Publications Area End Here --> 
  
  <!-- Brand Area Start Here -->
  
  <div class="brand-area">
    <div class="container">
      <h2 class="title-default-left">Recent Ads</h2>
    </div>
    <div class="container">
      <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
      @foreach($ads as $i)
        <div class="brand-area-box"> <a href="#"><img src="{{asset($i->image)}}" alt="brand"></a> </div>
       @endforeach
      </div>
    </div>
  </div>
  
  <!-- Brand Area End Here --> 
@endsection