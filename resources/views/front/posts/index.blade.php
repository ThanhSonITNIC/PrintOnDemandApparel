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
      @foreach ($posts as $post)
      <div class="blog1 blog" style="margin-top: 20px">
        <div class="blog-image"> 
          <a href="{{route('front.posts.show', $post->id)}}" class="blog-imagelink">
            <img src="{{asset(!isset(json_decode($post->image)->link) ?: json_decode($post->image)->link)}}" alt="#">
          </a>
          <span class="blog-hover"></span> </div>
        <div class="blog-content"> <span class="blog-date">{{$post->created_at}}</span>
          <h2 class="blog-name"><a href="{{route('front.posts.show', $post->id)}}">{{$post->title}}</a> </h2>
          <div class="blog-desc">{{$post->description}}</div>
          <a href="{{route('front.posts.show', $post->id)}}" class="blog-readmore">Read More</a>
        </div>
      </div>
      @endforeach
    </div>
    <!-- end blog-home -->
    <div class="col-sm-3 hidden-xs column-right" id="column-right">
      <div class="Categories right-sidebar-widget">
        <div class="columnblock-title">Categories</div>
        <div class="category_block">
          <ul class="box-category">
            @foreach ($postTypes as $type)
            <li><a href="{{route('front.posts.index')}}">{{$type->name}}</a></li>
            @endforeach
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

@endsection
