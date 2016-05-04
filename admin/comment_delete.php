<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/12
 * Time: 12:01
 */

require_once "../connect.php";

$comment_id=$_GET['comment_id'];
mysql_query("delete from comment WHERE comment_id=$comment_id");
header("location:comment.php");