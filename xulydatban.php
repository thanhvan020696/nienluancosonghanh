<?php
 $id=$_POST['id'];
 include('admin\includes\config.php');
 $sql= "SELECT * FROM ban where ID_kv='$id' and Trangthai_ban='0'";
 $result= mysql_query($sql);
 while ($dong= mysql_fetch_assoc($result)) {
 	
 	?>  <option value="<?php echo $dong['ID_ban']?>"> <?php echo$dong['Ten_ban']?></option>";
<?php }
?>
