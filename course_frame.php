<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>课程</title>

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
            padding-left: 20px;
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

<div class="col-md-10">
    <?php
    $course_id = $_GET["course_id"];
    $_SESSION["course_id"] = $course_id;
    $type = $_GET["type"];
    switch ($type) {
        case 'video':
            $sql = "select * from video where course_id='$course_id'";
            break;
        case 'ppt':
            $sql = "select * from ppt where course_id='$course_id'";
            break;
        default:
            break;
    }
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)) {
        if(empty($row["video_id"])){
            $id = $row["ppt_id"];

        }else{
            $id = $row["video_id"];
        }
        $section_id = $row["section_id"];
        $title = $row["title"];
        ?>
        <a href="<?php echo $type;?>.php?<?php echo $type;?>_id=<?php echo $id;?>&course_id=<?php echo $course_id;?>" class="list-group-item">
            <?php echo $title;?>
        </a>
        <?php
    }
    ?>
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