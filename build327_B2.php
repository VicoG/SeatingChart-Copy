 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 327:</b> Floor B2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 327_B2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1915 1183" 
	 style="enable-background:new 0 0 1915 1183" xml:space="preserve">
		
	
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/327-B2.jpg"  transform="matrix(0.6103 0 0 0.4786 0 0)">
</image>
<a title="B273A" href="add.php?building=327_B2&dept=<?php echo $row['B273A'];?>&room=B273A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1549" y="117"  width="183" height="163"<?php echo department($row['B273A']);?>/></a>
<a title="B271K" href="add.php?building=327_B2&dept=<?php echo $row['B271K'];?>&room=B271K" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1478" y="294"  width="307" height="394"<?php echo department($row['B271K']);?>/></a>
<a title="B200" href="add.php?building=327_B2&dept=<?php echo $row['B200'];?>&room=B200" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1478" y="692"  width="198" height="183"<?php echo department($row['B200']);?>/></a>
<a title="B272N" href="add.php?building=327_B2&dept=<?php echo $row['B272N'];?>&room=B272N" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1676" y="875"  width="109" height="156"<?php echo department($row['B272N']);?>/></a>
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
	var buildingNum = '327_B2';
</script>

