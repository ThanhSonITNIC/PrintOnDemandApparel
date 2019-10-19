@extends('front.layouts.main')

@section('body')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <h1>{{$post->title}}</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="single-blog.html">{{$post->title}}</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="content col-sm-9">
            <div class="blog1 blog">
                <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                            src="{{asset(!isset(json_decode($post->image)->link) ?: json_decode($post->image)->link)}}"
                            alt="#"></a>
                    <span class="blog-hover"></span> </div>
                <div class="blog-content"> <span class="blog-date">{{$post->created_at}}</span>
                    <h2 class="blog-name"><a href="#">{{$post->title}}</a> </h2>
                    <div class="blog-desc">{{$post->description}}</div>
                    <div>
                        <p>
                            {!!$post->content!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 hidden-xs column-right" id="column-right">
            <div class="Categories left-sidebar-widget">
                <div class="columnblock-title">Categories</div>
                <div class="category_block">
                    <ul class="box-category">
                        @foreach ($postTypes as $type)
                            <li><a href="{{route('front.posts.index')}}">{{$type->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="Categories right-sidebar-widget">
                <div class="columnblock-title">Tags</div>
                <ul class="tagcloud">
                    @foreach (explode(',', $post->tags) as $tag)
                    <li><a href="{{route('front.posts.index')."?search=".$tag}}">{{$tag}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="recentpost left-sidebar-widget">
                <div class="columnblock-title">Top Posts</div>
                <div class="category_block">
                    <ul class="box-category">
                        @foreach ($topPosts as $post)
                        <li><a href="{{route('front.posts.show', $post->id)}}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- end blog-sidebar -->

    </div>
</div>
<!-- end container -->

@endsection