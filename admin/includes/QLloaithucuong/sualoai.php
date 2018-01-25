<?php 
$id=$_GET['id'];
$sql ="select * from loai_tu where ID_loai='$id'";
$result= mysql_query($sql);
$dong= mysql_fetch_assoc($result);
 ?>
 <br><br><br>
<form action="includes\QLloaithucuong\xuly.php?id=<?php echo $dong['ID_loai']?>" method="POST" >
<h2 style="text-align: center;  ">CẬP NHẬT LOẠI THỨC UỐNG</h2>
<center><table  class="pure-table pure-table-bordered"  width=85% border="1" >
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil"> Tên Loại</h4></td>
			<td><input type="text" size="40" name="tenloai" value="<?php echo $dong['Ten_loai'];?>"  ></td>
		</tr>
		<tr>
			<td> <h4 style="text-align: center;font-weight: boil">Mô tả</h4> </td>
			<td><input type="text" name="motaloai" size="40" value="<?php echo $dong['Mota_loai'];?>"> </td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center">  <input type="submit" value="Sửa" name="sualoai" id="sua"></td>
		</tr>
	
</table>
</center>
</form>