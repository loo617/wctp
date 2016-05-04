<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/mystyle.css">

    <script src="style/css/jquery.min.js"></script>
    <script src="style/css/bootstrap.min.js"></script>
    <title>登录</title>

    <script>
        $(function(){
            var nickname = $("#Nickname").val();
            var password = $("#Password").val();

            $("#Nickname").blur(function(){
                nickname = $("#Nickname").val();
                if(nickname == ""){
                    $("#Nickname_tx").html("用户名不能为空！");
                }else if(!(/^.*?[a-zA-Z0-9].*$/.test(nickname) && /^.{6,16}$/.test(nickname))){
                    $("#Nickname_tx").html("昵称名由6-16字母或数字组成！");
                }else{
                    $("#Nickname_tx").html("");
                }
            });

            $("#Password").blur(function () {
                password = $("#Password").val();
                if(password == ""){
                    $("#Password_tx").html("密码不能为空！");
                }else if(!(/^.*?[\d]+.*$/.test(password) && /^.*?[A-Za-z].*$/.test(password) && /^.{6,16}$/.test(password))){
                    $("#Password_tx").html("密码由6-16字母+数字组成!");
                }else{
                    $("#Password_tx").html("");
                }
            });

        });
    </script>
</head>
<body>


    <div class="container container-register container-login">
        <h3>欢迎登录教学资源平台</h3>
        <form action="login_handle.php" method="post" onsubmit="return regcheck()">

            <div class="form-group">
                <label for="exampleInputEmail1">昵称名：</label>
                <input type="text" class="form-control" id="Nickname" name="nick_name" placeholder="昵称名">
            </div>
            <span class="stuinfo" id="Nickname_tx"></span>
            <div class="form-group">
                <label for="exampleInputPassword1">密码：</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="密码">
            </div>
            <span class="stuinfo" id="Password_tx"></span>
            <br>
            <div style="clear: both;"></div>
            <button type="reset" class="btn btn-primary reset">重置</button>
            <button type="submit" class="btn btn-primary login" >登录</button>
        </form>
    </div>

    <!-- footer-->

    <div>
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>© 江苏科技大学 教学资源平台 <a href="http://www.just.edu.cn"> 江苏科技大学</a></p>
            </div>
        </footer>
    </div>
</body>
</html>