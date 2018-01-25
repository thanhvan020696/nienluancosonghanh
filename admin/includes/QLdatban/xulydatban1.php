<?php

include('..\config.php');
 if(isset($_POST['ok']))
 { 
    if(!empty($_POST['duyet']))
    {
      
        $ch=$_POST['duyet'];
       
        if (is_array($ch)) {
            
            foreach ($ch as $key => $value) 
            {   //echo"$value";
                $sql="SELECT ID_ban, Ten_kh,Sdt_kh,Diachi, Ngaydat from datban a, khachhang b where a.ID_kh = b.ID_kh and a.ID_ctdat='$value'";
                $result=mysql_query($sql);
               $dong=mysql_fetch_assoc($result) ;
                
                $id=$dong['ID_ban'];
                $ten=$dong['Ten_kh'];
                $sdt=$dong['Sdt_kh'];
                $diachi=$dong['Diachi'];
                $ngay=$dong['Ngaydat'];
                //echo $id;
               $sql="UPDATE ban SET Trangthai_ban='0' WHERE ID_ban='$id'";
               mysql_query($sql);
               
               $sql="INSERT INTO nhanban(Ten_nhan ,Sdt_nhan, Diachi_nhan,Ngay_nhan) VALUES ('$ten' , '$sdt', '$diachi','$ngay')";
               mysql_query($sql);
              
              header('location:..\..\index2.php?quanly=quanlydatban');
            }
        }
    }
 }

 if(isset($_POST['huy']))
 { 
    if(!empty($_POST['xoa']))
    {
      
        $ch=$_POST['xoa'];
       
        if (is_array($ch)) {
            
            foreach ($ch as $key => $value) 
            {   echo"$value";
                $sql=" DELETE FROM datban where ID_ctdat='$value' ";
     mysql_query($sql, $conn);
     header('location:..\..\index2.php?quanly=quanlydatban');
            }
        }
    }
 }
?>