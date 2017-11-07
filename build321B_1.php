 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321B:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321B_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1219 1511" 
	 style="enable-background:new 0 0 1219 1511" xml:space="preserve">
		
	
<image overflow="visible" width="2117" height="2565" xlink:href="assets/images/321B-1.jpg"  transform="matrix(0.5758 0 0 0.5891 0 0)">
</image>
<a title="1247" href="add.php?building=321B_1&dept=<?php echo $row['1247'];?>&room=1247" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="524" y="852"  width="57" height="113" <?php echo department($row['1247']);?>/></a>
<a title="1249" href="add.php?building=321B_1&dept=<?php echo $row['1249'];?>&room=1249" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="524" y="686"  width="57" height="166" <?php echo department($row['1249']);?>/></a>
<a title="1243A" href="add.php?building=321B_1&dept=<?php echo $row['1243A'];?>&room=1243A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="581" y="908"  width="66" height="57" <?php echo department($row['1243A']);?>/></a>
<a title="1243" href="add.php?building=321B_1&dept=<?php echo $row['1243'];?>&room=1243" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="581" y="861"  width="67" height="47" <?php echo department($row['1243']);?>/></a>
<a title="1237D" href="add.php?building=321B_1&dept=<?php echo $row['1237D'];?>&room=1237D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="581" y="833"  width="33" height="24" <?php echo department($row['1237D']);?>/></a>
<a title="1237B" href="add.php?building=321B_1&dept=<?php echo $row['1237B'];?>&room=1237B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="585" y="686"  width="29" height="75" <?php echo department($row['1237B']);?>/></a>
<a title="1244" href="add.php?building=321B_1&dept=<?php echo $row['1244'];?>&room=1244" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="670" y="927"  width="42" height="38" <?php echo department($row['1244']);?>/></a>
<a title="1242" href="add.php?building=321B_1&dept=<?php echo $row['1242'];?>&room=1242" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="670" y="861"  width="42" height="66" <?php echo department($row['1242']);?>/></a>
<a title="1237A" href="add.php?building=321B_1&dept=<?php echo $row['1237A'];?>&room=1237A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="679" y="829"  width="33" height="28" <?php echo department($row['1237A']);?>/></a>
<a title="1237C" href="add.php?building=321B_1&dept=<?php echo $row['1237C'];?>&room=1237C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="690" y="798"  width="22" height="31" <?php echo department($row['1237C']);?>/></a>
<a title="1237" href="add.php?building=321B_1&dept=<?php echo $row['1237'];?>&room=1237" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="614" y="686"  width="103" height="108" <?php echo department($row['1237']);?>/></a>
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
	var buildingNum = '321B_1';
</script>

