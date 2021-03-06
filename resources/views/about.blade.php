@extends('home.layouts.app')
@section('title','我爱我家 | 牟勇(孤雪飘寒)的个人网站')
@section('style')
    <link href="{{URL::asset('css/aboutme.css')}}" rel="stylesheet"/>
@endsection
@section('container')
    <div class="impress-not-supported">
        <div class="fallback-message">
            <p>您的浏览器 <b>不支持</b> impress.js的展示要求, 将为您呈现简化版的展示</p>
            <p>为了获取最佳效果，请使用最新版的<b>Chrome</b>, <b>Safari</b> 或 <b>Firefox</b> 浏览器</p>
            <p>珍爱生命，保护地球，远离IE。</p>
            <p>可以看看这个版本的 <a href="https://piaohan.github.io/animating-resume/dist/">关于自己</a></p>
        </div>

        <div id="impress">

            <div id="welcome" class="step" data-x="-2000" data-y="-2500">
                <p>欢迎来到</p>
                <p><span class="title"><b>飘寒的博客</b></span></p>
                <p><span class="footnote"><sup>*</sup>我叫<span class="name">牟勇</span>，这里是我的巢</span></p>
            </div>

            <div id="me" class="step" data-x="0" data-y="-2500">
                <b class="now_me">现在的我：</b>
                <ul>
                    <li><b class="unity">职业 php 开发者</b></li>
                    <li><b class="ios">业余 php全栈 开发者</b></li>
                    <li><b class="photo">对技术的追梦者</b></li>
                </ul>
            </div>

            <div id="whereiam" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="3">
                <p>长于<span class="kunming">攀枝花</span></p>
                <p><span class="born">惯于闲看花飞花落</span></p>
                <p>为了<span class="tsinghua">梦想</span></p>
                <p><span class="study">甘愿从头开始</span></p>
            </div>

            <div id="world" class="step" data-x="-100" data-y="2900" data-z="900" data-rotate="-90" data-scale="5">
                <p>有时候会觉得，世界真的很小</p>
            </div>

            <div id="meet" class="step" data-x="1300" data-y="6000" data-z="2400" data-scale="6">
                <p>也许我们就在某时某地</p>
                <p>曾经擦肩而过</p>
                <p>而你我，却浑然不觉</p>
            </div>

            <div id="tiny" class="step" data-x="1300" data-y="6000" data-z="-3000" data-rotate="300" data-scale="1">
                <p>但是</p>
            </div>

            <div id="comein" class="step" data-x="0" data-y="7000" data-z="-3000" data-rotate="300">
                <p>从此刻开始，从您踏入<a href="{{Config::get('domain.blogHttp')}}">孤雪飘寒的窝</a>开始</p>
                <p>我们的生活便有了<b>交集</b></p>
            </div>

            <div id="mywords" class="step" data-x="4500" data-y="3500" data-z="3000" data-rotate="160">
                <p>也许您在这里能看到的只是</p>
                <p>中国千千万万 程序猿(攻城狮)之中最普通的一员</p>
                <p>所写下的最蹩足的文字</p>
            </div>

            <div id="grow" class="step" data-x="3500" data-y="-850" data-z="3000" data-rotate="270" data-scale="6">
                <p>但我相信它们真实地记载了</p>
                <p><b>我的生活，我的成长</b></p>
            </div>

            <div id="knowme" class="step" data-x="-6000" data-y="-800" data-z="0" data-rotate="0" data-scale="1">
                <p>正如</p>
                <p>伯乐得见绝世好马，子期终遇伯牙佳音</p>
            </div>

            <div id="prizeme" class="step" data-x="-6000" data-y="-500" data-z="-500" data-rotate-x="-40"
                 data-rotate-y="10"
                 data-scale="2">
                <p><span class="horse">良驹美景，</span> <span class="moutain">高山流水，</span> <span class="hope">我真心希望</span>
                    <span
                            class="youare">您就是</span> <span class="my">我的伯乐，我的子期</span></p>
            </div>

            <div id="one-more-thing" class="step" data-x="-1500" data-y="-1100" data-z="0" data-scale="2">
                <p>One More Thing</p>
                <p>其实是一句话，想分享给您</p>
            </div>

            <div id="motto" class="step" data-x="0" data-y="1500" data-z="6000" data-scale="5">
                <p>不论您走到哪儿，在做什么</p>
                <p>都请 勿忘初心 请记住</p>
                <p><b>上善若水，人淡如菊</b></p>
            </div>

            <div id="back" class="step" data-x="-6000" data-y="5200" data-scale="2">
                <p>谢谢您的来访</p>
                <p>点击<a href="\">这里</a>返回飘寒的博客</p>
            </div>

            <div id="overview" class="step" data-x="0" data-y="2500" data-scale="16">
            </div>

        </div>

        <div class="hint">
            <p>使用空格或方向键继续</p>
        </div>
        <script>
            if ("ontouchstart" in document.documentElement) {
                document.querySelector(".hint").innerHTML = "<p>在左侧或右侧点击继续</p>";
            }
        </script>

        <script src="{{URL::asset('js/impress.js')}}"></script>
        <script>impress().init();</script>


    </div>
@endsection

