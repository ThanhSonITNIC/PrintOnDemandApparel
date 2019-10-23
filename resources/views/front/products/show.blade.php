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
                    </div>
                </div>
                <div class="col-sm-7 prodetail">
                    <h1 class="productpage-title">{{$product->name}}</h1>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <h2 class="productpage-price">{{$product->price}}</h2>
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
                            <span>
                                @if($product->quantity > 0)
                                    In stock
                                @else
                                    Out of stock
                                @endif
                            </span>
                        </li>
                    </ul>
                    <hr>
                    <div id="product">
                        <form action="{{route('front.cart.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="id_product" value="{{$product->id}}">
                            <div class="form-group">
                                @foreach (explode(",", $product->sizes) as $size)
                                <div class="row">
                                    <div class="Sort-by col-md-4">
                                        <label>Size</label>
                                        <input type="text" class="form-control" readonly name="size[]" value="{{$size}}">
                                    </div>
                                    <div class="Color col-md-4">
                                        <label>Color</label>
                                        @php
                                        $colors = explode(",", $product->colors);
                                        @endphp
                                        <select id="select-by-color" name="color[]" class="selectpicker form-control">
                                            @foreach ($colors as $color)
                                            <option value="{{$color}}">{{$color}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="Color col-md-4">
                                        <label>Quantity</label>
                                        <input id="qty" class="form-control" name="quantity[]" min=0 max="{{$product->quantity}}" value="0" type="number">
                                    </div>
                                </div>
                                @endforeach

                                <div class="qty">
                                    <button type="submit" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                        <i class="fa fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
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
            <h3 class="productblock-title">Top Products</h3>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider">
                    @foreach ($topProducts as $product)
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock"> <a href="product.html">
                                    <img src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                    <img src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <li>
                                        <a href="{{route('front.products.show', $product->id)}}" class="addtocart-btn">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption product-detail">
                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
                                <p class="price product-price">{{$product->price}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection