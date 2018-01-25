<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản trị hệ thống</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css\reset.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="..\css\pure\pure-min.css">
	<link rel="stylesheet"  href="css\index2.css">
	<script src="js\jquery.js"></script>
	<script language="javascript">
 
            // Chức năng chọn hết
            function checkall(name, obj)
           // document.getElementById("checkall").onclick = function () 
            {
                // Lấy danh sách checkbox
              var checkboxes = document.getElementsByName(name);
              if(obj.checked == true)
 
               { // Lặp và thiết lập checked
               for (var i = 0; i < checkboxes.length; i++)
               {
                 checkboxes[i].checked = true;
               }
             }
             if(obj.checked == false)
 
               { // Lặp và thiết lập checked
               for (var i = 0; i < checkboxes.length; i++)
               {
                 checkboxes[i].checked = false;
               }
             }
            }
  
    //function checkall(obj)
   //{// biến là một mảng lưu giá trị của từng class_name
  //var checks= document.getElementsByClassName('check');
  //if (obj.checked == true) { // kiem tra trang thái checked cua doi tuong ojb
    //   for( var i=0; i< checks.length; i++) 
    //  checks[i].checked = true;
     

  //}
   </script>
       
 
</head>
<body>
<?php
   if(!isset($_SESSION['login']))
   {
   	 header('location:login.php');
   } 
   else{


?> 
<?php
 if(isset($_GET['ac'])&&$_GET['ac']=='logout')
 {
 	unset($_SESSION['login']);
 	header('location:../index.php');
 }
?>
<div id="container">
    <?php require('includes\config.php') ?> 
	<?php require('includes\menu.php');?>
       <div id="content"> 
	  <?php
	      if (isset($_GET['quanly'])) {
	      	  $tam =$_GET['quanly'];
	      }
	      else
	      	{
	      		$tam ='';
	      	}

	      if($tam =='quanlyloaithucuong') //quan ly loai thuc uong
	      {
	      	require('includes\QLloaithucuong\mainloai.php');
	      }
	       if($tam =='quanlychitietthucuong') //quan ly chi tiet thuc uong
	      {
	      	require('includes\QLchitietthucuong\mainchitiet.php');
	      }
	      if($tam =='quanlykhuvuc') //quan ly khu vực
	     
	      {
	      	require('includes\QLkhuvuc\mainkhuvuc.php');
	      }
	      if($tam =='quanlyban') //quan ly khu vực
	     
	      {
	      	require('includes\QLban\mainban.php');
	      }
	      if ($tam=='quanlykhach') {
	      	require('includes\QLkhachhang\formkhachhang.php');
	      }
	      if ($tam=='quanlynhan') {
	      	require('includes\QLkhachhang\formnhanban.php');
	      }
	      if ($tam=='quanlydatban') {
	      	require('includes\QLdatban\formdatban1.php');
	      }


	  ?>
	
	</div>
	<div id="clear"></div>
    <?php require('includes\footer.php'); }
    ?>
</div>
</body>
</html>