 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 5000:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query = "SELECT * FROM 5000 ";
		
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
	//Populate Table  Building 153_1
	while($row = mysqli_fetch_assoc($result)) { ?>
	
		<svg id="mySVG" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
			 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1597.5 1175.6"
			 style="enable-background:new 0 0 1597.5 1175.6;" xml:space="preserve">
	
		<image style="overflow:visible;" width="2130" height="1567" xlink:href="assets/images/Building153_1.jpg"  transform="matrix(0.75 0 0 0.75 0 0.375)">
		</image>
		
<a title="1101" href="add.php?building=153_1&dept=<?php echo $row['1101'];?>&room=1101" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="64" <?php echo department($row['1101']);?> width="224" height="145"/></a>

<a title="1111" href="add.php?building=153_1&dept=<?php echo $row['1111'];?>&room=1111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="940" y="64" <?php echo department($row['1111']);?> width="406" height="145" /> </a>
<a title="1206" href="add.php?building=153_1&dept=<?php echo $row['1206'];?>&room=1206" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
		<rect  <?php echo department($row['1206']);?> x="1346" y="544"  width="187" height="74"/>
		<rect  <?php echo department($row['1206']);?> x="1458" y="618"  width="75" height="170"/>
	</g>
</a>
		<a title="1107" href="add.php?building=153_1&dept=<?php echo $row['1107'];?>&room=1107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="777" y="64" <?php echo department($row['1107']);?> width="64" height="145"/></a>
		<a title="1109" href="add.php?building=153_1&dept=<?php echo $row['1109'];?>&room=1109" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="866" y="64" <?php echo department($row['1109']);?>  width="68" height="148"/></a>
		<a title="1210" href="add.php?building=153_1&dept=<?php echo $row['1210'];?>&room=1210" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1346" y="273" <?php echo department($row['1210']);?> width="189" height="185"/></a>
		<a title="1208" href="add.php?building=153_1&dept=<?php echo $row['1208'];?>&room=1208" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1352" y="465" <?php echo department($row['1208']);?> width="181" height="71"/></a>
		<a title="1200" href="add.php?building=153_1&dept=<?php echo $row['1200'];?>&room=1200" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1346" y="626" <?php echo department($row['1200']);?> width="108" height="162"/></a>
		<a title="1300" href="add.php?building=153_1&dept=<?php echo $row['1300'];?>&room=1300" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1346" y="795" <?php echo department($row['1300']);?> width="187" height="105"/></a>
		<a title="1110A" href="add.php?building=153_1&dept=<?php echo $row['1110A'];?>&room=1110A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1163" y="279" <?php echo department($row['1110A']);?> width="125" height="149"/></a>
		<a title="1110" href="add.php?building=153_1&dept=<?php echo $row['1110'];?>&room=1110" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="951" y="279" <?php echo department($row['1110']);?> width="207" height="149"/></a>
		<a title="1000D"href="add.php?building=153_1&dept=<?php echo $row['1000D'];?>&room=1000D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="962" y="480" <?php echo department($row['1000D']);?> width="252" height="101"/></a>
		<a title="1000E" href="add.php?building=153_1&dept=<?php echo $row['1000E'];?>&room=1000E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="970" y="659" <?php echo department($row['1000E']);?> width="244" height="84"/></a>
		<a title="1000F" href="add.php?building=153_1&dept=<?php echo $row['1000F'];?>&room=1000F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1099" y="813" <?php echo department($row['1000F']);?> width="173" height="116"/></a>
		<a title="1108" href="add.php?building=153_1&dept=<?php echo $row['1108'];?>&room=1108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="841" y="279" <?php echo department($row['1008']);?> width="107" height="151"/></a>
		<a title="1102" href="add.php?building=153_1&dept=<?php echo $row['1102'];?>&room=1102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="641" y="279" <?php echo department($row['1102']);?> width="200" height="147"/></a>
		<a title="1000A" href="add.php?building=153_1&dept=<?php echo $row['1000A'];?>&room=1000A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="648" y="476" <?php echo department($row['1000A']);?> width="258" height="122"/></a>
		<a title="1000B" href="add.php?building=153_1&dept=<?php echo $row['1000B'];?>&room=1000B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="622" y="666" <?php echo department($row['1000B']);?> width="307" height="91"/></a>
		<a title="1000C" href="add.php?building=153_1&dept=<?php echo $row['1000C'];?>&room=1000C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="622" y="819" <?php echo department($row['1000C']);?> width="315" height="118"/></a>
		<a title="1500C" href="add.php?building=153_1&dept=<?php echo $row['1500C'];?>&room=1500C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="406" y="536" <?php echo department($row['1500C']);?> width="120" height="167"/></a>
		<a title="1500D" href="add.php?building=153_1&dept=<?php echo $row['1500D'];?>&room=1500D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="406" y="716" <?php echo department($row['1500D']);?> width="121" height="184"/></a>
		<a title="1500" href="add.php?building=153_1&dept=<?php echo $row['1500'];?>&room=1500" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="282" y="524" <?php echo department($row['1500']);?> width="118" height="148"/></a>
		<a title="1500A" href="add.php?building=153_1&dept=<?php echo $row['1500A'];?>&room=1500A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="159" y="531" <?php echo department($row['1500A']);?> width="118" height="165"/></a>
		<a title="1500B"  href="add.php?building=153_1&dept=<?php echo $row['1500B'];?>&room=1500B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="145" y="788" <?php echo department($row['1500B']);?> width="210" height="166"/></a>
		<a  title="1000" href="add.php?building=153_1&dept=<?php echo $row['1000'];?>&room=1000" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="630" y="947" <?php echo department($row['1000']);?> width="295" height="83"/></a>
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
	var buildingNum = '153_1';
</script>

