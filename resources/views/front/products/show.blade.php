@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <h1>Product</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="category.html">Products</a></li>
        <li><a href="#">{{$product->name}}</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="content col-sm-12">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thumbnails">
                        <div><a class="thumbnail fancybox"
                                href="{{asset(!isset(json_decode($product->images)->link) ?: json_decode($product->images)->link)}}"
                                title="Casual Shirt With Ruffle Hem"><img
                                    src="{{asset(!isset(json_decode($product->images)->link) ?: json_decode($product->images)->link)}}"
                                    title="Casual Shirt With Ruffle Hem" alt="iPod Classic" /></a></div>
                        <div id="product-thumbnail" class="owl-carousel">
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product1.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-09.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product2.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-02.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product3.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-05.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product4.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-08.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product5.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-06.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product6.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-04.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail fancybox"
                                        href="front_assets/image/product/product7.jpg" title="iPod Classic"> <img
                                            src="front_assets/image/product/Pro-09.jpg" title="iPod Classic"
                                            alt="iPod Classic" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 prodetail">
                    <h1 class="productpage-title">{{$product->name}}</h1>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <h2 class="productpage-price">$122.00</h2>
                        </li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>Type:</label>
                            <span> <a href="#">{{$product->type->name}}</a></span></li>
                        <li>
                            <label>Product Code:</label>
                            <span> {{$product->id}}</span></li>
                        <li>
                            <label>Availability:</label>
                            <span> In Stock</span></li>
                    </ul>
                    <hr>
                    <div id="product">
                        <form action="{{route('front.cart.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="id_product" value="{{$product->id}}">
                            <div class="form-group">
                                <div class="row">
                                    <div class="Sort-by col-md-6">
                                        <label>Size</label>
                                        @php
                                        $sizes = explode(",", $product->sizes);
                                        @endphp
                                        <select id="select-by-size" name="size" class="selectpicker form-control">
                                            @foreach ($sizes as $size)
                                            <option value="{{$size}}">{{$size}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="Color col-md-6">
                                        <label>Color</label>
                                        @php
                                        $colors = explode(",", $product->colors);
                                        @endphp
                                        <select id="select-by-color" name="color" class="selectpicker form-control">
                                            @foreach ($colors as $color)
                                            <option value="{{$color}}">{{$color}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="qty">
                                    <label>Qty</label>
                                    <input id="qty" name="quantity" min=1 value="1" type="number">
                                    <ul class="button-group list-btn">
                                        <li>
                                            <button type="submit" class="addtocart-btn" data-toggle="tooltip"
                                                data-placement="top" title="Add to Cart"><i
                                                    class="fa fa-shopping-bag"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="productinfo-tab">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                    <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <div class="cpt_product_description ">
                            <div>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                        <!-- cpt_container_end -->
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="form-horizontal">
                            <div id="review"></div>
                            <h2>Write a review</h2>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-name">Your Name</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-review">Your Review</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                        translated!</div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label">Rating</label>
                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                    <input type="radio" name="rating" value="1" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="2" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="3" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="4" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="5" />
                                    &nbsp;Good</div>
                            </div>
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <button type="button" id="button-review" data-loading-text="Loading..."
                                        class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h3 class="productblock-title">Related Products</h3>
            <h4 class="title-subline">What’s so special? Check it out!</h4>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider">
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product1.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product1-1.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product2.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product2-2.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product4.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product4-4.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product5.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product5-5.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product6.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product6-6.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product7.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product7-7.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="front_assets/image/product/product8.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="front_assets/image/product/product8-8.jpg" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>
                                    <li>
                                        <button title="Add to Cart" class="addtocart-btn" type="button">Add to
                                            Cart</button>
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
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt
                                        With Ruffle
                                        Hem</a></h4>
                                <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection