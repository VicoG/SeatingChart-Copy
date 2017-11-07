 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321A:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321A_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1309 1724" 
	 style="enable-background:new 0 0 1309 1724" xml:space="preserve">
		
	
<image overflow="visible" width="2112" height="3178" xlink:href="assets/images/321A-2.jpg"  transform="matrix(0.6198 0 0 0.5425 0 0)"></image>

<a title="2142" href="add.php?building=321A_2&dept=<?php echo $row['2142'];?>&room=2142" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="353" y="1157"  width="174" height="90" <?php echo department($row['2142']);?>/></a>
<a title="2148" href="add.php?building=321A_2&dept=<?php echo $row['2148'];?>&room=2148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="369" y="1251"  width="53" height="32" <?php echo department($row['2148']);?>/></a>
<a title="2144" href="add.php?building=321A_2&dept=<?php echo $row['2144'];?>&room=2144" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="454" y="1251"  width="73" height="34" <?php echo department($row['2144']);?>/></a>
<a title="2143" href="add.php?building=321A_2&dept=<?php echo $row['2143'];?>&room=2143" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="527" y="1212"  width="43" height="35" <?php echo department($row['2143']);?>/></a>
<a title="2124" href="add.php?building=321A_2&dept=<?php echo $row['2124'];?>&room=2124" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="737" y="1251"  width="39" height="32" <?php echo department($row['2124']);?>/></a>
<a title="2122" href="add.php?building=321A_2&dept=<?php echo $row['2122'];?>&room=2122" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="776" y="1251"  width="37" height="33" <?php echo department($row['2122']);?>/></a>
<a title="2120" href="add.php?building=321A_2&dept=<?php echo $row['2120'];?>&room=2120" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="813" y="1251"  width="37" height="33" <?php echo department($row['2120']);?>/></a>
<a title="2118" href="add.php?building=321A_2&dept=<?php echo $row['2118'];?>&room=2118" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="850" y="1251"  width="40" height="32" <?php echo department($row['2118']);?>/></a>
<a title="2116" href="add.php?building=321A_2&dept=<?php echo $row['2116'];?>&room=2116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="890" y="1251"  width="25" height="32" <?php echo department($row['2116']);?>/></a>
<a title="2114" href="add.php?building=321A_2&dept=<?php echo $row['2114'];?>&room=2114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="915" y="1251"  width="21" height="32" <?php echo department($row['2114']);?>/></a>
<a title="2112" href="add.php?building=321A_2&dept=<?php echo $row['2112'];?>&room=2112" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="936" y="1247"  width="74" height="35" <?php echo department($row['2112']);?>/></a>
<a title="2110" href="add.php?building=321A_2&dept=<?php echo $row['2110'];?>&room=2110" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="1247"  width="43" height="35" <?php echo department($row['2110']);?>/></a>
<a title="2108" href="add.php?building=321A_2&dept=<?php echo $row['2108'];?>&room=2108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1053" y="1247"  width="44" height="34" <?php echo department($row['2108']);?>/></a>
<a title="2106" href="add.php?building=321A_2&dept=<?php echo $row['2106'];?>&room=2106" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1097" y="1247"  width="43" height="34" <?php echo department($row['2106']);?>/></a>
<a title="2104" href="add.php?building=321A_2&dept=<?php echo $row['2104'];?>&room=2104" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1140" y="1247"  width="44" height="34" <?php echo department($row['2104']);?>/></a>
<a title="2102" href="add.php?building=321A_2&dept=<?php echo $row['2102'];?>&room=2102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1184" y="1247"  width="46" height="33" <?php echo department($row['2102']);?>/></a>
<a title="2101" href="add.php?building=321A_2&dept=<?php echo $row['2101'];?>&room=2101" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1192" y="1192"  width="38" height="34" <?php echo department($row['2101']);?>/></a>
<a title="2103" href="add.php?building=321A_2&dept=<?php echo $row['2103'];?>&room=2103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1179" y="1157"  width="51" height="33" <?php echo department($row['2103']);?>/></a>
<a title="2105" href="add.php?building=321A_2&dept=<?php echo $row['2105'];?>&room=2105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1136" y="1157"  width="43" height="32" <?php echo department($row['2105']);?>/></a>
<a title="2107" href="add.php?building=321A_2&dept=<?php echo $row['2107'];?>&room=2107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1097" y="1157"  width="39" height="32" <?php echo department($row['2107']);?>/></a>
<a title="2109" href="add.php?building=321A_2&dept=<?php echo $row['2109'];?>&room=2109" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1053" y="1157"  width="44" height="33" <?php echo department($row['2109']);?>/></a>
<a title="2111" href="add.php?building=321A_2&dept=<?php echo $row['2111'];?>&room=2111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="1157"  width="41" height="32" <?php echo department($row['2111']);?>/></a>
<a title="2113" href="add.php?building=321A_2&dept=<?php echo $row['2113'];?>&room=2113" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="969" y="1157"  width="41" height="33" <?php echo department($row['2113']);?>/></a>
<a title="2115" href="add.php?building=321A_2&dept=<?php echo $row['2115'];?>&room=2115" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="926" y="1157"  width="43" height="32" <?php echo department($row['2115']);?>/></a>
<a title="2117" href="add.php?building=321A_2&dept=<?php echo $row['2117'];?>&room=2117" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="886" y="1157"  width="40" height="33" <?php echo department($row['2117']);?>/></a>
<a title="2119" href="add.php?building=321A_2&dept=<?php echo $row['2119'];?>&room=2119" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="845" y="1157"  width="41" height="32" <?php echo department($row['2119']);?>/></a>
<a title="2121" href="add.php?building=321A_2&dept=<?php echo $row['2121'];?>&room=2121" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="802" y="1157"  width="43" height="32" <?php echo department($row['2121']);?>/></a>
<a title="2123" href="add.php?building=321A_2&dept=<?php echo $row['2123'];?>&room=2123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="762" y="1157"  width="40" height="33" <?php echo department($row['2123']);?>/></a>
<a title="2125" href="add.php?building=321A_2&dept=<?php echo $row['2125'];?>&room=2125" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="705" y="1157"  width="57" height="32" <?php echo department($row['2125']);?>/></a>
<a title="2127" href="add.php?building=321A_2&dept=<?php echo $row['2127'];?>&room=2127" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="666" y="1157"  width="39" height="34" <?php echo department($row['2127']);?>/></a>
<a title="2134" href="add.php?building=321A_2&dept=<?php echo $row['2134'];?>&room=2134" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="649" y="1212"  width="37" height="42" <?php echo department($row['2134']);?>/></a>
<a title="2130" href="add.php?building=321A_2&dept=<?php echo $row['2130'];?>&room=2130" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="686" y="1212"  width="32" height="57" <?php echo department($row['2130']);?>/></a>
<a title="2128" href="add.php?building=321A_2&dept=<?php echo $row['2128'];?>&room=2128" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="737" y="1206"  width="43" height="32" <?php echo department($row['2128']);?>/></a>
<a title="2100F" href="add.php?building=321A_2&dept=<?php echo $row['2100F'];?>&room=2100F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="813" y="1206"  width="100" height="29" <?php echo department($row['2100F']);?>/></a>
<a title="2100E" href="add.php?building=321A_2&dept=<?php echo $row['2100E'];?>&room=2100E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="930" y="1206"  width="39" height="29" <?php echo department($row['2100E']);?>/></a>
<a title="2100D" href="add.php?building=321A_2&dept=<?php echo $row['2100D'];?>&room=2100D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="969" y="1206"  width="35" height="29" <?php echo department($row['2100D']);?>/></a>
<a title="2100C" href="add.php?building=321A_2&dept=<?php echo $row['2100C'];?>&room=2100C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1004" y="1206"  width="37" height="29" <?php echo department($row['2100C']);?>/></a>
<a title="2100B" href="add.php?building=321A_2&dept=<?php echo $row['2100B'];?>&room=2100B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1041" y="1206"  width="38" height="29" <?php echo department($row['2100B']);?>/></a>
<a title="2100A" href="add.php?building=321A_2&dept=<?php echo $row['2100A'];?>&room=2100A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1079" y="1206"  width="62" height="30" <?php echo department($row['2100A']);?>/></a>
<a title="2100" href="add.php?building=321A_2&dept=<?php echo $row['2100'];?>&room=2100" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1140" y="1202"  width="37" height="34" <?php echo department($row['2100']);?>/></a>
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
	var buildingNum = '321A_2';
</script>

