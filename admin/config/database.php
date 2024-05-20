<?php
 header("Content-type: text/html; charset=utf-8");
 $tenmaychu='us-cluster-east-01.k8s.cleardb.net';
 $tentaikhoan='b77c845689b204';
 $pass='eeb5d8d8';
 $csdl='heroku_519a2f738d646df';
 $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
 mysqli_select_db($conn,$csdl);
 mysqli_query($conn,"SET NAMES 'UTF8'");
?>
