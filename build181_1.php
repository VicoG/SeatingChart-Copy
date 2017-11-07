 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 181:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 181_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1200 1000" 
	 style="enable-background:new 0 0 1200 1000" xml:space="preserve">
		
	
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/181-1.jpg"  transform="matrix(0.3824 0 0 0.4045 0 0)"></image>

<a title="1035" href="add.php?building=181_1&dept=<?php echo $row['1035'];?>&room=1035" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="424" y="798"  width="59" height="69" <?php echo department($row['1035']);?>/></a>
<a title="1033" href="add.php?building=181_1&dept=<?php echo $row['1033'];?>&room=1033" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="483" y="805"  width="176" height="62" <?php echo department($row['1033']);?>/></a>
<a title="1030" href="add.php?building=181_1&dept=<?php echo $row['1030'];?>&room=1030" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="653" y="685"  width="121" height="182" <?php echo department($row['1030']);?>/></a>
<a title="1034" href="add.php?building=181_1&dept=<?php echo $row['1034'];?>&room=1034" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="424" y="685"  width="227" height="73" <?php echo department($row['1034']);?>/></a>
<a title="1037" href="add.php?building=181_1&dept=<?php echo $row['1037'];?>&room=1037" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="623"  width="70" height="58" <?php echo department($row['1037']);?>/></a>
<a title="1039" href="add.php?building=181_1&dept=<?php echo $row['1039'];?>&room=1039" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="562"  width="72" height="61" <?php echo department($row['1039']);?>/></a>
<a title="1041" href="add.php?building=181_1&dept=<?php echo $row['1041'];?>&room=1041" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="499"  width="72" height="63" <?php echo department($row['1041']);?>/></a>
<a title="1043" href="add.php?building=181_1&dept=<?php echo $row['1043'];?>&room=1043" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="436"  width="71" height="63" <?php echo department($row['1043']);?>/></a>
<a title="1045" href="add.php?building=181_1&dept=<?php echo $row['1045'];?>&room=1045" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="373"  width="71" height="63" <?php echo department($row['1045']);?>/></a>
<a title="1047" href="add.php?building=181_1&dept=<?php echo $row['1047'];?>&room=1047" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="249" y="313"  width="72" height="60" <?php echo department($row['1047']);?>/></a>
<a title="1036A" href="add.php?building=181_1&dept=<?php echo $row['1036A'];?>&room=1036A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="367" y="685"  width="57" height="44" <?php echo department($row['1036A']);?>/></a>
<a title="1036" href="add.php?building=181_1&dept=<?php echo $row['1036'];?>&room=1036" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="623"  width="71" height="61" <?php echo department($row['1036']);?>/></a>
<a title="1038" href="add.php?building=181_1&dept=<?php echo $row['1038'];?>&room=1038" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="562"  width="69" height="61" <?php echo department($row['1038']);?>/></a>
<a title="1040" href="add.php?building=181_1&dept=<?php echo $row['1040'];?>&room=1040" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="499"  width="70" height="63" <?php echo department($row['1040']);?>/></a>
<a title="1042" href="add.php?building=181_1&dept=<?php echo $row['1042'];?>&room=1042" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="456"  width="68" height="43" <?php echo department($row['1042']);?>/></a>
<a title="1044" href="add.php?building=181_1&dept=<?php echo $row['1044'];?>&room=1044" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="340"  width="60" height="96" <?php echo department($row['1044']);?>/></a>
<a title="1002" href="add.php?building=181_1&dept=<?php echo $row['1002'];?>&room=1002" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="447" y="239"  width="94" height="56" <?php echo department($row['1002']);?>/></a>
<a title="1008" href="add.php?building=181_1&dept=<?php echo $row['1008'];?>&room=1008" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="541" y="239"  width="179" height="75" <?php echo department($row['1008']);?>/></a>
<a title="1010" href="add.php?building=181_1&dept=<?php echo $row['1010'];?>&room=1010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="724" y="244"  width="85" height="69" <?php echo department($row['1010']);?>/></a>
<a title="1001" href="add.php?building=181_1&dept=<?php echo $row['1001'];?>&room=1001" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="423" y="130"  width="60" height="73" <?php echo department($row['1001']);?>/></a>
<a title="1003" href="add.php?building=181_1&dept=<?php echo $row['1003'];?>&room=1003" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="483" y="130"  width="58" height="73" <?php echo department($row['1003']);?>/></a>
<a title="1005" href="add.php?building=181_1&dept=<?php echo $row['1005'];?>&room=1005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="541" y="130"  width="60" height="73" <?php echo department($row['1005']);?>/></a>
<a title="1007" href="add.php?building=181_1&dept=<?php echo $row['1007'];?>&room=1007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="601" y="130"  width="59" height="73" <?php echo department($row['1007']);?>/></a>
<a title="1009" href="add.php?building=181_1&dept=<?php echo $row['1009'];?>&room=1009" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="659" y="130"  width="60" height="73" <?php echo department($row['1009']);?>/></a>
<a title="1011" href="add.php?building=181_1&dept=<?php echo $row['1011'];?>&room=1011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="719" y="130"  width="55" height="46" <?php echo department($row['1011']);?>/>
	<rect x="774" y="562"  width="172" height="120" <?php echo department($row['1011']);?>/>
	</g>
</a>
<a title="1013" href="add.php?building=181_1&dept=<?php echo $row['1013'];?>&room=1013" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="844" y="313"  width="102" height="249" <?php echo department($row['1013']);?>/></a>
<a title="1012" href="add.php?building=181_1&dept=<?php echo $row['1012'];?>&room=1012" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="774" y="313"  width="68" height="249" <?php echo department($row['1012']);?>/></a>
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
	var buildingNum = '181_1';
</script>

