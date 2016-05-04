<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 21:00
 */
require_once "connect.php";
header("Content-type:text/html; charset=utf-8");
session_start();
$nick_name=inject_check($_POST['nick_name']);
$password=md5(inject_check($_POST['password']));

$sql="select * from user where nick_name='$nick_name'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$cnt=mysql_num_rows($query);

if(!$cnt){
    echo "<script>alert('用户名不存在，请重新输入！');window.history.go(-1);</script>";
}else{
    $old_password=$row['password'];
    $user_name=$row['user_name'];
    $number_id=$row['number_id'];
    $user_id=$row['user_id'];
    if($old_password==$password){
        $_SESSION['nick_name']=$nick_name;
        $_SESSION['user_name']=$user_name;
        $_SESSION['number_id']=$number_id;
        $_SESSION['user_id']=$user_id;
        echo "<script>alert('登录成功！');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('用户名密码不匹配，请重新输入！');window.history.go(-1);</script>";
    }
}