<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新建课程</title>
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/page.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>
</head>
<body>
<!--head-->
<?php
require "../connect.php";
require_once "admin_head.php";
?>

<div class="b-100"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="course_insert_handle.php" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">选择分类</label>
                <select class="form-control" name="category_select">
                    <?php
                    $query = mysql_query("select * from category");
                    while($row=mysql_fetch_array($query)){
                        $category_id = $row["category_id"];
                        $category_name = $row["category_name"];
                        echo "<option value='$category_id'>";
                        echo $category_name;
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
            </br>
            <div class="form-group">
                <label class="control-label">选择课程类型</label>
                <select class="form-control" name="course_type">
                    <option value="1">理论课程</option>
                    <option value="2">实践课程</option>
                </select>
            </div>
            </br>
            <div class="form-group">
                <label>课程名：</label>
                <input type="text" class="form-control" name="course_name" placeholder="输入文章标题">
            </div>
            </br>
            <div class="form-group">
                <label>上课老师：</label>
                <input type="text" class="form-control" name="teacher_name" placeholder="输入老师姓名">
            </div>
            </br>
            <div class="form-group">
                <label class="control-label">课程简介</label>
                <textarea class="form-control" rows="5" name="course_sketch"></textarea>
            </div>
            </br>
            <div class="form-group">
                <label class="control-label">课程大纲</label>
                <textarea class="form-control" rows="20" name="course_info"></textarea>
            </div>
            </br>

            <button type="submit" class="btn btn-primary mybutton">提交</button>
        </form>
        </div>

    </div>
</div>

</body>