@extends('front.layouts.main')

@section('body')
    
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
  <h1 class="category-title">Desktops</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="category.html">Electronics</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="Categories left-sidebar-widget">
        <div class="columnblock-title">Top Categories</div>
        <div class="category_block">
          <ul class="box-category treeview">
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
      <div class="filter left-sidebar-widget">
        <div class="columnblock-title">Refine Search</div>
        <div class="filter-block">
          <div class="list-group">
            <p class="list-group-item">Color</p>
            <div class="list-group-item">
              <div id="filter-group1">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="1" />
                  Black (7)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="2" />
                  Blue (6)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="3" />
                  Red (6)</label>
              </div>
            </div>
            <p class="list-group-item">Price</p>
            <div class="list-group-item">
              <div id="filter-group2">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="4" />
                  $100-$300 (6)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="5" />
                  $301-$1000 (6)</label>
              </div>
            </div>
            <p class="list-group-item">Size</p>
            <div class="list-group-item">
              <div id="filter-group3">
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="6" />
                  Big (3)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="7" />
                  Medium (3)</label>
                <label class="checkbox">
                  <input name="filter[]" type="checkbox" value="8" />
                  Small (1)</label>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
          </div>
        </div>
      </div>
      <div class="banner left-sidebar-widget"> <a href="#"><img src="front_assets/image/banners/LeftBanner.jpg" alt="Left Banner"
            class="img-responsive" /></a> </div>
      <div class="special left-sidebar-widget">
        <div class="columnblock-title">Special Product</div>
        <ul class="row ">
          <li class="product-layout">
            <div class="product-list col-xs-4">
              <div class="product-thumb">
                <div class="image product-imageblock">
                  <a href="product.html">
                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                      src="front_assets/image/product/Pro-06.jpg">
                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                      src="front_assets/image/product/Pro-06-1.jpg">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xs-8">
              <div class="caption product-detail">
                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle
                    Hem</a></h4>
                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                    class="price-old">$272.00</span> </p>
                <div class="addto-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </li>
          <li class="product-layout">
            <div class="product-list col-xs-4">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html">
                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                      src="front_assets/image/product/Pro-02.jpg">
                    <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                      src="front_assets/image/product/Pro-02-1.jpg">
                  </a> </div>
              </div>
            </div>
            <div class="col-xs-8">
              <div class="caption product-detail">
                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle
                    Hem</a></h4>
                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                    class="price-old">$272.00</span> </p>
                <div class="addto-cart"><a href="#">Add to Cart</a></div>
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
                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle
                    Hem</a></h4>
                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                    class="price-old">$272.00</span> </p>
                <div class="addto-cart"><a href="#">Add to Cart</a></div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class=" content col-sm-9">
      <div class="category-page-wrapper">
        <div class="col-md-2 text-right sort-wrapper">
          <label class="control-label" for="input-sort">Sort By :</label>
          <div class="sort-inner">
            <select id="input-sort" class="form-control">
              <option value="ASC" selected="selected">Default</option>
              <option value="ASC">Name (A - Z)</option>
              <option value="DESC">Name (Z - A)</option>
              <option value="ASC">Price (Low &gt; High)</option>
              <option value="DESC">Price (High &gt; Low)</option>
              <option value="DESC">Rating (Highest)</option>
              <option value="ASC">Rating (Lowest)</option>
              <option value="ASC">Model (A - Z)</option>
              <option value="DESC">Model (Z - A)</option>
            </select>
          </div>
        </div>
        <div class="col-md-1 text-right page-wrapper">
          <label class="control-label" for="input-limit">Show :</label>
          <div class="limit">
            <select id="input-limit" class="form-control">
              <option value="8" selected="selected">08</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="75">75</option>
              <option value="100">100</option>
            </select>
          </div>
        </div>
        <div class="col-md-6 list-grid-wrapper"> <a href="#" id="compare-total">Product Compare (0)</a>
          <div class="btn-group btn-list-grid">
            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip"
              title="List"></button>
            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip"
              title="Grid"></button>
          </div>
        </div>
      </div>
      <br />
      <div class="grid-list-wrapper">
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock">
              <a href="product.html">
                <img src="front_assets/image/product/Pro-04.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-04-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart">Add to Cart</button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-03.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-03-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-06.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-06-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-07.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-07-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-08.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-08-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-09.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-09-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-010.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-010-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image product-imageblock"> <a href="product.html">
                <img src="front_assets/image/product/Pro-01.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                <img src="front_assets/image/product/Pro-01-1.jpg" alt="iPod Classic" title="iPod Classic"
                  class="img-responsive" />
              </a>
              <ul class="button-group grid-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                    class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                    class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span
                  class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                  Hem</a></h4>
              <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
              <p class="product-desc"> More room to move.

                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy
                up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                Cover Flow.

                Browse through your music collection by flipping..</p>
              <ul class="button-group list-btn">
                <li>
                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                    title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                </li>
                <li>
                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                    title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </li>
                <li>
                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                    title="Quick View"><i class="fa fa-eye"></i></button>
                </li>
                <li>
                  <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top"
                    title="Add to Cart"><i class="fa fa-shopping-bag"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="category-page-wrapper">
        <div class="result-inner">Showing 1 to 8 of 10 (2 Pages)</div>
        <div class="pagination-inner">
          <ul class="pagination">
            <li class="active"><span>1</span></li>
            <li><a href="category.html">2</a></li>
            <li><a href="category.html">&gt;</a></li>
            <li><a href="category.html">&gt;|</a></li>
          </ul>
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
