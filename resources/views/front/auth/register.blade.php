@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
  <h1>Register Account</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Account</a></li>
    <li><a href="register.html">Register</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-3 hidden-xs column-left" id="column-left">
      <div class="Categories left-sidebar-widget">
        <div class="columnblock-title">Account</div>
        <div class="category_block">
          <ul class="box-category">
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="forgetpassword.html">Forgotten Password</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Address Book</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">Reward Points</a></li>
            <li><a href="#">Transactions</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Recurring payments</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <p>If you already have an account with us, please login at the <a href="login.html">login page</a>.</p>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('front.register')}}">
        @csrf
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required">
            <label for="input-lastname" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-lastname" placeholder="Full Name" value=""
                name="name">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value=""
                name="tel">
            </div>
          </div>
          <div class="form-group">
            <label for="input-address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address" placeholder="Address" value="" name="address">
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label for="input-password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="input-password" placeholder="Password" value=""
                name="password">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value=""
                name="password_confirmation">
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
            <input type="checkbox" value="1" name="agree">
            &nbsp;
            <input type="submit" class="btn btn-primary" value="Continue">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="footer-top-cms parallax-container">
  <div class="parallax"><img src="front_assets/image/news.jpg" alt="#"></div>
  <div class="container">
    <div class="row">
      <div class="newslatter">
        <form>
          <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
          <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!</h4>
          <div class="input-group">
            <input type="text" class=" form-control" placeholder="Your-email@website.com">
            <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="footer-social">
        <ul>
          <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection