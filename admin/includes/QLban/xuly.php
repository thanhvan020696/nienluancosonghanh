<?php
include('..\config.php');
$ten=$_POST['tenban'];
$mota=$_POST['motaban'];
$idkv=$_POST['khuvuc'];
$id=$_GET['id'];
echo"$id";

   //them ban
if(isset($_POST['them']))
{
	$sql= "INSERT INTO ban(Ten_ban ,Mota_ban, ID_kv) VALUES ('$ten' , '$mota', '$idkv')"; //trong ngoac don
	$result=mysql_query($sql);
	header('location:..\..\index2.php?quanly=quanlyban&ac=them');
}
//xoaban

 if(isset($_POST['Xoa']))
{
	if(!empty($_POST['check']))
	{
		
		$ch=$_POST['check'];
		if (is_array($ch)) {
			
			foreach ($ch as $key => $value) 
			{
				$sql="DELETE FROM ban WHERE ID_ban='$value'";
				mysql_query($sql);
				
				header('location:..\..\index2.php?quanly=quanlyban&ac=them');
			}
		}
	}}
	else
	{ $ten=$_POST['tenban'];
$mota=$_POST['motaban'];
$idkv=$_POST['khuvuc'];
$sql=" UPDATE ban SET Ten_ban='$ten', Mota_ban='$mota', ID_kv='$idkv'where ID_ban='$id'";
    mysql_query($sql);
  header('location:..\..\index2.php?quanly=quanlyban&ac=them');
     }
?>