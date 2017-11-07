 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321A:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321A_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1308 1850" 
	 style="enable-background:new 0 0 1308 1850" xml:space="preserve">
		
	
<image overflow="visible" width="2102" height="2547" xlink:href="assets/images/321A-1.jpg"  transform="matrix(0.6199 0 0 0.7263 5 0)"></image>

<a title="1060" href="add.php?building=321A_1&dept=<?php echo $row['1060'];?>&room=1060" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="301" y="1728"  width="60" height="66" <?php echo department($row['1060']);?>/></a>
<a title="1065" href="add.php?building=321A_1&dept=<?php echo $row['1065'];?>&room=1065" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="301" y="1642"  width="59" height="86" <?php echo department($row['1065']);?>/></a>
<a title="1067" href="add.php?building=321A_1&dept=<?php echo $row['1067'];?>&room=1067" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="361" y="1642"  width="56" height="57" <?php echo department($row['1067']);?>/></a>
<a title="1062" href="add.php?building=321A_1&dept=<?php echo $row['1062'];?>&room=1062" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="360" y="1699"  width="58" height="94" <?php echo department($row['1062']);?>/></a>
<a title="1037B" href="add.php?building=321A_1&dept=<?php echo $row['1037B'];?>&room=1037B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="417" y="1715"  width="75" height="62" <?php echo department($row['1037B']);?>/></a>
<a title="1055" href="add.php?building=321A_1&dept=<?php echo $row['1055'];?>&room=1055" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="417" y="1642"  width="74" height="71" <?php echo department($row['1055']);?>/></a>
<a title="1037" href="add.php?building=321A_1&dept=<?php echo $row['1037'];?>&room=1037" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="491" y="1642"  width="207" height="135" <?php echo department($row['1037']);?>/></a>
<a title="1035" href="add.php?building=321A_1&dept=<?php echo $row['1035'];?>&room=1035" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="723" y="1708"  width="29" height="43" <?php echo department($row['1035']);?>/></a>
<a title="1039C" href="add.php?building=321A_1&dept=<?php echo $row['1039C'];?>&room=1039C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="752" y="1708"  width="30" height="42" <?php echo department($row['1039C']);?>/></a>
<a title="1039" href="add.php?building=321A_1&dept=<?php echo $row['1039'];?>&room=1039" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="723" y="1750"  width="63" height="29" <?php echo department($row['1039']);?>/></a>
<a title="1039A" href="add.php?building=321A_1&dept=<?php echo $row['1039A'];?>&room=1039A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="786" y="1742"  width="24" height="35" <?php echo department($row['1039A']);?>/></a>
<a title="1039B" href="add.php?building=321A_1&dept=<?php echo $row['1039B'];?>&room=1039B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="782" y="1708"  width="30" height="31" <?php echo department($row['1039B']);?>/></a>
<a title="1029" href="add.php?building=321A_1&dept=<?php echo $row['1029'];?>&room=1029" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="812" y="1757"  width="31" height="20" <?php echo department($row['1029']);?>/></a>
<a title="1027" href="add.php?building=321A_1&dept=<?php echo $row['1027'];?>&room=1027" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="843" y="1728"  width="39" height="49" <?php echo department($row['1027']);?>/></a>
<a title="1025" href="add.php?building=321A_1&dept=<?php echo $row['1025'];?>&room=1025" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="882" y="1728"  width="41" height="51" <?php echo department($row['1025']);?>/></a>
<a title="1020D" href="add.php?building=321A_1&dept=<?php echo $row['1020D'];?>&room=1020D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="923" y="1728"  width="33" height="38" <?php echo department($row['1020D']);?>/></a>
<a title="1024" href="add.php?building=321A_1&dept=<?php echo $row['1024'];?>&room=1024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="923" y="1766"  width="59" height="27" <?php echo department($row['1024']);?>/></a>
<a title="1019" href="add.php?building=321A_1&dept=<?php echo $row['1019'];?>&room=1019" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="982" y="1766"  width="50" height="28" <?php echo department($row['1019']);?>/></a>
<a title="1019A" href="add.php?building=321A_1&dept=<?php echo $row['1019A'];?>&room=1019A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1032" y="1750"  width="37" height="44" <?php echo department($row['1019A']);?>/></a>
<a title="1001A" href="add.php?building=321A_1&dept=<?php echo $row['1001A'];?>&room=1001A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1106" y="1642"  width="155" height="135" <?php echo department($row['1001A']);?>/></a>
<a title="1011" href="add.php?building=321A_1&dept=<?php echo $row['1011'];?>&room=1011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1069" y="1642"  width="34" height="38" <?php echo department($row['1011']);?>/></a>
<a title="1020A" href="add.php?building=321A_1&dept=<?php echo $row['1020A'];?>&room=1020A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="982" y="1642"  width="32" height="31" <?php echo department($row['1020A']);?>/></a>
<a title="1020B" href="add.php?building=321A_1&dept=<?php echo $row['1020B'];?>&room=1020B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="982" y="1673"  width="31" height="36" <?php echo department($row['1020B']);?>/></a>
<a title="1020C" href="add.php?building=321A_1&dept=<?php echo $row['1020C'];?>&room=1020C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="982" y="1708"  width="33" height="45" <?php echo department($row['1020C']);?>/></a>
<a title="1026" href="add.php?building=321A_1&dept=<?php echo $row['1026'];?>&room=1026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="893" y="1642"  width="30" height="40" <?php echo department($row['1026']);?>/></a>
<a title="1028" href="add.php?building=321A_1&dept=<?php echo $row['1028'];?>&room=1028" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="868" y="1642"  width="25" height="38" <?php echo department($row['1028']);?>/></a>
<a title="1030" href="add.php?building=321A_1&dept=<?php echo $row['1030'];?>&room=1030" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="843" y="1642"  width="24" height="41" <?php echo department($row['1030']);?>/></a>
<a title="1032" href="add.php?building=321A_1&dept=<?php echo $row['1032'];?>&room=1032" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="752" y="1642"  width="87" height="42" <?php echo department($row['1032']);?>/></a>
<a title="1033" href="add.php?building=321A_1&dept=<?php echo $row['1033'];?>&room=1033" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="727" y="1642"  width="25" height="41" <?php echo department($row['1033']);?>/></a>
<a title="1052" href="add.php?building=321A_1&dept=<?php echo $row['1052'];?>&room=1052" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="434" y="1228"  width="102" height="135" <?php echo department($row['1052']);?>/></a>
<a title="1148" href="add.php?building=321A_1&dept=<?php echo $row['1148'];?>&room=1148" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="536" y="1283"  width="73" height="80" <?php echo department($row['1148']);?>/></a>
<a title="1148A" href="add.php?building=321A_1&dept=<?php echo $row['1148A'];?>&room=1148A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="536" y="1228"  width="71" height="53" <?php echo department($row['1148A']);?>/></a>
<a title="1142B" href="add.php?building=321A_1&dept=<?php echo $row['1142B'];?>&room=1142B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="614" y="1228"  width="23" height="37" <?php echo department($row['1142B']);?>/></a>
<a title="1142A" href="add.php?building=321A_1&dept=<?php echo $row['1142A'];?>&room=1142A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="666" y="1228"  width="22" height="56" <?php echo department($row['1142A']);?>/></a>
<a title="1142" href="add.php?building=321A_1&dept=<?php echo $row['1142'];?>&room=1142" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="607" y="1284"  width="112" height="41" <?php echo department($row['1142']);?>/></a>
<a title="1144" href="add.php?building=321A_1&dept=<?php echo $row['1144'];?>&room=1144" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="609" y="1325"  width="112" height="38" <?php echo department($row['1144']);?>/></a>
<a title="1136" href="add.php?building=321A_1&dept=<?php echo $row['1136'];?>&room=1136" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="723" y="1228"  width="43" height="85" <?php echo department($row['1136']);?>/></a>
<a title="1116" href="add.php?building=321A_1&dept=<?php echo $row['1116'];?>&room=1116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="893" y="1228"  width="143" height="132" <?php echo department($row['1116']);?>/></a>
<a title="1114" href="add.php?building=321A_1&dept=<?php echo $row['1114'];?>&room=1114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1032" y="1228"  width="57" height="132" <?php echo department($row['1114']);?>/></a>
<a title="1112" href="add.php?building=321A_1&dept=<?php echo $row['1112'];?>&room=1112" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1089" y="1283"  width="59" height="75" <?php echo department($row['1112']);?>/></a>
<a title="1112A" href="add.php?building=321A_1&dept=<?php echo $row['1112A'];?>&room=1112A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1129" y="1228"  width="19" height="53" <?php echo department($row['1112A']);?>/></a>
<a title="1112B" href="add.php?building=321A_1&dept=<?php echo $row['1112B'];?>&room=1112B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1089" y="1228"  width="37" height="30" <?php echo department($row['1112B']);?>/></a>
<a title="1108" href="add.php?building=321A_1&dept=<?php echo $row['1108'];?>&room=1108" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1152" y="1228"  width="92" height="133" <?php echo department($row['1108']);?>/></a>
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
	var buildingNum = '321A_1';
</script>

