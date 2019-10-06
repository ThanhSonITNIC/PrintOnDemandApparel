@extends('front.layouts.main')

@section('body')
    
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
  <h1>Blog</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="blog.html">Blog</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="content col-sm-9">
      <div class="blog1 blog">
        <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_1.jpg" alt="#"></a>
          <span class="blog-hover"></span> </div>
        <div class="blog-content"> <span class="blog-date">02/05/2016</span>
          <h2 class="blog-name"><a href="single-blog.html">You Have Got Questions We have Got Answers</a> </h2>
          <span class="blog-author">by <a href="#"> funchuk wangadu</a> </span> <span class="blog-comment">3
            comments</span>
          <div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
            similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
            facilis tempora ab …..</div>
          <a href="single-blog.html" class="blog-readmore">Read More</a>
        </div>
      </div>
      <div class="blog2 blog">
        <div class="blog_img video">
          <video controls>
            <source type="video/mp4" src="front_assets/image/MakeUp.mp4">
            <source type="video/ogg" src="MakeUp.ogg">
            Your browser does not support HTML5 video. </video>
        </div>
        <div class="blog-content"> <span class="blog-date">02/05/2016</span>
          <h2 class="blog-name"><a href="single-blog.html">You Have Got Questions We have Got Answers</a> </h2>
          <span class="blog-author">by <a href="#"> funchuk wangadu</a> </span> <span class="blog-comment">3
            comments</span>
          <div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
            similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
            facilis tempora ab …..</div>
          <a href="single-blog.html" class="blog-readmore">Read More</a>
        </div>
      </div>
      <div class="blog3 blog">
        <div class="blog_img owl-carousel home-slider owl-theme gellery">
          <div class="item"> <a href="#"><img src="front_assets/image/blog/blog_1.jpg" alt="" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="front_assets/image/blog/blog_2.jpg" alt="" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="front_assets/image/blog/blog_3.jpg" alt="" class="img-responsive" /></a> </div>
        </div>
        <div class="blog-content"> <span class="blog-date">02/05/2016</span>
          <h2 class="blog-name"><a href="single-blog.html">You Have Got Questions We have Got Answers</a> </h2>
          <span class="blog-author">by <a href="#"> funchuk wangadu</a> </span> <span class="blog-comment">3
            comments</span>
          <div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
            similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
            facilis tempora ab …..</div>
          <a href="single-blog.html" class="blog-readmore">Read More</a>
        </div>
      </div>
      <div class="blog4 blog">
        <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_4.jpg" alt="#"></a>
          <span class="blog-hover"></span> </div>
        <div class="blog-content"> <span class="blog-date">02/05/2016</span>
          <h2 class="blog-name"><a href="single-blog.html">You Have Got Questions We have Got Answers</a> </h2>
          <span class="blog-author">by <a href="#"> funchuk wangadu</a> </span> <span class="blog-comment">3
            comments</span>
          <div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
            similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
            facilis tempora ab …..</div>
          <a href="single-blog.html" class="blog-readmore">Read More</a>
        </div>
      </div>
    </div>
    <!-- end blog-home -->
    <div class="col-sm-3 hidden-xs column-right" id="column-right">
      <div class="Categories right-sidebar-widget">
        <div class="columnblock-title">Categories</div>
        <div class="category_block">
          <ul class="box-category">
            <li><a href="#">Video Post Format</a></li>
            <li><a href="#">Quote Post Format</a></li>
            <li><a href="#">Gallery Post Format</a></li>
            <li><a href="#">Link Post Format</a></li>
            <li><a href="#">Address Book</a></li>
            <li><a href="#">Wish Post Format</a></li>
            <li><a href="#">Order Post Format</a></li>
            <li><a href="#">Uncategorized Post Format</a></li>
            <li><a href="#">Post Format</a></li>
            <li><a href="#">Transactions Post Format</a></li>
            <li><a href="#">Returns Post Format</a></li>
            <li><a href="#">Post Format</a></li>
            <li><a href="#">Recurring Post Format</a></li>
          </ul>
        </div>
      </div>
      <div class="Categories right-sidebar-widget">
        <div class="columnblock-title">Tag</div>
        <ul class="tagcloud">
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Grid</a></li>
          <li><a href="#">Large</a></li>
          <li><a href="#">Slider</a></li>
          <li><a href="#">Personal</a></li>
          <li><a href="#">Youtube</a></li>
          <li><a href="#">Trending</a></li>
          <li><a href="#">Quote</a></li>
          <li><a href="#">Simple</a></li>
        </ul>
      </div>
      <div class="recentpost right-sidebar-widget">
        <div class="columnblock-title">Recent Posts</div>
        <div class="category_block">
          <ul class="box-category">
            <li><a href="#">Video Post Format</a></li>
            <li><a href="#">Gallery Post Format</a></li>
            <li><a href="#">Link Post Format</a></li>
            <li><a href="#">Wish Post Format</a></li>
            <li><a href="#">Uncategorized Post Format</a></li>
            <li><a href="#">Transactions Post Format</a></li>
            <li><a href="#">Post Format</a></li>
          </ul>
        </div>
      </div>
      <div class="latestblog right-sidebar-widget">
        <div class="columnblock-title">Latest Blog</div>
        <div class="blog_block">
          <ul class="list-unstyled blog-wrapper" id="latestblog">
            <li class="item blog-slider-item">
              <div class="blog1 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_1.jpg"
                      alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"><a href="#"
                      class="blog-readmore">Read More</a></span> </div>
                <div class="blog-content">
                  <span class="blog-date">02/05/2016</span>


                  <h2 class="blog-name"><a href="single-blog.html">Explore collections that look great and feel
                      incredible, whatever ...</a></h2>

                  <div class="blog-desc"></div>
                  <span class="blog-author">By <a href="#">funchuk wangadu</a> </span><span
                    class="blog-comment">3Comments</span> <a href="#" class="blog-readmore">Read More</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog2 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_2.jpg"
                      alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"><a href="#"
                      class="blog-readmore">Read More</a></span> </div>
                <div class="blog-content">
                  <span class="blog-date">02/05/2016</span>


                  <h2 class="blog-name"><a href="single-blog.html">Explore collections that look great and feel
                      incredible, whatever ...</a></h2>

                  <div class="blog-desc"></div>
                  <span class="blog-author">By <a href="#">funchuk wangadu</a> </span><span
                    class="blog-comment">3Comments</span> <a href="#" class="blog-readmore">Read More</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog3 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_3.jpg"
                      alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"><a href="#"
                      class="blog-readmore">Read More</a></span> </div>
                <div class="blog-content">
                  <span class="blog-date">02/05/2016</span>


                  <h2 class="blog-name"><a href="single-blog.html">Explore collections that look great and feel
                      incredible, whatever ...</a></h2>

                  <div class="blog-desc"></div>
                  <span class="blog-author">By <a href="#">funchuk wangadu</a> </span><span
                    class="blog-comment">3Comments</span> <a href="#" class="blog-readmore">Read More</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog4 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_4.jpg"
                      alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"><a href="#"
                      class="blog-readmore">Read More</a></span> </div>
                <div class="blog-content">
                  <span class="blog-date">02/05/2016</span>


                  <h2 class="blog-name"><a href="single-blog.html">Explore collections that look great and feel
                      incredible, whatever ...</a></h2>

                  <div class="blog-desc"></div>
                  <span class="blog-author">By <a href="#">funchuk wangadu</a> </span><span
                    class="blog-comment">3Comments</span> <a href="#" class="blog-readmore">Read More</a>
                </div>
              </div>
            </li>
            <li class="item blog-slider-item">
              <div class="blog5 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_5.jpg"
                      alt="#"></a> <span class="blog-hover"></span> <span class="blog-readmore-outer"><a href="#"
                      class="blog-readmore">Read More</a></span> </div>
                <div class="blog-content">
                  <span class="blog-date">02/05/2016</span>


                  <h2 class="blog-name"><a href="single-blog.html">Explore collections that look great and feel
                      incredible, whatever ...</a></h2>

                  <div class="blog-desc"></div>
                  <span class="blog-author">By <a href="#">funchuk wangadu</a> </span><span
                    class="blog-comment">3Comments</span> <a href="#" class="blog-readmore">Read More</a>
                </div>
              </div>
            </li>
          </ul>
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
<div class="container">
  <h3 class="client-title">Favourite Brands</h3>
  <h4 class="title-subline">The High Quality Products</h4>
  <div id="brand_carouse" class="owl-carousel brand-logo">
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand1.png" alt="Disney"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand2.png" alt="Dell"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand3.png" alt="Harley"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand4.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand5.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand6.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand7.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand8.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand9.png" alt="Canon"
          class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="front_assets/image/brand/brand5.png" alt="Canon"
          class="img-responsive" /></a> </div>
  </div>
</div>

@endsection
