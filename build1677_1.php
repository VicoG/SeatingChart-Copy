 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 1677:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php 
		// Database query
			$query  = "SELECT * FROM 1677_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1200 1200" 
	 style="enable-background:new 0 0 1200 1200" xml:space="preserve">
		

<image overflow="visible" width="2122" height="1844" xlink:href="assets/images/1677-1.jpg"  transform="matrix(0.5646 0 0 0.6508 0 0)">
</image>

<a title="1084" href="add.php?building=1677_1&dept=<?php echo $row['1084'];?>&room=1084" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="330" y="1034"  width="115" height="86"<?php echo department($row['1084']);?>/></a>
<a title="1082" href="add.php?building=1677_1&dept=<?php echo $row['1082'];?>&room=1082" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="1034"  width="81" height="87"<?php echo department($row['1082']);?>/></a>
<a title="1080" href="add.php?building=1677_1&dept=<?php echo $row['1080'];?>&room=1080" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="526" y="1034"  width="86" height="87"<?php echo department($row['1080']);?>/></a>
<a title="1078" href="add.php?building=1677_1&dept=<?php echo $row['1078'];?>&room=1078" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="612" y="1034"  width="84" height="86"<?php echo department($row['1078']);?>/></a>
<a title="1076" href="add.php?building=1677_1&dept=<?php echo $row['1076'];?>&room=1076" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="696" y="1034"  width="83" height="88"<?php echo department($row['1076']);?>/></a>
<a title="1074" href="add.php?building=1677_1&dept=<?php echo $row['1074'];?>&room=1074" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="784" y="1034"  width="84" height="88"<?php echo department($row['1074']);?>/></a>
<a title="1072" href="add.php?building=1677_1&dept=<?php echo $row['1072'];?>&room=1072" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="868" y="1034"  width="86" height="84"<?php echo department($row['1072']);?>/></a>
<a title="1085" href="add.php?building=1677_1&dept=<?php echo $row['1085'];?>&room=1085" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="866"  width="195" height="162"<?php echo department($row['1085']);?>/></a>
<a title="1004" href="add.php?building=1677_1&dept=<?php echo $row['1004'];?>&room=1004" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="773"  width="79" height="93"<?php echo department($row['1004']);?>/></a>
<a title="1003" href="add.php?building=1677_1&dept=<?php echo $row['1003'];?>&room=1003" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="803"  width="79" height="49"<?php echo department($row['1003']);?>/></a>
<a title="1005" href="add.php?building=1677_1&dept=<?php echo $row['1005'];?>&room=1005" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="716"  width="75" height="78"<?php echo department($row['1005']);?>/></a>
<a title="1007" href="add.php?building=1677_1&dept=<?php echo $row['1007'];?>&room=1007" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="634"  width="73" height="65"<?php echo department($row['1007']);?>/></a>
<a title="1002" href="add.php?building=1677_1&dept=<?php echo $row['1002'];?>&room=1002" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="51" y="314"  width="80" height="170"<?php echo department($row['1002']);?>/></a>
<a title="1014" href="add.php?building=1677_1&dept=<?php echo $row['1014'];?>&room=1014" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="444"  width="78" height="94"<?php echo department($row['1014']);?>/></a>
<a title="1016" href="add.php?building=1677_1&dept=<?php echo $row['1016'];?>&room=1016" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="345"  width="76" height="94"<?php echo department($row['1016']);?>/></a>
<a title="1018" href="add.php?building=1677_1&dept=<?php echo $row['1018'];?>&room=1018" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="247"  width="79" height="98"<?php echo department($row['1018']);?>/></a>
<a title="1020" href="add.php?building=1677_1&dept=<?php echo $row['1020'];?>&room=1020" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="144"  width="78" height="98"<?php echo department($row['1020']);?>/></a>
<a title="1022" href="add.php?building=1677_1&dept=<?php echo $row['1022'];?>&room=1022" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="131" y="54"  width="114" height="90"<?php echo department($row['1022']);?>/></a>
<a title="1024" href="add.php?building=1677_1&dept=<?php echo $row['1024'];?>&room=1024" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="245" y="54"  width="85" height="85"<?php echo department($row['1024']);?>/></a>
<a title="1013" href="add.php?building=1677_1&dept=<?php echo $row['1013'];?>&room=1013" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="496"  width="67" height="80"<?php echo department($row['1013']);?>/></a>
<a title="1015" href="add.php?building=1677_1&dept=<?php echo $row['1015'];?>&room=1015" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="387"  width="69" height="109"<?php echo department($row['1015']);?>/></a>
<a title="1098" href="add.php?building=1677_1&dept=<?php echo $row['1098'];?>&room=1098" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="290"  width="155" height="97"<?php echo department($row['1098']);?>/></a>
<a title="1019" href="add.php?building=1677_1&dept=<?php echo $row['1019'];?>&room=1019" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="251" y="188"  width="77" height="98"<?php echo department($row['1019']);?>/></a>
<a title="1027" href="add.php?building=1677_1&dept=<?php echo $row['1027'];?>&room=1027" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="326" y="188"  width="81" height="96"<?php echo department($row['1027']);?>/></a>
<a title="1096" href="add.php?building=1677_1&dept=<?php echo $row['1096'];?>&room=1096" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="334" y="387"  width="72" height="181"<?php echo department($row['1096']);?>/></a>
<a title="1088" href="add.php?building=1677_1&dept=<?php echo $row['1088'];?>&room=1088" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="330" y="900"  width="76" height="87"<?php echo department($row['1088']);?>/></a>
<a title="1083" href="add.php?building=1677_1&dept=<?php echo $row['1083'];?>&room=1083" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="832"  width="81" height="155"<?php echo department($row['1083']);?>/></a>
<a title="1077B" href="add.php?building=1677_1&dept=<?php echo $row['1077B'];?>&room=1077B" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="526" y="900"  width="114" height="87"<?php echo department($row['1077B']);?>/></a>
<a title="1077" href="add.php?building=1677_1&dept=<?php echo $row['1077'];?>&room=1077" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="640" y="900"  width="115" height="85"<?php echo department($row['1077']);?>/></a>
<a title="1077A" href="add.php?building=1677_1&dept=<?php echo $row['1077A'];?>&room=1077A" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="755" y="900"  width="113" height="86"<?php echo department($row['1077A']);?>/></a>
<a title="1071" href="add.php?building=1677_1&dept=<?php echo $row['1071'];?>&room=1071" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="868" y="900"  width="84" height="86"<?php echo department($row['1071']);?>/></a>
<a title="1063" href="add.php?building=1677_1&dept=<?php echo $row['1063'];?>&room=1063" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="952" y="837"  width="82" height="149"<?php echo department($row['1063']);?>/></a>
<a title="1061" href="add.php?building=1677_1&dept=<?php echo $row['1061'];?>&room=1061" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="958" y="738"  width="76" height="94"<?php echo department($row['1061']);?>/></a>
<a title="1059" href="add.php?building=1677_1&dept=<?php echo $row['1059'];?>&room=1059" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="954" y="640"  width="78" height="94"<?php echo department($row['1059']);?>/></a>
<a title="1057" href="add.php?building=1677_1&dept=<?php echo $row['1057'];?>&room=1057" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="952" y="543"  width="80" height="91"<?php echo department($row['1057']);?>/></a>
<a title="1055" href="add.php?building=1677_1&dept=<?php echo $row['1055'];?>&room=1055" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="958" y="444"  width="74" height="94"<?php echo department($row['1055']);?>/></a>
<a title="1053" href="add.php?building=1677_1&dept=<?php echo $row['1053'];?>&room=1053" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="954" y="345"  width="78" height="93"<?php echo department($row['1053']);?>/></a>
<a title="1051" href="add.php?building=1677_1&dept=<?php echo $row['1051'];?>&room=1051" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="952" y="207"  width="80" height="138"<?php echo department($row['1051']);?>/></a>
<a title="1041" href="add.php?building=1677_1&dept=<?php echo $row['1041'];?>&room=1041" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="868" y="188"  width="84" height="86"<?php echo department($row['1041']);?>/></a>
<a title="1039" href="add.php?building=1677_1&dept=<?php echo $row['1039'];?>&room=1039" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="784" y="188"  width="84" height="86"<?php echo department($row['1039']);?>/></a>
<a title="1037" href="add.php?building=1677_1&dept=<?php echo $row['1037'];?>&room=1037" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="696" y="188"  width="87" height="84"<?php echo department($row['1037']);?>/></a>
<a title="1035" href="add.php?building=1677_1&dept=<?php echo $row['1035'];?>&room=1035" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="612" y="188"  width="81" height="86"<?php echo department($row['1035']);?>/></a>
<a title="1033" href="add.php?building=1677_1&dept=<?php echo $row['1033'];?>&room=1033" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="530" y="188"  width="82" height="86"<?php echo department($row['1033']);?>/></a>
<a title="1031" href="add.php?building=1677_1&dept=<?php echo $row['1031'];?>&room=1031" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="188"  width="86" height="87"<?php echo department($row['1031']);?>/></a>
<a title="1097" href="add.php?building=1677_1&dept=<?php echo $row['1097'];?>&room=1097" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="279"  width="79" height="94"<?php echo department($row['1097']);?>/></a>
<a title="1095" href="add.php?building=1677_1&dept=<?php echo $row['1095'];?>&room=1095" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="378"  width="81" height="95"<?php echo department($row['1095']);?>/></a>
<a title="1093" href="add.php?building=1677_1&dept=<?php echo $row['1093'];?>&room=1093" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="479"  width="78" height="97"<?php echo department($row['1093']);?>/></a>
<a title="1091" href="add.php?building=1677_1&dept=<?php echo $row['1091'];?>&room=1091" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="634"  width="78" height="96"<?php echo department($row['1091']);?>/></a>
<a title="1089" href="add.php?building=1677_1&dept=<?php echo $row['1089'];?>&room=1089" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="445" y="734"  width="78" height="93"<?php echo department($row['1089']);?>/></a>
<a title="1066" href="add.php?building=1677_1&dept=<?php echo $row['1066'];?>&room=1066" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="900"  width="77" height="128"<?php echo department($row['1066']);?>/></a>
<a title="1064" href="add.php?building=1677_1&dept=<?php echo $row['1064'];?>&room=1064" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="773"  width="78" height="125"<?php echo department($row['1064']);?>/></a>
<a title="1060" href="add.php?building=1677_1&dept=<?php echo $row['1060'];?>&room=1060" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="673"  width="77" height="95"<?php echo department($row['1060']);?>/></a>
<a title="1058" href="add.php?building=1677_1&dept=<?php echo $row['1058'];?>&room=1058" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="576"  width="81" height="93"<?php echo department($row['1058']);?>/></a>
<a title="1056" href="add.php?building=1677_1&dept=<?php echo $row['1056'];?>&room=1056" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="473"  width="77" height="96"<?php echo department($row['1056']);?>/></a>
<a title="1054" href="add.php?building=1677_1&dept=<?php echo $row['1054'];?>&room=1054" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="378"  width="79" height="95"/<?php echo department($row['1054']);?>/></a>>
<a title="1050" href="add.php?building=1677_1&dept=<?php echo $row['1050'];?>&room=1050" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1071" y="279"  width="79" height="99"<?php echo department($row['1050']);?>/></a>
<a title="1048" href="add.php?building=1677_1&dept=<?php echo $row['1048'];?>&room=1048" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1076" y="150"  width="72" height="122"<?php echo department($row['1048']);?>/></a>
<a title="1044" href="add.php?building=1677_1&dept=<?php echo $row['1044'];?>&room=1044" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="1042" y="54"  width="107" height="91"<?php echo department($row['1044']);?>/></a>
<a title="1042" href="add.php?building=1677_1&dept=<?php echo $row['1042'];?>&room=1042" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="952" y="54"  width="83" height="86"<?php echo department($row['1042']);?>/></a>
<a title="1040" href="add.php?building=1677_1&dept=<?php echo $row['1040'];?>&room=1040" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="868" y="54"  width="83" height="85"<?php echo department($row['1040']);?>/></a>
<a title="1038" href="add.php?building=1677_1&dept=<?php echo $row['1038'];?>&room=1038" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="783" y="54"  width="82" height="85"<?php echo department($row['1038']);?>/></a>
<a title="1036" href="add.php?building=1677_1&dept=<?php echo $row['1036'];?>&room=1036" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="696" y="54"  width="84" height="87"<?php echo department($row['1036']);?>/></a>
<a title="1034" href="add.php?building=1677_1&dept=<?php echo $row['1034'];?>&room=1034" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="612" y="54"  width="84" height="87"<?php echo department($row['1034']);?>/></a>
<a title="1032" href="add.php?building=1677_1&dept=<?php echo $row['1032'];?>&room=1032" data-target="#myModal" role="button" data-toggle="modal" rel="tooltip"><rect x="536" y="54"  width="76" height="84"<?php echo department($row['1032']);?>/></a>
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
	var buildingNum = '1677_1';
</script>

