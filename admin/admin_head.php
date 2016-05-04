
<!--后台界面头部-->

<div class="container-fluid">
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
                    后台首页
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse my_navbar-nav" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills">
                    <!--<li class="active"><a href="#">L    ink <span class="sr-only">(current)</span></a></li>-->
                    <li><a href="category.php">分类</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课程<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="course_insert.php">添加新课程</a></li>
                            <li><a href="course.php">课程管理</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">视频<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="video_all.php">查看所有视频</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课件<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ppt_all.php">查看所有课件</a></li>
                        </ul>
                    </li>
                    <li><a href="comment.php">管理评论</a></li>
                    <li><a href="">管理用户</a></li>
                </ul>

                <ul class="nav nav-pills navbar-right">
                    <li><a href="logout.php">退出</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div>
