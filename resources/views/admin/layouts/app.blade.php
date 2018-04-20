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
    @yield('content')
</body>
@include('admin.layouts.footer_js')
@yield('footer')
</html>