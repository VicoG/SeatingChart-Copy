 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 316</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 316_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792"
	 style="enable-background:new 0 0 612 792;" xml:space="preserve">
	 <image overflow="visible" width="3138" height="2472" xlink:href="assets/images/316-2.jpg"  transform="matrix(0.195 0 0 0.3204 4.882812e-04 0)"></image> 
	 
<a title="270" href="add.php?building=316_2&dept=<?php echo $row['270'];?>&room=270" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="23" y="491"  width="36" height="68"<?php echo department($row['270']);?>/></a>
<a title="268" href="add.php?building=316_2&dept=<?php echo $row['268'];?>&room=268" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="23" y="427"  width="36" height="64"<?php echo department($row['268']);?>/></a>
<a title="266" href="add.php?building=316_2&dept=<?php echo $row['266'];?>&room=266" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="23" y="362" fill="none" width="36" height="65"<?php echo department($row['266']);?>/></a>
<a title="264" href="add.php?building=316_2&dept=<?php echo $row['264'];?>&room=264" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="23" y="292" fill="none" width="35" height="70"<?php echo department($row['264']);?>/></a>
<a title="262" href="add.php?building=316_2&dept=<?php echo $row['262'];?>&room=262" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="23" y="233" fill="none" width="53" height="59"<?php echo department($row['262']);?>/></a>
<a title="260" href="add.php?building=316_2&dept=<?php echo $row['260'];?>&room=260" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="76" y="233" fill="none" width="37" height="58"<?php echo department($row['260']);?>/></a>
<a title="259" href="add.php?building=316_2&dept=<?php echo $row['259'];?>&room=259" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="113" y="233" fill="none" width="35" height="57"<?php echo department($row['259']);?>/></a>
<a title="258" href="add.php?building=316_2&dept=<?php echo $row['258'];?>&room=258" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="148" y="233" fill="none" width="35" height="57"<?php echo department($row['258']);?>/></a>
<a title="256" href="add.php?building=316_2&dept=<?php echo $row['256'];?>&room=256" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="183" y="233" fill="none" width="40" height="57"<?php echo department($row['256']);?>/></a>
<a title="254" href="add.php?building=316_2&dept=<?php echo $row['254'];?>&room=254" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="223" y="233" fill="none" width="39" height="58"<?php echo department($row['254']);?>/></a>
<a title="252" href="add.php?building=316_2&dept=<?php echo $row['252'];?>&room=252" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="262" y="233" fill="none" width="41" height="58"<?php echo department($row['252']);?>/></a>
<a title="244" href="add.php?building=316_2&dept=<?php echo $row['244'];?>&room=244" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="303" y="233" fill="none" width="46" height="58"<?php echo department($row['244']);?>/></a>
<a title="236" href="add.php?building=316_2&dept=<?php echo $row['236'];?>&room=236" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="349" y="233" fill="none" width="31" height="59"<?php echo department($row['236']);?>/></a>
<a title="234" href="add.php?building=316_2&dept=<?php echo $row['234'];?>&room=234" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="380" y="233" fill="none" width="37" height="58"<?php echo department($row['234']);?>/></a>
<a title="212" href="add.php?building=316_2&dept=<?php echo $row['212'];?>&room=212" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="484" y="233" fill="none" width="38" height="60"<?php echo department($row['212']);?>/></a>
<a title="210" href="add.php?building=316_2&dept=<?php echo $row['210'];?>&room=210" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="522" y="233" fill="none" width="65" height="62"<?php echo department($row['210']);?>/></a>
<a title="208" href="add.php?building=316_2&dept=<?php echo $row['208'];?>&room=208" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="547" y="295" fill="none" width="40" height="65"<?php echo department($row['208']);?>/></a>
<a title="206" href="add.php?building=316_2&dept=<?php echo $row['206'];?>&room=206" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="547" y="360" fill="none" width="40" height="67"<?php echo department($row['206']);?>/></a>
<a title="204" href="add.php?building=316_2&dept=<?php echo $row['204'];?>&room=204" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="547" y="427" fill="none" width="40" height="71"<?php echo department($row['204']);?>/></a>
<a title="202" href="add.php?building=316_2&dept=<?php echo $row['202'];?>&room=202" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="547" y="498" fill="none" width="39" height="61"<?php echo department($row['202']);?>/></a>
<a title="201" href="add.php?building=316_2&dept=<?php echo $row['201'];?>&room=201" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="484" y="498" fill="none" width="45" height="60"<?php echo department($row['201']);?>/></a>
<a title="203" href="add.php?building=316_2&dept=<?php echo $row['203'];?>&room=203" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="484" y="427" fill="none" width="44" height="70"<?php echo department($row['203']);?>/></a>
<a title="205" href="add.php?building=316_2&dept=<?php echo $row['205'];?>&room=205" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="484" y="354" fill="none" width="45" height="29"<?php echo department($row['205']);?>/>
	<rect x="511" y="383" fill="none" width="17" height="43"<?php echo department($row['205']);?>/>
	</g></a>
