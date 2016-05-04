<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>嵌入式概述</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/page.css" rel="stylesheet">
<style>
    .col-md-2{
        background-color: white;
        padding: 20px;
    }
    .mycol-md-10{
        width: 80%;
        background-color: #ffffff;
        padding: 20px;
        margin-left: 20px;
        position: relative;
        float: right;
        min-height: 1px;
    }
</style>

    <!-- javascript-->

</head>
<body>
<!-- 导航栏-->
<?php
require_once "head.php";
?>

<div class="b-100">

</div>


<div class="container">
    <?php
    $about_id=$_GET['about_id'];
    $_SESSION['about_id']=$about_id;

    ?>

    <div class="row">
        <div class="col-md-2">
                <a href="about.php?about_id=1" >
                    <h4>认识嵌入式</h4>
                </a>
            <hr>
                <a href="about.php?about_id=2" >
                    <h4>课程群简介</h4>
                </a>
        </div>
        <div class="mycol-md-10">
        <?php
        if($about_id=="1") {
            echo "<p>
    <br/>
</p>
<p style=\"text-align:center\">
    <span style=\";font-family:宋体;font-size:14px\">认识嵌入式</span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">20<span style=\"font-family:宋体\">世纪</span><span style=\"font-family:Times New Roman\">70</span><span style=\"font-family:宋体\">年代出现嵌入式系统的概念以后，经过</span><span style=\"font-family:Times New Roman\">40</span><span style=\"font-family:宋体\">年的发展，嵌入式已经发展壮大成了目前数量最多、使用范围最广的电子信息系统。日常生活中，嵌入式设备几乎随处可见，小到电子表、电子体温计、</span><span style=\"font-family:Times New Roman\">MP3</span><span style=\"font-family:宋体\">、手机、平板电脑、</span><span style=\"font-family:Times New Roman\">DVD</span><span style=\"font-family:宋体\">，大到空调、冰箱、洗衣机、汽车倒车雷达等，这一系列的嵌入式应用给人们生活带来了便利。</span></span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">那到底什么是嵌入式系统呢？&nbsp;从广义上讲，嵌入式系统也是一种计算机系统，但和通用计算机系统相比又不同。</span>
</p>
<p>
    <span style=\";font-family:宋体;font-size:14px\">（<span style=\"font-family:Times New Roman\">1</span><span style=\"font-family:宋体\">）通用计算机系统</span></span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">巨型机、大型机、小型机、微型机&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><img src=\"http://ckeditor.com/userfiles/images/Public%20Folder/%E5%9B%BE%E7%89%871%281%29.png\" style=\"float: right;\"/><span style=\";font-family:宋体;font-size:14px\"></span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">服务器、工作站、台式机、笔记本计算机</span>
</p>
<p>
    <span style=\";font-family:宋体;font-size:14px\">（<span style=\"font-family:Times New Roman\">2</span><span style=\"font-family:宋体\">）嵌入式系统</span></span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">军事设备：飞机、雷达、导弹</span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">家用电器：电视机、微波炉、洗衣机&nbsp;电冰箱</span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">移动设备：手机、<span style=\"font-family:Times New Roman\">MP3</span><span style=\"font-family:宋体\">、</span><span style=\"font-family:Times New Roman\">MP4</span><span style=\"font-family:宋体\">、数码相机、平板电脑</span></span>
</p>
<p style=\"text-indent:29px\">
    <span style=\";font-family:宋体;font-size:14px\">键盘、鼠标、<span style=\"font-family:Times New Roman\">U</span><span style=\"font-family:宋体\">盘、交换机、路由器</span></span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">&nbsp;</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">可以发现，嵌入式系统往往功能单一，是一种专用系统，只在某个方面具有较强的功能，而通用计算机应用面则比较广泛。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">此外，与通用计算机相比，尽管嵌入式系统数量庞大，但我们经常又不觉得嵌入式系统直接的存在，这主要因为嵌入式系统一般是隐藏在产品中，比如说手机，我们把它看作是手机，而不看作是一个嵌入式系统。因此，嵌入式系统隐藏在产品中，在产品使用过程中，往往在后台完成无形的信息处理，用户不能直接感觉到嵌入式系统的存在。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">因此，可以认为嵌入式系统是带有微处理器的专用软硬件系统。其中作为系统核心的微处理器主要有三类：微控制器（<span style=\"font-family:Times New Roman\">MCU</span><span style=\"font-family:宋体\">，单片机）、嵌入式微处理器（</span><span style=\"font-family:Times New Roman\">MPU</span><span style=\"font-family:宋体\">）、数字信号处理器（</span><span style=\"font-family:Times New Roman\">DSP</span><span style=\"font-family:宋体\">）。</span></span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">由此，有人给出了嵌入式系统的一般定义：&nbsp;以应用为中心，以计算机技术为基础，软件硬件可裁剪，适应应用系统对功能、可靠性、成本、体积、重量、功耗严格要求的专用计算机系统。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">&nbsp;</span>
</p>
<p>
    <br/>
</p>
";
        } else {
            echo "<p>
    <br/>
</p>
<p style=\"text-align:center\">
    <span style=\";font-family:宋体;font-size:14px\">课程群简介</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">江苏科技大学电子信息学院顺应当前社会发展需求，在13电子信息工程专业（含卓越计划）培养方案开设了嵌入式系统方向。在现有嵌入式相关课程基础上，增加了培养嵌入式系统开发人员为目标的专业课程，由此，相关课程形成了嵌入式系统课程群，主要包括《模拟电子技术》、《数字电子技术》、《微机原理与接口技术》、《计算机程序设计语言</span><span style=\";font-family:宋体;font-size:14px\">(VC++)</span><span style=\";font-family:宋体;font-size:14px\">》、《</span><span style=\";font-family:宋体;font-size:14px\">VC++</span><span style=\";font-family:宋体;font-size:14px\">高级编程》、《数据结构和算法》、《软件工程》、《单片机原理及应用》、《嵌入式系统基础》、《DSP原理及应用》、《FPGA系统设计》、《嵌入式软件开发基础》、《嵌入式操作系统》、《嵌入式系统应用》等，以培养学生的嵌入式系统应用开发能力。这些课程形成了从“嵌入式系统硬件基础——软件基础——应用开发”较为系统、完备的知识体系，其知识体系结构如图1所示。&nbsp;&nbsp;</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">&nbsp;</span>
</p>
<table width=\"491\">
    <tbody>
        <tr class=\"firstRow\">
            <td style=\"padding: 0px 7px; border-width: 1px; border-style: solid; border-color: windowtext;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">嵌入式系统应用</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">嵌入式系统应用开发</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 43px none rgb(255, 255, 255); border-right: 43px none rgb(255, 255, 255); border-top: medium none;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\"font-family:宋体;font-size:14px\">↑</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">…………………………………………</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 1px solid windowtext; border-right: 1px solid windowtext; border-top: 1px solid windowtext; \" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">嵌入式软件开发基础</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">嵌入式软件开发流程和应用程序设计</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 1px solid windowtext; border-right: 1px solid windowtext; border-top: medium none; border-bottom: 1px solid windowtext;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">软件工程</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">数据结构和算法</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">VC++</span><span style=\";font-family:宋体;font-size:14px\">高级编程</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">计算机程序设计语言</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">软件开发基础</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 43px none rgb(255, 255, 255); border-right: 43px none rgb(255, 255, 255); border-top: medium none;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\"font-family:宋体;font-size:14px\">↑</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">…………………………………………</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 1px solid windowtext; border-right: 1px solid windowtext; border-top: 1px solid windowtext; border-bottom: 1px solid windowtext;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">嵌入式操作系统</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">嵌入式操作系统μ</span><span style=\";font-family:宋体;font-size:14px\">C/OS</span><span style=\";font-family:宋体;font-size:14px\">Ⅱ移植、开发</span>
                </p>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 0px 7px; border-left: 43px none rgb(255, 255, 255); border-right: 43px none rgb(255, 255, 255); border-top: medium none;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\"font-family:宋体;font-size:14px\">↑</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">…………………………………………</span>
                </p>
            </td>
        </tr>
        <tr style=\"height:79px\">
            <td style=\"padding: 0px 7px; border-left: 1px solid windowtext; border-right: 1px solid windowtext; border-top: 1px solid windowtext;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">DSP原理及应用&nbsp;&nbsp;&nbsp;</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">嵌入式系统基础</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">单片机原理及应用</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">嵌入式硬件基础、嵌入式基础知识</span>
                </p>
            </td>
        </tr>
        <tr style=\"height:79px\">
            <td style=\"padding: 0px 7px; border-left: 1px solid windowtext; border-right: 1px solid windowtext; border-top: medium none; border-bottom: 1px solid windowtext;\" valign=\"center\" width=\"178\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">微机原理及接口技术</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">模拟电子技术</span>
                </p>
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">数字电子技术</span>
                </p>
            </td>
            <td style=\"padding: 0px 7px; border-left: medium none;\" valign=\"center\" width=\"314\">
                <p style=\"text-align:center;line-height:125%\">
                    <span style=\";font-family:宋体;font-size:14px\">硬件基础知识</span>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"text-indent:28px;text-align:center\">
    <span style=\";font-family:宋体;font-size:14px\">图1.&nbsp;嵌入式系统课程群知识体系结构</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-size:14px\">《单片机原理及应用》、《嵌入式系统基础》、《DSP原理及应用》、《嵌入式软件开发基础》、《嵌入式操作系统》、《嵌入式系统应用》作为核心专业课程，而《FPGA系统设计》属于硬件编程，不同与微控制器、嵌入式微处理器和DSP，其他课程则具有更强的专业通用性，因此本系统针对这6门核心课程的资源进行整合。这&nbsp;6门核心课程也覆盖了&nbsp;“嵌入式系统硬件基础——软件基础——应用开发”各层次，各门课程主要内容如下:&nbsp;</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《单片机原理及应用》</span><span style=\";font-family:宋体;font-size:14px\">：作为嵌入式入门性质的课程，主要介绍<span style=\"font-family:Calibri\">51</span></span><span style=\";font-family:新宋体;font-size:14px\">单片机的构成及工作的</span><span style=\";font-family:新宋体;font-size:14px\">基本理论、基本知识；</span><span style=\";font-family:新宋体;font-size:14px\">初步掌握单片机编程的基本方法；了解单片机内部各种资源的使用方法；能够通过总线扩展外部接口及设备，了解嵌入式系统发展的新技术、新理论。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《嵌入式系统基础》</span><span style=\";font-family:宋体;font-size:14px\">：主要介绍嵌入式系统的基本概念、嵌入式系统的特点与应用、<span style=\"font-family:Calibri\">ARM</span><span style=\"font-family:宋体\">嵌入式微处理器的体系结构、</span><span style=\"font-family:Calibri\">ARM</span><span style=\"font-family:宋体\">微处理器的指令系统与汇编语言程序设计、</span><span style=\"font-family:Calibri\">ARM</span><span style=\"font-family:宋体\">的</span><span style=\"font-family:Calibri\">C</span><span style=\"font-family:宋体\">语言编程技术、嵌入式系统的接口技术等。</span></span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《<span style=\"font-family:Calibri\">DSP</span><span style=\"font-family:宋体\">原理及应用》</span></span><span style=\";font-family:宋体;font-size:14px\">：主要介绍</span><span style=\";font-family:宋体;color:rgb(0,0,0);font-size:14px\">数字信号处理器（以TMS320C54x系列为例）的硬件结构和工作原理，</span><span style=\";font-family:宋体;font-size:14px\">指令系统和汇编语言程序设计</span><span style=\";font-family:宋体;color:rgb(0,0,0);font-size:14px\">，</span><span style=\";font-family:宋体;font-size:14px\">DSP开发工具以及集成开发环境CCS</span><span style=\";font-family:宋体;color:rgb(0,0,0);font-size:14px\">。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《嵌入式操作系统》</span><span style=\";font-family:宋体;font-size:14px\">：属于嵌入式系统软件，主要</span><span style=\"font-size: 14px; font-family: 宋体,SimSun;\">通过对</span><span style=\";font-family:宋体;font-size:14px\">μ</span><span style=\";font-family:Calibri;font-size:14px\">C/OS</span><span style=\";font-family:宋体;font-size:14px\">Ⅱ</span><span style=\"font-size: 14px; font-family: 宋体,SimSun;\">源码的分析和讲解，特别是对于移植到<span style=\"font-size: 14px;\">ARM</span></span><span style=\";font-family:Calibri;font-size:14px\"><span style=\"font-family:Calibri\"></span><span style=\"font-family:宋体\">处理器平台上的源代码修改，着重阐释了有关实时系统的重要概念，如</span></span><span style=\";font-family:宋体;font-size:14px\">任务管理、</span><span style=\"font-size: 14px; font-family: 宋体,SimSun;\">多任务调度、进程上下文切换、任务间的同步和通信等</span><span style=\";font-family:宋体;font-size:14px\">。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《</span><span style=\";font-family:宋体;font-weight:bold;font-size:14px\">嵌入式软件开发基础</span><span style=\";font-family:宋体;font-weight:bold;font-size:14px\">》</span><span style=\";font-family:宋体;font-size:14px\">：嵌入式应用软件开发基础，介绍嵌入式软件开发流程和软件工程思想，培养学生编写各种软件文档、软件开发和测试能力，学习在嵌入式</span><span style=\";font-family:Calibri;font-size:14px\">Linux</span><span style=\";font-family:宋体;font-size:14px\">平台上进行应用程序的开发与调试。</span>
</p>
<p style=\"text-indent:28px\">
    <span style=\";font-family:宋体;font-weight:bold;font-size:14px\">《嵌入式系统应用》</span><span style=\";font-family:宋体;font-size:14px\">：介绍</span><span style=\";font-family:新宋体;font-size:14px\">物联网与嵌入式系统的关系、舰船嵌入式系统，并以ARM9网络通信开发为例，介绍嵌入式系统的高级设计方法和技能。</span>
</p>
<p>
    <br/>
</p>";
        }
        ?>
        </div>
    </div>
</div><!-- /.container -->
</body>