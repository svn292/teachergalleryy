@extends('layouts.app')
@section('content')
  <!-- Inner Page Banner Area Start Here -->
  <div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          @if(auth()->user()->role_id == 3)
          <li><a href="">Mutual Transfer</a> -</li>
          @endif
          <li>Profile</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here --> 
  <!-- Account Page Start Here -->
  <div class="section-space accent-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
          <ul class="profile-title">
            <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Profile</a></li>
            @if(auth()->user()->role_id == 3)
            <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Mutual Transfer</a></li>
            @endif 
            @if(auth()->user()->role_id == 4)
            <li><a href="#Profile" data-toggle="tab" aria-expanded="false">My Ads</a></li>
            @endif
          </ul>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
     
          <form method="post" enctype="multipart/form-data" class="form-horizontal" id="checkout-form">
          @csrf
            <div class="profile-details tab-content">
              <div class="tab-pane fade active in" id="Personal">
                <h3 class="title-default-left-inner  title-bar-big-left-close mb-0">Personal Information</h3>
                @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                <div class="personal-info">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="name"  value="{{auth()->user()->name}}" type="text">
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group">
                  <p><img width="150px" src="{{asset(auth()->user()->image)}}" alt=""></p>
                    <label class="col-sm-3 control-label">Upload Photo</label>
                    <div class="col-sm-9">
                      <input type="file" name="image" class="custom-file-input"  id="customFile">
                      @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="address"  value="{{auth()->user()->address}}" type="text" rows="5">{{auth()->user()->address}}</textarea>
                      @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Number</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="contactNumber"  value="{{auth()->user()->phone}}" id="last-name" type="text">
                      @error('contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email ID</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="email"  value="{{auth()->user()->email}}" id="last-name" type="text">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  @if(auth()->user()->role_id == 3)
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Education</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="education" id="first-name" type="text" rows="5">{{auth()->user()->education}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Job Experience</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="experience"  id="first-name" type="text" rows="5">{{auth()->user()->experience}}</textarea>
                    </div>
                  </div>
                  @endif
                  <div class="form-group">
                    <label class="col-sm-3 control-label">About Yourself</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="about"  id="first-name" type="text" rows="5">{{auth()->user()->about}}</textarea>
                    </div>
                  </div>
                
  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Change Password</label>
                    <div class="col-sm-9">
                      <input class="form-control mb-10" id="last-name" name="oldPassword" type="password" placeholder="Current Password">
                      @error('oldPassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <input class="form-control mb-10" id="last-name" name="password" type="password" placeholder="New Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <input class="form-control mb-10" id="last-name" name="password_confirmation" type="" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group mb-none">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button class="view-all-accent-btn disabled col-sm-9" type="submit" value="Login">Update</button>
                    </div>
                  </div>
                </div>
              </div>
              @if(auth()->user()->role_id == 3)
              <div class="tab-pane fade" id="Profile">
                <h3 class="title-default-left-inner  title-bar-big-left-close mb-0">Mutual Transfer</h3>
               <div id="suc"> </div>
               
                <div class="personal-info">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Current Location </label>
                    <div class="col-sm-9">
                      <input class="form-control" value="{{$mutualT->currentLocation ?? ''}}" id="currentLocation" type="text">
                      <span class="invalid-feedback"  role="alert">
                                        <strong id="errcurrentLocation"></strong>
                                    </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Location Preferred </label>
                    <div class="col-sm-9">
                      <input class="form-control" value="{{$mutualT->locationPrefered ?? ''}}" id="locationPrefered" type="text">
                      <span class="invalid-feedback"  role="alert">
                                        <strong id="errlocationPrefered"></strong>
                                    </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Reason for Transfer </label>
                    <div class="col-sm-9">
                      <textarea class="form-control"  id="reason" type="text" rows="5">{{$mutualT->reason ?? ''}}</textarea>
                      <span class="invalid-feedback"  role="alert">
                                        <strong id="errreason"></strong>
                                    </span>
                    </div>
                  </div>
                  <div class="form-group mb-none">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button class="view-all-accent-btn disabled col-sm-9" id="submitmutual" type="button" value="Login">Submit</button>
                    </div>
                  </div>
                </div>
              </div> 
              @endif
              @if(auth()->user()->role_id == 4)
              <div class="tab-pane fade" id="Profile">
                <h3 class="title-default-left-inner  title-bar-big-left-close mb-0">My Ads</h3>
               <div id="suc"> </div>
               <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($myads as $k=>$ads)
    <tr>
      <th scope="row">{{$k + 1}}</th>
      <td><img width="100px" src="{{asset($ads->image)}}"></td>
      <td>{{$ads->name}}</td>
      <td>{{$ads->phone}}</td>
      <td>{{$ads->email}}</td>
      <td>@if($ads->status == 0) Pending @else Approve @endif</td>
      <td><a href="delads/{{$ads->id}}">Delete</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

              </div>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Account Page End Here --> 
@endsection
@section('js')
<script>
$("#submitmutual").click(function(){
    var currentLocation = $("#currentLocation").val();
    var locationPrefered = $("#locationPrefered").val();
    var reason = $("#reason").val();
    if(currentLocation == ''){
      $("#errcurrentLocation").html("This field required");
    }
    else{
      $("#errcurrentLocation").html("");
    }
    if(locationPrefered == ''){
      $("#errlocationPrefered").html("This field required");
    }
    else{
      $("#errlocationPrefered").html("");
    }
    if(reason == ''){
      $("#errreason").html("This field required");
    }
    else{
      $("#errreason").html("");
    }
    if(locationPrefered == '' || currentLocation == '' || reason == '')
    return false;
    else{
      $.post("{{url('mutualtransfersave')}}", {
        currentLocation: currentLocation,
        locationPrefered: locationPrefered,
        reason: reason,
      }, function(result){
        html = '<div class="alert alert-success">Save Successfully!</div>';
    $("#suc").html(html);
  });
    }
});
</script>
@endsection