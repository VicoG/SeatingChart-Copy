 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 316</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 316_1 ";
		
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
	//Populate Table  Building 153_1
	while($row = mysqli_fetch_assoc($result)) { ?>
					
<svg id="mySVG" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792"
	 style="enable-background:new 0 0 612 792;" xml:space="preserve">
	 <image style="overflow:visible;" width="3138" height="2472" xlink:href="assets/images/316-1.jpg"  transform="matrix(0.195 0 0 0.32 0 0)"></image>
	 
<a title="148" href="add.php?building=316_1&dept=<?php echo $row['148'];?>&room=148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="24" y="234.3" class="st0" width="39" height="83" <?php echo department($row['148']);?>/></a>
<a title="146" href="add.php?building=316_1&dept=<?php echo $row['146'];?>&room=146" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="63" y="234" class="st0" width="52" height="61" <?php echo department($row['146']);?>/></a>
<a title="134" href="add.php?building=316_1&dept=<?php echo $row['134'];?>&room=148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="217" y="234" class="st0" width="45" height="57" <?php echo department($row['134']);?>/></a>
<a title="132" href="add.php?building=316_1&dept=<?php echo $row['132'];?>&room=132" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="262" y="234" class="st0" width="40" height="58" <?php echo department($row['132']);?>/></a>
<a title="130" href="add.php?building=316_1&dept=<?php echo $row['130'];?>&room=130" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="301.7" y="234" class="st0" width="48" height="59" <?php echo department($row['130']);?>/></a>
<a title="114" href="add.php?building=316_1&dept=<?php echo $row['114'];?>&room=114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="485" y="234" class="st0" width="64" height="57" <?php echo department($row['114']);?>/></a>
<a title="110" href="add.php?building=316_1&dept=<?php echo $row['110'];?>&room=110" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="234" class="st0" width="38" height="76" <?php echo department($row['110']);?>/></a>
<a title="106" href="add.php?building=316_1&dept=<?php echo $row['106'];?>&room=106" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="310" class="st0" width="38" height="72" <?php echo department($row['106']);?>/></a>
<a title="104" href="add.php?building=316_1&dept=<?php echo $row['104'];?>&room=104" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="382" class="st0" width="38" height="86" <?php echo department($row['104']);?>/></a>
<a title="102" href="add.php?building=316_1&dept=<?php echo $row['102'];?>&room=102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="472" class="st0" width="38" height="87" <?php echo department($row['102']);?>/></a>
<a title="101" href="add.php?building=316_1&dept=<?php echo $row['101'];?>&room=101" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="485" y="472" class="st0" width="38" height="86" <?php echo department($row['101']);?>/></a>
<a title="103" href="add.php?building=316_1&dept=<?php echo $row['103'];?>&room=103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="474" y="428" class="st0" width="49" height="44" <?php echo department($row['103']);?>/></a>
<a title="105" href="add.php?building=316_1&dept=<?php echo $row['105'];?>&room=105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="474" y="382" class="st0" width="29" height="45" <?php echo department($row['105']);?>/></a>
<a title="113" href="add.php?building=316_1&dept=<?php echo $row['113'];?>&room=113" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="428" y="293" class="st0" width="104" height="64" <?php echo department($row['113']);?>/></a>
<a title="124" href="add.php?building=316_1&dept=<?php echo $row['124'];?>&room=124" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="380" y="317" class="st0" width="35" height="41" <?php echo department($row['124']);?>/></a>
<a title="118A" href="add.php?building=316_1&dept=<?php echo $row['118A'];?>&room=118A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="350" y="293" class="st0" width="28" height="65" <?php echo department($row['118A']);?>/></a>
<a title="131A" href="add.php?building=316_1&dept=<?php echo $row['131A'];?>&room=131A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="322" y="293" class="st0" width="28" height="66" <?php echo department($row['131A']);?>/></a>
<a title="123" href="add.php?building=316_1&dept=<?php echo $row['123'];?>&room=123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="386" y="386" class="st0" width="42" height="116" <?php echo department($row['123']);?>/></a>
<a title="119" href="add.php?building=316_1&dept=<?php echo $row['119'];?>&room=119" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="427.7" y="382" class="st0" width="44" height="120" <?php echo department($row['119']);?>/></a>
<a title="125" href="add.php?building=316_1&dept=<?php echo $row['125'];?>&room=125" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="336" y="382" class="st0" width="44" height="115" <?php echo department($row['125']);?>/></a>
<a title="131" href="add.php?building=316_1&dept=<?php echo $row['131'];?>&room=131" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="184" y="291" class="st0" width="139" height="89" <?php echo department($row['131']);?>/></a>
<a title="141" href="add.php?building=316_1&dept=<?php echo $row['141'];?>&room=141" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="138" y="260" class="st0" width="46" height="57" <?php echo department($row['141']);?>/>
	<rect x="115" y="317" class="st0" width="68" height="64" <?php echo department($row['141']);?>/>
	</g></a>
<a title="152" href="add.php?building=316_1&dept=<?php echo $row['152'];?>&room=152" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="24" y="488" class="st0" width="89" height="71" <?php echo department($row['152']);?>/>
	<rect x="63" y="437" class="st0" width="51" height="51" <?php echo department($row['152']);?>/>
	</g>
</a>
<a title="150" href="add.php?building=316_1&dept=<?php echo $row['150'];?>&room=150" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="24" y="321" class="st0" width="39" height="137" <?php echo department($row['150']);?>/></a>
<a title="150A" href="add.php?building=316_1&dept=<?php echo $row['150A'];?>&room=150A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="24" y="458" class="st0" width="37" height="29" <?php echo department($row['150A']);?>/></a>
</svg>

<?php 
	 }
 ?>

			</div> 
		</div>            
	</div>                 
</div> 

<script type="text/javascript">
	var buildingNum = '316_1';
</script>

