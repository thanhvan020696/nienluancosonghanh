<!DOCTYPE html>

<html>
<head>
  <title></title>
  <script type="text/javascript" src="..\..\js\jquery.js"></script>
 <!-- <script>
    $(document).ready(function()
    {
      $("#search").oninput(function()
      {
        id=$("#search").val();
        $.ajax(
        {
          url:"xulydatban2.php", 
          type:"post",
          data: "id="+ id,
          async:true,
          success: function(kq)
          {
            $("#search2").html(kq);
          }
        });
        return false;
      });
      
    });
    </script -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>

<center><H2>DANH SÁCH ĐẶT BÀN</H2> </center>
<br>
 <input class="form-control" id="myInput" type="text" placeholder="Search.." style="width: 250px; margin-left: 200px ">

<br><br>
<center>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr><th>STT</th>
            <th>Tên bàn</th>
            <th>Khu vực</th>
            <th>Tên Khách</th>
            <th>Sđt khách</th>
            <th>Ngày đặt</th>
            <th>Giờ đặt</th>
            <th>Ghi chú</th>
            
            <th>Duyệt</th>
            <th>Hủy</th>
        </tr>
    </thead>

    <tbody id="myTable">
    <tr id="search2"> </tr>
    <form action="includes\QLdatban\xulydatban1.php" method="post">
    <?php 

 $sql=" SELECT * FROM datban a, khachhang b, ban c, khuvuc d where a.ID_kh=b.ID_kh and c.ID_ban=a.ID_ban and d.ID_kv=c.ID_kv order by ID_ctdat desc";
     $result= mysql_query($sql);

     $i=1;

     while ($dong=mysql_fetch_assoc($result)) {
         ?>
     
        <tr  >
            <td><?php echo $i ?></td>
            <td><?php echo$dong['Ten_ban']?></td>
            <td><?php echo$dong['Ten_kv']?></td>
            <td><?php echo$dong['Ten_kh']?></td>
            <td><?php echo$dong['Sdt_kh']?></td>
            <td><?php echo$dong['Ngaydat']?></td>
            <td><?php echo$dong['Giodat']?></td>
            <td><?php echo$dong['ghichu']?></td> 
           
        <td><center><input type="checkbox" name="duyet[]" value="<?php echo $dong['ID_ctdat']?>"></center></td>
            <td><center><input type="checkbox" name="xoa[]" value="<?php echo $dong['ID_ctdat']?>"></center></td>
            
        </tr>
         
          <?php $i++;}?>
             </tbody> 
        
            <td colspan="8"> </td>
            <td>
            <center><input type="checkbox" name="checkall1" class="checkall1" onclick="checkall('duyet[]', this)" ></center>
            <input type="submit" name="ok" value="Duyệt">
            </td>
           <td >
          <center><input type="checkbox" name="checkall1" class="checkall1" onclick="checkall('xoa[]', this)" ></center>
           <input type="submit" name="huy" value="Hủy">
           </td>

     

   
    
</table>
</form>
</center>
</body>
</html>