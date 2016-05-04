<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/mystyle.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>
    <title>后台管理系统登录</title>

    <script>
        $(function(){
            var adminname = $("#admin_name").val();
            var password = $("#password").val();

            $("#admin_name").blur(function(){
                adminname = $("#admin_name").val();
                if(adminname == ""){
                    $("#Adminname_tx").html("用户名不能为空！");
                }else if(!(/^.*?[a-zA-Z0-9].*$/.test(adminname) && /^.{6,16}$/.test(adminname))){
                    $("#Adminname_tx").html("昵称名由6-16字母或数字组成！");
                }else{
                    $("#Adminname_tx").html("");
                }
            });

            $("#password").blur(function () {
                password = $("#password").val();
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
    <h3>欢迎登录后台管理系统</h3>
    <form action="login_handle.php" method="post">

        <div class="form-group">
            <label for="exampleInputAdminname">用户名：</label>
            <input type="text" class="form-control" id="Adminname" name="admin_name" placeholder="用户名">
        </div>
        <span class="stuinfo" id="Adminname_tx"></span>
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


</body>
</html>