<?php
$id=$_GET['id'];
include('..\config.php');  
   //them loai
  if(isset($_POST['themloai']))
   
      { if($_POST['tenloai']=="")
        {
          header('location:..\..\index2.php?quanly=quanlyloaithucuong&ac=them');
        } else
        {
          $tenloai=$_POST['tenloai'];
          $motaloai=$_POST['motaloai'];
      	  $sql = "INSERT INTO loai_tu(Ten_loai, Mota_loai) values('$tenloai','$motaloai')";
          mysql_query($sql, $conn);
          header('location:..\..\index2.php?quanly=quanlyloaithucuong&ac=them');
      	//sua loai
       } 
     }
   elseif (isset($_POST['sualoai'])) 
    
    {
    $tenloai=$_POST['tenloai'];
    $motaloai=$_POST['motaloai'];
    $sql=" UPDATE loai_tu SET Ten_loai='$tenloai', Mota_loai='$motaloai' where ID_loai='$id'";
    mysql_query($sql);
    header('location:..\..\index2.php?quanly=quanlyloaithucuong&ac=sua&id='.$id);
     }
    else{
      
     $sql="DELETE FROM loai_tu where ID_loai='$id'";
     mysql_query($sql, $conn);
    header('location:..\..\index2.php?quanly=quanlyloaithucuong&ac=them');
      }
?>