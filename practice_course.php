<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>实践教学课程</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/page.css" rel="stylesheet">


    <!-- javascript-->


    <!-- style -->
    <style>
        /*修改后的col-md*/
        .mycol-md-9{
            float: right;
            width: 75%;
        }
        .col-md-12{
            padding-bottom: 20px;
            margin-top: 20px;
            background-color: #ffffff;
        }

        /*课程列表*/
        .c-list{
            height: 150px;
            padding: 10px;
            margin-bottom: 10px;
            position: relative;
        }
        .c-img{
            float: left;

        }
        .c-info{
            color: #080808;
            right: -10px;
            position: relative;
        }

        /*去除超链接的下划线*/
        a:link {
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        a:active {
            text-decoration: none;
        }

        /*修改h3*/
        .h3,h3 {
            margin-top: 0px;
        }
    </style>

</head>
<body>
<!-- 导航栏-->
<?php
require_once "head.php";
require_once "connect.php";
?>

<div class="b-100">

</div>


<div class="container">

    <div class="row">
        <div class="mycol-md-9">
            <div class="b-30"></div>
            <?php
            $category_id=$_GET["category_id"];
            if(!empty($category_id)){
                $sql="select * from course where category_id='$category_id' and course_type='2'";
            }else{
                $sql="select * from course where course_type='2'";
            }
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query)) {
                $course_id = $row["course_id"];
                $course_name = $row["course_name"];
                $course_sketch = $row["course_sketch"];
                $clicktime = $row["clicktime"];

                ?>
                <div class="c-list">
                    <div class="c-img">
                        <img src="style/image/poster1.png" alt="" height="130px" width="265px">
                    </div>
                    <a class="c-info" href="course_info.php?course_id=<?php echo $course_id; ?>#course_type=2">
                        <h3><?php echo $course_name;?></h3>
                        <p><?php echo $course_sketch;?></p>
                    </a>
                </div>
                <?php
            }
            ?>

            <ul class="pagination">
                <li><a href="index.html">&laquo;</a></li>
                <li><a href="index.html">1</a></li>
                <li><a href="index.html">2</a></li>
                <li><a href="index.html">&raquo;</a></li>
            </ul>
        </div>

        <div class="col-md-3 sidebar">

            <h4>类别</h4>
            <?php
            $sql="select * from category";
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query)) {
                $category_id = $row["category_id"];
                $category_name = $row["category_name"];
                ?>
                <div class="list-group">
                    <a href="practice_course.php?category_id=<?php echo $category_id?>" class="list-group-item">
                        <?php echo $category_name; ?>
                    </a>
                </div>
                <?php
            }
            ?>
        </div><!-- /.sidebar -->
    </div>

</div><!-- /.container -->
</body>