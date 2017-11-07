 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 432:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 432_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 2158 1487" 
	 style="enable-background:new 0 0 2158 1487" xml:space="preserve">
		
	
<image overflow="visible" width="4000" height="3000" xlink:href="assets/images/432-2.png"  transform="matrix(0.5395 0 0 0.4957 0 0)">
</image>
<a title="2414" href="add.php?building=691_1&dept=<?php echo $row['2414'];?>&room=2414" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1218" y="607"  width="82" height="95"<?php echo department($row['2414']);?>/></a>
<a title="2413" href="add.php?building=691_1&dept=<?php echo $row['2413'];?>&room=2413" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1300" y="607"  width="85" height="94"<?php echo department($row['2413']);?>/></a>
<a title="2412" href="add.php?building=691_1&dept=<?php echo $row['2412'];?>&room=2412" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1385" y="607"  width="91" height="94"<?php echo department($row['2412']);?>/></a>
<a title="2411" href="add.php?building=691_1&dept=<?php echo $row['2411'];?>&room=2411" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1218" y="507"  width="82" height="100"<?php echo department($row['2411']);?>/></a>
<a title="2410" href="add.php?building=691_1&dept=<?php echo $row['2410'];?>&room=2410" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1300" y="507"  width="87" height="100"<?php echo department($row['2410']);?>/></a>
<a title="2409" href="add.php?building=691_1&dept=<?php echo $row['2409'];?>&room=2409" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1387" y="507"  width="89" height="99"<?php echo department($row['2409']);?>/></a>
<a title="2408" href="add.php?building=691_1&dept=<?php echo $row['2408'];?>&room=2408" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1218" y="380"  width="83" height="94"<?php echo department($row['2408']);?>/></a>
<a title="2407" href="add.php?building=691_1&dept=<?php echo $row['2407'];?>&room=2407" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1301" y="380"  width="85" height="92"<?php echo department($row['2407']);?>/></a>
<a title="2406" href="add.php?building=691_1&dept=<?php echo $row['2406'];?>&room=2406" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1387" y="380"  width="88" height="92"<?php echo department($row['2406']);?>/></a>
<a title="2405" href="add.php?building=691_1&dept=<?php echo $row['2405'];?>&room=2405" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1218" y="282"  width="84" height="98"<?php echo department($row['2405']);?>/></a>
<a title="2404" href="add.php?building=691_1&dept=<?php echo $row['2404'];?>&room=2404" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1301" y="282"  width="85" height="98"<?php echo department($row['2404']);?>/></a>
<a title="2403" href="add.php?building=691_1&dept=<?php echo $row['2403'];?>&room=2403" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1385" y="282"  width="88" height="97"<?php echo department($row['2403']);?>/></a>
<a title="2401" href="add.php?building=691_1&dept=<?php echo $row['2401'];?>&room=2401" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1164" y="153"  width="83" height="95"<?php echo department($row['2401']);?>/></a>
<a title="2402" href="add.php?building=691_1&dept=<?php echo $row['2402'];?>&room=2402" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1251" y="153"  width="85" height="95"<?php echo department($row['2402']);?>/></a>
<a title="2400" href="add.php?building=691_1&dept=<?php echo $row['2400'];?>&room=2400" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1372" y="138"  width="101" height="80"<?php echo department($row['2400']);?>/></a>
<a title="2024" href="add.php?building=691_1&dept=<?php echo $row['2024'];?>&room=2024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1483" y="138"  width="65" height="80"<?php echo department($row['2024']);?>/></a>
<a title="2022" href="add.php?building=691_1&dept=<?php echo $row['2022'];?>&room=2022" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1552" y="138"  width="69" height="80"<?php echo department($row['2022']);?>/></a>
<a title="2020" href="add.php?building=691_1&dept=<?php echo $row['2020'];?>&room=2020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1626" y="138"  width="64" height="79"<?php echo department($row['2020']);?>/></a>
<a title="2018" href="add.php?building=691_1&dept=<?php echo $row['2018'];?>&room=2018" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1695" y="138"  width="137" height="113"<?php echo department($row['2018']);?>/></a>
<a title="2003" href="add.php?building=691_1&dept=<?php echo $row['2003'];?>&room=2003" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1483" y="638"  width="139" height="75"<?php echo department($row['2003']);?>/></a>
<a title="2005" href="add.php?building=691_1&dept=<?php echo $row['2005'];?>&room=2005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1483" y="554"  width="140" height="80"<?php echo department($row['2005']);?>/></a>
<a title="2007" href="add.php?building=691_1&dept=<?php echo $row['2007'];?>&room=2007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1483" y="323"  width="140" height="231"<?php echo department($row['2007']);?>/></a>
<a title="2011" href="add.php?building=691_1&dept=<?php echo $row['2011'];?>&room=2011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1483" y="257"  width="142" height="66"<?php echo department($row['2011']);?>/></a>
<a title="2004" href="add.php?building=691_1&dept=<?php echo $row['2004'];?>&room=2004" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1666" y="569"  width="87" height="98"<?php echo department($row['2004']);?>/></a>
<a title="2008A" href="add.php?building=691_1&dept=<?php echo $row['2008A'];?>&room=2008A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1666" y="472"  width="85" height="96"<?php echo department($row['2008A']);?>/></a>
<a title="2008C" href="add.php?building=691_1&dept=<?php echo $row['2008C'];?>&room=2008C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1670" y="323"  width="81" height="116"<?php echo department($row['2008C']);?>/></a>
<a title="2012" href="add.php?building=691_1&dept=<?php echo $row['2012'];?>&room=2012" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1666" y="257"  width="81" height="62"<?php echo department($row['2012']);?>/></a>
<a title="2008B" href="add.php?building=691_1&dept=<?php echo $row['2008B'];?>&room=2008B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1753" y="463"  width="79" height="105"<?php echo department($row['2008B']);?>/></a>
<a title="2008D" href="add.php?building=691_1&dept=<?php echo $row['2008D'];?>&room=2008D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1753" y="323"  width="78" height="98"<?php echo department($row['2008D']);?>/></a>
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
	var buildingNum = '432_2';
</script>

