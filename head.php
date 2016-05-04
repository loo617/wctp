<?php
$url="http://".$_SERVER ['HTTP_HOST']."/startbbs/index.php";
?>
<nav class="navbar navbar-inverse navbar-fixed-top my_navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand my_navbar-brand" href="index.php">
                <!--<img height="50" src="image/logo.jpg" alt="Brand">-->
                首页
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse my_navbar-nav" id="bs-example-navbar-collapse-1">
            <ul class="nav nav-pills">
                <li><a href="about.php">嵌入式概述</a></li>
                <li><a href="course.php?t=1">理论教学</a></li>
                <li><a href="course.php?t=2">实践教学</a></li>
                <li><a href="exam.php">自我测试</a></li>
                <li><a href="<?php echo $url;?>">互动平台</a></li>
            </ul>

            <ul class="nav nav-pills navbar-right">
                <?php session_start();
                    if(isset($_SESSION['nick_name'])){
                        $nick_name=$_SESSION['nick_name'];
                        echo "<p style='float: left;margin-top: 7%;'>欢迎您:</p><li><a href='#'>$nick_name</a></li><li><a href='logout.php'>退出</a></li>";
                    }else{
                        ?>
                        <li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
                        <?php
                    }
                ?>

            </ul>
        </div>
    </div>
</nav>