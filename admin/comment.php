<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>评论列表</title>
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
            <th>评论id</th>
            <th>视频/ppt id</th>
            <th>视频/ppt 标题</th>
            <th>用户id</th>
            <th>用户学号</th>
            <th>删除</th>
        </tr>
        <?php
        require_once "../connect.php";
        $sql="select * from comment";
        $query=mysql_query($sql);
        while($row=mysql_fetch_array($query)){
            $video_id=$row['video_id'];
            $user_id=$row['user_id'];
            $comment_id=$row['comment_id'];

            $sql2="select * from video where video_id=$video_id";
            $query2=mysql_query($sql2);
            $row2=mysql_fetch_array($query2);
            $title=$row2['title'];

            $sql1="select * from user where user_id=$user_id";
            $query1=mysql_query($sql1);
            $row1=mysql_fetch_array($query1);
            $number_id=$row1['number_id'];

            echo "<tr><td>$comment_id</td><td>$video_id</td><td>$title</td><td>$user_id</td><td>$number_id</td><td><a href='comment_delete.php?comment_id=$comment_id'><button onclick='return confirm_chk()'><img src='css/delete.png'></button></a></td></tr>";
        }
        ?>
        </table>
    </div>

</div>

<script>
    function confirm_chk(){
        var r=confirm('是否要删除该评论?');
        if(r==true){return true;}
        else return false;
    }
</script>
</body>
</html>