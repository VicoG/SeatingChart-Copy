 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1635 1359" 
	 style="enable-background:new 0 0 1635 1359" xml:space="preserve">
		
<image overflow="visible" width="2099" height="2537" xlink:href="assets/images/321-1.jpg"  transform="matrix(0.7789 0 0 0.5357 0 0)"></image>

<a title="1060" href="add.php?building=321_1&dept=<?php echo $row['1060'];?>&room=1060" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="370" y="1270"  width="74" height="46" <?php echo department($row['1060']);?>/></a>
<a title="1065" href="add.php?building=321_1&dept=<?php echo $row['1065'];?>&room=1065" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="370" y="1206"  width="75" height="59" <?php echo department($row['1065']);?>/></a>
<a title="1067" href="add.php?building=321_1&dept=<?php echo $row['1067'];?>&room=1067" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="450" y="1206"  width="67" height="40" <?php echo department($row['1067']);?>/></a>
<a title="1062" href="add.php?building=321_1&dept=<?php echo $row['1062'];?>&room=1062" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="444" y="1246"  width="73" height="70" <?php echo department($row['1062']);?>/></a>
<a title="1037B" href="add.php?building=321_1&dept=<?php echo $row['1037B'];?>&room=1037B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="517" y="1260"  width="92" height="45" <?php echo department($row['1037B']);?>/></a>
<a title="1055" href="add.php?building=321_1&dept=<?php echo $row['1055'];?>&room=1055" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="517" y="1206"  width="93" height="54" <?php echo department($row['1055']);?>/></a>
<a title="1037" href="add.php?building=321_1&dept=<?php echo $row['1037'];?>&room=1037" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="610" y="1206"  width="256" height="99" <?php echo department($row['1037']);?>/></a>
<a title="1039" href="add.php?building=321_1&dept=<?php echo $row['1039'];?>&room=1039" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="902" y="1287"  width="79" height="18" <?php echo department($row['1039']);?>/></a>
<a title="1035" href="add.php?building=321_1&dept=<?php echo $row['1035'];?>&room=1035" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="902" y="1255"  width="37" height="32" <?php echo department($row['1035']);?>/></a>
<a title="1039C" href="add.php?building=321_1&dept=<?php echo $row['1039C'];?>&room=1039C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="939" y="1255"  width="35" height="28" <?php echo department($row['1039C']);?>/></a>
<a title="1039B" href="add.php?building=321_1&dept=<?php echo $row['1039B'];?>&room=1039B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="974" y="1255"  width="38" height="23" <?php echo department($row['1039B']);?>/></a>
<a title="1039A" href="add.php?building=321_1&dept=<?php echo $row['1039A'];?>&room=1039A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="981" y="1278"  width="29" height="28" <?php echo department($row['1039A']);?>/></a>
<a title="1029" href="add.php?building=321_1&dept=<?php echo $row['1029'];?>&room=1029" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="1255"  width="41" height="49" <?php echo department($row['1029']);?>/></a>
<a title="1027" href="add.php?building=321_1&dept=<?php echo $row['1027'];?>&room=1027" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1051" y="1270"  width="49" height="35" <?php echo department($row['1027']);?>/></a>
<a title="1025" href="add.php?building=321_1&dept=<?php echo $row['1025'];?>&room=1025" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1100" y="1270"  width="52" height="34" <?php echo department($row['1025']);?>/></a>
<a title="1020" href="add.php?building=321_1&dept=<?php echo $row['1020'];?>&room=1020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1123" y="1246"  width="38" height="22" <?php echo department($row['1020']);?>/></a>
<a title="1020D" href="add.php?building=321_1&dept=<?php echo $row['1020D'];?>&room=1020D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1152" y="1268"  width="40" height="27" <?php echo department($row['1020D']);?>/></a>
<a title="1024" href="add.php?building=321_1&dept=<?php echo $row['1024'];?>&room=1024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1152" y="1295"  width="47" height="22" <?php echo department($row['1024']);?>/></a>
<a title="1019" href="add.php?building=321_1&dept=<?php echo $row['1019'];?>&room=1019" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1227" y="1295"  width="62" height="21" <?php echo department($row['1019']);?>/></a>
<a title="1019A" href="add.php?building=321_1&dept=<?php echo $row['1019A'];?>&room=1019A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1293" y="1287"  width="45" height="29" <?php echo department($row['1019A']);?>/></a>
<a title="1001A" href="add.php?building=321_1&dept=<?php echo $row['1001A'];?>&room=1001A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1387" y="1206"  width="192" height="98" <?php echo department($row['1001A']);?>/></a>
<a title="1011" href="add.php?building=321_1&dept=<?php echo $row['1011'];?>&room=1011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1338" y="1206"  width="42" height="27" <?php echo department($row['1011']);?>/></a>
<a title="1015A" href="add.php?building=321_1&dept=<?php echo $row['1015A'];?>&room=1015A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1268" y="1233"  width="21" height="32" <?php echo department($row['1015A']);?>/></a>
<a title="1015B" href="add.php?building=321_1&dept=<?php echo $row['1015B'];?>&room=1015B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1268" y="1268"  width="20" height="29" <?php echo department($row['1015B']);?>/></a>
<a title="1020C" href="add.php?building=321_1&dept=<?php echo $row['1020C'];?>&room=1020C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1227" y="1255"  width="38" height="28" <?php echo department($row['1020C']);?>/></a>
<a title="1020B" href="add.php?building=321_1&dept=<?php echo $row['1020B'];?>&room=1020B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1227" y="1233"  width="38" height="20" <?php echo department($row['1020B']);?>/></a>
<a title="1020A" href="add.php?building=321_1&dept=<?php echo $row['1020A'];?>&room=1020A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1227" y="1206"  width="38" height="24" <?php echo department($row['1020A']);?>/></a>
<a title="1026" href="add.php?building=321_1&dept=<?php echo $row['1026'];?>&room=1026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1117" y="1206"  width="35" height="29" <?php echo department($row['1026']);?>/></a>
<a title="1028" href="add.php?building=321_1&dept=<?php echo $row['1028'];?>&room=1028" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1082" y="1206"  width="35" height="27" <?php echo department($row['1028']);?>/></a>
<a title="1030" href="add.php?building=321_1&dept=<?php echo $row['1030'];?>&room=1030" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1046" y="1206"  width="36" height="27" <?php echo department($row['1030']);?>/></a>
<a title="1032" href="add.php?building=321_1&dept=<?php echo $row['1032'];?>&room=1032" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="939" y="1206"  width="107" height="27" <?php echo department($row['1032']);?>/></a>
<a title="1033" href="add.php?building=321_1&dept=<?php echo $row['1033'];?>&room=1033" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="902" y="1206"  width="36" height="29" <?php echo department($row['1033']);?>/></a>
<a title="1000" href="add.php?building=321_1&dept=<?php echo $row['1000'];?>&room=1000" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="609" y="1000"  width="950" height="202" <?php echo department($row['1000']);?>/></a>
<a title="1108" href="add.php?building=321_1&dept=<?php echo $row['1108'];?>&room=1108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1437" y="901"  width="118" height="99" <?php echo department($row['1108']);?>/></a>
<a title="1112" href="add.php?building=321_1&dept=<?php echo $row['1112'];?>&room=1112" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1362" y="922"  width="75" height="74" <?php echo department($row['1112']);?>/></a>
<a title="1114" href="add.php?building=321_1&dept=<?php echo $row['1114'];?>&room=1114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1293" y="901"  width="69" height="99" <?php echo department($row['1114']);?>/></a>
<a title="1116" href="add.php?building=321_1&dept=<?php echo $row['1116'];?>&room=1116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1117" y="901"  width="177" height="94" <?php echo department($row['1116']);?>/></a>
<a title="1136" href="add.php?building=321_1&dept=<?php echo $row['1136'];?>&room=1136" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="974" y="901"  width="143" height="96" <?php echo department($row['1136']);?>/></a>
<a title="1142" href="add.php?building=321_1&dept=<?php echo $row['1142'];?>&room=1142" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="757" y="974"  width="140" height="21" <?php echo department($row['1142']);?>/></a>
<a title="1144" href="add.php?building=321_1&dept=<?php echo $row['1144'];?>&room=1144" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="757" y="945"  width="139" height="29" <?php echo department($row['1144']);?>/></a>
<a title="1148" href="add.php?building=321_1&dept=<?php echo $row['1148'];?>&room=1148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="666" y="945"  width="91" height="53" <?php echo department($row['1148']);?>/></a>
<a title="1152" href="add.php?building=321_1&dept=<?php echo $row['1152'];?>&room=1152" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="542" y="901"  width="124" height="98" <?php echo department($row['1152']);?>/></a>
<a title="1247" href="add.php?building=321_1&dept=<?php echo $row['1247'];?>&room=1247" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="699" y="763"  width="77" height="101" <?php echo department($row['1247']);?>/></a>
<a title="1249" href="add.php?building=321_1&dept=<?php echo $row['1249'];?>&room=1249" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="699" y="612"  width="78" height="151" <?php echo department($row['1249']);?>/></a>
<a title="1237" href="add.php?building=321_1&dept=<?php echo $row['1237'];?>&room=1237" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="819" y="612"  width="142" height="99" <?php echo department($row['1237']);?>/></a>
<a title="1237C" href="add.php?building=321_1&dept=<?php echo $row['1237C'];?>&room=1237C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="922" y="711"  width="33" height="31" <?php echo department($row['1237C']);?>/></a>
<a title="1237A" href="add.php?building=321_1&dept=<?php echo $row['1237A'];?>&room=1237A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="902" y="742"  width="53" height="28" <?php echo department($row['1237A']);?>/></a>
<a title="1244" href="add.php?building=321_1&dept=<?php echo $row['1244'];?>&room=1244" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="896" y="770"  width="59" height="62" <?php echo department($row['1244']);?>/></a>
<a title="1242" href="add.php?building=321_1&dept=<?php echo $row['1242'];?>&room=1242" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="896" y="832"  width="60" height="35" <?php echo department($row['1242']);?>/></a>
<a title="1243A" href="add.php?building=321_1&dept=<?php echo $row['1243A'];?>&room=1243A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="782" y="814"  width="84" height="50" <?php echo department($row['1243A']);?>/></a>
<a title="1243" href="add.php?building=321_1&dept=<?php echo $row['1243'];?>&room=1243" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="776" y="770"  width="91" height="41" <?php echo department($row['1243']);?>/></a>
<a title="1237D" href="add.php?building=321_1&dept=<?php echo $row['1237D'];?>&room=1237D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="782" y="742"  width="40" height="26" <?php echo department($row['1237D']);?>/></a>
<a title="1351A" href="add.php?building=321_1&dept=<?php echo $row['1351A'];?>&room=1351A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="473" y="530"  width="89" height="51" <?php echo department($row['1351A']);?>/></a>
<a title="1351" href="add.php?building=321_1&dept=<?php echo $row['1351'];?>&room=1351" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="473" y="404"  width="184" height="126" <?php echo department($row['1351']);?>/></a>
<a title="1437A" href="add.php?building=321_1&dept=<?php echo $row['1437A'];?>&room=1437A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="473" y="76"  width="185" height="264" <?php echo department($row['1437A']);?>/></a>
<a title="1437" href="add.php?building=321_1&dept=<?php echo $row['1437'];?>&room=1437" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="657" y="76"  width="152" height="220" <?php echo department($row['1437']);?>/>
	<rect x="809" y="76"  width="146" height="150" <?php echo department($row['1437']);?>/>
	</g>
