 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 327:</b> Floor B1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 327_B1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1781 1278" 
	 style="enable-background:new 0 0 1781 1278" xml:space="preserve">
		
	
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/327-B1.jpg"  transform="matrix(0.5676 0 0 0.517 0 0)">
</image>
<a title="B170K" href="add.php?building=327_B1&dept=<?php echo $row['B170K'];?>&room=B170K" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="652" y="958"  width="109" height="157"<?php echo department($row['B170K']);?>/></a>
<a title="B170G" href="add.php?building=327_B1&dept=<?php echo $row['B170G'];?>&room=B170G" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="652" y="886"  width="181" height="66"<?php echo department($row['B170G']);?>/></a>
<a title="B170J" href="add.php?building=327_B1&dept=<?php echo $row['B170J'];?>&room=B170J" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="840" y="880"  width="178" height="235"<?php echo department($row['B170J']);?>/></a>
<a title="B172E" href="add.php?building=327_B1&dept=<?php echo $row['B172E'];?>&room=B172E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1026" y="880"  width="383" height="237"<?php echo department($row['B172E']);?>/></a>
<a title="B169" href="add.php?building=327_B1&dept=<?php echo $row['B169'];?>&room=B169" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="540" y="570"  width="318" height="267"<?php echo department($row['B169']);?>/></a>
<a title="B169F" href="add.php?building=327_B1&dept=<?php echo $row['B169F'];?>&room=B169F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="534" y="326"  width="324" height="244"<?php echo department($row['B169F']);?>/></a>
<a title="B169H" href="add.php?building=327_B1&dept=<?php echo $row['B169H'];?>&room=B169H" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="864" y="326"  width="192" height="306"<?php echo department($row['B169H']);?>/></a>
<a title="B171B" href="add.php?building=327_B1&dept=<?php echo $row['B171B'];?>&room=B171B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="979" y="639"  width="77" height="113"<?php echo department($row['B171B']);?>/></a>
<a title="B173" href="add.php?building=327_B1&dept=<?php echo $row['B173'];?>&room=B173" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1087" y="516"  width="281" height="214"<?php echo department($row['B173']);?>/></a>
<a title="B173A" href="add.php?building=327_B1&dept=<?php echo $row['B173A'];?>&room=B173A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1087" y="326"  width="280" height="185"<?php echo department($row['B173A']);?>/></a>
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
	var buildingNum = '327_B1';
</script>

