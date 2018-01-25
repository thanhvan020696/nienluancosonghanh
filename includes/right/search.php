 <?php
  if(isset($_POST['search']))
  {
    $text=$_POST['text'];
    $sql="SELECT * from thucuong where Ten_thucuong LIKE '%$text%'";
      $result= mysql_query($sql);
    }
  ?>
 <h2 style="text-align: center; color: #DEB887;height: 30;padding-top: 10px; font-weight: bold; font-size: 30px;  font-family :Algerian;" > kết quả tìm được</h2>
        <?php 
           $num=mysql_num_rows($result);
         if($num=='0')
           {
            echo"không tìm thấy kết quả";
           }
          else
          { ?>
            <ul> 
           <?php while ($dong=mysql_fetch_assoc($result)) {
             ?>
				 	 	<li>
				 	 		<img src="admin\includes\QLchitietthucuong\Upload\<?php echo $dong['Hinh_thucuong'] ?>" height="120"; width="160">
				 	 		<p> <?php echo $dong['Ten_thucuong'] ?></p>
				 	 		<p > <?php echo $dong['Gia_thucuong'] ?></p>
				 	 	</li>
			<?php 
          } 
            }
      ?>
      </ul>