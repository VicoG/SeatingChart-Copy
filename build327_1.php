 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 327:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 327_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1594 1134" 
	 style="enable-background:new 0 0 1594 1134" xml:space="preserve">
		
	
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/327-1.jpg"  transform="matrix(0.508 0 0 0.4587 0 0)"></image>

<a title="1270F" href="add.php?building=327_1&dept=<?php echo $row['1270F'];?>&room=1270F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="581" y="887"  width="165" height="102"<?php echo department($row['1270F']);?>/></a>
<a title="1270H" href="add.php?building=327_1&dept=<?php echo $row['1270H'];?>&room=1270H" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="757" y="873"  width="344" height="116"<?php echo department($row['1270H']);?>/></a>
<a title="1272G" href="add.php?building=327_1&dept=<?php echo $row['1272G'];?>&room=1272G" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1101" y="739"  width="130" height="250"<?php echo department($row['1272G']);?>/></a>
<a title="1272C" href="add.php?building=327_1&dept=<?php echo $row['1272C'];?>&room=1272C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="933" y="739"  width="168" height="128"<?php echo department($row['1272C']);?>/></a>
<a title="1270G" href="add.php?building=327_1&dept=<?php echo $row['1270G'];?>&room=1270G" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="750" y="735"  width="183" height="106"<?php echo department($row['1270G']);?>/></a>
<a title="1270E" href="add.php?building=327_1&dept=<?php echo $row['1270E'];?>&room=1270E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="581" y="735"  width="163" height="147"<?php echo department($row['1270E']);?>/></a>
<a title="1275" href="add.php?building=327_1&dept=<?php echo $row['1275'];?>&room=1275" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="73" y="86"  width="378" height="260"<?php echo department($row['1275']);?>/></a>
<a title="1271" href="add.php?building=327_1&dept=<?php echo $row['1271'];?>&room=1271" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="488" y="287"  width="771" height="441"<?php echo department($row['1271']);?>/></a>
<a title="1271A" href="add.php?building=327_1&dept=<?php echo $row['1271A'];?>&room=1271A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1263" y="287"  width="229" height="272"<?php echo department($row['1271A']);?>/></a>
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
	var buildingNum = '327_1';
</script>

