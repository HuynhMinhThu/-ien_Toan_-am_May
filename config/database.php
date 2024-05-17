   <link rel="stylesheet" href="include/bootstrap4/css/bootstrap.css">
   <link rel="stylesheet" href="include/css.css">
   <link href="include/font/Font Awesome/css/all.min.css" rel="stylesheet" type="text/css">
   <script src="include/jquery/jquery.js"></script>
   <script src="include/bootstrap4/js/bootstrap.js"> </script>
<?php
	ob_start();
  		session_start(); 
 header("Content-type: text/html; charset=utf-8");
 $tenmaychu='q3vtafztappqbpzn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	';
 $tentaikhoan='l7w2c5rpp7ppc72d';
 $pass='iny7imharohzdpbz';
 $csdl='m6jb8xbm9pb7hc0k';
 $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
 mysqli_select_db($conn,$csdl);
 mysqli_query($conn,"SET NAMES 'UTF8'");
?>
