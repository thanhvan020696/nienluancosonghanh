<div class="pure-g">
    <div class="pure-u-2-5"><?php
	 if(isset($_GET['ac']))
	 {
	 	$tam=$_GET['ac'];
	 }
	 else
	 {
	 	$tam="";
	 }
	 if($_GET['ac']=='them')
	 {
	 	require('includes\QLkhuvuc\themkhuvuc.php');
	 }
	 if($_GET['ac']=='sua')
	 {
	 	require('includes\QLkhuvuc\suakhuvuc.php');
	 }
	  ?></div>
    <div class="pure-u-3-5"><?php require('includes\QLkhuvuc\lietkekhuvuc.php');?></div>
  
</div>
<!--<div id="left">
	
</div>
<div id="right">
	
</div>