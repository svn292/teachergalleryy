@extends('layouts.app')
@section('content')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          <li>Thank You</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here --> 
  <!-- Event Page Area Start Here -->
  <div class="event-page-area">
    <div class="container">
      <div class="row">
        <h2 class="title-default-left">Thank You</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="book-ads-left thankyouRow">
          @if (session('success'))
          <div class="alert alert-success">
          <p> {{ session('success') }}</p>  
          </div>
          @endif
            
            
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
 
@endsection