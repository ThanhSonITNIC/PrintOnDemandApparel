<nav id="menu" class="navbar">
    <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="/" class="parent">Home</a> </li>
                <li><a href="{{route('front.products.index')}}" class="parent">All</a> </li>
                @foreach ($productTypes as $type)
                    <li><a href="{{route('front.products.index')."?searchFields=type.id&search=".$type->id}}" class="parent">{{$type->name}}</a> </li>
                @endforeach
                <li><a href="{{route('front.posts.index')}}" class="parent">Posts</a></li>
                <li><a href="{{route('front.posts.show', 1)}}">About us</a></li>
                <li><a href="{{route('front.posts.show', 2)}}">Contact Us</a> </li>
            </ul>
        </div>
    </div>
</nav>