<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
require_once "../connect.php";

$category_id = $_POST["category_select"];
$course_type = $_POST["course_type"];
$course_name = $_POST["course_name"];
$teacher_name = $_POST["teacher_name"];
$course_sketch = $_POST["course_sketch"];
$course_info = $_POST["course_info"];

$create_time=date("Y-m-d H:i:s");

$sql = "insert into course (category_id, course_type, course_name, teacher_name, course_sketch, course_info, clicktime, create_time) VALUES ('$category_id', '$course_type', '$course_name', '$teacher_name', '$course_sketch', '$course_info', 0, '$create_time')";
if(!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}
else {
    echo "<script>alert('添加成功！')</script>";
    header("location:course.php");
}
