<div class="product-layout product-list col-xs-12">
    <div class="product-thumb">
        <div class="image product-imageblock">
            <a href="{{route('front.products.show', $product->id)}}">
                <img src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                    class="img-responsive" />
                <img src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}" alt="iPod Classic"
                    class="img-responsive" />
            </a>
        </div>
        <div class="caption product-detail">
            <h4 class="product-name"><a href="{{route('front.products.show', $product->id)}}" title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
            <p class="price product-price">{{$product->price}}</p>
            <p class="product-desc">{{$product->description}}</p>
            <ul class="button-group list-btn">
                <li>
                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                        title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
            </ul>
        </div>
    </div>
</div>