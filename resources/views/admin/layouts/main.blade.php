<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    @include('admin.layouts.head')
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    {{-- top --}}
    @include('admin.layouts.top')

    {{-- menu --}}
    @include('admin.layouts.menu')

    {{-- body --}}
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('body')
            </div>
        </div>
    </div>

    @include('admin.layouts.foot')
    
    @yield('script')
  </body>
</html>
