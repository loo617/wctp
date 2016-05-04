<?php

require_once "../connect.php";

$course_id = $_POST["course_id"];
$category_id = $_POST["category_select"];
$course_type = $_POST["course_type"];
$course_name = $_POST["course_name"];
$teacher_name = $_POST["teacher_name"];
$course_sketch = $_POST["course_sketch"];
$course_info = $_POST["course_info"];

$create_time=date("Y-m-d H:i:s");

$sql = "update course set category_id='$category_id', course_type='$course_type', course_name='$course_name', teacher_name='$teacher_name', course_sketch='$course_sketch', course_info='$course_info' where course_id='$course_id'";
$query = mysql_query($sql);
header("location:course.php");