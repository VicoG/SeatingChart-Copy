 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 234:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 234_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1908 1291" 
	 style="enable-background:new 0 0 1908 1291" xml:space="preserve">
		
<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/234-1.jpg"  transform="matrix(0.608 0 0 0.5222 0 0)"></image>

<a title="1020" href="add.php?building=234_1&dept=<?php echo $row['1020'];?>&room=1020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="794" y="886"  width="183" height="129" <?php echo department($row['1020']);?>/></a>
<a title="1018" href="add.php?building=234_1&dept=<?php echo $row['1018'];?>&room=1018" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="610" y="886"  width="177" height="129" <?php echo department($row['1018']);?>/></a>
<a title="1016" href="add.php?building=234_1&dept=<?php echo $row['1016'];?>&room=1016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="424" y="886"  width="181" height="130" <?php echo department($row['1016']);?>/></a>
<a title="1014" href="add.php?building=234_1&dept=<?php echo $row['1014'];?>&room=1014" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="240" y="886"  width="180" height="132" <?php echo department($row['1014']);?>/></a>
<a title="1012" href="add.php?building=234_1&dept=<?php echo $row['1012'];?>&room=1012" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="67" y="768"  width="168" height="247" <?php echo department($row['1012']);?>/></a>
<a title="1010" href="add.php?building=234_1&dept=<?php echo $row['1010'];?>&room=1010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="67" y="519"  width="169" height="249" <?php echo department($row['1010']);?>/></a>
<a title="1001" href="add.php?building=234_1&dept=<?php echo $row['1001'];?>&room=1001" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="67" y="310"  width="187" height="139" <?php echo department($row['1001']);?>/></a>
<a title="1003" href="add.php?building=234_1&dept=<?php echo $row['1003'];?>&room=1003" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="254" y="310"  width="181" height="140" <?php echo department($row['1003']);?>/></a>
<a title="1005" href="add.php?building=234_1&dept=<?php echo $row['1005'];?>&room=1005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="435" y="310"  width="184" height="140" <?php echo department($row['1005']);?>/></a>
<a title="1007" href="add.php?building=234_1&dept=<?php echo $row['1007'];?>&room=1007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="619" y="310"  width="181" height="139" <?php echo department($row['1007']);?>/></a>
<a title="1009" href="add.php?building=234_1&dept=<?php echo $row['1009'];?>&room=1009" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="800" y="310"  width="187" height="139" <?php echo department($row['1009']);?>/></a>
<a title="1011" href="add.php?building=234_1&dept=<?php echo $row['1011'];?>&room=1011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="987" y="310"  width="183" height="140" <?php echo department($row['1011']);?>/></a>
<a title="1013" href="add.php?building=234_1&dept=<?php echo $row['1013'];?>&room=1013" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1170" y="310"  width="183" height="138" <?php echo department($row['1013']);?>/></a>
<a title="1015" href="add.php?building=234_1&dept=<?php echo $row['1015'];?>&room=1015" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1353" y="310"  width="207" height="138" <?php echo department($row['1015']);?>/></a>
<a title="1017" href="add.php?building=234_1&dept=<?php echo $row['1017'];?>&room=1017" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1672" y="310"  width="181" height="141" <?php echo department($row['1017']);?>/></a>
<a title="1019" href="add.php?building=234_1&dept=<?php echo $row['1019'];?>&room=1019" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1672" y="455"  width="183" height="158" <?php echo department($row['1019']);?>/></a>
<a title="1021" href="add.php?building=234_1&dept=<?php echo $row['1021'];?>&room=1021" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1672" y="618"  width="181" height="140" <?php echo department($row['1021']);?>/></a>
<a title="1023B" href="add.php?building=234_1&dept=<?php echo $row['1023B'];?>&room=1023B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="1492" y="582"  width="110" height="176" <?php echo department($row['1023B']);?>/>
	<rect x="1602" y="673"  width="68" height="85" <?php echo department($row['1023B']);?>/>
	</g>
</a>
<a title="1023A" href="add.php?building=234_1&dept=<?php echo $row['1023A'];?>&room=1023A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1338" y="582"  width="149" height="174" <?php echo department($row['1023A']);?>/></a>
<a title="1023" href="add.php?building=234_1&dept=<?php echo $row['1023'];?>&room=1023" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1149" y="519"  width="193" height="235" <?php echo department($row['1023']);?>/></a>
<a title="1022" href="add.php?building=234_1&dept=<?php echo $row['1022'];?>&room=1022" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="977" y="613"  width="167" height="141" <?php echo department($row['1022']);?>/></a>
<a title="1024" href="add.php?building=234_1&dept=<?php echo $row['1024'];?>&room=1024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="977" y="519"  width="173" height="89" <?php echo department($row['1024']);?>/></a>
<a title="1002" href="add.php?building=234_1&dept=<?php echo $row['1002'];?>&room=1002" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="672" y="455"  width="183" height="125" <?php echo department($row['1002']);?>/></a>
<a title="1030" href="add.php?building=234_1&dept=<?php echo $row['1030'];?>&room=1030" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="677" y="589"  width="211" height="100" <?php echo department($row['1030']);?>/></a>
<a title="1026" href="add.php?building=234_1&dept=<?php echo $row['1026'];?>&room=1026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="672" y="700"  width="216" height="110" <?php echo department($row['1026']);?>/></a>
<a title="1000B" href="add.php?building=234_1&dept=<?php echo $row['1000B'];?>&room=1000B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="245" y="459"  width="427" height="414" <?php echo department($row['1000B']);?>/></a>
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
	var buildingNum = '234_1';
</script>

