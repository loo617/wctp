<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/mystyle.css">
    <!--<link rel="stylesheet" type="text/css" href="carousel.css">-->

    <title>嵌入式系统课程群核心课程网络教学平台</title>
    <style>
        .b-50{
            height: 50px;
        }
    </style>
</head>
<body>
<?php
require_once "head.php";
?>



<!--滚动画面-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="style/image/pic1.jpg" alt="...">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <img src="style/image/pic2.jpg" alt="...">
            <div class="carousel-caption">

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--中间三个图片加文字的内容-->
<div class="outer-module-lg bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="icon-group">
                            <img  height="100px" width="100px" src="style/image/t4.png" alt="...">
                            <h4>理论教学</h4>
                            <p class="offset-xsmall">提供各门课程课件的在线学习和下载，便于学生预习和复习，让学生课堂上有更多的时间听教师的讲解，避免因忙于抄课件而跟不上教师的节奏。由于担任同一门课教学的教师可能不止一位，而每位教师都有自己的特色，因此，本栏目尽可能多的提供不同任课教师的课件。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="offset-base visible-xs"></div>
                <div class="icon-group">
                    <img height="100px" width="100px" src="style/image/t5.png" alt="...">
                    <h4>实践教学</h4>
                    <p class="offset-xsmall">嵌入式系统课程具有较强的实践性，强调培养学生的动手能力，因此如何引导学生掌握基本操作技能对于后续的深入学习以及实际的项目开发具有极其重要的作用。但从目前的情况看，由于实践课时少，难以保证每个学生都得到充分的训练。本栏目主要从三个子栏目入手为学生的实践操作提供预习、复习和训练的机会</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="offset-base visible-xs"></div>
                <div class="icon-group">
                    <img height="100px" width="100px" src="style/image/t6.png" alt="...">
                    <h4>互动平台</h4>
                    <p class="offset-xsmall">以BBS的形式对课程学习及项目开发中存在的问题进行讨论，每门核心课程作为一个板块，以及实践板块和项目开发板块，其中课程板块主要对相应课程的学习中存在的问题进行交流讨论；实践板块对实践过程遇到的疑问进行交流讨论；而项目开发板块则主要提供给学有余力的同学以及参加实际项目开发的同学。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 调整布局-->
<div class="b-50"></div>
<!-- FOOTER -->

<?php
require_once "foot.php";
?>


<script src="style/css/jquery.min.js"></script>
<script src="style/css/bootstrap.min.js"></script>
</body>
</html>