<a title="211" href="add.php?building=316_2&dept=<?php echo $row['211'];?>&room=211" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="484" y="321" fill="none" width="44" height="33"<?php echo department($row['211']);?>/></a>
<a title="231" href="add.php?building=316_2&dept=<?php echo $row['231'];?>&room=231" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="459" y="321" fill="none" width="25" height="60"<?php echo department($row['231']);?>/></a>
<a title="233" href="add.php?building=316_2&dept=<?php echo $row['233'];?>&room=233" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="417" y="321" fill="none" width="42" height="60"<?php echo department($row['233']);?>/></a>
<a title="235" href="add.php?building=316_2&dept=<?php echo $row['235'];?>&room=235" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="380" y="321" fill="none" width="37" height="60"<?php echo department($row['235']);?>/></a>
<a title="237" href="add.php?building=316_2&dept=<?php echo $row['237'];?>&room=237" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="303" y="321" fill="none" width="77" height="60"<?php echo department($row['237']);?>/></a>
<a title="251" href="add.php?building=316_2&dept=<?php echo $row['251'];?>&room=251" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="262" y="321" fill="none" width="41" height="60"<?php echo department($row['251']);?>/></a>
<a title="253" href="add.php?building=316_2&dept=<?php echo $row['253'];?>&room=253" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="223" y="321" fill="none" width="39" height="60"<?php echo department($row['253']);?>/></a>
<a title="255" href="add.php?building=316_2&dept=<?php echo $row['255'];?>&room=255" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="183" y="321" fill="none" width="39" height="60"<?php echo department($row['255']);?>/></a>
<a title="257" href="add.php?building=316_2&dept=<?php echo $row['257'];?>&room=257" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="142" y="321" fill="none" width="41" height="59"<?php echo department($row['257']);?>/></a>
<a title="261A" href="add.php?building=316_2&dept=<?php echo $row['261A'];?>&room=261A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="113" y="321" fill="none" width="27" height="22"<?php echo department($row['261A']);?>/></a>
<a title="261B" href="add.php?building=316_2&dept=<?php echo $row['261B'];?>&room=261B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="94" y="321" fill="none" width="19" height="26"<?php echo department($row['261B']);?>/></a>
<a title="263" href="add.php?building=316_2&dept=<?php echo $row['263'];?>&room=263" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="76" y="321" fill="none" width="17" height="40"<?php echo department($row['263']);?>/></a>
<a title="265" href="add.php?building=316_2&dept=<?php echo $row['265'];?>&room=265" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="93" y="347" fill="none" width="19" height="79"<?php echo department($row['265']);?>/>
	<rect x="76" y="361" fill="none" width="17" height="64"<?php echo department($row['265']);?>/>
	</g></a>
<a title="267" href="add.php?building=316_2&dept=<?php echo $row['267'];?>&room=267" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="76" y="427" fill="none" width="36" height="61"<?php echo department($row['267']);?>/></a>
<a title="269" href="add.php?building=316_2&dept=<?php echo $row['269'];?>&room=269" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="76" y="488" fill="none" width="36" height="70"<?php echo department($row['269']);?>/></a>
</svg>


<?php 
	 }
 ?>

			</div> 
		</div>            
	</div>                 
</div> 
<script type="text/javascript">
	var buildingNum = '316_2';
</script>

