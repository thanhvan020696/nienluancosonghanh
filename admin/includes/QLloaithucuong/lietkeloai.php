<?php 
$sql= "select * from loai_tu order by ID_loai desc";
$result=mysql_query($sql);
 ?><br><br><br>
<CENTER><h2>DANH SÁCH LOẠI THỨC UÔNG</h2>
<table  class="pure-table pure-table-bordered" width="750" border="1">
	<thead>
		<tr>
		<th  align="center">ID</th>
		<th  align="center">Tên Loại</th>
		<th align="center">Mô Tả</th>
		<th  colspan="2" align="center">Cập nhật</th>
	</tr>
	</thead>
	
	<?php 
	    $i='0';
	    while ($dong=mysql_fetch_array($result)) {
		?>
	
	<tr>
		<td> <CENTER><?php echo $dong['ID_loai'] ?></CENTER> </td>
		<td><CENTER> <?php echo $dong['Ten_loai'] ?> </CENTER></td>
		<td> <?php  echo $dong['Mota_loai']?></td>
		
		<td align="center"> <a href="includes\QLloaithucuong\xuly.php?id= <?php echo $dong['ID_loai']?>" style="color: black" > Xóa</a> </td>
		<td align="center"> <a href="index2.php?quanly=quanlyloaithucuong&ac=sua&id= <?php echo $dong['ID_loai'] ?>" style="color: black"> Sửa</a></td>
	</tr>
	<?php $i++; } ?>
</table>
</CENTER>