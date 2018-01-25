<?php
$id=$_POST['id'];
echo $id;
include('..\config.php');
//$sql=" SELECT * FROM datban a, khachhang b, ban c, khuvuc d where a.ID_kh=b.ID_kh and c.ID_ban=a.ID_ban and d.ID_kv=c.ID_kv and b.Ten_kh LIKE '%e%'";
     $sql="SELECT * from khachhang where Ten_kh like'%Mẹtss%'";
     $result= mysql_query($sql);
     $i=1;

     while ($dong=mysql_fetch_assoc($result)) {
        echo $dong['Ten_kh'];
    }
         ?>
     
      <!--  <table>
        <tr>
          
           <td><?php// echo$dong['Ten_ban']?></td>
            <td><?php// echo$dong['Ten_kv']?></td>
            <td><?php //echo$dong['Ten_kh']?></td>
            <td><?php //echo$dong['Sdt_kh']?></td>
            <td><?php //echo$dong['Ngaydat']?></td>
            <td><?php //echo$dong['Giodat']?></td>
            <td><?php //echo$dong['ghichu']?></td> 
            </tr>
            </table> 

          <?php// $i++;}?>-->
