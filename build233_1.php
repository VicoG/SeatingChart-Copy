 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 233:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 233_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1759 1308" 
	 style="enable-background:new 0 0 1759 1308" xml:space="preserve">
		
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/233-1.jpg"  transform="matrix(0.5605 0 0 0.5279 0 0)"></image>

<a title="1001" href="add.php?building=233_1&dept=<?php echo $row['1001'];?>&room=1001" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="86" y="809"  width="260" height="221" <?php echo department($row['1001']);?>/></a>
<a title="1003" href="add.php?building=233_1&dept=<?php echo $row['1003'];?>&room=1003" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="86" y="653"  width="260" height="156" <?php echo department($row['1003']);?>/></a>
<a title="1005" href="add.php?building=233_1&dept=<?php echo $row['1005'];?>&room=1005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="86" y="498"  width="180" height="151" <?php echo department($row['1005']);?>/></a>
<a title="1007" href="add.php?building=233_1&dept=<?php echo $row['1007'];?>&room=1007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="86" y="279"  width="179" height="219" <?php echo department($row['1007']);?>/></a>
<a title="1011" href="add.php?building=233_1&dept=<?php echo $row['1011'];?>&room=1011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="265" y="279"  width="362" height="162" <?php echo department($row['1011']);?>/></a>
<a title="1025" href="add.php?building=233_1&dept=<?php echo $row['1025'];?>&room=1025" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="633" y="279"  width="333" height="322" <?php echo department($row['1025']);?>/></a>
<a title="1026" href="add.php?building=233_1&dept=<?php echo $row['1026'];?>&room=1026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="966" y="279"  width="197" height="322" <?php echo department($row['1026']);?>/></a>
<a title="1100" href="add.php?building=233_1&dept=<?php echo $row['1100'];?>&room=1100" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1163" y="279"  width="504" height="746" <?php echo department($row['1100']);?>/></a>
<a title="1020" href="add.php?building=233_1&dept=<?php echo $row['1020'];?>&room=1020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1034" y="797"  width="124" height="228" <?php echo department($row['1020']);?>/></a>
<a title="1016" href="add.php?building=233_1&dept=<?php echo $row['1016'];?>&room=1016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="808" y="880"  width="158" height="150" <?php echo department($row['1016']);?>/></a>
<a title="1008" href="add.php?building=233_1&dept=<?php echo $row['1008'];?>&room=1008" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="656" y="880"  width="152" height="149" <?php echo department($row['1008']);?>/></a>
<a title="1006" href="add.php?building=233_1&dept=<?php echo $row['1006'];?>&room=1006" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="540" y="876"  width="106" height="154" <?php echo department($row['1006']);?>/></a>
<a title="1015" href="add.php?building=233_1&dept=<?php echo $row['1015'];?>&room=1015" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="517" y="601"  width="182" height="196" <?php echo department($row['1015']);?>/></a>
<a title="1000" href="add.php?building=233_1&dept=<?php echo $row['1000'];?>&room=1000" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="265" y="448"  width="245" height="201" <?php echo department($row['1000']);?>/></a>
<a title="1013" href="add.php?building=233_1&dept=<?php echo $row['1013'];?>&room=1013" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="510" y="448"  width="116" height="147" <?php echo department($row['1013']);?>/></a>
<a title="1024" href="add.php?building=233_1&dept=<?php echo $row['1024'];?>&room=1024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="966" y="601"  width="194" height="195" <?php echo department($row['1024']);?>/></a>
<a title="1017" href="add.php?building=233_1&dept=<?php echo $row['1017'];?>&room=1017" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="699" y="605"  width="182" height="191" <?php echo department($row['1017']);?>/></a>
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
	var buildingNum = '233_1';
</script>

