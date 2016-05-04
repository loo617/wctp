<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/11
 * Time: 0:41
 */

require_once "../connect.php";
$course_id=$_GET['course_id'];
$sql="delete from course where course_id=$course_id";
mysql_query($sql);

echo "<script>window.location.href='course.php'</script>";