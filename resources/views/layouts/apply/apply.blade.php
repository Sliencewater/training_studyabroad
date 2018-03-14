<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $author or '' }}">
    <title>@yield('title') {{ $site_title or '' }} </title>
    <meta name="keywords" content="{{ $site_keywords or '' }}">
    <meta name="description" content="@yield('description') {{ $site_description or '' }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_title or '' }}">
    <meta property="og:site_name" content="{{ $site_title or '' }}">
    <meta property="og:description" content="{{ $site_description or '' }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    @section('css')
    <link href="{{asset('css/common/reset.css?ver=')}}<?php echo random_int(1,100000)?>" rel="stylesheet">
    <link href="{{asset('css/home/apply.css?ver=')}}<?php echo random_int(1,100000)?>" rel="stylesheet">
    <link href="{{asset('css/home/footer.css?ver=')}}<?php echo random_int(1,100000)?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('css')
    @show
</head>
<body>
<div class="page-contents">
    {{--顶部区域开始--}}
    <header class="head">
        <div class="head-logo"><a href="{{ route('index') }}"></a></div>
        <div class="head-r-links">
            <ul class="ul-head-process">
                <li><a href="{{ route('apply') }}">{{Lang::get('apply.resume')}} &raquo;</a></li>
                <li><a href="{{ route('paypal') }}">{{Lang::get('apply.pay')}} &raquo;</a></li>
                <li><a href="#">{{Lang::get('apply.submit')}} &raquo;</a></li>
                <li><a href="#">{{Lang::get('apply.readyToSchool')}} &raquo;</a></li>
            </ul>
            <ul class="user-info">
                <li><a href="#">Mail</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">My</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </header>
    {{--顶部区域结束--}}

    <div class="div-page-main">
        <div class="top-contents">
        <div class="top-left">
            <div class="top-img">
                <img src="http://nfile.365zhaosheng.com/Upload/userimg/20150721115277037703.jpg" alt="江西财经大学">
            </div>
            <div class="top-detail">
                <div class="top-detail-title">欢迎报考江西财经大学</div>
                <div class="top-detail-detail">江西财经大学是一所财政部、教育部、江西省人民政府共建，以经济、管理类学科为主，法、工、文、理、艺术等学科协调发展的高等财经学府。</div>
                <div class="top-detail-more">
                    <a href="">View more</a>
                </div>
            </div>
        </div>
        <div class="top-right">
                <div class="top-img top-img-right">
                    <img src="http://member.ciss.org.cn/UploadFiles/ciss/Study-in-China-Registration-Handbook-2017-CISS.org.cn.jpg" alt="留学指南">
                </div>
                <div class="top-detail">
                    <div class="top-detail-title">Ready to School? You need a 《Study in China Registration Handbook》</div>
                    <div class="top-detail-detail">What you should konw are in one registration handbook!</div>
                    <div class="top-detail-more">
                        <a href="">View more</a>
                    </div>
                </div>
        </div>
        </div>
        <div class="div-main clearfix">
            <div class="div-l">
                <ul>
                    <li><a href="{{ route('apply.basicInformation') }}">{{Lang::get('apply.basicInformation')}}</a></li>
                    <li><a href="{{ route('apply.languageAbility') }}">{{Lang::get('apply.languageAbility')}}</a></li>
                    <li><a href="{{ route('apply.educationBackground') }}">{{Lang::get('apply.educationBackground')}}</a></li>
                    <li><a href="{{ route('apply.familyBackground') }}">{{Lang::get('apply.familyBackground')}}</a></li>
                    <li><a href="{{ route('apply.contactInformation') }}">{{Lang::get('apply.contactInformation')}}</a></li>
                    <li><a href="{{ route('apply.uploadDocuments') }}">{{Lang::get('apply.uploadDocuments')}}</a></li>
                </ul>
            </div>
            @yield('r-content')
        </div>
    </div>

</div>
{{--页脚区域开始--}}
<div class="apply-footer">
    <p>
            <span>Copyright&nbsp;&copy;&nbsp;2015&nbsp;-&nbsp;2017&nbsp;&nbsp;<a href="#">公道科技</a>&nbsp;版权所有</span>
        </p>
</div>
{{--页脚区域结束--}}

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/home/account.js?ver=')}}<?php echo random_int(1,100000)?>"></script>
@yield('script')
</body>
</html>