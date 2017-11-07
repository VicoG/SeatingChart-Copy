 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321D:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321D_1 ";
		
			$result = mysqli_query($conn, $query);
			//Test if there was a query error
			if(!$result) { ?>
				<script>
					alert("Database query failed.");
				</script>
			<?php  } ?>
				 
		 <div class="panel-body p20 " id="invoice-item">            
        	<div class="row">
            	<div id="maps" class="col-md-12"> 
					<div >
					
<?php	
	//Populate Table  
	while($row = mysqli_fetch_assoc($result)) { ?>
	
<svg id="mySVG" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1170 1278" 
	 style="enable-background:new 0 0 1170 1278" xml:space="preserve">
		
	
<image overflow="visible" width="696" height="927" xlink:href="assets/images/321D-1.jpg"  transform="matrix(1.681 0 0 1.3786 0 0)"></image>

<a title="1201" href="add.php?building=321D_1&dept=<?php echo $row['1201'];?>&room=1201" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="352" y="109"  width="225" height="219"<?php echo department($row['1201']);?>/></a>
<a title="1200" href="add.php?building=321D_1&dept=<?php echo $row['1200'];?>&room=1200" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="344" y="336"  width="718" height="639"<?php echo department($row['1200']);?>/></a>
<a title="1200A" href="add.php?building=321D_1&dept=<?php echo $row['1200A'];?>&room=1200A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="338" y="989"  width="140" height="197"<?php echo department($row['1200A']);?>/></a>
</svg>
						
<?php 
	 }
	 
 mysqli_free_result($result);
 ?>

			</div> 
		</div>            
	</div>                 
</div> 

 
<script type="text/javascript">
	var buildingNum = '321D_1';
</script>

