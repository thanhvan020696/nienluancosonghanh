<div class="pure-g">
    <div class="pure-u-2-5" >
		    <?php
			if(isset($_GET['ac']))
			{
				$tam=$_GET['ac'];
			}
			else 
				{
					$tam='';
		        }

			if($tam=='them')
				{ require('includes\QLloaithucuong\themloai.php');
			}
			if($tam=='sua')
				{
					require('includes\QLloaithucuong\sualoai.php');
				}
			?>
		
	</div>
    <div class="pure-u-3-5">
         <?php
		  require('includes\QLloaithucuong\lietkeloai.php');
		  ?>
	  	
	  </div>
   
</div>

<!--<div id="left">
	
</div>
<div id="right">
	
</div>
