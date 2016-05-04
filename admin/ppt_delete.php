<?php

require_once "../connect.php";
$ppt_id=$_GET['ppt_id'];
$sql="delete from ppt where ppt_id=$ppt_id";
mysql_query($sql);

echo "<script>window.location.href='ppt.php'</script>";