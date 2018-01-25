   <?php 
			         $sql="SELECT * from loai_tu";
			          $result=mysql_query($sql);
			           ?>
			 	<h2 style= "text-align: center; color: #ffffff; background-color: #8B2500"> Loại thức uống</h2>
			 	<ul>
                  <?php
			          while($dong=mysql_fetch_array($result))  {
			           
                   ?>
			 		<li><a href="thucdon.php?xem=chitietloaithucuong&id=<?php echo $dong['ID_loai']?>"><?php echo $dong['Ten_loai']?></a></li>
			 		<?php } ?>
			 		</ul>
			 	