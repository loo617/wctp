<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新建课程</title>
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/page.css">

    <script src="../style/css/jquery.min.js"></script>
    <script src="../style/css/bootstrap.min.js"></script>
    <script type="text/javascript" src="../util/ckeditor/ckeditor.js"></script>
</head>
<body>
<!--head-->
<?php
require "../connect.php";
require_once "admin_head.php";

$course_id=$_GET['course_id'];

$query = mysql_query("select * from course where course_id='$course_id'");
$row = mysql_fetch_array($query);
$category_ID=$row["category_id"];
$course_type=$row["course_type"];
$course_name=$row["course_name"];
$teacher_name=$row["teacher_name"];
$course_info=$row["course_info"];
$course_sketch=$row["course_sketch"];


?>

<div class="b-100"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="course_edit_handle.php" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-group">
                        <label>课程id：</label>
                        <input type="text" class="form-control" readonly="readonly" name="course_id" value="<?php echo $course_id;?>">
                    </div>
                    </br>
                    <label class="control-label">选择分类</label>
                    <select class="form-control" name="category_select">
                        <?php
                        $query = mysql_query("select * from category");
                        while($row=mysql_fetch_array($query)){
                            $category_id = $row["category_id"];
                            $category_name = $row["category_name"];
                            if($category_id == $category_ID){
                                echo "<option value='$category_id' selected='selected'>";
                                echo $category_name;
                                echo "</option>";
                            } else {
                                echo "<option value='$category_id'>";
                                echo $category_name;
                                echo "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                </br>
                <div class="form-group">
                    <label class="control-label">选择课程类型</label>
                    <select class="form-control" name="course_type">
                        <?php
                        if($course_type == 1){
                            echo "<option value='1' selected='selected'>";
                            echo "理论课程";
                            echo "</option>";
                            echo "<option value='2'>";
                            echo "实践课程";
                            echo "</option>";
                        } else {
                            echo "<option value='1' >";
                            echo "理论课程";
                            echo "</option>";
                            echo "<option value='2' selected='selected'>";
                            echo "实践课程";
                            echo "</option>";
                        }
                        ?>
                    </select>
                </div>
                </br>
                <div class="form-group">
                    <label>课程名：</label>
                    <input type="text" class="form-control" name="course_name" value="<?php echo $course_name; ?>">
                </div>
                </br>
                <div class="form-group">
                    <label>上课老师：</label>
                    <input type="text" class="form-control" name="teacher_name" value="<?php echo $teacher_name; ?>">
                </div>
                </br>
                <div class="form-group">
                    <label class="control-label">课程简介</label>
                    <textarea class="form-control" rows="5" name="course_sketch" >
                        <?php echo $course_sketch; ?>
                    </textarea>
                </div>
                </br>
                <div class="form-group">
                    <label class="control-label">课程大纲</label>
                    <textarea class="form-control" rows="20" name="course_info" value="<?php echo $course_info; ?>">
                    </textarea>
                </div>
                </br>

                <button type="submit" class="btn btn-primary mybutton">提交</button>
            </form>
        </div>

    </div>
</div>

</body>