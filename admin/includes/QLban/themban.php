<form action="includes\QLban\xuly.php" method="post" enctype="multipart/from-data">
<br><br>
<h2 style="text-align: center; font-weight: boil  ">THÊM BÀN </h2>
		
<center><table class="pure-table pure-table-bordered"  width=92% border="1" >
		

		
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil"> Tên bàn</h4></td>
			<td><input type="text" size="45" name="tenban"  ></td>
		</tr>
			<tr>
			<td> <h4 style="text-align: center;font-weight: boil">Mô tả</h4> </td>
			<td><input type="text" name="motaban" size="45"> </td>
		</tr>
		
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil">Khu vực</h4> </td>
			<?php $sql= "SELECT * FROM khuvuc";
			      $result= mysql_query($sql);
			      
			 ?>
			<td>
				<select name="khuvuc">
				<?php while($dong= mysql_fetch_assoc($result)) 
				{
					?>
					<option value="<?php echo$dong['ID_kv'] ?>"><?php echo$dong['Ten_kv'] ?></option>
					<?php } ?>
				</select>
		   </td>
		 </tr>
		
		<tr>
			<td colspan="2" style="text-align: center">  <input type="submit" value="Thêm" id="them" name="them"></td>
		</tr>
	
</table>
</form>