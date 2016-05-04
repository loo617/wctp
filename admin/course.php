<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台主页面</title>
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/page.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>
</head>
<body>

<!--head-->
<?php
require_once "admin_head.php";
?>


<div class="b-100"></div>
<div class="container">
    <div class="row">
    <table class="table table-striped">
        <tr>
            <th>课程id</th>
            <th>所属分类</th>
            <th>课程类型</th>
            <th>课程名</th>
            <th>上课老师</th>
            <th>点击数</th>
            <th>修改日期</th>
            <th>修改</th>
            <th>上传课件</th>
            <th>上传视频</th>
            <th>删除</th>
        </tr>
        <?php
        require_once "../connect.php";
        $query = mysql_query("select * from course ");
        while($row = mysql_fetch_array($query)){
            $course_id = $row["course_id"];
            $category_id = $row["category_id"];
            $course_type = $row["course_type"];
            $course_name = $row["course_name"];
            $teacher_name = $row["teacher_name"];
            $clicktime = $row["clicktime"];
            $create_time = $row["create_time"];

            $Type = ($course_type == 1) ? "理论课程" : "实践课程";

            echo "<tr><td>$course_id</td><td>$category_id</td><td>$Type</td><td>$course_name</td><td>$teacher_name</td><td>$clicktime</td><td>$create_time</td>
<td><a href='course_edit.php?course_id=$course_id'><img src='css/edit.png'></a></td>
<td><a href='ppt_insert.php?course_id=$course_id'><img src='css/edit.png'></a></td>
<td><a href='video_insert.php?course_id=$course_id'><img src='css/edit.png'></a></td>
<td><a href='course_delete.php?course_id=$course_id'><button onclick='return show_confirm()'><img src='css/delete.png'></button></a></td></tr>";
        }
        ?>
    </table>
    </div>
</div>

<script>
    function show_confirm(){
        var r=confirm("确定要删除？");
        if(r==true){
            return true;
        }else{
            return false;
        }
    }
</script>

</body>
</html>
