<div class="Categories left-sidebar-widget">
    <div class="columnblock-title">Menu</div>
    <div class="category_block">
        <ul class="box-category treeview-list treeview">
            <li><a href="{{route('front.products.index')}}" class="activSub">Products</a>
                <ul>
                    @foreach ($productTypes as $type)
                    <li><a href="{{route('front.products.index')."?searchFields=type.id&search=".$type->id}}">{{$type->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('front.orders.index')}}">Orders</a></li>
            <li><a href="{{route('front.cart.index')}}">Cart</a></li>
        </ul>
    </div>
</div>
<div class="special left-sidebar-widget">
    <div class="columnblock-title">Special Product</div>
    <ul class="row ">
        @foreach ($topProducts as $product)
        <li class="product-layout">
            <div class="product-list col-xs-4">
                <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="{{route('front.products.show', $product->id)}}">
                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}">
                            <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                src="{{asset(!isset(json_decode($product->images)->watermark) ?: json_decode($product->images)->watermark)}}">
                        </a> </div>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="caption product-detail">
                    <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">{{$product->name}}</a></h4>
                    <p class="price product-price"> <span class="price-new">{{$product->price}}</span></p>
                    <div class="addto-product"><a href="{{route('front.products.show', $product->id)}}">Detail</a></div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>