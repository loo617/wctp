<?php
session_start();

unset($_SESSION['user_name']);
unset($_SESSION['number_id']);
unset($_SESSION['nick_name']);
echo "<script>window.location.href='index.php';</script>";