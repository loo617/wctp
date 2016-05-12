<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>理论教学课程</title>

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

        /*修改分页*/
        .pagination{
            margin-left: 317px;
        }

    </style>

</head>
<body>
<!-- 导航栏-->
<?php
require_once "head.php";
require_once "connect.php";
require_once "util/Page.php";
?>

<div class="b-100">

</div>


<div class="container">

    <div class="row">
        <div class="mycol-md-9">
            <div class="b-30"></div>
            <?php
            //配置分页参数
            $show_row=4;
            $curpage = (int)$_GET["page"];
            $url = "demo.php?page={page}";
            $sql="select * from course";
            $total=mysql_num_rows(mysql_query($sql));

            if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $show_row))
                $curpage = ceil($total_rows / $show_row);

            $sql .= " limit " . ($curpage - 1) * $show_row . ",$show_row;";
            $query = mysql_query($sql);
            while($row=mysql_fetch_array($query)) {
                $course_id = $row["course_id"];
                $course_name = $row["course_name"];
                $course_sketch = $row["course_sketch"];
                $clicktime = $row["clicktime"];

                ?>
                <div class="c-list">
                    <div class="c-img">
                        <img src="style/image/poster1.png" alt="" height="140px" width="265px">
                    </div>
                    <a class="c-info" href="course_info.php?course_id=<?php echo $course_id; ?>">
                        <h3><?php echo $course_name;?></h3>
                        <p><?php echo $course_sketch;?></p>
                    </a>
                </div>
                <?php
            }
            ?>

            <?php
            if ($total > $show_row) {//总记录数大于每页显示数，显示分页
                $page = new Page($total, $show_row, $curpage, $url, 5);
                echo $page->output();
            }
            ?>
        </div>

        <div class="col-md-3 sidebar">

            <h4>类别</h4>
        </div><!-- /.sidebar -->
    </div>

</div><!-- /.container -->
</body>