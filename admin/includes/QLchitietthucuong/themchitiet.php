<?php
   require('..\config.php');
   $ten=$_POST['tenthucuong'];
   $gia=$_POST['giathucuong'];
   $hinh=$_FILES['hinh']['name'];
  move_uploaded_file($_FILES['hinh']['tmp_name'],"Upload/".$_FILES['hinh']['name']);
   $mota=$_POST['motachitiet'];
   $idloai=$_POST['loaithucuong'];
   //themchitiet
   if (isset($_POST['them']))
    {
   	
    $sql= "INSERT INTO thucuong(Ten_thucuong, Gia_thucuong, Hinh_thucuong, Mota_thucuong, ID_loai) values('$ten','$gia','$hinh','$mota','$idloai')";
    mysql_query($sql, $conn );
    header('location:..\..\index2.php?quanly=quanlychitietthucuong&ac=them');
   }
  
?>
