 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 691:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 691_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 2133 1447" 
	 style="enable-background:new 0 0 2133 1447" xml:space="preserve">
		
	
<image overflow="visible" width="4000" height="3000" xlink:href="assets/images/691-1.png"  transform="matrix(0.5332 0 0 0.4813 0 0)"></image>

<a title="107" href="add.php?building=691_1&dept=<?php echo $row['107'];?>&room=107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="471" y="1101"  width="193" height="133"<?php echo department($row['107']);?>/></a>
<a title="105" href="add.php?building=691_1&dept=<?php echo $row['105'];?>&room=105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="664" y="1094"  width="91" height="140"<?php echo department($row['105']);?>/></a>
<a title="103" href="add.php?building=691_1&dept=<?php echo $row['103'];?>&room=103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="755" y="1094"  width="88" height="140"<?php echo department($row['103']);?>/></a>
<a title="101" href="add.php?building=691_1&dept=<?php echo $row['101'];?>&room=101" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="843" y="1094"  width="84" height="140"<?php echo department($row['101']);?>/></a>
<a title="100A" href="add.php?building=691_1&dept=<?php echo $row['100A'];?>&room=100A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="1094"  width="354" height="72"<?php echo department($row['100A']);?>/></a>
<a title="149" href="add.php?building=691_1&dept=<?php echo $row['149'];?>&room=149" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1281" y="1094"  width="101" height="62"<?php echo department($row['149']);?>/></a>
<a title="147" href="add.php?building=691_1&dept=<?php echo $row['147'];?>&room=147" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1263" y="1166"  width="119" height="70"<?php echo department($row['147']);?>/></a>
<a title="145" href="add.php?building=691_1&dept=<?php echo $row['145'];?>&room=145" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1382" y="1088"  width="138" height="142"<?php echo department($row['145']);?>/></a>
<a title="143" href="add.php?building=691_1&dept=<?php echo $row['143'];?>&room=143" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1567" y="1030"  width="149" height="204"<?php echo department($row['143']);?>/></a>
<a title="117" href="add.php?building=691_1&dept=<?php echo $row['117'];?>&room=117" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="471" y="716"  width="147" height="134"<?php echo department($row['117']);?>/></a>
<a title="121" href="add.php?building=691_1&dept=<?php echo $row['121'];?>&room=121" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="471" y="387"  width="151" height="322"<?php echo department($row['121']);?>/></a>
<a title="123" href="add.php?building=691_1&dept=<?php echo $row['123'];?>&room=123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="471" y="231"  width="147" height="156"<?php echo department($row['123']);?>/></a>
<a title="125" href="add.php?building=691_1&dept=<?php echo $row['125'];?>&room=125" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="622" y="231"  width="305" height="154"<?php echo department($row['125']);?>/></a>
<a title="127" href="add.php?building=691_1&dept=<?php echo $row['127'];?>&room=127" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="231"  width="327" height="153"<?php echo department($row['127']);?>/></a>
<a title="129" href="add.php?building=691_1&dept=<?php echo $row['129'];?>&room=129" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1254" y="231"  width="311" height="154"<?php echo department($row['129']);?>/></a>
<a title="131" href="add.php?building=691_1&dept=<?php echo $row['131'];?>&room=131" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1567" y="231"  width="153" height="155"<?php echo department($row['131']);?>/></a>
<a title="133" href="add.php?building=691_1&dept=<?php echo $row['133'];?>&room=133" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1565" y="384"  width="153" height="318"<?php echo department($row['133']);?>/></a>
<a title="137" href="add.php?building=691_1&dept=<?php echo $row['137'];?>&room=137" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1567" y="702"  width="150" height="165"<?php echo department($row['137']);?>/></a>
<a title="139" href="add.php?building=691_1&dept=<?php echo $row['139'];?>&room=139" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1565" y="867"  width="151" height="159"<?php echo department($row['139']);?>/></a>
<a title="104" href="add.php?building=691_1&dept=<?php echo $row['104'];?>&room=104" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="695" y="867"  width="232" height="154"<?php echo department($row['104']);?>/></a>
<a title="116" href="add.php?building=691_1&dept=<?php echo $row['116'];?>&room=116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="695" y="658"  width="229" height="209"<?php echo department($row['116']);?>/></a>
<a title="118" href="add.php?building=691_1&dept=<?php echo $row['118'];?>&room=118" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="695" y="467"  width="230" height="191"<?php echo department($row['118']);?>/></a>
<a title="120" href="add.php?building=691_1&dept=<?php echo $row['120'];?>&room=120" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="467"  width="331" height="154"<?php echo department($row['120']);?>/></a>
<a title="122" href="add.php?building=691_1&dept=<?php echo $row['122'];?>&room=122" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1263" y="471"  width="229" height="379"<?php echo department($row['122']);?>/></a>
<a title="140" href="add.php?building=691_1&dept=<?php echo $row['140'];?>&room=140" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1263" y="850"  width="227" height="173"<?php echo department($row['140']);?>/></a>
<a title="102" href="add.php?building=691_1&dept=<?php echo $row['102'];?>&room=102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="912"  width="331" height="109"<?php echo department($row['102']);?>/></a>
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
	var buildingNum = '691_1';
</script>

