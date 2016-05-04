<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ppt</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/page.css" rel="stylesheet">


    <!-- javascript-->

    <style>
        /*修改后的col-md*/
        .col-md-10{
            margin-left: 20px;
            padding: 50px;
            float: right;
            background-color: white;
        }
        .mycol-md-2{
            margin-left: 20px;
            margin-right: 20px;
            width: 200px;
            background-color: white;
            padding: 20px;
            min-height: 1px;
        }
		/*去除下划线*/
        ul {
            padding-left: 10px;
            list-style-type: none;
        }
    </style>

</head>

<!-- head -->
<?php
require_once 'head.php';
require_once "connect.php";
?>
<div class="b-100"></div>
<body>
<?php
$ppt_id = $_GET["ppt_id"];
$course_id = $_GET["course_id"];
$_SESSION["course_id"] = $course_id;
$_SESSION["ppt_id"] = $ppt_id;
$sql = "select * from ppt where ppt_id='$ppt_id'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$location = $row["location"];
$title = $row["title"];

?>
<div class="col-md-10">
    <h3><?php echo $title;?></h3>
    <embed src="ppt/<?php echo $location;?>" width="100%" height="500px"></embed>

    <div class="media media-bottom">
        <h2>评论专区</h2>
        <hr/>
        <?php
        $sql="select * from comment where ppt_id='$ppt_id'";
        $query=mysql_query($sql);
        $cnt=0;
        $commentnum=mysql_num_rows($query);
        if(!$commentnum){
            echo "<p>暂无评论</p>";
        }else{
            echo "<h3>$commentnum 条评论</h3>";
            while($row=mysql_fetch_array($query)){
                $user_id=$row['user_id'];
                $s="select * from user where user_id=$user_id";
                $q=mysql_query($s);
                $r=mysql_fetch_array($q);
                $number_id=$r['number_id'];
                $nick_name=$r['nick_name'];
                $time = date("Y-m-d H:i:s", $r['create_time']);
                ?>
                <div class="ppt_comment">
                    <div class="media-left media-middle">
                        <p class="pleft">楼层<?php $cnt++;echo "$cnt" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $nick_name ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time?></p>
                    </div>
                    <div class="media-body">
                        <p><?php echo "{$row['content']}"; ?></p>

                    </div>
                </div>

                <?php
            }
        }
        ?>




        <form method="post" action="ppt_comment.php">
            <div class="media-bottom-comment">
                <label>请文明发言:</label>
                <textarea class="form-control comment" rows="3" placeholder="说点什么吧" name="info"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mybutton">提交</button>
        </form>
    </div>
</div>
<div class="mycol-md-2 ">
    <!--
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class=""><a href="course_frame.php?type=ppt&course_id=<?php echo $_SESSION["course_id"];?>">ppt</a></li>
        <li role="presentation" class=""><a href="course_frame.php?type=video&course_id=<?php echo $_SESSION["course_id"];?>">视频</a></li>
    </ul>
    -->
    <?php
    require_once 'nav_left.php';
    ?>
</div>


</body>
</html>