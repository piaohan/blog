<html>
<head>
    <meta charset="utf-8">
    <title>孤雪飘寒的博客||piaohan's blog--@yield('title')</title>
    @include('home.layouts.meta')
    @include('home.layouts.style')
    @include('home.layouts.javascript')
    @section('style')
    @show
</head>

<body>
@include('home.layouts.nav')
@include('public.top')
@yield('container')
<footer>
    @include('home.layouts.footer')
    @yield('footer')
</footer>
</body>
@section('javascript')
@show
</html>