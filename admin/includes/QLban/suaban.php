<?php $id=$_GET['id'];
$sql=" SELECT * FROM ban where ID_ban='$id'";
$result= mysql_query($sql);
$dong= mysql_fetch_assoc($result);
?>
<form action="includes\QLban\xuly.php?id=<?php echo $dong['ID_ban']?>" method="post" enctype="multipart/from-data">
<br><br>
<h2 style="text-align: center; font-weight: boil  ">CẬP NHẬT BÀN </h2>
		
<center><table class="pure-table pure-table-bordered"  width=92% border="1" >
		
		
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil"> Tên bàn</h4></td>
			<td><input type="text" size="25" name="tenban" value="<?php echo$dong['Ten_ban']?>" ></td>
		</tr>
			<tr>
			<td> <h4 style="text-align: center;font-weight: boil">Mô tả</h4> </td>
			<td><input type="text" name="motaban" size="25" value="<?php echo$dong['Mota_ban']?>"> </td>
		</tr>
		
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil">Khu vực</h4> </td>
			<?php $sql1= "SELECT * FROM khuvuc";
			      $result1= mysql_query($sql1);
			     
			 ?>
			<td>
				<select name="khuvuc">
				 <?php 
				  while($dong1= mysql_fetch_array($result1)) 
				   {   
				   	if($dong['ID_kv']==$dong1['ID_kv'])
					{
					?>
					 <option selected="selected" value="<?php echo$dong1['ID_kv'] ?>" ><?php echo$dong1['Ten_kv'] ?>
					 </option>
					<?php 
				   }
				    else{
				    	?>
				    <option  value="<?php echo$dong1['ID_kv'] ?>" ><?php echo$dong1['Ten_kv'] ?>
					 </option>
				    <?php 
				}
					 }
					 ?>
				</select>
		   </td>
		 </tr>
		
		<tr>
			<td colspan="2" style="text-align: center">  <input type="submit"  name="sua" value="Sửa"></td>
		</tr>
	
</table>
</form></center>