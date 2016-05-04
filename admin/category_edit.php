<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看所有分类</title>
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/page.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>
</head>
<body>

<?php
require_once "admin_head.php";
require_once "../connect.php";
$category_id=$_GET['category_id'];
$sql="select * from category where category_id='$category_id'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$category_name=$row['category_name'];
?>
<div class="container mycontainer">
    <form method="post" action="category_edit_handle.php">
        <div class="form-group" style="float: none">
            <label for="exampleInput">分类id</label>
            <input type="text" class="form-control" id="exampleInput" name="category_id" value="<?php echo "$category_id"; ?>" readonly="readonly">
            <label for="exampleInput">修改分类</label>
            <input type="text" class="form-control" id="exampleInput" name="category_name" placeholder="" value="<?php echo "$category_name"; ?>">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>
</div>


</body>