</a>
<a title="1439" href="add.php?building=321_1&dept=<?php echo $row['1439'];?>&room=1439" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="854" y="226"  width="101" height="66" <?php echo department($row['1439']);?>/></a>
<a title="1352" href="add.php?building=321_1&dept=<?php echo $row['1352'];?>&room=1352" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="809" y="340"  width="145" height="87" <?php echo department($row['1352']);?>/></a>
<a title="1352F" href="add.php?building=321_1&dept=<?php echo $row['1352F'];?>&room=1352F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="884" y="451"  width="70" height="34" <?php echo department($row['1352F']);?>/></a>
<a title="1348D" href="add.php?building=321_1&dept=<?php echo $row['1348D'];?>&room=1348D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="842" y="427"  width="42" height="59" <?php echo department($row['1348D']);?>/></a>
<a title="1348" href="add.php?building=321_1&dept=<?php echo $row['1348'];?>&room=1348" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="750" y="486"  width="205" height="93" <?php echo department($row['1348']);?>/></a>
<a title="1318E" href="add.php?building=321_1&dept=<?php echo $row['1318E'];?>&room=1318E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="954" y="451"  width="46" height="130" <?php echo department($row['1318E']);?>/></a>
<a title="1318" href="add.php?building=321_1&dept=<?php echo $row['1318'];?>&room=1318" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1032" y="328"  width="106" height="253" <?php echo department($row['1318']);?>/></a>
<a title="1415C" href="add.php?building=321_1&dept=<?php echo $row['1415C'];?>&room=1415C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1132" y="296"  width="67" height="32" <?php echo department($row['1415C']);?>/></a>
<a title="1415" href="add.php?building=321_1&dept=<?php echo $row['1415'];?>&room=1415" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1156" y="76"  width="158" height="196" <?php echo department($row['1415']);?>/></a>
<a title="1415B" href="add.php?building=321_1&dept=<?php echo $row['1415B'];?>&room=1415B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1199" y="296"  width="42" height="28" <?php echo department($row['1415B']);?>/></a>
<a title="1318D" href="add.php?building=321_1&dept=<?php echo $row['1318D'];?>&room=1318D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1215" y="328"  width="73" height="49" <?php echo department($row['1318D']);?>/></a>
<a title="1318C" href="add.php?building=321_1&dept=<?php echo $row['1318C'];?>&room=1318C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1138" y="396"  width="148" height="82" <?php echo department($row['1318C']);?>/></a>
<a title="1317" href="add.php?building=321_1&dept=<?php echo $row['1317'];?>&room=1317" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1199" y="478"  width="86" height="104" <?php echo department($row['1317']);?>/></a>
<a title="1318A" href="add.php?building=321_1&dept=<?php echo $row['1318A'];?>&room=1318A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1138" y="478"  width="57" height="74" <?php echo department($row['1318A']);?>/></a>
<a title="1315A" href="add.php?building=321_1&dept=<?php echo $row['1315A'];?>&room=1315A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1314" y="518"  width="72" height="63" <?php echo department($row['1315A']);?>/></a>
<a title="1315D" href="add.php?building=321_1&dept=<?php echo $row['1315D'];?>&room=1315D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1413" y="518"  width="73" height="60" <?php echo department($row['1315D']);?>/></a>
<a title="1315B" href="add.php?building=321_1&dept=<?php echo $row['1315B'];?>&room=1315B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1314" y="427"  width="190" height="87" <?php echo department($row['1315B']);?>/></a>
<a title="1315C" href="add.php?building=321_1&dept=<?php echo $row['1315C'];?>&room=1315C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1408" y="381"  width="96" height="46" <?php echo department($row['1315C']);?>/></a>
<a title="1411D" href="add.php?building=321_1&dept=<?php echo $row['1411D'];?>&room=1411D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1452" y="351"  width="52" height="26" <?php echo department($row['1411D']);?>/></a>
<a title="1411B" href="add.php?building=321_1&dept=<?php echo $row['1411B'];?>&room=1411B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1387" y="351"  width="67" height="27" <?php echo department($row['1411B']);?>/></a>
<a title="1411A" href="add.php?building=321_1&dept=<?php echo $row['1411A'];?>&room=1411A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1314" y="351"  width="75" height="26" <?php echo department($row['1411A']);?>/></a>
<a title="1411" href="add.php?building=321_1&dept=<?php echo $row['1411'];?>&room=1411" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1314" y="175"  width="98" height="145" <?php echo department($row['1411']);?>/></a>
<a title="1411C" href="add.php?building=321_1&dept=<?php echo $row['1411C'];?>&room=1411C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1314" y="76"  width="190" height="99" <?php echo department($row['1411C']);?>/></a>
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
	var buildingNum = '321_1';
</script>

