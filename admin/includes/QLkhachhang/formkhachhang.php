<CENTER><h2> DANH SÁCH KHÁCH HÀNG ĐẶT BÀN</h2></CENTER>
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
    $sql= "SELECT * FROM khachhang a , datban b WHERE a.ID_kh =b.ID_kh ";
    $result= mysql_query($sql); 
    $i=1;
    while ( $dong= mysql_fetch_assoc($result)) {
        ?>
   

   
        <tr> 
            <td><?php echo $i?></td>
            <td><?php echo $dong['Ten_kh']?></td>
            <td><?php echo $dong['Diachi']?></td>
            <td><?php echo $dong['Sdt_kh']?></td>
            <td><?php echo $dong['Ngaydat']?></td>
        </tr>
<?php $i++;} ?>
        
    </tbody>
</table>
</center>