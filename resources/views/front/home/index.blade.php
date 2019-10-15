@extends('front.layouts.main')

@section('body')

<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
        <div class="item"> <a href="#"><img src="front_assets/image/banners/Main-Banner1.jpg" width="1900" height="600" alt="main-banner1"
                    class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="front_assets/image/banners/Main-Banner2.jpg" width="1900" height="600" alt="main-banner2"
                    class="img-responsive" /></a> </div>
    </div>
</div>

<div id="center">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">For Your Best Look</h3>
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            @foreach ($productTypes as $type)
                            <li class='tab'><a href="#tab-{{$type->id}}">{{$type->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- tab-furniture-->
                @foreach ($productTypes as $type)
                <div id="tab-{{$type->id}}" class="tab-content">
                    <div class="row" style="margin-top: 30px">
                        @foreach ($type->products as $product)
                            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="{{route('front.products.show', $product->id)}}"> <img
                                                    src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive" /> <img
                                                    src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                                                    title="iPod Classic" class="img-responsive" /> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                        to Cart </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="{{route('front.products.show', $product->id)}}"
                                                    title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
                                            <p class="price product-price">{{$product->price}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        @if(count($type->products) > 0)
                        <div class="viewmore">
                            <a href="{{route('front.products.index')}}" class="btn">View More All Products</a>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="content col-sm-12">
            <div class="customtab">
                <h3 class="productblock-title">Featured Products</h3>
                <h4 class="title-subline">What’s so special? Check it out!</h4>
            </div>
            <div id="tab-furniture" class="tab-content">
                <div id="special-slidertab" class="row owl-carousel product-slider">
                    @foreach ($productTypes as $type)
                        @foreach ($type->products as $product)
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product.html"> <img
                                            src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic" title="iPod Classic"
                                            class="img-responsive" /> <img src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
                                    <p class="price product-price">{{$product->price}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="content col-sm-12">
                <div class="blog">
                    <div class="blog-heading">
                        <h3>The Latest News</h3>
                        <h4 class="title-subline">Get amazing fashion inspiration, ideas and news in a click.</h4>
                    </div>
                    <div class="blog-inner box">
                        <ul class="list-unstyled blog-wrapper" id="latest-blog">
                            @foreach ($postTypes as $type)
                                @foreach ($type->posts as $post)
                                <li class="item blog-slider-item">
                                    <div class="blog1 blog">
                                        <div class="blog-image"> <a href="{{route('front.posts.show', $post->id)}}" class="blog-imagelink"><img
                                                    src="{{asset(!isset(json_decode($post->image)->watermark) ?: json_decode($post->image)->watermark)}}" alt="#"></a> <span
                                                class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                        </div>
                                        <div class="blog-content">
                                            <h2 class="blog-name"><a href="{{route('front.posts.show', $post->id)}}">{{$post->title}}</a></h2>
                                            <span class="blog-date">{{$post->created_at}}</span> <a
                                                href="{{route('front.posts.show', $post->id)}}" class="blog-readmore">Read more</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-top-cms parallax-container">
    <div class="parallax"><img src="front_assets/image/news.jpg" alt="#">
    </div>
    <div class="container">
        <div class="row">
            <div class="newslatter">
                <form>
                    <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                    <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!
                    </h4>
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