<div class="Categories left-sidebar-widget">
    <div class="columnblock-title">Menu</div>
    <div class="category_block">
        <ul class="box-category treeview-list treeview">
            <li><a href="#" class="activSub">Products</a>
                <ul>
                    @foreach ($productTypes as $type)
                    <li><a href="{{route('front.products.index')."?searchFields=type.id&search=".$type->id}}">{{$type->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Cart</a></li>
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