@extends('layouts.app')

@section('content')
<!-- Inner Page  Start Here -->
  
<div class="loginBanner">
  
  <div class="loginBanner-inner ">
  <div class="login-form">
  
  
  <h1 class="title-default-left">Forget Password</h1>
                                               
                                                <form method="post">
                                                
                                                @csrf
                                                
                                                
                                                  <div class="row">  
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
                  <label class="control-label" for="country">User Type  </label>
                  <div class="custom-select">
                    <select name="type" class='select2'>
                      <option value="0">Student </option>
                      <option value="1">Teacher</option>
                      <option value="2">Publisher</option>
                      
                    </select>
                  </div>
                </div>
           
                </div>                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                 <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label>Email address *</label>
                                                    <input type="text" name="email" placeholder="E-mail">
                                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="default-big-btn-login" type="submit" value="Login">Reset</button>
              </div>
              </div>  
                                                    
                                       
                                   <div class="row">
                                   
                           
                                   
             
                                                    
                                                    
                                                  
                   
                                                    
                    </div>                                
                             
                     <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">      
            <label class="check"><a href="{{url('login')}}">Login</a></label>
             </div>        
                             
                   </div>          
                             
                             
                             
                                                  
                                                   
                                                </form>
                                            </div>
  
  
  </div>
  
  </div>
  
  
  
  
  
  <!-- Inner Page Startend Here -->
@endsection
