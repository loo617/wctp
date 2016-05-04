<?php

session_start();
require_once "connect.php";
header("Content-type:text/html; charset=utf-8");

if(!isset($_SESSION['nick_name'])){
    echo "<script>alert('请先登录！');window.location.href='index.php'</script>";
}else{
    $nick_name=$_SESSION['nick_name'];
    $sql="select user_id from user where nick_name='{$nick_name}'";
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
    $user_id=$row['user_id'];

    $video_id=$_SESSION['video_id'];
    $comment=$_POST['info'];
    $create_time=date("Y-m-d H:i:s");

    $s="insert into comment (content, user_id, video_id, create_time) VALUES ('$comment', '$user_id', '$video_id', '$create_time')";
    mysql_query($s);
    header("location:video.php?video_id=$video_id");
}