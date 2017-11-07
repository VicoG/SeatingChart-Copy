 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 327:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 327_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1819 1144" 
	 style="enable-background:new 0 0 1819 1144" xml:space="preserve">
		
	
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/327-2.jpg"  transform="matrix(0.5797 0 0 0.4616 0 0)">
</image>
<a title="2270E" href="add.php?building=327_2&dept=<?php echo $row['2270E'];?>&room=2270E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="666" y="852"  width="179" height="142"<?php echo department($row['2270E']);?>/></a>
<a title="2270J" href="add.php?building=327_2&dept=<?php echo $row['2270J'];?>&room=2270J" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="845" y="852"  width="187" height="143"<?php echo department($row['2270J']);?>/></a>
<a title="2269D" href="add.php?building=327_2&dept=<?php echo $row['2269D'];?>&room=2269D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="551" y="692"  width="185" height="99"<?php echo department($row['2269D']);?>/></a>
<a title="2269F" href="add.php?building=327_2&dept=<?php echo $row['2269F'];?>&room=2269F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="736" y="692"  width="192" height="98"<?php echo department($row['2269F']);?>/></a>
<a title="2271B" href="add.php?building=327_2&dept=<?php echo $row['2271B'];?>&room=2271B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="934" y="692"  width="186" height="99"<?php echo department($row['2271B']);?>/></a>
<a title="2271D" href="add.php?building=327_2&dept=<?php echo $row['2271D'];?>&room=2271D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1131" y="692"  width="186" height="98"<?php echo department($row['2271D']);?>/></a>
<a title="2271H" href="add.php?building=327_2&dept=<?php echo $row['2271H'];?>&room=2271H" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1317" y="692"  width="189" height="96"<?php echo department($row['2271H']);?>/></a>
<a title="2271M" href="add.php?building=327_2&dept=<?php echo $row['2271M'];?>&room=2271M" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1512" y="692"  width="114" height="95"<?php echo department($row['2271M']);?>/></a>
<a title="2281" href="add.php?building=327_2&dept=<?php echo $row['2281'];?>&room=2281" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1418" y="575"  width="208" height="110"<?php echo department($row['2281']);?>/></a>
<a title="2289" href="add.php?building=327_2&dept=<?php echo $row['2289'];?>&room=2289" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1027" y="457"  width="298" height="235"<?php echo department($row['2289']);?>/></a>
<a title="2285" href="add.php?building=327_2&dept=<?php echo $row['2285'];?>&room=2285" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1330" y="457"  width="143" height="113"<?php echo department($row['2285']);?>/></a>
<a title="2283" href="add.php?building=327_2&dept=<?php echo $row['2283'];?>&room=2283" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1473" y="457"  width="154" height="113"<?php echo department($row['2283']);?>/></a>
<a title="2280" href="add.php?building=327_2&dept=<?php echo $row['2280'];?>&room=2280" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1556" y="290"  width="145" height="108"<?php echo department($row['2280']);?>/></a>
<a title="2282" href="add.php?building=327_2&dept=<?php echo $row['2282'];?>&room=2282" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1405" y="290"  width="151" height="108"<?php echo department($row['2282']);?>/></a>
<a title="2284" href="add.php?building=327_2&dept=<?php echo $row['2284'];?>&room=2284" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1250" y="290"  width="155" height="109"<?php echo department($row['2284']);?>/></a>
<a title="2286" href="add.php?building=327_2&dept=<?php echo $row['2286'];?>&room=2286" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1100" y="290"  width="150" height="107"<?php echo department($row['2286']);?>/></a>
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
	var buildingNum = '327_2';
</script>

