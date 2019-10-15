<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-left pull-left">
                        <div class="language">
                            <form action="#" method="post" enctype="multipart/form-data" id="language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false"> English <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Arabic</a></li>
                                        <li><a href="#"> English</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="currency">
                            <form action="#" method="post" enctype="multipart/form-data" id="currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <strong>USD</strong> <span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">Pound</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="wel-come-msg"> Welcome to our online store! </div>
                    </div>
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                @if(auth()->check())
                                <li>
                                    <a href=""></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" title="Account" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>@php echo auth()->user()->name @endphp</span> 
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{route('front.cart.index')}}">Cart</a></li>
                                        <li><a href="{{route('front.orders.index')}}">Orders</a></li>
                                        <li><a href="{{route('front.logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle"
                                        data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My
                                            Account</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{route('front.register')}}">Register</a></li>
                                        <li><a href="{{route('front.login')}}">Login</a></li>
                                    </ul>
                                </li>
                                
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-3 col-xs-3 header-left">
                <div id="logo"> <a href="index.html"><img src="front_assets/image/logo.png" title="E-Commerce" alt="E-Commerce"
                            class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-9 col-xs-9 header-right">
                <div id="search" class="input-group">
                    <form action="{{route('front.products.index')}}" method="get">
                        <input type="text" name="search" placeholder="Enter your keyword ..." class="form-control input-lg" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-lg"><span>Search</span></button>
                        </span> 
                    </form>
                </div>
                <div id="cart" class="btn-group btn-block">
                    <a href="{{route('front.cart.index')}}" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> 
                        <span id="cart-total">
                            <span>Shopping Cart</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>