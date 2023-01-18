@extends('layouts.app')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          <li>Publisher Registration</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Inner Page Banner Area End Here --> 
  <!-- Registration Page Area Start Here -->
  <div class="registration-page-area bg-secondary">
    <div class="container">
      <div class="row">
        <h2 class="title-default-left">Registration</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="registration-details-area inner-page-padding">
          <form method="post" onsubmit=" return validateform()" enctype="multipart/form-data" id="checkout-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="first-name">Your Name :</label>
                  <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control">
                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span  class="invalid-feedback" role="alert">
                                        <strong id="errorname"></strong>
                                    </span>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="custom-file">
                  <label class="control-label" for="first-name">Upload Photo :</label>
                  <input type="file" class="custom-file-input" name="image" id="customFile">
                  @error('image')
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
                  <label class="control-label" for="first-name">Your Address : </label>
                  <input type="text" id="address"  value="{{old('address')}}" name="address" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="last-name">Contact Number :</label>
                  <input type="number" id="contactNumber"  value="{{old('contactNumber')}}" name="contactNumber" class="form-control">
                  @error('contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span  class="invalid-feedback" role="alert">
                                        <strong id="errorcontactNumber"></strong>
                                    </span>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="email">Email ID :</label>
                  <input type="email" id="email"  value="{{old('email')}}" name="email" class="form-control">
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span  class="invalid-feedback" role="alert">
                                        <strong id="erroremail"></strong>
                                    </span>
                </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="last-name">Password :</label>
                  <input type="password" id="password"  value="{{old('password')}}" name="password" class="form-control">
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span  class="invalid-feedback" role="alert">
                                        <strong id="errorpassword"></strong>
                                    </span>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="email">Confirm Password :</label>
                  <input type="password" id="password_confirmation"  value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control">
                </div>
              </div>
            </div>
           
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pLace-order mt-30">
                  <button class="submit-big-btn" type="submit" value="Login">Submit</button>
                  <button class="cancel-big-btn" type="reset" value="">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration Page Area End Here --> 
@endsection
@section('js')
<script>
function validateform(){
  if($("#name").val() == '')
  {
    $("#errorname").html("This field is required");
    return false;
  }
  if($("#contactNumber").val() == '')
  {
    $("#errorcontactNumber").html("This field is required");
    return false;
  }
  if($("#contactNumber").val().length < 10)
  {
    $("#errorcontactNumber").html("Contact Number should be 10 digits");
    return false;
  }
  if($("#email").val() == '')
  {
    $("#erroremail").html("This field is required");
    return false;
  }
  if($("#password").val() == '')
  {
    $("#errorpassword").html("This field is required");
    return false;
  }
  if($("#password").val().length < 8)
  {
    $("#errorpassword").html("Password should be minimum 8 character");
    return false;
  }
  if($("#password").val() != $("#password_confirmation").val())
  {
    $("#errorpassword").html("Confirm Password Not matched");
    return false;
  }
  var chkemail = function () {
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "{{url('chkemail')}}",
        'data': { 'email': $("#email").val(), 'role_id': '4' },
        'success': function (data) {
            tmp = data;
        }
    });
    return tmp;
}();
console.log(chkemail);
 if(chkemail == 1 ){
  $("#erroremail").html("Email already taken");  
  return false;
 }
 else{
  return true;
 }
  
}
</script>
@endsection
