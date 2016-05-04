<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/mystyle.css">

    <script src="style/css/jquery.min.js"></script>
    <script src="style/css/bootstrap.min.js"></script>



    <script>
        function check(){
            if($("#uu").html()=="1"){
                return false;
            }else{
                return true;
            }
        }

        function changing(){
            document.getElementById('checkpic').src="util/checkCode.php?"+Math.random();
        }

        $(function(){

            var numberid = $("#Numberid").val();
            var username = $("#Username").val();
            var nickname = $("#Nickname").val();
            var password = $("#Password").val();
            var password2 = $("#Password2").val();

            //验证学号
            $("#Numberid").blur(function(){

                numberid = $("#Numberid").val();
                var url = "register_handle.php?act=check&number_id="+numberid;
                if(numberid == ""){
                    $("#Numberid_tx").html("请输入学号！");
                    $("#uu").html("1");
                }
                else if(!(/^\d{9}$/.test(numberid))){
                    $("#Numberid_tx").html("学号必须是九位数字！");
                    $("#uu").html("1");
                }/*
                else{
                    $.ajax({
                        type:'GET',
                        url:"register_handle.php?act=check&number_id="+numberid,
                        dataType:'jsonp',
                        success:function(res){
                            if(res.int == 0){
                                $("#uu").html("1");
                                $("#Numberid_tx").html("学号已经存在！");
                            }else{
                                $("#uu").html("2");
                                $("#Numberid_tx").html("该学号可以使用");
                            }
                        }
                    })
                    $("#Numberid_tx").html("");
                }*/
                else{
                    $.get(url,function(str){
                        if(str == '1'){
                            $("#uu").html("1");
                            $("#Numberid_tx").html("学号已经存在！");
                        }else{
                            $("#uu").html("2");
                            $("#Numberid_tx").html("该学号可以使用");
                        }
                    })
                }
            });

            //验证姓名
            $("#Username").blur(function () {
                username = $("#Username").val();
                if(username == ""){
                    $("#Username_tx").html("姓名不能为空！");
                    $("#uu").html("1");
                }else if(!(/[\u4E00-\u9FA5]{2,6}/.test(username))){
                    $("#Username_tx").html("姓名必须为2-6位汉字！");
                    $("#uu").html("1");
                }else{
                    $("#Username_tx").html("");
                }
            });

            //验证昵称
            $("#Nickname").blur(function () {
                nickname = $("#Nickname").val();
                if(nickname == ""){
                    $("#Nickname_tx").html("昵称名不能为空！");
                    $("#uu").html("1");
                }else if(!(/^.*?[a-zA-Z0-9].*$/.test(nicheng) && /^.{6,16}$/.test(nicheng))){
                    $("#Nickname_tx").html("昵称名由6-16字母或数字组成！");
                    $("#uu").html("1");
                }else{
                    $("#Nickname_tx").html("");
                }
            });

            //验证密码password格式是否正确
            $("#Password").blur(function () {
                password = $("#Password").val();
                if(password == ""){
                    $("#Password_tx").html("密码不能为空");
                    $("#uu").html("1");
                }else if(!(/^.*?[\d]+.*$/.test(password) && /^.*?[A-Za-z].*$/.test(password) && /^.{6,16}$/.test(password))){
                    $("#Password_tx").html("密码由6-16字母+数字组成!");
                    $("#uu").html("1");
                }else{
                    $("#Password_tx").html("");
                }
            });

            //验证两次输入的密码是否一致password1 ?= password2
            $("#Password2").blur(function () {
                password2 = $("#Password2").val();
                password = $("#Password").val();
                if(password != password2){
                    $("#assword2_tx").html("两次输入的密码不一致，请重新输入");
                    $("#uu").html("1");
                }else{
                    $("#Password2_tx").html("");
                }
            });

        })

    </script>

    <title>注册</title>
</head>
<body>


<div class="container container-register">
    <h3>欢迎注册教学资源平台</h3>
    <form action="register_handle.php" method="post" onsubmit="return check()">

        <div class="form-group">
            <label for="exampleInputNumberid">类别</label>
            <input type="radio" name="type" value=1 />学生<input type="radio" name="type" value=2/>教师</br>
        </div>

        <div class="form-group">
            <label for="exampleInputNumberid">学号/工号：</label>
            <input type="text" class="form-control" id="Numberid" name="number_id" placeholder="学号">
        </div>
        <span id="Numberid_tx" class="stuinfo" style="float: left;"></span><span id="uu" style="display: none;"></span>
        <div class="form-group">
            <label for="exampleInputUsername">姓名：</label>
            <input type="text" class="form-control" id="Username" name="user_name"  placeholder="姓名">
        </div>
        <span id="Username_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputNickname">昵称名：(以后就要靠它来登录啦)</label>
            <input type="text" class="form-control" id="Nickname" name="nick_name" placeholder="昵称名">
        </div>
        <span id="Nickname_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputPassword">密码：</label>
            <input type="password" class="form-control" id="Password" name="password" placeholder="密码">
        </div>
        <span id="Password_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputPassword">密码确认：</label>
            <input type="password" class="form-control" id="Password2" name="password2" placeholder="密码">
        </div>
        <span id="Password2_tx" class="stuinfo" style="float: left;"></span>
        <div class="form-group">
            <label for="exampleInputIdentifycode">验证码(还没做好，先可以不填)：</label>
            <input type="text" class="form-control" id="Identifycode" name="verification" placeholder="验证密码">
        </div>
        <span id="Identifycode_tx" class="stuinfo" style="float: left;">
            <img id="checkpic" onclick="changing();" src='util/checkCode.php'></img>
        </span>
        <br>
        <div style="clear: both;"></div>
        <button type="reset" class="btn btn-primary reset">重置</button>
        <button type="submit" class="btn btn-primary login" >注册</button>
    </form>
</div>



<!--<div >-->
    <!--<footer class="footer navbar-fixed-bottom">-->
        <!--<div class="container">-->
            <!--<p class="pull-right"><a href="#">Back to top</a></p>-->
            <!--<p>© 西北工业大学 软件测试精品课  <a href="http://www.nwpu.edu.cn"> 西北工业大学</a></p>-->
        <!--</div>-->
    <!--</footer>-->
<!--</div>-->
</body>
</html>

<!--<iframe src="video/2.mp4" frameborder="0" style="width: 825px; height: 500px;"></iframe>-->
<!--<video class="video-main" src="video/2.mp4" controls="controls">视频</video>-->
