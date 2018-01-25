<script src="includes\QLchitietthucuong\tinymce\tinymce\js\tinymce\tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<form action="includes\QLchitietthucuong\xuly.php" method="POST" enctype="multipart/form-data">
<br><br><br>
  <center><h2>THÊM THỨC UỐNG</center></h2> 
	<center><table  class="pure-table pure-table-bordered"  width=92% border="1">
    
         

      
    </thead>
    <tbody>
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Tên </p></td>
            <td><input type="text" name="tenthucuong" size="40" > </td>
           
        </tr>

        <tr >
            <td><p style="font-weight: bold; text-align: left;">Gía tiền </p></td>
            <td><input type="text" name="giathucuong" size="40"></td>
            
        </tr>
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Minh họa </p></td>
  
            <td><input type="file" name="hinh"></td>
            
        </tr>
        <tr >
        <?php 
          $sql= "select * from Loai_tu";
         $id= mysql_query($sql)  ?>
            <td><p style="font-weight: bold; text-align: left;">Loai thức uống </p></td>
            <td><select name="loaithucuong">
            <?php 
                while ($chon=mysql_fetch_array($id) ) { ?>
                  <option value="<?php echo $chon['ID_loai']?>"> <?php echo $chon['Ten_loai'] ?> </option>
                   
                   <?php } ?>
            	</select>
            </td>  
        </tr>
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Mô Tả </p></td>
            <td><textarea name="motachitiet" cols="25" rows="3"></textarea></td>  
        </tr>
        <tr>
            <th colspan="2" ><input type="submit" value="Thêm" name="them">
             <input type="reset" value="Hủy">
             </th>
            
        </tr>
    </tbody>
</table>
</form>
</center>