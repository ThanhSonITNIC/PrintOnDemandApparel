@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
  <h1 class="category-title">Products</h1>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="category.html">Products</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
        @include('front.layouts.account.menu')
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
        @foreach ($products as $product)
            @include('front.products.item', $product)
        @endforeach
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

@endsection