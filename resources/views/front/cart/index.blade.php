@extends('front.layouts.main')

@section('body')
<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="front_assets/image/prlx.jpg" alt="#"></div>
    <h1>Shopping Cart</h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="cart.html">Shopping Cart</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            @include('front.layouts.account.menu')
        </div>
        <div class="col-sm-9" id="content">
            <form enctype="multipart/form-data" method="post" action="#">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Price</td>
                                <td class="text-right">Total</td>
                                <td class="text-right">#</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="text-center"><a href="product.html"><img class="img-thumbnail img-avatar" title="iPhone"
                                        alt="iPhone" src="{{asset(!isset(json_decode($cart->product->images)->watermark) ?: json_decode($cart->product->images)->watermark)}}"></a></td>
                                    <td class="text-left">
                                        <p><a href="{{route('front.products.show', $cart->product->id)}}">{{$cart->product->name}}</a></p>
                                        <p>Size: {{$cart->size}}</p>
                                        <p>Color: {{$cart->color}}</p>
                                        <input type="text" name="note" form="f_{{$cart->id}}" placeholder="Note" value="{{$cart->note}}" style="width: 100%">
                                    </td>
                                    <td class="text-left">
                                        <input type="text" class="form-control quantity" size="1" form="f_{{$cart->id}}" value="{{$cart->quantity}}" name="quantity">
                                    </td>
                                    <td class="text-right">{{$cart->product->price}}</td>
                                    <td class="text-right">{{$cart->product->price * $cart->quantity}}</td>
                                    <td class="text-right">
                                        <p><button class="btn-success" type="submit" form="f_{{$cart->id}}"><i class="fa fa-check" style="width:20px"></i></button></p>
                                        <p><button class="btn-danger" type="submit" form="f_d_{{$cart->id}}"><i class="fa fa-times" style="width:20px"></i></button></p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
            @foreach ($carts as $cart)
                <form action="{{route('front.cart.update', $cart->id)}}" method="post" id="f_{{$cart->id}}">@method('PUT') @csrf</form>
            @endforeach
            @foreach ($carts as $cart)
                <form action="{{route('front.cart.destroy', $cart->id)}}" method="post" id="f_d_{{$cart->id}}">@method('DELETE') @csrf</form>
            @endforeach
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right">
                                    @php
                                        $total = 0;
                                        foreach ($carts as $cart) {
                                            $total += $cart->product->price * $cart->quantity;
                                        }   
                                        echo $total;
                                    @endphp
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="buttons">
                <div class="pull-left"><a class="btn btn-default" href="{{route('front.products.index')}}">Continue Shopping</a></div>
                <div class="pull-right">
                    <form action="{{route('front.orders.store')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection