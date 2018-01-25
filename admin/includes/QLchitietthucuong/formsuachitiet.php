<?php 
$id= $_GET['id'];
 
$sql="SELECT * FROM thucuong  WHERE ID_thucuong='$id' ";
$result= mysql_query($sql);
 $dong= mysql_fetch_array($result);

?>
<br><br><br>
<script src="includes\QLchitietthucuong\tinymce\tinymce\js\tinymce\tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<form action="includes\QLchitietthucuong\xuly.php?id=<?php echo $dong['ID_thucuong']?>" method="POST" enctype="multipart/form-data">


            <center><h2>CẬP NHẬT THỨC UỐNG</h2></center>
    <center><table class="pure-table pure-table-bordered"  width=92% border="1">
    <thead>
       
    </thead>
    <tbody> 
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Tên </p></td>
            <td><input size="40" type="text" name="tenthucuong" value="<?php echo $dong['Ten_thucuong'] ?>" ></td>
           
        </tr>

        <tr >
            <td><p style="font-weight: bold; text-align: left;">Gía tiền </p></td>
            <td><input size="40" type="text" name="giathucuong" value="<?php echo $dong['Gia_thucuong']?>"></td>                               <!--nho echo cho hien ra ?-->
            
        </tr>
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Minh họa </p></td>
  
            <td><input type="file" name="hinh""><?php echo $dong['Hinh_thucuong']?></td>
            
        </tr>
        <tr >
        <?php 
        
          $sql= "select * from Loai_tu";
         $run= mysql_query($sql);  ?>
            <td><p style="font-weight: bold; text-align: left;">Loai thức uống </p></td>
            <td><select name="loaithucuong" >

                <?php
                  while ($chon=mysql_fetch_array($run) ) { 

                    if($dong['ID_loai']==$chon['ID_loai']) {
                ?>
                   <option selected="selected" value="<?php echo$chon['ID_loai'] ?>"> <?php echo $chon['Ten_loai'] ?>

                   </option>
                   <?php }

                    else 
                    {?>
                     <option value="<?php echo $chon['ID_loai'] ?>"> <?php echo $chon['Ten_loai'] ?>
                   </option>
                    <?php
                        }
                    
                    }
                    ?>
                </select>
            </td>  
        </tr>
        <tr >
            <td><p style="font-weight: bold; text-align: left;">Mô Tả </p></td>
            <td><textarea name="motachitiet" cols="25" rows="3"><?php $dong['Mota_thucuong']?></textarea></td>  
        </tr>
        <tr>
            <th colspan="2" ><input type="submit" value="Lưu" name="sua">
             <input type="reset" value="Hủy">
             </th>
            
        </tr>
    </tbody>
</table>
</form>
</center>