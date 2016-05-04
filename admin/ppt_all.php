<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>所有ppt</title>
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/page.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>

    <style>
        .navbar-inner{
            min-height: 40px;
            padding-right: 20px;
            padding-left: 20px;
            background-color: #fafafa;
        }
    </style>
</head>

<body>
<!--head-->
<?php
require_once "../connect.php";
require_once "admin_head.php";
?>

<div class="b-100"></div>
<div class="container">
    <table class="table table-striped">
        <div class="navbar-inner">
            <h3>PPT</h3>
        </div>
        <tr>
            <th>PPT_id</th>
            <th>标题</th>
            <th>所属课程id</th>
            <th>章节id</th>
            <th>点击数</th>
            <th>修改时间</th>
            <th>修改</th>
            <th>删除</th>
        </tr>
        <?php
        $sql = "select * from ppt ";
        $query = mysql_query($sql);
        while($row = mysql_fetch_array($query)){
            $ppt_id = $row["ppt_id"];
            $title = $row["title"];
            $course_id = $row["course_id"];
            $section_id = $row["section_id"];
            $clicktime = $row["clicktime"];
            $create_time = $row["create_time"];

            echo "<tr>
<td>$ppt_id</td>
<td>$title</td>
<td>$course_id</td>
<td>$section_id</td>
<td>$clicktime</td>
<td>$create_time</td>
<td><a href='ppt_edit.php?ppt_id=$ppt_id'><img src='css/edit.png'></a></td>
<td><a href='ppt_delete.php?ppt_id=$ppt_id'><button onclick='return show_confirm()'><img src='css/delete.png'></button></a></td>
</tr>";
        }
        ?>
    </table>
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