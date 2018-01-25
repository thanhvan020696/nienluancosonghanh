<?php 

$sql= " SELECT * FROM khuvuc order by ID_kv desc";
$result=mysql_query($sql);
?>
<center>
<br>
<h2>DANH SÁCH KHU VỰC</h2>
<table  class="pure-table pure-table-bordered" width="700" border="1">
	<thead>
		<tr>
		<th  align="center">ID</th>
		<th  align="center">Tên Loại</th>
		<th align="center">Mô Tả</th>
		<th  colspan="2" align="center">Cập nhật</th>
	</tr>
	</thead>
	
	<?php
	 	 while ($dong=mysql_fetch_assoc($result)) {
	 ?>
	 <tr>
	 	<th><p style="font-weight: normal;text-align: center;"><?php echo $dong['ID_kv']?></p> </th>
	 	<th><p style="font-weight: normal;text-align: center;"><?php echo $dong['Ten_kv']?></p> </th> <!-- khong can bo vao ngoac kep -->
 <th><p style="font-weight: normal;text-align: center;"><?php echo $dong['mota_kv']?></p> </th>
	 	<th><a href="index2.php?quanly=quanlykhuvuc&ac=sua&id=<?php echo$dong['ID_kv'] ?>" style="color: black; font-weight: normal;"> sửa</a></th>
	 	<th><a href="includes\QLkhuvuc\xuly.php?id=<?php echo $dong['ID_kv']?>" style="color: black; font-weight: normal;"> xóa</a></th>
	 	
	 </tr>
	 <?php
	   }
	 ?>
	    
</table>
</center>