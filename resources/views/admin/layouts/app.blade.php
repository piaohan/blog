<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head_meta')
    <title>@yield('title')</title>
    @include('admin.layouts.head_css')
    @include('admin.layouts.head_js')
    @yield('head')
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <div class="page-header navbar navbar-fixed-top">
    @include('admin.layouts.h_head')
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
    @include('admin.layouts.h_sidebar')
        @yield('content')
    </div>
    @include('admin.layouts.h_footer')
    </div>
</body>
@include('admin.layouts.footer_js')
@yield('footer')
</html>