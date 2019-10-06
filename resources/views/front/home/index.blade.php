@extends('front.layouts.main')

@section('body')

<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
        <div class="item"> <a href="#"><img src="front_assets/image/banners/Main-Banner1.jpg" alt="main-banner1"
                    class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="front_assets/image/banners/Main-Banner2.jpg" alt="main-banner2"
                    class="img-responsive" /></a> </div>
        <div class="item"> <a href="#"><img src="front_assets/image/banners/Main-Banner3.jpg" alt="main-banner3"
                    class="img-responsive" /></a> </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="cms_banner">
            <div class="col-xs-12 col-md-6">
                <div id="subbanner1" class="banner sub-hover">
                    <a href="#"><img src="front_assets/image/banners/subbanner1.jpg" alt="Sub Banner1"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>wonem online</h2>
                        <p>Shop New Season Clothing</p>
                        <button class="btn">Shop Now</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div id="subbanner2" class="banner sub-hover">
                    <a href="#"><img src="front_assets/image/banners/subbanner2.jpg" alt="Sub Banner2"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>Accessories </h2>
                        <p>Get Wide Range Selection</p>
                        <button class="btn">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
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
                            <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                            <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                            <li class='tab'><a href="#tab-kitche">Specials</a></li>
                            <li class='tab'><a href="#tab-outdoo">New product</a></li>
                        </ul>
                    </div>
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product1-1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product2-2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                    to Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img
                                                src="front_assets/image/product/product3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product3-3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product4-4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product5-5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product6-6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product7-7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product8-8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
                <!-- tab-living-->
                <div id="tab-livin" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product10.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product10-10.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product9.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product9-9.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                    to Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img
                                                src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product3-3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product4-4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product5-5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product6-6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product7-7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product8-8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
                <!-- tab-living-->
                <div id="tab-kitche" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product1-1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product2-2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                    to Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img
                                                src="front_assets/image/product/product10.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product3-3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product4-4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product5-5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product9.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product6-6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product7-7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product8-8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
                <!-- tab-decor-->
                <div id="tab-outdoo" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product1-1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product2-2.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add
                                                    to Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img
                                                src="front_assets/image/product/product1.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product3-3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product4-4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product5-5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product5.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product6-6.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product4.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product7-7.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> <img
                                                src="front_assets/image/product/product8-8.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add
                                                    to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <div class="container">
        <ul id="testimonial" class="row owl-carousel product-slider">
            <li class="item">
                <div class="panel-default">
                    <div class="testimonial-image z-depth-5"><img src="front_assets/image/t1.png" alt="#"></div>
                    <div class="testimonial-name">
                        <h2>Janet Wilson</h2>
                    </div>
                    <div class="testimonial-designation">
                        <p>Web Designer</p>
                    </div>
                    <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                        labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                        mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                        consectetur adipisicing.</div>
                </div>
            </li>
            <li class="item">
                <div class="panel-default">
                    <div class="testimonial-image"><img src="front_assets/image/t2.png" alt="#"></div>
                    <div class="testimonial-name">
                        <h2>Linda Howard</h2>
                    </div>
                    <div class="testimonial-designation">
                        <p>Web Deweloper</p>
                    </div>
                    <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                        labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                        mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                        consectetur adipisicing.</div>
                </div>
            </li>
            <li class="item">
                <div class="panel-default">
                    <div class="testimonial-image"><img src="front_assets/image/t3.png" alt="#"></div>
                    <div class="testimonial-name">
                        <h2>Janet Wilson</h2>
                    </div>
                    <div class="testimonial-designation">
                        <p>Web Designer</p>
                    </div>
                    <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                        labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                        mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                        consectetur adipisicing.</div>
                </div>
            </li>
        </ul>
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
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product2.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product2-2.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product3.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product3-3.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product4.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product4-4.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product5.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product5-5.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product6.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product6-6.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="product.html"> <img
                                        src="front_assets/image/product/product7.jpg" alt="iPod Classic" title="iPod Classic"
                                        class="img-responsive" /> <img src="front_assets/image/product/product7-7.jpg"
                                        alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                <ul class="button-group">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip"
                                            data-placement="top" title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <div class="rating"> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i><i
                                            class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                        Shirt With Ruffle Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
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
                            <li class="item blog-slider-item">
                                <div class="blog1 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="front_assets/image/blog/blog_1.jpg" alt="#"></a> <span
                                            class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new
                                                of model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode
                                                Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a
                                            href="single-blog.html" class="blog-readmore">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog2 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="front_assets/image/blog/blog_2.jpg" alt="#"></a> <span
                                            class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new
                                                of model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode
                                                Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a
                                            href="single-blog.html" class="blog-readmore">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog3 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="front_assets/image/blog/blog_3.jpg" alt="#"></a> <span
                                            class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new
                                                of model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a>
                                        </span><span class="blog-date">Jun 29, 2017</span> <a
                                            href="single-blog.html" class="blog-readmore">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog4 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="front_assets/image/blog/blog_4.jpg" alt="#"></a> <span
                                            class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new
                                                of model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode
                                                Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a
                                            href="single-blog.html" class="blog-readmore">Read more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog5 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="front_assets/image/blog/blog_5.jpg" alt="#"></a> <span
                                            class="blog-hover"></span> <span class="blog-readmore-outer"></span>
                                    </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new
                                                of model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode
                                                Themes</a></span><span class="blog-date">Jun 29, 2017</span> <a
                                            href="single-blog.html" class="blog-readmore">Read more</a>
                                    </div>
                                </div>
                            </li>
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