<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts.head')

    @yield('css')
</head>

<body class="index">
    <div class="preloader loader" style="display: block;"> <img src="front_assets/image/loader.gif" alt="#" /></div>
    
    @include('front.layouts.header')

    @include('front.layouts.menu')

    @include('layouts.alert')

    @yield('body')

    @include('front.layouts.footer')

    @include('front.layouts.foot')

    @yield('script')
</body>

</html>