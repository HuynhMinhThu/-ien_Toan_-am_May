   <link rel="stylesheet" href="include/bootstrap4/css/bootstrap.css">
   <link rel="stylesheet" href="include/css.css">
   <link href="include/font/Font Awesome/css/all.min.css" rel="stylesheet" type="text/css">
   <script src="include/jquery/jquery.js"></script>
   <script src="include/bootstrap4/js/bootstrap.js"> </script>
<?php
	ob_start();
  		session_start(); 
 header("Content-type: text/html; charset=utf-8");
 $tenmaychu='us-cluster-east-01.k8s.cleardb.net';
 $tentaikhoan='b77c845689b204';
 $pass='eeb5d8d8';
 $csdl='heroku_519a2f738d646df';
 $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
 mysqli_select_db($conn,$csdl);
 mysqli_query($conn,"SET NAMES 'UTF8'");
?>
