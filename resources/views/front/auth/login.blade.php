@extends('front.layouts.main')

@section('body')
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
  <h1>Login</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Account</a></li>
    <li><a href="login.html">Login</a></li>
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
      <div class="row">
        <div class="col-sm-6">
          <h2>New Customer</h2>
          <p>Checkout Options:</p>
          <div class="radio">
            <label>
              <input type="radio" name="account" value="register" checked="checked">
              Register Account</label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="account" value="guest">
              Guest Checkout</label>
          </div>
          <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track
            of the orders you have previously made.</p>
          <input type="button" value="Continue" id="button-account" data-loading-text="Loading..."
            class="btn btn-primary">
        </div>
        <div class="col-sm-6">
          <form action="{{route('front.login')}}" method="post">
            @csrf
              <h2>Returning Customer</h2>
              <p>I am a returning customer</p>
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail</label>
                <input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Password</label>
                <input type="password" name="password" value="" placeholder="Password" id="input-password"
                  class="form-control">
                <a href="forgetpassword.html" class="forgot">Forgotten Password</a></div>
              <input type="submit" value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-primary">
          </form>
        </div>
      </div>
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