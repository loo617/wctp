<?php
header("Content-type: text/html; charset=utf-8");
session_start();
require_once "../connect.php";
$admin_name=inject_check($_POST['admin_name']);
$password=inject_check($_POST['password']);

$sql="select * from admin";
$query = mysql_query($sql);
$row=mysql_fetch_array($query);
$oldName=$row['admin_name'];
$oldPassword=$row['password'];
if($admin_name==$oldName && $password==$oldPassword){
    $_SESSION['admin']=$admin_name;
    echo "<script>alert('登录成功！');window.location.href='course.php'</script>";
}else{
    echo "<script>alert('错误的用户名密码！');window.history.go(-1);</script>";
}