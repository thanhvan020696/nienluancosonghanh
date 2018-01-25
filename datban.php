<?php
 include('admin\includes\config.php');
 if(isset($_POST['datban']))
 {
 	$ten=$_POST['ten'];
 	$sdt=$_POST['sdt'];
 	$diachi=$_POST['diachi'];
 	$ngay=$_POST['ngay'];
 	$gio=$_POST['gio'];
 	$khuvuc=$_POST['khuvuc'];
 	$ban=$_POST['ban'];
 	$ghichu=$_POST['ghichu'];
    if (strlen($sdt)<10) {
    	
     	$sql=" INSERT INTO Khachhang(Ten_kh, Sdt_kh, Diachi) values('$ten','$sdt','$diachi')";

		         $result1= mysql_query($sql, $conn);
		         $last_khach= mysql_insert_id($conn);
		        // echo $last_khach;

	$sql2=" INSERT INTO Datban(ID_kh, ID_ban, Ngaydat, Giodat, ghichu) values('$last_khach','$ban','$ngay','$gio','$ghichu')";
		          $result2=mysql_query($sql2, $conn);
		       
		         	         
    if($result2)
    {  
     $sql=" UPDATE ban SET Trangthai_ban='1' where ID_ban='$ban'";
    mysql_query($sql);
    }
 }}  
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Dat ban</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css\reset.css">
     <link rel="stylesheet" href="css\pure\pure-min.css">
	<link rel="stylesheet" href="css\index.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			$("#ip6").change(function()
			{
				id=$("#ip6").val();
				$.ajax(
				{
					url:"xulydatban.php", 
					type:"post",
					data: "id="+ id,
					async:true,
					success: function(kq)
					{
						$("#ip7").html(kq);
					}
				});
				return false;
			});
			
		});
		$(document).ready(function()
		{
			$("#submit1").click(function()
			{
				var error = false;
				if($('#ip1').val()=="")
				{
					$('#error1').show();
					error= true;
				}
				if($('#ip2').val()=="")
				{
					$('#error2').show();
					error= true;
				}
				if($('#ip3').val()=="")
				{
					$('#error3').show();
					error= true;
				}
				if($('#ip4').val()=="")
				{
					$('#error4').show();
					error= true;
				}
				if($('#ip5').val()=="")
				{
					$('#error5').show();
					error= true;
				}
				if($('#ip6').val()=="khu vuc")
				{
					$('#error6').show();
					error= true;
				}
				if(error==true)
					return false;
				

			})
		})

		
	</script>
	<style >
	  #ip1 , #ip2,#ip3,#ip4,#ip5,#ip6,#ip7, #ip8{
		border: 0;
		opacity: 0.6;
		box-shadow: 0 0 10px #787878;
		padding: 6px;
		border-radius: 6px;
	}
	#submit1{
		font-weight: bold;
		border-radius: 6px;
		padding: 4px;
		width: 80px;
		margin-left: 180px;
		opacity: 0.8 ;

	}
	body{
		  background-color:#ffffff;
	}
	#contend{
		
		padding: 20px 0 0 70px;
		height: 520px;
		margin-left: 290px;

		

	}
	h2{
		color:#2E2E2E;
		margin: 30px 0 0 150px;

	}
	#error1,#error2,#error3,#error4,#error5,#error6{
  color: red;
  display: none;
	}

	</style>
</head>
<body>
<?php include('includes\header.php');?>
<h2 style="margin-left: 450px; color: #4E4A3C; font-weight: bold;"> Vui lòng nhập thông tin đầy đủ</h2>
<br>
<div id="contend">
<form  action="datban.php" method="post">
họ và tên:
<br>
<input id="ip1" type="text" name="ten" size=" 70 "  placeholder=" Họ và Tên"  > <span id="error1"><img src="img\error.png" width="25" height="25"> bạn chưa nhập tên</span>
<br>
<br>
số đt:<br>
<input id="ip2" type="text" name="sdt" size="70" placeholder="Số điện thoại" ><span id="error2"><img src="img\error.png" width="25" height="25"> bạn chưa nhập sdt</span> <br>
<br> <br>

Địa chỉ: <br> <input id="ip3" type="text" name="diachi" size="70" placeholder=" Địa chỉ" > <p id="error3"><img src="img\error.png" width="25" height="25"> bạn chưa nhập đia chỉ</p>  <br>
<br>
Ghi Chú: <br>
<textarea id="ip8" name="ghichu" cols="45" rows="3" style="width: 530px"></textarea>
<br><br>
Chọn Ngày đặt
<input id="ip4" type="date" name="ngay"  style="width: 220px"><span id="error4"><img src="img\error.png" width="25" height="25"> bạn chưa nhập ngày</span>
Giờ đặt
<input id="ip5" type="time" name="gio" style="width: 135px" > <span id="error5"><img src="img\error.png" width="25" height="25"> bạn chưa nhập giờ</span><br>
<br>
Chọn khu vực:<span id="error6"><img src="img\error.png" width="25" height="25"> bạn chưa chọn khu vực</span>
<select id="ip6" name="khuvuc" style="width: 220px" >
<option value="khu vuc"> Khu vực </option> 
<?php $sql=" SELECT * FROM khuvuc";

     $result= mysql_query($sql);
     while ($dong=mysql_fetch_assoc($result)) {
     	?>

	<option value="<?php echo $dong['ID_kv']?>"> <?php echo $dong['Ten_kv']?></option>
	<?php }
	?>
</select>
<span >
Bàn trống
<select id="ip7" name="ban" style="width: 120px" >
	<option>bàn</option>
	
</select>
</span>
<br>

<br><br>
<input style="margin-left:300px" id="submit1" type="submit" value="Đặt bàn" name="datban">

</form>


</div>
<div>
     <?php require('includes\footer.php');
     ?>
       </div>
</body>
</html>