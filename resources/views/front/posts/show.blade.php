@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <h1>We Have Got Answers</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="single-blog.html">Singale Post</a></li>
    </ul>
    </div>
    <div class="container">
    <div class="row">
        <div class="content col-sm-9">
        <div class="blog1 blog">
            <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="front_assets/image/blog/blog_1.jpg" alt="#"></a>
            <span class="blog-hover"></span> </div>
            <div class="blog-content"> <span class="blog-date">02/05/2016</span>
            <h2 class="blog-name"><a href="#">You Have Got Questions We have Got Answers</a> </h2>
            <span class="blog-author">by <a href="#"> funchuk wangadu</a> </span> <span class="blog-comment">3
                comments</span>
            <div class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
                similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
                facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
                similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
                facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
                similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
                facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus
                similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat
                facilis tempora ab </div>
            <blockquote>consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus
                erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget,
                venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Ut ut
                justo facilisis, vulputate augue vel, vestibulum tortor. Nullam varius lacus non porttitor sodales.
                Vivamus ultricies est vitae pharetra convallis. Sed suscipit, nisi sit amet tempus mollis, mauris ante
                tempor risu</blockquote>
            </div>
            <div class="author-about">
            <h3 class="author-about-title">About the Author</h3>
            <div class="author">
                <div class="author-avatar"> <a href="#"><img alt="" src="front_assets/image/user1.jpg"></a> </div>
                <div class="author-body">
                <h5 class="author-name"><a href="#">Radley Lobortis</a></h5>
                <div class="author-content">Vivamus imperdiet ex sed lobortis luctus. Aenean posuere nulla in turpis
                    porttitor laoreet. Quisque finibus aliquet purus. Ut et mi eu ante interdum .</div>
                </div>
            </div>
            </div>
            <div id="comments" class="comments-area">
            <h3 class="comment-title">3 comments</h3>
            <ul class="comment-list">
                <li class="comment">
                <article class="comment-body">
                    <div class="comment-avatar"> <img alt="" src="front_assets/image/user2.jpg"> </div>
                    <div class="comment-main">
                    <h5 class="author-name"> <a href="#" class="comment-name">Radley Lobortis</a> <small
                        class="comment-date">8 months ago</small> </h5>
                    <div class="comment-reply"> <a href="#">Reply</a> </div>
                    <div class="comment-content">Sed lobortis rpis porttitor larpis porttitor larpis porttitor lauctus.
                        Aenean posuere nulla in turpis porttitor laoreet. Quisque finibus aliquet purus.</div>
                    </div>
                </article>
                <ol class="children">
                    <li class="comment">
                    <article class="comment-body">
                        <div class="comment-avatar"> <img alt="" src="front_assets/image/user3.jpg"> </div>
                        <div class="comment-main">
                        <h5 class="author-name"> <a href="#" class="comment-name">Lobortis Radley</a> <small
                            class="comment-date">1 months ago</small> </h5>
                        <div class="comment-reply"> <a href="#">Reply</a> </div>
                        <div class="comment-content">Dcenas euismod faucibus dolor a finibus.Maecenas euismod faucibus
                            dolor a finibus.Maecenas euismod faucibus dolor a finibus.Maecenas euismod faucibus dolor a
                            finibus.cenas euismod faucibus dolor a finibus.</div>
                        </div>
                    </article>
                    </li>
                </ol>
                </li>
                <li class="comment">
                <article class="comment-body">
                    <div class="comment-avatar"> <img alt="" src="front_assets/image/user1.jpg"> </div>
                    <div class="comment-main">
                    <h5 class="author-name"> <a href="#" class="comment-name">Sradle Vivamus </a> <small
                        class="comment-date">8 days ago</small> </h5>
                    <div class="comment-reply"> <a href="#">Reply</a> </div>
                    <div class="comment-content">Vivamus imperdiet ex sed lobortis luctus. Aenean posuere nulla in
                        turpis porttitor laoreet. Quisque finibus aliquet purus. Ut et mi eu ante interdum dignissim
                        pellentesque a mi.</div>
                    </div>
                </article>
                </li>
            </ul>
            <div class="leave-form">
                <h3 class="comment-title" id="reply-title">Leave a reply</h3>
                <div class="row">
                <form action="#" method="POST" name="contactform">
                    <div class="col-sm-6">
                    <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="col-sm-6 ">
                    <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="col-xs-12 ">
                    <textarea cols="30" rows="3" placeholder="Message" name="message" required></textarea>
                    </div>
                    <div class="col-xs-12  text-center">
                    <div class="commun-btn">
                        <button class="btn" name="submit" type="submit">Submit</button>
                    </div>
                    </div>
                </form>
                <!-- End Form -->
                </div>
            </div>
            </div>

            <!-- end comment-form -->

        </div>
        </div>
        <div class="col-sm-3 hidden-xs column-right" id="column-right">
        <div class="Categories left-sidebar-widget">
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
        <div class="recentpost left-sidebar-widget">
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
        </div>
        <!-- end blog-sidebar -->

    </div>
    </div>
    <!-- end container -->
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
