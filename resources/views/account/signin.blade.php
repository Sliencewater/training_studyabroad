<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/common/reset.css?ver=')}}<?php echo random_int(1, 100000)?>" rel="stylesheet">
    <link href="{{asset('css/home/member.css?ver=')}}<?php echo random_int(1, 100000)?>" rel="stylesheet">
    <link href="{{asset('css/home/common.css?ver=')}}<?php echo random_int(1, 100000)?>" rel="stylesheet">
    <link href="{{asset('css/home/footer.css?ver=')}}<?php echo random_int(1, 100000)?>" rel="stylesheet">

    <title>用户登陆</title>
</head>

<body>

<div class="page-contents">
    {{--<!--{{&#45;&#45;页面头部区域开始&#45;&#45;}}-->--}}
    <header class="head clearfix">
        <div class="head-contents">
            <div class="head-logo">Logo</div>
            <div class="head-r-links">
                <ul>
                    <li><a href="#">首页</a></li>
                    <li><a href="#">首页</a></li>
                    <li><a href="#">首页</a></li>
                </ul>
            </div>
        </div>

    </header>
    {{--<!--{{&#45;&#45;页面头部区域结束&#45;&#45;}}-->--}}


    <div class="div-main">
        <div class="div-slider">
            {{--<!--<img src="http://www.ciss.org.cn/New_search/images/dianzikeji.jpg" alt="">-->--}}
        </div>
        {{--<!--{{&#45;&#45;用户登陆模板区域开始&#45;&#45;}}-->--}}
        <div id="div_user_login" class="div-user-login">
            <div class="div-login-form">
                <ul>
                    <li>
                        <a id="signin" class="div-user-login-active" href="javascript:void(0);">登陆</a>
                    </li>
                    <li>
                        <a id="signup" href="javascript:void(0);">注册</a>
                    </li>
                </ul>
                <div id="form_signin" class="form-signin">
                    <form class="form-contents" action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-items">
                            <div class="div-login-tips div-login-tips-active">邮箱</div>
                            {{--<!--{{&#45;&#45;{!! Form::password('password', ['class' => 'input-login input-focus']) !!}&#45;&#45;}}-->--}}
                            <input type="text" class="input-login input-focus" id="email" name="email">
                        </div>
                        <div class="form-items">
                            <div class="div-login-tips">密码</div>
                            <input type="password" class="input-login" id="password" name="password">
                        </div>
                        <div class="form-items-others">
                            <input type="checkbox" class="login-rememberme" id="rememberme" name="rememberme">
                            <label for="rememberme">记住密码</label>
                            <a id="form_a_forget" href="#">忘记密码？</a>
                        </div>
                        <input type="submit" id="login_submit" class="btn_login" value="登&nbsp;&nbsp;录" tabindex="4">
                    </form>
                </div>
                <div id="form_signup" class="form-signup hidden">
                    <form class="form-contents" action="/account/register" method="post">
                        {{ csrf_field() }}
                        <div class="form-items">
                            <div class="div-signup-tips">请输入用户名：</div>
                            <input type="text" class="input-login" id="username" name="username">
                        </div>
                        <div class="form-items">
                            <div class="div-signup-tips div-signup-tips-active">请输入邮箱：</div>
                            <input type="text" class="input-login input-focus" id="email" name="email">
                        </div>

                        <div class="form-items">
                            <div class="div-signup-tips">请输入密码：</div>
                            <input type="password" class="input-login" id="password" name="password">
                        </div>
                        {{--<div class="form-items">--}}
                            {{--<div class="div-signup-tips">确认密码：</div>--}}
                            {{--<input type="password" class="input-login" id="passwordagain" name="passwordagain">--}}
                        {{--</div>--}}
                        <input type="submit" id="signup_submit" class="btn_login" value="注册" tabindex="4">
                    </form>
                </div>

            </div>
        </div>
        {{--<!--{{&#45;&#45;用户登陆模板区域结束&#45;&#45;}}-->--}}
    </div>
</div>

    {{--页脚区域开始--}}
    <div class="footer">

        <div class="footer-copyright">
            <div class="footer-copyright-links">
                <p>
                    <a href="#">关于我们</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">联系我们</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">申请合作</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">隐私政策</a>
                </p>
            </div>
            <div class="footer-copyright-info">
                <p>
                    <a href="#">京ICP证070359号</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">联系我们</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">申请合作</a>
                    <span class="mod-copyright-split">|</span>
                    <a href="#">隐私政策</a>
                </p>
                <p>
                    <span>Copyright&nbsp;&copy;&nbsp;2015&nbsp;-&nbsp;2017&nbsp;&nbsp;公道科技&nbsp;版权所有</span>
                </p>
            </div>
        </div>
    </div>
    {{--页脚区域结束--}}



<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('js/home/account.js?ver=')}}<?php echo random_int(1, 100000)?>"></script>

</body>
</html>