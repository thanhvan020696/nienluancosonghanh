<?php
//config  
$tenmaychu='localhost';
$tentaikhoan='root';
$matkhau='';
$csdl='qlqcf';

$conn=mysql_connect($tenmaychu, $tentaikhoan, $matkhau, $csdl) or die("ket noi that bai");

   mysql_select_db($csdl, $conn);
   ?>