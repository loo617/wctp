<?php
$Type = $_SESSION["t"];
if($Type == "1"){
    $nav_title1 = "教学大纲";
    $nav_title2 = "教学课件";
    $nav_title3 = "教学视频";
}else{
    $nav_title1 = "实验大纲";
    $nav_title2 = "实验指导";
    $nav_title3 = "实验视频";
}
?>

<h3><?php echo $nav_title1;?></h3>
<ul>
    <?php
    $sql="select * from course where course_type='$Type'";
    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query)) {
        $course_id = $row["course_id"];
        $course_name = $row["course_name"];
        $course_sketch = $row["course_sketch"];
        $clicktime = $row["clicktime"];
        ?>
        <li><a class="navleft" href="course_info.php?course_id=<?php echo $course_id; ?>"><?php echo $course_name; ?></a></li>
        <?php
    }
    ?>
</ul>

<h3><?php echo $nav_title2;?></h3>
<ul>
    <?php
    $sql="select * from course where course_type='$Type'";
    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query)) {
        $course_id = $row["course_id"];
        $course_name = $row["course_name"];
        $course_sketch = $row["course_sketch"];
        $clicktime = $row["clicktime"];
        ?>
        <li><a class="navleft" href="course_frame.php?type=ppt&course_id=<?php echo $course_id;?>"><?php echo $course_name; ?></a></li>
        <?php
    }
    ?>
</ul>

<h3><?php echo $nav_title3;?></h3>
<ul>
    <?php
    $sql="select * from course where course_type='$Type'";
    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query)) {
        $course_id = $row["course_id"];
        $course_name = $row["course_name"];
        $course_sketch = $row["course_sketch"];
        $clicktime = $row["clicktime"];
        ?>
        <li><a class="navleft" href="course_frame.php?type=video&course_id=<?php echo $course_id;?>"><?php echo $course_name; ?></a></li>
        <?php
    }
    ?>
</ul>