 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 218:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 218_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1889 1280" 
	 style="enable-background:new 0 0 1889 1280" xml:space="preserve">
		
	
<image overflow="visible" width="4000" height="3000" xlink:href="assets/images/218-1.png"  transform="matrix(0.4722 0 0 0.4267 0 0)"></image>

<a title="172" href="add.php?building=691_1&dept=<?php echo $row['172'];?>&room=172" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="989"  width="131" height="90"<?php echo department($row['172']);?>/></a>
<a title="174" href="add.php?building=691_1&dept=<?php echo $row['174'];?>&room=174" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="910"  width="127" height="79"<?php echo department($row['174']);?>/></a>
<a title="176" href="add.php?building=691_1&dept=<?php echo $row['176'];?>&room=176" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="830"  width="131" height="74"<?php echo department($row['176']);?>/></a>
<a title="178" href="add.php?building=691_1&dept=<?php echo $row['178'];?>&room=178" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="749"  width="127" height="76"<?php echo department($row['178']);?>/></a>
<a title="180" href="add.php?building=691_1&dept=<?php echo $row['180'];?>&room=180" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="670"  width="130" height="74"<?php echo department($row['180']);?>/></a>
<a title="182" href="add.php?building=691_1&dept=<?php echo $row['182'];?>&room=182" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="591"  width="127" height="79"<?php echo department($row['182']);?>/></a>
<a title="186" href="add.php?building=691_1&dept=<?php echo $row['186'];?>&room=186" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="123" y="332"  width="126" height="255"<?php echo department($row['186']);?>/></a>
<a title="192" href="add.php?building=691_1&dept=<?php echo $row['192'];?>&room=192" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="123" y="240"  width="126" height="92"<?php echo department($row['192']);?>/></a>
<a title="171" href="add.php?building=691_1&dept=<?php echo $row['171'];?>&room=171" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="293" y="956"  width="85" height="123"<?php echo department($row['171']);?>/></a>
<a title="175" href="add.php?building=691_1&dept=<?php echo $row['175'];?>&room=175" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="293" y="809"  width="85" height="105"<?php echo department($row['175']);?>/></a>
<a title="177" href="add.php?building=691_1&dept=<?php echo $row['177'];?>&room=177" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="293" y="644"  width="83" height="159"<?php echo department($row['177']);?>/></a>
<a title="185" href="add.php?building=691_1&dept=<?php echo $row['185'];?>&room=185" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="289" y="490"  width="87" height="93"<?php echo department($row['185']);?>/></a>
<a title="191" href="add.php?building=691_1&dept=<?php echo $row['191'];?>&room=191" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="289" y="295"  width="87" height="191"<?php echo department($row['191']);?>/></a>
<a title="193" href="add.php?building=691_1&dept=<?php echo $row['193'];?>&room=193" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="289" y="202"  width="89" height="88"<?php echo department($row['193']);?>/></a>
<a title="153" href="add.php?building=691_1&dept=<?php echo $row['153'];?>&room=153" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="601" y="622"  width="148" height="97"<?php echo department($row['153']);?>/></a>
<a title="147" href="add.php?building=691_1&dept=<?php echo $row['147'];?>&room=147" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="753" y="622"  width="139" height="96"<?php echo department($row['147']);?>/></a>
<a title="145" href="add.php?building=691_1&dept=<?php echo $row['145'];?>&room=145" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="901" y="622"  width="97" height="99"<?php echo department($row['145']);?>/></a>
<a title="139" href="add.php?building=691_1&dept=<?php echo $row['139'];?>&room=139" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1017" y="622"  width="113" height="96"<?php echo department($row['139']);?>/></a>
<a title="135" href="add.php?building=691_1&dept=<?php echo $row['135'];?>&room=135" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1135" y="622"  width="171" height="96"<?php echo department($row['135']);?>/></a>
<a title="156" href="add.php?building=691_1&dept=<?php echo $row['156'];?>&room=156" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="465" y="481"  width="186" height="102"<?php echo department($row['156']);?>/></a>
<a title="152" href="add.php?building=691_1&dept=<?php echo $row['152'];?>&room=152" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="655" y="481"  width="94" height="102"<?php echo department($row['152']);?>/></a>
<a title="150" href="add.php?building=691_1&dept=<?php echo $row['150'];?>&room=150" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="753" y="481"  width="143" height="99"/<?php echo department($row['150']);?>/></a>>
<a title="144" href="add.php?building=691_1&dept=<?php echo $row['144'];?>&room=144" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="896" y="481"  width="163" height="98"<?php echo department($row['144']);?>/></a>
<a title="138" href="add.php?building=691_1&dept=<?php echo $row['138'];?>&room=138" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1066" y="481"  width="166" height="98"<?php echo department($row['138']);?>/></a>
<a title="134" href="add.php?building=691_1&dept=<?php echo $row['134'];?>&room=134" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1232" y="481"  width="118" height="99"<?php echo department($row['134']);?>/></a>
<a title="132" href="add.php?building=691_1&dept=<?php echo $row['132'];?>&room=132" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1350" y="481"  width="153" height="98"<?php echo department($row['132']);?>/></a>
<a title="103" href="add.php?building=691_1&dept=<?php echo $row['103'];?>&room=103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="1001"  width="84" height="78"<?php echo department($row['103']);?>/></a>
<a title="105" href="add.php?building=691_1&dept=<?php echo $row['105'];?>&room=105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="809"  width="84" height="193"<?php echo department($row['105']);?>/></a>
<a title="107" href="add.php?building=691_1&dept=<?php echo $row['107'];?>&room=107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="718"  width="82" height="92"<?php echo department($row['107']);?>/></a>
<a title="111" href="add.php?building=691_1&dept=<?php echo $row['111'];?>&room=111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="663"  width="82" height="49"<?php echo department($row['111']);?>/></a>
<a title="119" href="add.php?building=691_1&dept=<?php echo $row['119'];?>&room=119" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="290"  width="121" height="189"<?php echo department($row['119']);?>/></a>
<a title="123" href="add.php?building=691_1&dept=<?php echo $row['123'];?>&room=123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1513" y="202"  width="121" height="86"<?php echo department($row['123']);?>/></a>
<a title="108" href="add.php?building=691_1&dept=<?php echo $row['108'];?>&room=108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1638" y="780"  width="128" height="299"<?php echo department($row['108']);?>/></a>
<a title="114" href="add.php?building=691_1&dept=<?php echo $row['114'];?>&room=114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1638" y="500"  width="127" height="273"<?php echo department($row['114']);?>/></a>
<a title="116" href="add.php?building=691_1&dept=<?php echo $row['116'];?>&room=116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1643" y="349"  width="122" height="151"<?php echo department($row['116']);?>/></a>
<a title="120" href="add.php?building=691_1&dept=<?php echo $row['120'];?>&room=120" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1643" y="202"  width="122" height="141"<?php echo department($row['120']);?>/></a>
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
	var buildingNum = '218_1';
</script>

