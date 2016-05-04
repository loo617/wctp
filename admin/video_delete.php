<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/11
 * Time: 0:41
 */

require_once "../connect.php";

$course_id=$_GET['course_id'];
$video_id=$_GET['video_id'];
$sql="delete from video where video_id=$video_id";
mysql_query($sql);

header("location:video.php?course_id=$course_id");

