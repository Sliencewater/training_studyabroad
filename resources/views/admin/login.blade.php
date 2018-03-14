<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{URL::asset('css/admin/common.css')}}">
    <title>会员登陆</title>
</head>
<body>

{{--用户登陆模板区域开始--}}
<div class="div-user-login">

    <div class="div-login-form">
        <ul>
            <li>
                <a class="div-user-login-active" href="">常规登陆</a>
            </li>
            <li>
                <a href="">快捷登陆</a>
            </li>
        </ul>
        <form class="form-contents" action="admin/check" method="post">
            {{ csrf_field() }}
            <div class="form-items">
                <div class="div-login-tips div-login-tips-active">手机号/邮箱</div>
                {{--{!! Form::password('password', ['class' => 'input-login input-focus']) !!}--}}
                <input type="text" class="input-login input-focus" id="username" name="username">
            </div>
            <div class="form-items">
                <div class="div-login-tips">密码</div>
                <input type="password" class="input-login" id="password" name="password">
            </div>
            <div class="form-items-others">
                <input type="checkbox" class="login-rememberme" id="rememberme">
                <label for="rememberme">记住密码</label>
                <a id="form_a_forget" href="#">忘记密码？</a>
            </div>
            <input type="submit" id="login_submit" class="btn_login" value="登&nbsp;&nbsp;录" tabindex="4">
        </form>
    </div>
</div>
{{--用户登陆模板区域结束--}}
</body>
