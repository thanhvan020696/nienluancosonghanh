<?php
$id= $_GET['id'];

include('..\config.php');
	if(isset($_POST['themkv']))// them khu vuc
		{
			if($_POST['tenkv']=='')
			{
				header('location:..\..\index2.php?quanly=quanlykhuvuc&ac=them');
			}
			else
			{
				$Ten=$_POST['tenkv'];
				$mota=$_POST['motakv'];
				$sql=" INSERT INTO khuvuc(Ten_kv, mota_kv) values('$Ten','$mota')";
		          mysql_query($sql, $conn);
		          header('location:..\..\index2.php?quanly=quanlykhuvuc&ac=them');
			}
		}
	if(isset($_POST['suakv']))
	{

    $ten=$_POST['tenkv'];
    $mota=$_POST['motakv'];
    
    $sql=" UPDATE khuvuc SET Ten_kv='$ten', mota_kv='$mota' where ID_kv='$id'";
    mysql_query($sql, $conn);
    header('location:..\..\index2.php?quanly=quanlykhuvuc&ac=sua&id=$id');
     }

	else
	{ 
	 $sql=" DELETE FROM khuvuc where ID_kv='$id' ";
     mysql_query($sql, $conn);
     header('location:..\..\index2.php?quanly=quanlykhuvuc&ac=them');
	}

?>