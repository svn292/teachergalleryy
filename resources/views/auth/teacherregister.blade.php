@extends('layouts.app')

@section('content')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/innerbanner.jpg');">
    <div class="container">
      <div class="pagination-area">
        <ul>
          <li><a href="{{url('/')}}">Home</a> -</li>
          <li>Teacher Registration</li>
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
          <form onsubmit=" return validateform()"  enctype="multipart/form-data" method="post">
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
                  <input type="text" id="first-name"  value="{{old('address')}}" name="address" class="form-control">
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
                <div class="form-group">
                  <label class="control-label" for="phone">School Name : </label>
                  <input type="text" value="{{old('school')}}" name="school" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="phone">School Address : </label>
                  <input type="text" value="{{old('schoolAddress')}}" name="schoolAddress" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                  <label class="control-label" for="country">State : </label>
                  <div class="custom-select">
                    <select name="district" class='select2'>
                      <option value="">Select your State </option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                    </select>
                  </div>
                </div>
              </div>
             
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                  <label class="control-label" for="phone">City : </label>
                  <input type="text" value="{{old('area')}}" name="area" class="form-control">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                  <label class="control-label" for="town-city">Pin code :</label>
                  <input type="text" value="{{old('pin')}}" name="pin" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="country">Classes:</label>                  
                    <input type="text" value="{{old('class')}}" name="class" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label class="control-label" for="country">Subject : </label>
                  <select name="subject" class="form-control">
                  @foreach($subjects as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                  </select>
                 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="control-label">About Yourself :</label>
                  <textarea  name="about" id="address-line1" class="form-control" rows="5">{{old('about')}}</textarea>
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
        'data': { 'email': $("#email").val(), 'role_id': '3' },
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
