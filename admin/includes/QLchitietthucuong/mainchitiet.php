<div class="pure-g">
    <div class="pure-u-2-5"><?php
  if (isset($_GET['ac'])) {
     $tam=$_GET['ac'];
  }
  else
  {
     $tam='';
  }
  if($tam=='them')
  {
    require('includes\QLchitietthucuong\formthemchitiet.php');
   }
   if ($tam=='sua') {

    require('includes\QLchitietthucuong\formsuachitiet.php');
   }

?>
  
</div>
    <div class="pure-u-3-5"><?php
   require('includes\QLchitietthucuong\formlietkechitiet.php')
?>
  
</div>
 <!--   
</div>
<div id="left">

</div>
<div id="right">

</div>