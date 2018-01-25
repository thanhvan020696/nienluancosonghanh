 <?php
 include('admin\includes\config.php');
   $sql="SELECT * from loai_tu";
   $result=mysql_query($sql);
 ?>
 <div id="menu" style=" opacity: 0.8">
 <div id="menungang" >
			    
					<ul >
		     			<li> <a href="index.php"> Home </a></li>
		     			<li> <a href="#"> Thực Đơn </a>
		     				<ul id="submenu">
		     				 <?php
			                    while($dong=mysql_fetch_array($result))  {
			           
                               ?>
		                     
		                     	<li><a href="thucdon.php?xem=chitietloaithucuong&id=<?php echo $dong['ID_loai']?> "> <?php echo $dong['Ten_loai']?> </a></li>
		                     	<?php } ?>
		                     </ul>
		     			</li>
		     			<li> <a href="datban.php"> Đặt Bàn </a></li>
		     			<li> <a href="gioithieu.php"> Giới Thiệu </a></li>
		     			<li> <a href="Lienhe.php"> Liên Hệ </a></li>
		     			<li> <a href="admin\index2.php"> Đăng Nhập </a></li>
		     	    </ul>
			    </div >
			    <div id="Search">
			    	<form action="thucdon.php" method="POST">
					  <input id="text" type="text" name="text"  >
					  <input type="submit" value="search" name="search">
                   </form>
                </div>
				
	 </div>
     
     		
     	