 <?php
    $id=$_GET['id'];
   
   $sql=" SELECT * FROM thucuong  where ID_loai='$id' "; // phai sang qua $id
    $result=mysql_query($sql);
    
 ?>
 <h2 style="text-align: center; color: #4E4A3C;height: 30;padding-top: 10px; font-weight: bold; font-size: 30px;  font-family :Algerian;" > chi tiết loại thức uống</h2>
        <?php 
           while ($dong=mysql_fetch_assoc($result)) {
           	?>
  		 	 <ul>
				 	 	<li>
				 	 		<img src="admin\includes\QLchitietthucuong\Upload\<?php echo $dong['Hinh_thucuong'] ?>" height="120"; width="160"; >
				 	 		<p> <?php echo $dong['Ten_thucuong'] ?></p>
				 	 		<p > <?php echo $dong['Gia_thucuong'] ?></p>
				 	 	</li>
            </ul>
			<?php } ?>