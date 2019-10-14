@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <h1>Order</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Order</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="Categories left-sidebar-widget">
                <div class="columnblock-title">Top Categories</div>
                <div class="category_block">
                    <ul class="box-category treeview-list treeview">
                        <li><a href="#" class="activSub">Desktops</a>
                            <ul>
                                <li><a href="#">PC</a></li>
                                <li><a href="#">MAC</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
                            <ul>
                                <li><a href="#">Macs</a></li>
                                <li><a href="#">Windows</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="activSub">Components</a>
                            <ul>
                                <li><a href="#">Mice and Trackballs</a></li>
                                <li><a href="#" class="activSub">Monitors</a>
                                    <ul>
                                        <li><a href="#">test 1</a></li>
                                        <li><a href="#">test 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Windows</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Phones & PDAs</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">MP3 Players</a></li>
                    </ul>
                </div>
            </div>
            <div class="special left-sidebar-widget">
                <div class="columnblock-title">Special Product</div>
                <ul class="row ">
                    <li class="product-layout">
                        <div class="product-list col-xs-4">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product.html">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-01.jpg">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-01-1.jpg">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="caption product-detail">
                                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                                        class="price-old">$272.00</span> </p>
                                <div class="addto-product"><a href="#">Add to product</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="product-layout">
                        <div class="product-list col-xs-4">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product.html">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-03.jpg">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-03-1.jpg">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="caption product-detail">
                                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                                        class="price-old">$272.00</span> </p>
                                <div class="addto-product"><a href="#">Add to product</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="product-layout">
                        <div class="product-list col-xs-4">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product.html">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-05.jpg">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="front_assets/image/product/Pro-05-1.jpg">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="caption product-detail">
                                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                                        class="price-old">$272.00</span> </p>
                                <div class="addto-product"><a href="#">Add to product</a></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9" id="content">
            <form enctype="multipart/form-data" method="post" action="#">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products()->get() as $product)
                                <tr>
                                    <td class="text-center"><a href="product.html"><img class="img-thumbnail img-avatar" title="iPhone"
                                        alt="iPhone" src="{{asset(!isset(json_decode($product->product->images)->watermark) ?: json_decode($product->product->images)->watermark)}}"></a></td>
                                    <td class="text-left">
                                        <p><a href="{{route('front.products.show', $product->product->id)}}">{{$product->product->name}}</a></p>
                                        <p>Size: {{$product->size}}</p>
                                        <p>Color: {{$product->color}}</p>
                                        <input type="text" name="note" placeholder="Note" style="width: 100%">
                                    </td>
                                    <td class="text-left">
                                        <input type="text" class="form-control quantity" size="1" value="{{$product->quantity}}" name="quantity" readonly>
                                    </td>
                                    <td class="text-right">{{$product->price}}</td>
                                    <td class="text-right">{{$product->price * $product->quantity}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Id:</strong></td>
                                <td class="text-right">{{$order->id}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right">{{$order->total}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Paid:</strong></td>
                                <td class="text-right">{{$order->paid}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Status:</strong></td>
                                <td class="text-right">{{$order->status()->first()->name}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Created at:</strong></td>
                                <td class="text-right">{{$order->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
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