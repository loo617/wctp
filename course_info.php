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
            min-height: 1px ;
        }
		/*去除下划线*/
        ul {
            padding-left: 20px;
            list-style-type: none;
        }

    </style>

</head>

<!-- head -->
<div class="b-100"></div>
<body>

<?php
require_once "head.php";
require_once "connect.php";
$course_id = $_GET["course_id"];
$sql = "select * from course where course_id='$course_id'";
$query = mysql_query($sql);
$row=mysql_fetch_array($query);
$course_info = $row["course_info"];
$course_sketch = $row["course_sketch"];
$teacher_name = $row["teacher_name"];
$course_name = $row["course_name"];
?>

<div class="col-md-10">
    <h3><?php echo $course_name; ?></h3>
    <p><?php echo $course_info; ?></p>

</div>
<div class="mycol-md-2 ">
    <?php
    require_once 'nav_left.php';
    ?>
</div>

</body>
</html>