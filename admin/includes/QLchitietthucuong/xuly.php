<?php
require('..\config.php');
$id= $_GET['id'];
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
  

//xoa 
if(isset($_POST['Xoa']))
{
	if(!empty($_POST['check']))
	{
		
		$ch=$_POST['check'];
		if (is_array($ch)) {
			
			foreach ($ch as $key => $value) 
			{
				$sql="DELETE FROM thucuong WHERE ID_thucuong='$value'";
				mysql_query($sql);
				echo"toi day";
				header('location:..\..\index2.php?quanly=quanlychitietthucuong&ac=them');
			}
		}
	}
}

//sua
	
 else {

    if($hinh!="")
 	{$sql= "UPDATE thucuong SET Ten_thucuong='$ten' , Gia_thucuong='$gia', Hinh_thucuong='$hinh', Mota_thucuong='$mota', ID_loai='$idloai'  WHERE ID_thucuong='$id'";
 	$result=mysql_query($sql);
 	}
 	else
 	{
 		$sql= "UPDATE thucuong SET Ten_thucuong='$ten' , Gia_thucuong='$gia', Mota_thucuong='$mota', ID_loai='$idloai'  WHERE ID_thucuong='$id'";
 	$result=mysql_query($sql);
 	}
 	//header('location:..\..\index2.php?quanly=quanlychitietthucuong&ac=sua&id=$id');
 	header('location:..\..\index2.php?quanly=quanlychitietthucuong&ac=them');
 }
 
 
?>