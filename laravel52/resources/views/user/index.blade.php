<!DOCTYPE html>
<html>
    <head>
        <title>用户注册</title>
        <link rel="stylesheet" href="{{asset('common\bootstrap\css\bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('common\layui\css\layui.css')}}">
        <script type="text/javascript" src="{{asset('common\layui\layui.all.js')}}"></script>
        <script type="text/javascript" src="{{asset('common\js\jquery-1.11.1.js')}}"></script>
        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="">
                    <div class="row">用户注册</div>
                    <div class="row input-group">
                         <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
                        <input type="text" id="username" name="username">用户名
                        <span class="username"></span>
                    </div>
                    <div class="row input-group">
                        <input type="password" id="password" name="password">密码
                        <span class="password"></span>
                    </div>
                    <div class="row input-group">
                        <input type="password" id="confirm" name="confirm">确认密码
                        <span class="confirm"></span>
                    </div>
                     <div class="row input-group">
                        <button type="button" class="btn btn-blue">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(function(){
            $('button').click(function(){
                var username = $.trim($('#username').val());
                var password = $.trim($('#password').val());
                var confirm = $.trim($('#confirm').val());

                if ( username == '' ) {
                    $('.username').html('<p>用户名不可以为空</p>');
                    $('#username').focus();
                    return false;
                }

                 if ( password !== confirm ) {
                    $('.confirm').html('<p>两次输入密码不一致</p>');
                    $('#password').focus();
                    return false;
                }

                $.ajax({
                    type: 'GET',
                    url:'/user/register',
                    data:{
                        username : username,
                        password : password
                    },
                    dataType: 'json',
                    success: function(obj) {
                        if (obj.code == 200) {
                            alert('注册成功');
                            self.location = '/';
                        }else{

                        }
                    }
                });

            });
        });
</script>
