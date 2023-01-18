@extends('layouts.app')
@section('content')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
            <div class="container">
                <div class="pagination-area">
                  
                    <ul>
                        <li><a href="{{url('/')}}">Home</a> -</li>
                        <li>Mutual Transfer</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
        
        
            <div class="container">
          <div class="row">
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h2 class="title-default-left">Mutual Transfer</h2>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
            @auth
            @if(auth()->user()->role_id == 3)
           <a href="{{url('/profile')}}"><div class="mutual-transfer-butn pull-right">Request To Mutual Transfer</div> </a>
           @endif
           @endauth
        </div>
        </div>
       </div> 
        
        
        </div>
        
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                 
                        
                        
                        
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                               <div role="tabpanel" class="tab-pane active" id="gried-view">
                               @foreach($data as $item)
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="courses-box3">
                                            <div class="single-item-wrapper">
                                                <div class="courses-img-wrapper hvr-bounce-to-right">
                                                    <img class="img-responsive" src="{{asset($item->user->image)}}" alt="courses">
                                                    <a href="{{url('/view-profile/'.$item->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title">{{$item->user->name}}</h3>
                                                    <p class="item-content">{{$item->user->about}}</p>
                                                    <ul class="courses-info">
                                                        <li><span>Class </span> - {{$item->user->teacherdatail->class}} </li>
                                                        
                                                        <li><span>Subject </span> - {{$item->user->teacherdatail->subjectname->name}} </li>
                                                        
                                                    </ul>
                                                     <ul class="courses-info">
                                                        <li><span>Current Location </span> - {{$item->currentLocation}} </li>
                                                        
                                                        <li><span>Location Prefered </span> - {{$item->locationPrefered}} </li>
                                                        
                                                    </ul>
                                                    
                                                    <p class="item-content2"><span>Location</span> - {{$item->user->teacherdatail->area}}</p>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 @endforeach  
                                  
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <!-- Listed product show -->
                          
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <!-- <ul class="pagination-left">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Sreach for Teacher</h3>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group course-name">
                                                <input id="first-name" placeholder="Name" class="form-control" type="text" />
                                            </div>
                                            
                                             <div class="form-group course-name">
                                                <input id="first-name" placeholder="Location" class="form-control" type="text" />
                                            </div>
                                            
                                            
                                             <div class="form-group course-name">
                                                <input id="first-name" placeholder="Subject" class="form-control" type="text" />
                                            </div>
                                            
                                             
                                             <div class="form-group course-name">
                                                <input id="first-name" placeholder="Class" class="form-control" type="text" />
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <button class="sidebar-search-btn disabled" type="submit" value="Login">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Updated Information</h3>
                                    <ul class="sidebar-categories">
                                        <li><a href="#">Dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's free demo.</a></li>
                                        <li><a href="#">Dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's free demo.</a></li>
                                        <li><a href="#">Dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's free demo.</a></li>
                                        <li><a href="#">Dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's free demo.</a></li>
                                        <li><a href="#">Dummy text printing setting industry iLorem ipsum dolor sit consectetuer adipiscing elit et diam nonummy.t's free demo.</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 1 Area End Here -->
@endsection