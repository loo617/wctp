<?php

require_once "../connect.php";
$category_id=$_GET['category_id'];
$query = mysql_query("delete from category where category_id=$category_id");

header("location:category.php");