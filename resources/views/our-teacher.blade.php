@extends('layouts.app')
@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
            <div class="container">
                <div class="pagination-area">
                  
                    <ul>
                        <li><a href="index.html">Home</a> -</li>
                        <li>Our Teachers</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
        
        
            <div class="container">
          <div class="row">
          <h2 class="title-default-left">Our Teacher</h2>
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
                                                    <img class="img-responsive" src="{{asset($item->image)}}" alt="courses">
                                                  
                                                    <a href="{{url('/view-profile/'.$item->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                  
                                                </div>
                                                <div class="courses-content-wrapper">
                                                    <h3 class="item-title">{{$item->name}}</h3>
                                                    <p class="item-content">{{Str::words($item->about, '30')}}</p>
                                                    <ul class="courses-info">
                                                        <li><span>Class </span> - {{$item->teacherdatail->class}} </li>
                                                        
                                                        <li><span>Subject </span> - {{$item->teacherdatail->subjectname->name}} </li>
                                                        
                                                    </ul>
                                                    
                                                    <p class="item-content2"><span>Location</span> - {{$item->teacherdatail->area}}</p>
                                                  
                                                   <a href="{{url('/view-profile/'.$item->id)}}"> <div class="courses-fee">View Profile</div></a>
                                                  
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
                            {{ $data->links() }}
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
                                                <input name="name" placeholder="Name" value="{{ request()->name ?? '' }}" class="form-control" type="text" />
                                            </div>
                                            
                                             <div class="form-group course-name">
                                                <input name="area" placeholder="Location" value="{{ request()->area ?? '' }}" class="form-control" type="text" />
                                            </div>
                                            
                                            
                                             <div class="form-group course-name">
                                                <select name="subject" placeholder="Subject" value="{{ request()->subject ?? '' }}" class="form-control" type="text">
                                                @foreach($subject as $sub)
                <option value="{{$sub->id}}" {{ request()->subject == $sub->id ? 'selected':'' }}>{{$sub->name}}</option>
              @endforeach
                                                </select>
                                            </div>
                                            
                                             
                                             <div class="form-group course-name">
                                                <input name="class" placeholder="Class" value="{{ request()->class ?? '' }}" class="form-control" type="text" />
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <button class="sidebar-search-btn disabled"  type="submit" value="Login">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="sidebar-box">
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
                            </div> -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 1 Area End Here -->
@endsection