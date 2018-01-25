<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css\reset.css">
	<link rel="stylesheet" href="css\pure\pure-min.css">
	<link rel="stylesheet" href="css\index.css">
</head>
<body>
     <div id="container">
     <div id="banner"> 
        <img src="img\a.jpg" width="100%" height="170">
        </div>
        <div >
     	<?php
     	 include ('includes\header.php')
     	 ?> 
</div>
          
        <div class="pure-g" id="content">
           <div class="pure-u-1-3" id="box1">
                    <h2 >   WELCOME MY COFFEE BAR! </h2>  
                    
                     
                     <p >
                     Nằm trên tầng 7 tòa nhà Vincom Cần Thơ, Quán được bố trí khá gọn gàng, đơn giản nhưng cũng không kém phần sang trọng với những loại cà phê, đồ uống mang phong cách châu Âu. Quán được tách thành 2 khu vực: trong nhà và ngoài hiên
    		  Nếu bạn là người thích sự yên tĩnh ấm ám thì có lẽ trong khu vực trong nhà sẽ hợp với bạn, khu vực trong nhà được thiết kế sang trọng hòa cùng ánh đèn lấp lánh mang đến cho bạn không khí thật lãng mạn tinh tế <br>
                    <a href="gioithieu">xem thêm...</a>
                    </p>
     				
     </div>
    <div class="pure-u-1-3" id="box2">
                   <h2>NGUYÊN LIỆU CỦA ĐAM MÊ</h2>
     			    <img src="img\banner12.jpg"  width="340" height="170">
     				<p>Với nguyên nguyên liêu hảo hạng được nhập khẩu từ phương tây sẽ đem đến cho bạn sự khác biệt chạm đến xúc cảm vị giác, hãy đến và cảm nhận hương vị thức uống mà chúng tôi mang đến </p>
     				
    </div>
    <div class="pure-u-1-3" id="box3">
     <h2 style=" color: rgb(63, 0, 0);">MOST POPULAR COFFEES</h2>
    <div id="box3-1">
     	
     		<img src="img\c7.jpg" width="125" height="90">
     	 <a style="color:hsl(0, 100%, 25%); font-weight: bold;" href="thucdon.php?xem=cafe&id=1"> COFFEE CAMPUCHINO </a>
     	<p style="font-style: italic;font-family: Batang; color: #4E4A3C;font-weight: bold; margin-top: 15px;
     	"> Robunta, Avavica, Mocka, Campuchino</p>
     	
     </div>
     <div id="box3-2">
     	
     		<img src="img\1.jpg" width="125" height="90">
     	 <a  style="color:hsl(0, 100%, 25%); font-weight: bold;" href="thucdon.php?xem=chitietloaithucuong&id=6"> COCKTAIL NHIỆT ĐỚI </a>
     	<p style="font-style: italic;font-family: Batang; color: #4E4A3C;font-weight: bold; margin-top: 15px;
     	"> Robunta, Avavica, Mocka, Campuchino</p>
     	
     </div>
     <div id="box3-3">
     	
     		<img src="img\c3.jpg" width="125" height="90">
     	 <a style="color:hsl(0, 100%, 25%); font-weight: bold;" href="thucdon.php?xem=chitietloaithucuong&id=6"> COFFEE GIA VỊ </a>
     	<p style="font-style: italic;font-family: Batang ; font-weight: bold; color: #4E4A3C; margin-top: 15px;
     	"> Robunta, Avavica, Mocka, Campuchino</p>
     	
     </div>     
     </div>

	 </div>
     <?php require('includes\footer.php');
     ?>
       </div>
       
    
</body>
</html>