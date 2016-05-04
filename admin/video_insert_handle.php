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

$course_id = $_POST["course_id"];
$section_id = $_POST["section_id"];
$title = $_POST["title"];
$create_time=date("Y-m-d H:i:s");
if(!move_uploaded_file($_FILES["file"]["tmp_name"], iconv("UTF-8", "gb2312", "../video/".$_FILES["file"]["name"]))) {
    echo "文件上传失败，错误信息：".$_FILES["file"]["error"]."<br>";
} else {

    $sql = "insert into video (title, location, course_id, clicktime, section_id, create_time) values ('$title', '".$_FILES["file"]["name"]."', '$course_id', 0, '$section_id', '$create_time')";
    if(!mysql_query($sql)) {
        die('Error: ' . mysql_error());
    }
    else {
        echo "<script>alert('添加成功！')</script>";
        header("location:video.php?course_id=$course_id");
    }
}


