<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>课程</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/page.css" rel="stylesheet">


    <!-- javascript-->

    <style>
        /*修改后的col-md*/
        .col-md-10{
            margin-left: 20px;
            padding: 50px;
            float: right;
            background-color: white;
        }
        .mycol-md-2{
            margin-left: 20px;
            margin-right: 20px;
            width: 200px;
            background-color: white;
            padding: 20px;
            min-height: 1px;
        }
        /*去除下划线*/
        ul {
            padding-left: 20px;
            list-style-type: none;
        }

    </style>

</head>

<!-- head -->
<div class="b-100"></div>
<body>

<?php
require_once "head.php";
$id = $_GET["id"];
switch($id){
    case '2':
        $data = array('DSP原理及应用试题1'=>1, 'DSP原理及应用试题2'=>2, 'DSP原理及应用试题3'=>3, 'DSP原理及应用试题4'=>4, '2015期末大作业（DSP）'=>5);
        break;
    case '3':
        $data = array('嵌入式系统基础试题1'=>6, '嵌入式系统基础试题2'=>7, '2015期末考核试题（ARM）'=>8);
        break;
    default:
        break;
}

?>

<div class="col-md-10">
    <?php
    foreach($data as $key => $value){
        echo "<a href='examination.php?key=$value' class='list-group-item'>$key</a>";
    }
    ?>
</div>
<div class="mycol-md-2 ">
    <h3>理论题库</h3>
    <ul>
        <li><a class="navleft" href="exam_frame.php?id=1">单片机原理及应用</a></li>
        <li><a class="navleft" href="exam_frame.php?id=2">DSP原理及应用</a></li>
        <li><a class="navleft" href="exam_frame.php?id=3">嵌入式系统基础</a></li>
        <li><a class="navleft" href="exam_frame.php?id=4">嵌入式软件开发基础</a></li>
        <li><a class="navleft" href="exam_frame.php?id=5">嵌入式操作系统</a></li>
        <li><a class="navleft" href="exam_frame.php?id=6">嵌入式系统应用</a></li>
    </ul>
    <h3>实践练习</h3>
    <ul>
        <li><a class="navleft" href="#">单片机原理及应用</a></li>
        <li><a class="navleft" href="#">DSP原理及应用</a></li>
        <li><a class="navleft" href="#">嵌入式系统基础</a></li>
        <li><a class="navleft" href="#">嵌入式软件开发基础</a></li>
        <li><a class="navleft" href="#">嵌入式操作系统</a></li>
        <li><a class="navleft" href="#">嵌入式系统应用</a></li>
    </ul>

</div>

</body>
</html>