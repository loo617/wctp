<?php

require_once "../connect.php";
$category_id=$_POST['category_id'];
$category_name=$_POST['category_name'];
$query = mysql_query("update category set category_name='$category_name' where category_id='$category_id'");
header("location:category.php");