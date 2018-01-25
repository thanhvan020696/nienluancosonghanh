<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>
<br><br>
<CENTER><h2 style="font-weight: bold;">DANH SÁCH BÀN </h2></CENTER>
<form name="form" action="includes\QLban\xuly.php" method="POST" enctype="multipart/form-data">
<table class="pure-table pure-table-bordered" width="750">
    <thead>
        <tr>
            <th><center>ID</center> </th>
            <th><center>Tên</center></th>
            <th><center>Mô Tả</center></th>
            <th><center>khu vực</center></th>
             <th><center>Trạng thái</center></th>
            <th ><center>Xóa</center></th>
            <th ><center>sửa</center></th>
        </tr>

    </thead>

    <tbody>
    <?php 

         $sql="select * from ban a, khuvuc b where a.ID_kv = b.ID_kv ";
          $result=mysql_query($sql);

          while($dong=mysql_fetch_array($result))  {
            
           
       ?> 
        <tr> 
            <td><center><?php echo $dong['ID_ban']?></center></td>
            <td><center><?php echo $dong['Ten_ban']?></center></td>
            <td><center><?php echo $dong['Mota_ban']?></center></td>
            <td><center><?php echo $dong['Ten_kv']?></center></td>
             <td><?php 
                   if($dong['Trangthai_ban']==1)
                      {echo "đã đặt";}
                    else {
                      echo "chưa đặt";
                     } ?>
            </td>
      
            <td><center><input type="checkbox" name='check[]' id='check' value="<?php echo $dong['ID_ban']?>"></center></td>
             <td><center><a href="index2.php?quanly=quanlyban&ac=sua&id=<?php echo$dong['ID_ban'] ?>" style="color: black; font-weight: normal;"> sửa</a></center></td>  
            
        </tr>
       
       
       <tr>
       <?php } ?> 
           
           <tr rowpan="2"> 
            <td colspan="5"></td>
           <td ><center><input type="checkbox" name="checkall1" class="checkall1" onclick="checkall('check[]', this)" ></center>
              <!-- <input type="button" id="checkall" value="chon hết"> -->
           
           
           <center><input type="submit" name="Xoa" value="Xóa"></td></center>
           <td></td>
       </tr>

          </tbody>
</table>
</form>

        
 

</body>
</html>
