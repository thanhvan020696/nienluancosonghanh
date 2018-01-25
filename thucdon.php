<?php
 include('admin\includes\config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thực Đơn</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css\reset.css">
     <link rel="stylesheet" href="css\pure\pure-min.css">
	<link rel="stylesheet" href="css\thucdon.css">
	<link rel="stylesheet" href="css\index.css">
</head>
<body>
<div id="cotainer">
	 <?php include('includes/header.php') ?>
	 <img src="img\28.jpg" width="100%" height="155">
	 <div id="content">
		<div id="left">
			<?php include('includes\left\danhsachleft.php') ?>
		</div>
		<div id="right">
		   <?php
               if( isset($_GET['xem']))
               {
               	  $tam=$_GET['xem'];
               }
               else
               {
               	  $tam='';
               }
               if($tam=='chitietloaithucuong')
               {
               	 include('includes\right\chitietloaithucuong.php');
               }
               if (isset($_POST['search'])) {
                    include('includes\right\search.php');
               }
              /* else if ($tam=='cafe') 
               {
               	  include('includes\right\cafe.php');
               }
               else if ($tam=='cocktail') 
               {
               	  include('includes\right\cocktail.php');
               }
               else if ($tam=='nuocep') 
               {
               	  include('includes\right\nuocep.php');
               }
               else if ($tam=='yogurt') 
               {
               	  include('includes\right\yogurt.php');
               }
               else
               	include('includes\right\all.php');*/

		   ?>

		</div>
		 
	 </div>
	 <div id="clear"></div>
	 <?php include('includes\footer.php') ?>
 </div>
</body>
</html>