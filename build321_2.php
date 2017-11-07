 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1256 1878" 
	 style="enable-background:new 0 0 1256 1878" xml:space="preserve">
		
	
<image overflow="visible" width="2104" height="3166" xlink:href="assets/images/321-2.jpg"  transform="matrix(0.5951 0 0 0.5932 4 0)"></image>

<a title="2142" href="add.php?building=321_2&dept=<?php echo $row['2142'];?>&room=2142" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="340" y="1260"  width="165" height="97" <?php echo department($row['2142']);?>/></a>
<a title="2148" href="add.php?building=321_2&dept=<?php echo $row['2148'];?>&room=2148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="355" y="1361"  width="49" height="36" <?php echo department($row['2148']);?>/></a>
<a title="2144" href="add.php?building=321_2&dept=<?php echo $row['2144'];?>&room=2144" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="434" y="1361"  width="71" height="37" <?php echo department($row['2144']);?>/></a>
<a title="2124" href="add.php?building=321_2&dept=<?php echo $row['2124'];?>&room=2124" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="709" y="1361"  width="35" height="33" <?php echo department($row['2124']);?>/></a>
<a title="2122" href="add.php?building=321_2&dept=<?php echo $row['2122'];?>&room=2122" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="744" y="1361"  width="35" height="34" <?php echo department($row['2122']);?>/></a>
<a title="2120" href="add.php?building=321_2&dept=<?php echo $row['2120'];?>&room=2120" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="779" y="1361"  width="36" height="34" <?php echo department($row['2120']);?>/></a>
<a title="2118" href="add.php?building=321_2&dept=<?php echo $row['2118'];?>&room=2118" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="815" y="1361"  width="39" height="36" <?php echo department($row['2118']);?>/></a>
<a title="2116" href="add.php?building=321_2&dept=<?php echo $row['2116'];?>&room=2116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="858" y="1361"  width="20" height="34" <?php echo department($row['2116']);?>/></a>
<a title="2114" href="add.php?building=321_2&dept=<?php echo $row['2114'];?>&room=2114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="878" y="1361"  width="20" height="34" <?php echo department($row['2114']);?>/></a>
<a title="2112" href="add.php?building=321_2&dept=<?php echo $row['2112'];?>&room=2112" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="898" y="1357"  width="71" height="37" <?php echo department($row['2112']);?>/></a>
<a title="2110" href="add.php?building=321_2&dept=<?php echo $row['2110'];?>&room=2110" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="969" y="1357"  width="41" height="37" <?php echo department($row['2110']);?>/></a>
<a title="2108" href="add.php?building=321_2&dept=<?php echo $row['2108'];?>&room=2108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="1357"  width="42" height="36" <?php echo department($row['2108']);?>/></a>
<a title="2106" href="add.php?building=321_2&dept=<?php echo $row['2106'];?>&room=2106" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1052" y="1357"  width="43" height="36" <?php echo department($row['2106']);?>/></a>
<a title="2104" href="add.php?building=321_2&dept=<?php echo $row['2104'];?>&room=2104" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1095" y="1357"  width="41" height="37" <?php echo department($row['2104']);?>/></a>
<a title="2102" href="add.php?building=321_2&dept=<?php echo $row['2102'];?>&room=2102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1136" y="1357"  width="44" height="37" <?php echo department($row['2102']);?>/></a>
<a title="2101" href="add.php?building=321_2&dept=<?php echo $row['2101'];?>&room=2101" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1143" y="1294"  width="37" height="41" <?php echo department($row['2101']);?>/></a>
<a title="2103" href="add.php?building=321_2&dept=<?php echo $row['2103'];?>&room=2103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1131" y="1260"  width="49" height="33" <?php echo department($row['2103']);?>/></a>
<a title="2105" href="add.php?building=321_2&dept=<?php echo $row['2105'];?>&room=2105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1089" y="1260"  width="42" height="33" <?php echo department($row['2105']);?>/></a>
<a title="2107" href="add.php?building=321_2&dept=<?php echo $row['2107'];?>&room=2107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1052" y="1260"  width="37" height="33" <?php echo department($row['2107']);?>/></a>
<a title="2109" href="add.php?building=321_2&dept=<?php echo $row['2109'];?>&room=2109" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="1260"  width="39" height="34" <?php echo department($row['2109']);?>/></a>
<a title="2111" href="add.php?building=321_2&dept=<?php echo $row['2111'];?>&room=2111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="969" y="1260"  width="42" height="33" <?php echo department($row['2111']);?>/></a>
<a title="2113" href="add.php?building=321_2&dept=<?php echo $row['2113'];?>&room=2113" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="930" y="1260"  width="39" height="34" <?php echo department($row['2113']);?>/></a>
<a title="2115" href="add.php?building=321_2&dept=<?php echo $row['2115'];?>&room=2115" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="889" y="1260"  width="41" height="34" <?php echo department($row['2115']);?>/></a>
<a title="2117" href="add.php?building=321_2&dept=<?php echo $row['2117'];?>&room=2117" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="849" y="1260"  width="40" height="33" <?php echo department($row['2117']);?>/></a>
<a title="2119" href="add.php?building=321_2&dept=<?php echo $row['2119'];?>&room=2119" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="809" y="1260"  width="40" height="34" <?php echo department($row['2119']);?>/></a>
<a title="2121" href="add.php?building=321_2&dept=<?php echo $row['2121'];?>&room=2121" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="770" y="1260"  width="39" height="33" <?php echo department($row['2121']);?>/></a>
<a title="2123" href="add.php?building=321_2&dept=<?php echo $row['2123'];?>&room=2123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="729" y="1260"  width="41" height="35" <?php echo department($row['2123']);?>/></a>
<a title="2125" href="add.php?building=321_2&dept=<?php echo $row['2125'];?>&room=2125" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="676" y="1260"  width="53" height="33" <?php echo department($row['2125']);?>/></a>
<a title="2134" href="add.php?building=321_2&dept=<?php echo $row['2134'];?>&room=2134" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="609" y="1314"  width="47" height="47" <?php echo department($row['2134']);?>/></a>
<a title="2130" href="add.php?building=321_2&dept=<?php echo $row['2130'];?>&room=2130" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="661" y="1314"  width="28" height="68" <?php echo department($row['2130']);?>/></a>
<a title="2128" href="add.php?building=321_2&dept=<?php echo $row['2128'];?>&room=2128" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="709" y="1314"  width="37" height="32" <?php echo department($row['2128']);?>/></a>
<a title="2100F" href="add.php?building=321_2&dept=<?php echo $row['2100F'];?>&room=2100F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="779" y="1310"  width="97" height="32" <?php echo department($row['2100F']);?>/></a>
<a title="2100E" href="add.php?building=321_2&dept=<?php echo $row['2100E'];?>&room=2100E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="893" y="1310"  width="33" height="35" <?php echo department($row['2100E']);?>/></a>
<a title="2100D" href="add.php?building=321_2&dept=<?php echo $row['2100D'];?>&room=2100D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="926" y="1310"  width="37" height="33" <?php echo department($row['2100D']);?>/></a>
<a title="2100C" href="add.php?building=321_2&dept=<?php echo $row['2100C'];?>&room=2100C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="1310"  width="35" height="34" <?php echo department($row['2100C']);?>/></a>
<a title="2100B" href="add.php?building=321_2&dept=<?php echo $row['2100B'];?>&room=2100B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="998" y="1310"  width="36" height="32" <?php echo department($row['2100B']);?>/></a>
<a title="2100A" href="add.php?building=321_2&dept=<?php echo $row['2100A'];?>&room=2100A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1034" y="1310"  width="59" height="32" <?php echo department($row['2100A']);?>/></a>
<a title="2100" href="add.php?building=321_2&dept=<?php echo $row['2100'];?>&room=2100" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1095" y="1310"  width="34" height="32" <?php echo department($row['2100']);?>/></a>
<a title="2345" href="add.php?building=321_2&dept=<?php echo $row['2345'];?>&room=2345" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="315" y="702"  width="198" height="109" <?php echo department($row['2345']);?>/></a>
<a title="2348D" href="add.php?building=321_2&dept=<?php echo $row['2348D'];?>&room=2348D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="340" y="548"  width="56" height="35" <?php echo department($row['2348D']);?>/></a>
<a title="2348C" href="add.php?building=321_2&dept=<?php echo $row['2348C'];?>&room=2348C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="340" y="511"  width="56" height="37" <?php echo department($row['2348C']);?>/></a>
<a title="2348B" href="add.php?building=321_2&dept=<?php echo $row['2348B'];?>&room=2348B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="315" y="476"  width="82" height="35" <?php echo department($row['2348B']);?>/></a>
<a title="2348" href="add.php?building=321_2&dept=<?php echo $row['2348'];?>&room=2348" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="396" y="476"  width="97" height="156" <?php echo department($row['2348']);?>/></a>
<a title="2348E" href="add.php?building=321_2&dept=<?php echo $row['2348E'];?>&room=2348E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="493" y="476"  width="105" height="109" <?php echo department($row['2348E']);?>/></a>
<a title="2348A" href="add.php?building=321_2&dept=<?php echo $row['2348A'];?>&room=2348A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="493" y="590"  width="103" height="42" <?php echo department($row['2348A']);?>/></a>
<a title="2347A" href="add.php?building=321_2&dept=<?php echo $row['2347A'];?>&room=2347A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="549" y="632"  width="47" height="50" <?php echo department($row['2347A']);?>/></a>
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
	var buildingNum = '321_2';
</script>

