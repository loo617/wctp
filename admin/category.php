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
?>
<div class="b-100"></div>
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>分类id</th>
                <th>分类名</th>
                <th>修改</th>
                <th>删除</th>
            </tr>
            <?php
            require_once "../connect.php";
            $sql="select * from category";
            $query=mysql_query($sql);
            while($row=mysql_fetch_array($query)){
                $category_id=$row['category_id'];
                $category_name=$row['category_name'];
                echo "<tr><td>$category_id</td><td>$category_name</td><td><a href='category_edit.php?category_id=$category_id'><img src='css/edit.png'></a></td><td><a href='category_delete.php?category_id=$category_id'><button onclick='return confirm_chk()'><img src='css/delete.png'></button></a></td></tr>";
            }
            ?>
        </table>
        <form method="post" action="category_insert_handle.php">
            <div class="form-group" style="float: none">
                <label for="exampleInput">新建分类</label>
                <input type="text" class="form-control" id="exampleInput" name="category_name" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">新建</button>
        </form>
    </div>
</div>


</body>
</html>