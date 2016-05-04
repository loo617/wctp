<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 17:11
 */
require_once "connect.php";

session_start();

if($_GET['act']=="check"){
    $number_id=$_GET['number_id'];
    $sql="select * from user where number_id='$number_id'";
    $query=mysql_query($sql);
 //   $data=mysql_num_rows($query);
    if(mysql_num_rows($query) > 0){
        echo '1';
    }else{
        echo '0';
    }
    exit();
}else if (md5($_POST["verification"])!=$_SESSION["verification"]) {
    echo "<script>alert('验证码错误！');window.location.href='register.php'</script>";
} else{
    $verification=md5($_POST["verification"]);
    $code=$_SESSION["verification"];
    $number_id=inject_check($_POST['number_id']);
    $user_name=inject_check($_POST['user_name']);
    $nick_name=inject_check($_POST['nick_name']);
    $password=md5(inject_check($_POST['password']));

    $sql="insert into user (number_id, user_name, nick_name, password) VALUES ('$number_id','$user_name','$nick_name','$password' )";
    $query=mysql_query($sql);
//$cnt=mysql_num_rows($query,$conn);
    $user_id=mysql_insert_id();
    if($user_id){
        echo "<script>alert('注册成功！');window.location.href='index.php'</script>";
    }else{
        echo "error!";
    }

    $_SESSION['user_name']=$user_name;
    $_SESSION['nick_name']=$nick_name;
    $_SESSION['number_id']=$number_id;
    $_SESSION['user_id']=$user_id;
}