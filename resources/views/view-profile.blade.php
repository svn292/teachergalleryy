@extends('layouts.app')
@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('{{asset('/')}}img/innerbanner.jpg');">
            <div class="container">
                <div class="pagination-area">
                   
                    <ul>
                        <li><a href="{{url('/')}}">Home</a> -</li>
                        <li><a href="">Our Teacher</a> -</li>
                        <li>Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 3 Area Start Here -->
        <div class="lecturers-page-area">
        
        
        
         <div class="container">
          <div class="row">
          <h2 class="title-default-left">Our Teacher</h2>
        </div>
        </div>
        
        
        
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="lecturers-contact-info">
                            <img src="{{asset($user->image)}}" class="img-responsive" alt="team">
                            <h2>{{$user->name}}</h2>
                            <!-- <h3>Political Science</h3> -->
                            
                            <ul class="lecturers-contact">
                              
                                <li><i class="fa fa-phone" aria-hidden="true"></i>{{$user->phone}}</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{$user->email}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h3 class="title-default-left-inner  title-bar-big-left-close">About Me</h3>
                        <p>{{$user->about}} </p>
                        <!-- <h3 class="title-default-left-inner  title-bar-big-left-close">Qualifications</h3>
                        <ul class="course-feature2">
                            <li>Research the conditions of urbanism</li>
                            <li>Employ advanced design techniques</li>
                            <li>Lens of landscape theory and design practice</li>
                            <li>Employ advanced design techniques</li>
                            
                        </ul> -->
                        
                        
                         <h3 class="title-default-left-inner  title-bar-big-left-close">Location</h3>
                        
                        <p>{{$user->teacherdatail->area}}</p>
                        
                        
                        
                        
                        <h3 class="title-default-left-inner  title-bar-big-left-close">Class</h3>
                        
                        <p>{{$user->teacherdatail->class}}</p>
                        
                        
                        
                        
                        
                        
                        <div class="leave-comments">
                            <h3 class="title-default-left-inner title-bar-big-left-close">Contact With Me</h3>
                            <div class="row">
                                <div class="contact-form">
                                @if (session('success'))
          <div class="alert alert-success">
          <p> {{ session('success') }}</p>  
          </div>
          @endif
          <form method="POST"  id="contact-form">
              @csrf
                                        <fieldset>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" required placeholder="Name" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="location" required placeholder="Location" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" required placeholder="Email" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="number" name="phone" required placeholder="Contact Number" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Comment" name="message" required class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group margin-bottom-none">
                                                    <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 3 Area End Here -->
@endsection