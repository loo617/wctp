<?php

//主机名称
define("HOST", "localhost");
//用户名
define("USER", "root");
//密码
define("PASSWORD", "");
//数据库名称
define("DBNAME", "abc");

$conn = mysql_connect(HOST,USER,PASSWORD);
mysql_query("set names utf8");
mysql_select_db(DBNAME, $conn);
if(!$conn){
    die("cannot connect to DB");
}


function inject_check($Sql_Str) {
    $check=preg_match('/select|insert|update|delete|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i',$Sql_Str);
    if ($check) {
        echo '<script language="JavaScript">alert("非法数据");</script>';
        exit();
    }else{
        return $Sql_Str;
    }
}