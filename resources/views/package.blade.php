@extends('layouts.app')
@section('content')
<div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
            <div class="container">
                <div class="pagination-area">
                 
                    <ul>
                        <li><a href="{{url('/')}}">Home</a> -</li>
                        <!-- <li><a href="">Book Ads</a> -</li> -->
                        <li>Subscription</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Price Table Area 1 Start Here -->
        <div class="price-table1-area">
        
              <div class="container">
          <div class="row">
          <h2 class="title-default-left">Subscription</h2>
        </div>
        </div>  
        
        
        
        
            <div class="container">
                <div class="row">

                @foreach($data as $d)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="price-table-box1">
                            <span>{{$d->name}}</span>
                            <h2><i class="fa fa-inr" aria-hidden="true"></i>{{$d->price}}</h2>
                            <div class="price-table-service">
                                <p>{{$d->duration}}/Days</p>
                                <p>{{$d->noOfAds}} Ads</p>
                                <p>{{$d->description}}</p>
                                
                            </div>
                            <a href="{{url("buynow/$d->id")}}" class="pricetable-btn">Buy Now</a>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- Price Table Area 1 End Here -->
@endsection