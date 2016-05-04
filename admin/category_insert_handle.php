<?php
require_once "../connect.php";

$create_time=date("Y-m-d H:i:s");
$query = mysql_query("insert into category (category_name, create_time) VALUES ('$_POST[category_name]', '$create_time')");


header("location:category.php");