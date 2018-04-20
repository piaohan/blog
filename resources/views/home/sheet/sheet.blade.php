@extends('home.layouts.app')

@section('title','laravel速查表')

@section('container')
    <h2 class="text-center">laravel速查表</h2>
    <div><a href="{{Config::get('domain.myHttps')}}"> &lt;&lt;返回首页
        </a></div>
    <br>
    <p id="qianyi">迁移可用的数据列类型:</p>
    <table class="table table-hover table-condensed table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>命令</th>
            <th>命令描述</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $res as $r)
            <tr>
                <td scope="row">{{ $r->id }}</td>
                <td class="text-danger">{{ $r->aname }}</td>
                <td>{{ $r->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="#qianyi"
       style="position:fixed; right:20px; bottom:10px; width:20px; height:100px; background-color:#CCC; cursor:pointer; ">返回顶部</a>
@endsection