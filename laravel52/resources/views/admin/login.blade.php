<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('/assets_admin_login/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_admin_login/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_admin_login/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets_admin_login/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets_admin_login/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets_admin_login/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets_admin_login/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets_admin_login/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets_admin_login/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Bootstrap</strong> Login Form</h1>
                    <div class="description">
                        <p>
                            This is a free responsive login form made with Bootstrap.
                            Download it on <a href="#"><strong>AZMIND</strong></a>, customize and use it as you like!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>登录后台</h3>
                            @if(session('msg'))
                                <p>session('msg')</p>
                            @else(
                                <p>请输入管理员账户名密码登录:</p>
                            )
                            @endif
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="/admin/login" method="post" class="login-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">登录</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">
                    {{--<h3>...or login with:</h3>--}}
                    {{--<div class="social-login-buttons">--}}
                        {{--<a class="btn btn-link-2" href="#">--}}
                            {{--<i class="fa fa-facebook"></i> Facebook--}}
                        {{--</a>--}}
                        {{--<a class="btn btn-link-2" href="#">--}}
                            {{--<i class="fa fa-twitter"></i> Twitter--}}
                        {{--</a>--}}
                        {{--<a class="btn btn-link-2" href="#">--}}
                            {{--<i class="fa fa-google-plus"></i> Google Plus--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="{{asset('assets_admin_login/ico/apple-touch-icon-57-precomposed.png')}}"></script>
<script src="{{asset('assets_admin_login/ico/apple-touch-icon-57-precomposed.png')}}"></script>
<script src="{{asset('assets_admin_login/js/jquery.backstretch.min.js')}}</script>

<!--[if lt IE 10]>
{{--<script src="{{asset('assets_admin_login/js/jquery.backstretch.min.js')}}">--}}
<![endif]-->

</body>

</html>