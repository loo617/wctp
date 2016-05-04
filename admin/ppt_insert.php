<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>上传ppt</title>
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
            <form action="ppt_insert_handle.php" method="post" enctype="multipart/form-data">
                <h3>添加ppt</h3>
                <div class="form-group">
                    <label>课程id: </label>
                    <?php
                    $course_id = $_GET['course_id'];
                    if(!empty($course_id)) {
                        echo "<input type='text' class='form-control' name='course_id' readonly='readonly' value='$course_id'>";
                    } else {
                    echo "<select class='form-control' name='course_id'>";
                    $query = mysql_query("select * from course");
                    while($row=mysql_fetch_array($query)){
                        $course_select = $row["course_id"];
                        $course_name = $row["course_name"];
                        echo "<option value='$course_select'>";
                        echo $course_name;
                        echo "</option>";
                    }
                    echo "</select>";
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>章节：</label>
                    <input type="text" class="form-control" name="section_id" placeholder="例如3.4（注意只能使用数字)">
                </div>
                <div class="form-group">
                    <label>ppt标题：</label>
                    <input type="text" class="form-control" name="title" placeholder="输入ppt标题">
                </div>
                <div class="form-group">
                    <label for="fileinput">选择ppt文件</label>
                    <input type="file" id="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary mybutton">提交</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>