@extends('layouts.app')
@section('content')
{{--    <div class="container">--}}
{{--        <h3 class="text-center text-warning"> 个人中心 </h3>--}}
{{--        @include('msg.msg')--}}
{{--        <div>--}}
{{--            <h4>{{ $user->name }}</h4>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <h5><strong>个人简介</strong></h5>--}}
{{--            <p>{{ $user->introduction }}</p>--}}
{{--            <hr>--}}
{{--            <h5><strong>注册于</strong></h5>--}}
{{--            <p>{{ $user->created_at->diffForHumans() }}</p>--}}
{{--        </div>--}}
{{--        <hr/>--}}
{{--        <div>--}}
{{--            <a href="{{ route('users.edit',$user->id) }}">编辑用户资料</a>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="card ">
            <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}">
            <div class="card-body">
                <h5><strong>个人简介</strong></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <hr>
                <h5><strong>注册于</strong></h5>
                <p>January 01 1901</p>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="card ">
            <div class="card-body">
                <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="card ">
            <div class="card-body">
                暂无数据 ~_~
            </div>
        </div>

    </div>
</div>
    @endsection
