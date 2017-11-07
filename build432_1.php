 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 432:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 432_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 2058 1330" 
	 style="enable-background:new 0 0 2058 1330" xml:space="preserve">
		
	
<image overflow="visible" width="4000" height="3000" xlink:href="assets/images/432-1.png"  transform="matrix(0.5145 0 0 0.4433 0 0)">
</image>
<a title="1204" href="add.php?building=432_1&dept=<?php echo $row['1204'];?>&room=1204" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="382" y="1168"  width="340" height="108"<?php echo department($row['1204']);?>/></a>
<a title="1201" href="add.php?building=432_1&dept=<?php echo $row['1201'];?>&room=1201" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="728" y="708"  width="330" height="568"<?php echo department($row['1201']);?>/></a>
<a title="1200" href="add.php?building=432_1&dept=<?php echo $row['1200'];?>&room=1200" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="382" y="568"  width="218" height="497"<?php echo department($row['1200']);?>/></a>
<a title="1113" href="add.php?building=432_1&dept=<?php echo $row['1113'];?>&room=1113" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="600" y="640"  width="122" height="64"<?php echo department($row['1113']);?>/></a>
<a title="1111" href="add.php?building=432_1&dept=<?php echo $row['1111'];?>&room=1111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="600" y="568"  width="123" height="68"<?php echo department($row['1111']);?>/></a>
<a title="1100" href="add.php?building=432_1&dept=<?php echo $row['1100'];?>&room=1100" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="387" y="123"  width="226" height="388"<?php echo department($row['1100']);?>/></a>
<a title="1127" href="add.php?building=432_1&dept=<?php echo $row['1127'];?>&room=1127" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="634" y="123"  width="89" height="80"<?php echo department($row['1127']);?>/></a>
<a title="1128" href="add.php?building=432_1&dept=<?php echo $row['1128'];?>&room=1128" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="728" y="123"  width="116" height="80"<?php echo department($row['1128']);?>/></a>
<a title="1016" href="add.php?building=432_1&dept=<?php echo $row['1016'];?>&room=1016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="851" y="123"  width="207" height="144"<?php echo department($row['1016']);?>/></a>
<a title="1010" href="add.php?building=432_1&dept=<?php echo $row['1010'];?>&room=1010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="907" y="354"  width="151" height="93"<?php echo department($row['1010']);?>/></a>
<a title="1000" href="add.php?building=432_1&dept=<?php echo $row['1000'];?>&room=1000" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="728" y="447"  width="330" height="262"<?php echo department($row['1000']);?>/></a>
<a title="1401" href="add.php?building=432_1&dept=<?php echo $row['1401'];?>&room=1401" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1107" y="163"  width="127" height="124"<?php echo department($row['1401']);?>/></a>
<a title="1400" href="add.php?building=432_1&dept=<?php echo $row['1400'];?>&room=1400" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1283" y="123"  width="251" height="164"<?php echo department($row['1400']);?>/></a>
<a title="1404" href="add.php?building=432_1&dept=<?php echo $row['1404'];?>&room=1404" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1534" y="123"  width="213" height="291"<?php echo department($row['1404']);?>/></a>
<a title="1408" href="add.php?building=432_1&dept=<?php echo $row['1408'];?>&room=1408" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1534" y="421"  width="213" height="147"<?php echo department($row['1408']);?>/></a>
<a title="1410" href="add.php?building=432_1&dept=<?php echo $row['1410'];?>&room=1410" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1534" y="568"  width="174" height="79"<?php echo department($row['1410']);?>/></a>
<a title="1412" href="add.php?building=432_1&dept=<?php echo $row['1412'];?>&room=1412" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1599" y="647"  width="109" height="61"<?php echo department($row['1412']);?>/></a>
<a title="1409" href="add.php?building=432_1&dept=<?php echo $row['1409'];?>&room=1409" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1116" y="421"  width="418" height="287"<?php echo department($row['1409']);?>/></a>
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
	var buildingNum = '432_1';
</script>

