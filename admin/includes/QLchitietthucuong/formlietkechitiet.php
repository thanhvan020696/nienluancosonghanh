<br><br><br>
<h4 style="font-weight: bold;"><center><h2>DANH SÁCH THỨC UỐNG</h2></center> </h4>
<form action="includes\QLchitietthucuong\xuly.php" method="POST" enctype="multipart/form-data">
<table class="pure-table pure-table-bordered" width="750">
    <thead>
        <tr>
            <th><center>ID</center> </th>
            <th><center>Tên</center></th>
            <th><center>Gía</center></th>
            <th><center>Hình ảnh</center></th>
            <th><center>Mô Tả</center></th>
            <th><center>Thuộc loại</center></th>
            <th ><center>Xóa</center></th>
            <th ><center>sửa</center></th>
        </tr>
    </thead>

    <tbody>
    <?php 
         $sql="SELECT * from thucuong a, loai_tu b where a.ID_loai= b.ID_loai order by a.ID_thucuong desc  ";
          $result=mysql_query($sql);
          while($dong=mysql_fetch_array($result))  {
        
       ?> 
        <tr>
            <td><center><?php echo $dong['ID_thucuong']?></center></td>
            <td><center><?php echo $dong['Ten_thucuong']?></center></td>
            <td><center><?php echo $dong['Gia_thucuong']?></center></td>
            <td><center><img src="includes\QLchitietthucuong\Upload\<?php echo $dong['Hinh_thucuong']?>" width="90" hight="80" ></center></td>
            <td><center><?php echo $dong['Mota_thucuong']?></center></td>
            <td><center><?php echo $dong['Ten_loai']?></center></td>
      
            <td><center><input type="checkbox" name="check[]" value="<?php echo $dong['ID_thucuong']?>"></center></td>
             <td><a href="index2.php?quanly=quanlychitietthucuong&ac=sua&id=<?php echo$dong['ID_thucuong'] ?>" style="color: black; font-weight: normal;"> sửa</a></td>  
            
        </tr>
       <?php } ?> 
        
       
       <tr>
           <td colspan="6"></td>
           <td ><center><input type="checkbox" name="checkall1" class="checkall1" onclick="checkall('check[]', this)" ></center>  
           <input type="submit" name="Xoa" value="Xóa">
           </td>
           <td></td>
           
          

         
        
       </tr>


        
       
    </tbody>
</table>
</form> 
