 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321C:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321C_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1266 1428" 
	 style="enable-background:new 0 0 1266 1428" xml:space="preserve">
		
	
<image overflow="visible" width="2093" height="2537" xlink:href="assets/images/321C-1.jpg"  transform="matrix(0.6049 0 0 0.5629 0 0)"></image>

<a title="1349" href="add.php?building=321C_1&dept=<?php echo $row['1349'];?>&room=1349" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect  x="330" y="571"  width="35" height="40" <?php echo department($row['1349']);?>/></a>
<a title="1351A" href="add.php?building=321C_1&dept=<?php echo $row['1351A'];?>&room=1351A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="365" y="559"  width="70" height="52" <?php echo department($row['1351A']);?>/></a>
<a title="1347A" href="add.php?building=321C_1&dept=<?php echo $row['1347A'];?>&room=1347A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="435" y="559"  width="45" height="52" <?php echo department($row['1347A']);?>/></a>
<a title="1351" href="add.php?building=321C_1&dept=<?php echo $row['1351'];?>&room=1351" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="365" y="425"  width="141" height="134" <?php echo department($row['1351']);?>/></a>
<a title="1353B" href="add.php?building=321C_1&dept=<?php echo $row['1353B'];?>&room=1353B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="462" y="404"  width="48" height="21" <?php echo department($row['1353B']);?>/></a>
<a title="1353A" href="add.php?building=321C_1&dept=<?php echo $row['1353A'];?>&room=1353A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="462" y="372"  width="30" height="32" <?php echo department($row['1353A']);?>/></a>
<a title="1353" href="add.php?building=321C_1&dept=<?php echo $row['1353'];?>&room=1353" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="462" y="344"  width="48" height="28" <?php echo department($row['1353']);?>/></a>
<a title="1437A" href="add.php?building=321C_1&dept=<?php echo $row['1437A'];?>&room=1437A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="365" y="80"  width="144" height="264" <?php echo department($row['1437A']);?>/></a>
<a title="1348B" href="add.php?building=321C_1&dept=<?php echo $row['1348B'];?>&room=1348B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="580"  width="25" height="31" <?php echo department($row['1348B']);?>/></a>
<a title="1348A" href="add.php?building=321C_1&dept=<?php echo $row['1348A'];?>&room=1348A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="515"  width="45" height="44" <?php echo department($row['1348A']);?>/></a>
<a title="1348" href="add.php?building=321C_1&dept=<?php echo $row['1348'];?>&room=1348" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="580" y="515"  width="160" height="96" <?php echo department($row['1348']);?>/></a>
<a title="1352F" href="add.php?building=321C_1&dept=<?php echo $row['1352F'];?>&room=1352F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="684" y="476"  width="56" height="39" <?php echo department($row['1352F']);?>/></a>
<a title="1352D" href="add.php?building=321C_1&dept=<?php echo $row['1352D'];?>&room=1352D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="622" y="490"  width="62" height="25" <?php echo department($row['1352D']);?>/></a>
<a title="1352E" href="add.php?building=321C_1&dept=<?php echo $row['1352E'];?>&room=1352E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="622" y="451"  width="32" height="39" <?php echo department($row['1352E']);?>/></a>
<a title="1352" href="add.php?building=321C_1&dept=<?php echo $row['1352'];?>&room=1352" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="628" y="360"  width="112" height="91" <?php echo department($row['1352']);?>/></a>
<a title="1352A" href="add.php?building=321C_1&dept=<?php echo $row['1352A'];?>&room=1352A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="360"  width="91" height="53" <?php echo department($row['1352A']);?>/></a>
<a title="1437B" href="add.php?building=321C_1&dept=<?php echo $row['1437B'];?>&room=1437B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="317"  width="67" height="39" <?php echo department($row['1437B']);?>/></a>
<a title="1437" href="add.php?building=321C_1&dept=<?php echo $row['1437'];?>&room=1437" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
<g>
<rect x="509" y="80"  width="117" height="233" <?php echo department($row['1437']);?>/>
<rect x="628" y="80"  width="111" height="160" <?php echo department($row['1437']);?>/>
</g>
</a>
<a title="1439" href="add.php?building=321C_1&dept=<?php echo $row['1439'];?>&room=1439" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="664" y="240"  width="75" height="74" <?php echo department($row['1439']);?>/></a>
<a title="1348E" href="add.php?building=321C_1&dept=<?php echo $row['1348E'];?>&room=1348E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="740" y="515"  width="37" height="96" <?php echo department($row['1348E']);?>/></a>
<a title="1318" href="add.php?building=321C_1&dept=<?php echo $row['1318'];?>&room=1318" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="800" y="383"  width="82" height="228" <?php echo department($row['1318']);?>/></a>
<a title="1318E" href="add.php?building=321C_1&dept=<?php echo $row['1318E'];?>&room=1318E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="739" y="344"  width="59" height="51" <?php echo department($row['1318E']);?>/></a>
<a title="1317" href="add.php?building=321C_1&dept=<?php echo $row['1317'];?>&room=1317" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="505"  width="70" height="106" <?php echo department($row['1317']);?>/></a>
<a title="1318A" href="add.php?building=321C_1&dept=<?php echo $row['1318A'];?>&room=1318A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="882" y="505"  width="42" height="78" <?php echo department($row['1318A']);?>/></a>
<a title="1318C" href="add.php?building=321C_1&dept=<?php echo $row['1318C'];?>&room=1318C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="882" y="399"  width="71" height="106" <?php echo department($row['1318C']);?>/></a>
<a title="1318D" href="add.php?building=321C_1&dept=<?php echo $row['1318D'];?>&room=1318D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="942" y="344"  width="55" height="54" <?php echo department($row['1318D']);?>/></a>
<a title="1415" href="add.php?building=321C_1&dept=<?php echo $row['1415'];?>&room=1415" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="894" y="80"  width="124" height="213" <?php echo department($row['1415']);?>/></a>
<a title="1315A" href="add.php?building=321C_1&dept=<?php echo $row['1315A'];?>&room=1315A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1018" y="559"  width="66" height="54" <?php echo department($row['1315A']);?>/></a>
<a title="1315" href="add.php?building=321C_1&dept=<?php echo $row['1315'];?>&room=1315" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1018" y="527"  width="30" height="32" <?php echo department($row['1315']);?>/></a>
<a title="1315D" href="add.php?building=321C_1&dept=<?php echo $row['1315D'];?>&room=1315D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1099" y="544"  width="55" height="67" <?php echo department($row['1315D']);?>/></a>
<a title="1315B" href="add.php?building=321C_1&dept=<?php echo $row['1315B'];?>&room=1315B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1048" y="451"  width="116" height="93" <?php echo department($row['1315B']);?>/></a>
<a title="1315C" href="add.php?building=321C_1&dept=<?php echo $row['1315C'];?>&room=1315C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1094" y="398"  width="70" height="51" <?php echo department($row['1315C']);?>/></a>
<a title="1411D" href="add.php?building=321C_1&dept=<?php echo $row['1411D'];?>&room=1411D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1127" y="367"  width="41" height="31" <?php echo department($row['1411D']);?>/></a>
<a title="1411B" href="add.php?building=321C_1&dept=<?php echo $row['1411B'];?>&room=1411B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1084" y="367"  width="41" height="30" <?php echo department($row['1411B']);?>/></a>
<a title="1411A" href="add.php?building=321C_1&dept=<?php echo $row['1411A'];?>&room=1411A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1018" y="372"  width="62" height="23"/ <?php echo department($row['1411A']);?>/></a>>
<a title="1411" href="add.php?building=321C_1&dept=<?php echo $row['1411'];?>&room=1411" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1022" y="187"  width="142" height="149" <?php echo department($row['1411']);?>/></a>
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
	var buildingNum = '321C_1';
</script>

