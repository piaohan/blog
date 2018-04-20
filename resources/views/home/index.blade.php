@extends('home.layouts.app')
@section('title')首页 @stop
@section('container')
    <div class="container">
    @include('public.header')

    <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <div class="post-preview">
                        <a href="{{url('/article/1')}}">
                            <h2 class="post-title">
                                笨方法学写作之如何练习写作
                            </h2>

                            <div class="post-content-preview">
                                总有新手问我如何练习写作，我举两个例子：

                                A 问：「如何练习写作？」

                                我：「你先去写，练习写满 7 天。」

                                A 问：「就是不知道如何写，有什么写作指南吗？」

                                于是我将《指南》发给他，A 后来就没有下文了。

                                B 问：「如何练习写作？」

                                我：「你先去写，练习写满 7...
                            </div>
                        </a>
                        <small class="post-meta pull-right">Posted on 2017-09-22</small>
                        <div class=" clearfix"></div>
                    </div>
                    <hr>


                </div>
            </div>
        </div>
    </div>
@endsection