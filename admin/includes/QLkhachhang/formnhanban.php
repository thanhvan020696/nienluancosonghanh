<CENTER><h2> DANH SÁCH KHÁCH HÀNG NHẬN BÀN</h2></CENTER>
<center><table class="pure-table pure-table-bordered" style="width: 80%">
    <thead>
        <tr> <th>STT</th>
            <th >Họ Tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ngày đặt bàn</th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $sql= "SELECT * FROM nhanban order by ID_nhanban desc ";
    $result= mysql_query($sql); 
    $i=1;
    while ( $dong= mysql_fetch_assoc($result)) {
        ?>
   

   
        <tr> 
            <td><?php echo $i?></td>
            <td><?php echo $dong['Ten_nhan']?></td>
            <td><?php echo $dong['Diachi_nhan']?></td>
            <td><?php echo $dong['Sdt_nhan']?></td>
            <td><?php echo $dong['Ngay_nhan']?></td>
        </tr>
<?php $i++;} ?>
        
    </tbody>
</table>
</center>