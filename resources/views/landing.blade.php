<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.js"></script>
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v3.0.0/dist/bootstrap-float-label.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Styles -->
  <!-- <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
  <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" /> -->
  <!--  <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">

    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet">  -->
     <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>
  <body>    
<!-- <div data-toggle="modal" data-target="#myModal" onclick="refreshmodal()">
    </div>
  -->
  

<!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Click Here</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - <a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a></h4>
            </div> -->
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
               <!-- <div class="container"> -->
<div class="row">
<div class=""> <!-- col-md-4  col-md-offset-4 col-md-4  -->
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA"><span style="font-size: 8px;">Already have an Account?</span><br> Login Here</a></li>
        <li><a data-toggle="tab" href="#sectionB"><span style="font-size: 8px;">Don't have an Account</span><br> Register Now!</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" method="post" action="{{ route('login') }}" >
            {{ csrf_field() }}

            <!-- <span class="has-float-label">

                <input class="form-control" id="email" type="text" name="email" placeholder="Enter Email">
               <label for="email"></label> 
            </span> -->
            <label>Email Address</label>
            <input type="text" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" style="width:100%;">Login</button>
            
            </br></br>
            <input  type="checkbox" class="pull-left" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Keep me logged in</span>
            
            <a class="pull-right" s href="{{ route('password.request') }}" >Forgot Password?</a>
            
            </form>
            </div>
            <div class="social-login">
            <p style="width:100%;">------------------------------- or ---------------------------- </p>
            <ul>
            <!-- <li><a href=""><img src="<?php echo asset('image/facebook.png')?>"></a></li> -->
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            <li><a><i class="fa fa-github-square"></i></a></li>
            </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <div class="innter-form">
            <form class="sa-innate-form" method="post">
            <!-- <label>Name</label>
            <input type="text" name="username"> -->
            
            </script>
            <label>Email</label>
            <input id="b_email" type="text" name="email">
            <label>Password</label>
            <input id="b_password" type="password" name="password">
            <label>Confirm Password</label>
            <input id="b_confirmpassword" type="password" name="confirmpassword">
            <input type="checkbox" name="tc" value="terms&condition"> I agree to Terms & Conditions, Privacy Policy.<br>
            <!-- <a href="#modal-2" data-toggle="modal" data-dismiss="modal">Next ></a> -->
            <button type="submit" onclick="myFunction()" href="#modal-2" data-toggle="modal" data-dismiss="modal">Register Now</button>
            <!-- <p>By clicking Register now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p> -->
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
            <ul>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-github-square"></i></a></li>
            </ul>
            </div>
        </div>
    </div>
    
    </div>
    </div>
    </div>
    <!-- </div>  for container inside modal-->

            </div>
        </div>
    </div>
</div>
<!-- Start of 2nd modal tab -->
<div class="modal" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
               <!-- <div class="container"> -->
<div class="row">
<div class=""> <!-- col-md-4  col-md-offset-4 col-md-4  -->
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA2"><span style="font-size: 8px;">Individuals / Consutant</span><br> B2C</a></li>
        <li><a data-toggle="tab" href="#sectionB2"><span style="font-size: 8px;">Corporate / Firms</span><br> B2B </a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA2" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" method="post" action="{{ route('register') }}">
            {{ csrf_field() }}
            <!-- <span class="has-float-label">

                <input class="form-control" id="email" type="text" name="email" placeholder="Enter Email">
               <label for="email"></label> 
            </span> -->
            <!-- <label>Name</label> -->
            <input type="hidden" name="name" value="firstname">
            <label>First Name</label>
            <input type="text" name="firstname">
            <label>Last Name</label>
            <input type="text" name="lastname">
            <label>Mobile Number</label>
            <input type="text" name="mobile">
            <label>Email</label>
            <input id="b2c_email" type="text" name="email" value="" readonly>
            
            <input id="b2c_password" type="hidden" name="password" value="">
            
            <input id="b2c_password_confirmation" type="hidden" name="password_confirmation" value="">
            <button type="submit">Create Account Now !</button>
        
            </form>
            </div>
            
            <div class="clearfix"></div>
        </div>
        <div id="sectionB2" class="tab-pane fade">
            <div class="innter-form">
            <form class="sa-innate-form" method="post" action="{{ route('employer.register.submit') }}">
            {{ csrf_field() }}
            
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>

            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="firstname" required autofocus>

            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="lastname" required autofocus>

            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="mobile no" required autofocus>

            <input id="landline" type="text" class="form-control" name="landline" value="{{ old('landline') }}" placeholder="landline" required autofocus>

            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="workemail" required>

            <input id="otheremail" type="email" class="form-control" name="otheremail" value="{{ old('otheremail') }}" placeholder="otheremail" required>

            <input id="designation" type="text" class="form-control" name="designation" value="{{ old('designation') }}" placeholder="designation" required>

            <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" placeholder="company" required>

            <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" placeholder="website" required> 

            <input id="password" type="password" class="form-control" name="password" placeholder="password"required>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
            <!-- <input type="text" name="firstname" id="firstname" value="joy">
            <input type="text" name="lastname" id="lastname" value="joy">
            <input type="text" name="password" value="qwerty">
            <input type="text" name="mail">
            <input type="text" name="job_title"> -->

            <!-- <label>First Name</label>
            <input type="text" name="firstname">
            <label>Last Name</label>
            <input type="text" name="lastname">
            <label>Mobile Number</label>
            <input type="text" name="mobile">
            <label>Phone - Landline</label>
            <input type="text" name="landline">
            <label>Company / Firm Name </label>
            <input type="text" name="companyname">
            <label>Designation / Role</label>
            <input type="text" name="designation">
            <label>Website (of Company / Firm)</label>
            <input type="text" name="website">
            <label>Work Email</label>
            <input type="text" name="workmail">
            <label>Other Email</label>
            <input type="text" name="othermail"> -->
            
            <button type="submit">Create Account Now !</button>
         
            </form>
            </div>
            
        </div>
    </div>
    
      
    </div>
    </div>
    </div>
    <!-- </div>  for container inside modal-->

            </div>
        </div>
    </div>
</div>

<!-- end of 2nd modal tab-->
<script type="text/javascript">
            function myFunction() {
                //document.getElementById("b_email").value; 
                document.getElementById("b2c_email").value = document.getElementById("b_email").value;
                document.getElementById("b2c_password").value = document.getElementById("b_password").value;
                document.getElementById("b2c_password_confirmation").value = document.getElementById("b_confirmpassword").value;
                //var x = document.getElementById("demo");
                //x.style.color = "red";
            }
</script>
<script>
jQuery(document).ready(function(){
    $('#myModal').modal('show');
});
</script>
  </body>

  </html>