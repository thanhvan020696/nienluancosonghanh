<?php 

$id=$_GET['id'];
 $sql="SELECT * FROM khuvuc WHERE ID_kv='$id'";
 $result= mysql_query($sql,$conn);
 $dong= mysql_fetch_assoc($result)
  ?>
<script src="includes\QLchitietthucuong\tinymce\tinymce\js\tinymce\tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<form action="includes\QLkhuvuc\xuly.php?id=<?php echo $dong['ID_kv']?>" method="post" enctype="multipart/from-data">
<br><br>
			<h2 style="text-align: center; font-weight: boil  ">SỬA KHU VỰC</h2>
		
<center><table class="pure-table pure-table-bordered"  width=92% border="1" >
		
		
		<tr>

			
		
			<td> <h4> Tên Khu vực</h4></td>
			<td><input type="text" size="25" name="tenkv" value="<?php echo $dong['Ten_kv']?>" ></td>
		</tr>
			<tr>
		
			<td><p> Mô Tả </p></td>
            <td><textarea name="motakv" cols="25" rows="3" "><?php echo $dong['mota_kv']?></textarea></td>  
		</tr>
		<tr>
			<td colspan="2" style="text-align: center">  <input type="submit" value="Sửa" name="suakv"></td>
		</tr>
	
</table>
</form></center>