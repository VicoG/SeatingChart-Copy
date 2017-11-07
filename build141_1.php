 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 141:</b> Floor 1 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 141_1 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1608 792"
	 style="enable-background: new 0 0 1608 792" xml:space="preserve">
		
<image overflow="visible" width="3114" height="1562" xlink:href="assets/images/141-1.jpg"  transform="matrix(0.5153 0 0 0.507 0 0)"></image>
		
<a title="100" href="add.php?building=141_1&dept=<?php echo $row['100'];?>&room=100" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="37" y="340"  width="152" height="92" <?php echo department($row['100']);?>/></a>
<a title="100B" href="add.php?building=141_1&dept=<?php echo $row['100B'];?>&room=100B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="189" y="361"  width="120" height="71" <?php echo department($row['100B']);?>/></a>
<a title="103" href="add.php?building=141_1&dept=<?php echo $row['103'];?>&room=103" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="309" y="312"  width="89" height="120" <?php echo department($row['103']);?>/></a>
<a title="105" href="add.php?building=141_1&dept=<?php echo $row['105'];?>&room=105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="398" y="312"  width="98" height="120" <?php echo department($row['105']);?>/></a>
<a title="162" href="add.php?building=141_1&dept=<?php echo $row['162'];?>&room=162" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="501" y="312"  width="47" height="119" <?php echo department($row['162']);?>/>
	<rect x="548" y="352"  width="32" height="79" <?php echo department($row['162']);?>/>
	</g>
</a>
<a title="164" href="add.php?building=141_1&dept=<?php echo $row['164'];?>&room=164" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="548" y="308"  width="41" height="32" <?php echo department($row['164']);?>/></a>
<a title="161" href="add.php?building=141_1&dept=<?php echo $row['161'];?>&room=161" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="656" y="293"  width="63" height="31" <?php echo department($row['161']);?>/></a>
<a title="167" href="add.php?building=141_1&dept=<?php echo $row['167'];?>&room=167" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="667" y="331"  width="161" height="100" <?php echo department($row['167']);?>/>
	<rect x="726" y="293"  width="102" height="38" <?php echo department($row['167']);?>/>
	</g>
</a>
<a title="102A" href="add.php?building=141_1&dept=<?php echo $row['102A'];?>&room=102A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="37" y="126"  width="66" height="67" <?php echo department($row['102A']);?>/></a>
<a title="102" href="add.php?building=141_1&dept=<?php echo $row['102'];?>&room=102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="103" y="126"  width="79" height="182" <?php echo department($row['102']);?>/>
	<rect x="37" y="193"  width="67" height="118" <?php echo department($row['102']);?>/>
	</g>
</a>
<a title="107" href="add.php?building=141_1&dept=<?php echo $row['107'];?>&room=107" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="341" y="126"  width="99" height="101" <?php echo department($row['107']);?>/></a>
<a title="115" href="add.php?building=141_1&dept=<?php echo $row['115'];?>&room=115" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="347" y="227"  width="93" height="50" <?php echo department($row['115']);?>/></a>
<a title="152" href="add.php?building=141_1&dept=<?php echo $row['152'];?>&room=152" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="501" y="126"  width="100" height="56" <?php echo department($row['152']);?>/>
	<rect x="501" y="182"  width="75" height="22" <?php echo department($row['152']);?>/>
	</g>
</a>
<a title="154" href="add.php?building=141_1&dept=<?php echo $row['154'];?>&room=154" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="576" y="188"  width="42" height="34" <?php echo department($row['154']);?>/></a>
<a title="156" href="add.php?building=141_1&dept=<?php echo $row['156'];?>&room=156" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
<rect x="501" y="211"  width="77" height="66" <?php echo department($row['156']);?>/>
<rect x="580" y="232"  width="18" height="45" <?php echo department($row['156']);?>/>
</a>
<a title="150" href="add.php?building=141_1&dept=<?php echo $row['150'];?>&room=150" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="606" y="126"  width="113" height="62" <?php echo department($row['150']);?>/></a>
<a title="155" href="add.php?building=141_1&dept=<?php echo $row['155'];?>&room=155" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="676" y="193"  width="39" height="34" <?php echo department($row['155']);?>/></a>
<a title="157" href="add.php?building=141_1&dept=<?php echo $row['157'];?>&room=157" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
<rect x="676" y="232"  width="151" height="53" <?php echo department($row['157']);?>/>
<rect x="719" y="211"  width="107" height="17" <?php echo department($row['157']);?>/>
</a>
<a title="151" href="add.php?building=141_1&dept=<?php echo $row['151'];?>&room=151" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="726" y="126"  width="100" height="79" <?php echo department($row['151']);?>/></a>
<a title="117" href="add.php?building=141_1&dept=<?php echo $row['117'];?>&room=117" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="110" y="432"  width="154" height="186" <?php echo department($row['117']);?>/></a>
<a title="1096" href="add.php?building=141_1&dept=<?php echo $row['1096'];?>&room=1096" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="838" y="588"  width="72" height="151" <?php echo department($row['1096']);?>/></a>
<a title="1094" href="add.php?building=141_1&dept=<?php echo $row['1094'];?>&room=1094" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="914" y="666"  width="62" height="73" <?php echo department($row['1094']);?>/></a>
<a title="1092C" href="add.php?building=141_1&dept=<?php echo $row['1092C'];?>&room=1092C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="983" y="666"  width="48" height="73" <?php echo department($row['1092C']);?>/></a>
<a title="1092B" href="add.php?building=141_1&dept=<?php echo $row['1092B'];?>&room=1092B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1035" y="666"  width="53" height="71" <?php echo department($row['1092B']);?>/></a>
<a title="1092A" href="add.php?building=141_1&dept=<?php echo $row['1092A'];?>&room=1092A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1092" y="666"  width="53" height="70" <?php echo department($row['1092A']);?>/></a>
<a title="1070" href="add.php?building=141_1&dept=<?php echo $row['1070'];?>&room=1070" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="833" y="533"  width="81" height="55" <?php echo department($row['1070']);?>/></a>
<a title="1071" href="add.php?building=141_1&dept=<?php echo $row['1071'];?>&room=1071" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="921" y="533"  width="20" height="53" <?php echo department($row['1071']);?>/></a>
<a title="1072" href="add.php?building=141_1&dept=<?php echo $row['1072'];?>&room=1072" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="949" y="543"  width="42" height="39" <?php echo department($row['1072']);?>/></a>
<a title="1091A" href="add.php?building=141_1&dept=<?php echo $row['1091A'];?>&room=1091A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1092" y="598"  width="51" height="41" <?php echo department($row['1091A']);?>/></a>
<a title="1091B" href="add.php?building=141_1&dept=<?php echo $row['1091B'];?>&room=1091B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1107" y="526"  width="36" height="37" <?php echo department($row['1091B']);?>/></a>
<a title="1091" href="add.php?building=141_1&dept=<?php echo $row['1091'];?>&room=1091" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1065" y="570"  width="42" height="18" <?php echo department($row['1091']);?>/></a>
<a title="1088" href="add.php?building=141_1&dept=<?php echo $row['1088'];?>&room=1088" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1041" y="533"  width="42" height="24" <?php echo department($row['1088']);?>/></a>
<a title="1087" href="add.php?building=141_1&dept=<?php echo $row['1087'];?>&room=1087" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1083" y="481"  width="44" height="38" <?php echo department($row['1087']);?>/></a>
<a title="1086" href="add.php?building=141_1&dept=<?php echo $row['1086'];?>&room=1086" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1116" y="444"  width="37" height="25" <?php echo department($row['1086']);?>/></a>
<a title="1078" href="add.php?building=141_1&dept=<?php echo $row['1078'];?>&room=1078" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="999" y="492"  width="50" height="34" <?php echo department($row['1078']);?>/></a>
<a title="1085" href="add.php?building=141_1&dept=<?php echo $row['1085'];?>&room=1085" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1041" y="444"  width="55" height="40" <?php echo department($row['1085']);?>/></a>
<a title="1084" href="add.php?building=141_1&dept=<?php echo $row['1084'];?>&room=1084" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1092" y="401"  width="54" height="43" <?php echo department($row['1084']);?>/></a>
<a title="1076" href="add.php?building=141_1&dept=<?php echo $row['1076'];?>&room=1076" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="955" y="473"  width="50" height="29" <?php echo department($row['1076']);?>/></a>
<a title="1081" href="add.php?building=141_1&dept=<?php echo $row['1081'];?>&room=1081" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="999" y="444"  width="43" height="25" <?php echo department($row['1081']);?>/></a>
<a title="1082" href="add.php?building=141_1&dept=<?php echo $row['1082'];?>&room=1082" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1035" y="401"  width="51" height="29" <?php echo department($row['1082']);?>/></a>
<a title="1083" href="add.php?building=141_1&dept=<?php echo $row['1083'];?>&room=1083" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1074" y="361"  width="46" height="33" <?php echo department($row['1083']);?>/></a>
<a title="1069" href="add.php?building=141_1&dept=<?php echo $row['1069'];?>&room=1069" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="838" y="484"  width="83" height="29" <?php echo department($row['1069']);?>/></a>
<a title="1068" href="add.php?building=141_1&dept=<?php echo $row['1068'];?>&room=1068" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="883" y="450"  width="38" height="34" <?php echo department($row['1068']);?>/></a>
<a title="1058" href="add.php?building=141_1&dept=<?php echo $row['1058'];?>&room=1058" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="931" y="405"  width="36" height="34" <?php echo department($row['1058']);?>/></a>
<a title="1048" href="add.php?building=141_1&dept=<?php echo $row['1048'];?>&room=1048" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="961" y="373"  width="44" height="28" <?php echo department($row['1048']);?>/></a>
<a title="1038" href="add.php?building=141_1&dept=<?php echo $row['1038'];?>&room=1038" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1005" y="324"  width="44" height="29" <?php echo department($row['1038']);?>/></a>
<a title="1028" href="add.php?building=141_1&dept=<?php echo $row['1028'];?>&room=1028" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1031" y="285"  width="52" height="33" <?php echo department($row['1028']);?>/></a>
<a title="1018" href="add.php?building=141_1&dept=<?php echo $row['1018'];?>&room=1018" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1086" y="240"  width="40" height="33" <?php echo department($row['1018']);?>/></a>
<a title="1064" href="add.php?building=141_1&dept=<?php echo $row['1064'];?>&room=1064" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="833" y="450"  width="38" height="34" <?php echo department($row['1064']);?>/></a>
<a title="1066" href="add.php?building=141_1&dept=<?php echo $row['1066'];?>&room=1066" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="854" y="416"  width="48" height="34" <?php echo department($row['1066']);?>/></a>
<a title="1056" href="add.php?building=141_1&dept=<?php echo $row['1056'];?>&room=1056" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="898" y="377"  width="43" height="28" <?php echo department($row['1056']);?>/></a>
<a title="1046" href="add.php?building=141_1&dept=<?php echo $row['1046'];?>&room=1046" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="931" y="340"  width="52" height="31" <?php echo department($row['1046']);?>/></a>
<a title="1036" href="add.php?building=141_1&dept=<?php echo $row['1036'];?>&room=1036" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="976" y="293"  width="46" height="32" <?php echo department($row['1036']);?>/></a>
<a title="1026" href="add.php?building=141_1&dept=<?php echo $row['1026'];?>&room=1026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1010" y="260"  width="49" height="25" <?php echo department($row['1026']);?>/></a>
<a title="1016" href="add.php?building=141_1&dept=<?php echo $row['1016'];?>&room=1016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1049" y="215"  width="55" height="32" <?php echo department($row['1016']);?>/></a>
<a title="1004" href="add.php?building=141_1&dept=<?php echo $row['1004'];?>&room=1004" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1074" y="150"  width="73" height="55" <?php echo department($row['1004']);?>/></a>
<a title="1010" href="add.php?building=141_1&dept=<?php echo $row['1010'];?>&room=1010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1065" y="126"  width="74" height="23" <?php echo department($row['1010']);?>/></a>
<a title="1055" href="add.php?building=141_1&dept=<?php echo $row['1055'];?>&room=1055" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="862" y="346"  width="59" height="25" <?php echo department($row['1055']);?>/></a>
<a title="1045" href="add.php?building=141_1&dept=<?php echo $row['1045'];?>&room=1045" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="902" y="318"  width="51" height="22" <?php echo department($row['1045']);?>/></a>
<a title="1035" href="add.php?building=141_1&dept=<?php echo $row['1035'];?>&room=1035" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="949" y="267"  width="46" height="26" <?php echo department($row['1035']);?>/></a>
<a title="1025" href="add.php?building=141_1&dept=<?php echo $row['1025'];?>&room=1025" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="983" y="232"  width="40" height="28" <?php echo department($row['1025']);?>/></a>
<a title="1054" href="add.php?building=141_1&dept=<?php echo $row['1054'];?>&room=1054" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="848" y="318"  width="43" height="25" <?php echo department($row['1054']);?>/></a>
<a title="1044" href="add.php?building=141_1&dept=<?php echo $row['1044'];?>&room=1044" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="878" y="285"  width="43" height="29" <?php echo department($row['1044']);?>/></a>
<a title="1034" href="add.php?building=141_1&dept=<?php echo $row['1034'];?>&room=1034" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="921" y="240"  width="45" height="26" <?php echo department($row['1034']);?>/></a>
<a title="1024" href="add.php?building=141_1&dept=<?php echo $row['1024'];?>&room=1024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="949" y="204"  width="50" height="29" <?php echo department($row['1024']);?>/></a>
<a title="1015" href="add.php?building=141_1&dept=<?php echo $row['1015'];?>&room=1015" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1031" y="178"  width="38" height="27" <?php echo department($row['1015']);?>/></a>
<a title="1014" href="add.php?building=141_1&dept=<?php echo $row['1014'];?>&room=1014" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="995" y="149"  width="45" height="34" <?php echo department($row['1014']);?>/></a>
<a title="1042" href="add.php?building=141_1&dept=<?php echo $row['1042'];?>&room=1042" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="854" y="253"  width="51" height="24" <?php echo department($row['1042']);?>/></a>
<a title="1033" href="add.php?building=141_1&dept=<?php echo $row['1033'];?>&room=1033" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="891" y="211"  width="40" height="26" <?php echo department($row['1033']);?>/></a>
<a title="1023" href="add.php?building=141_1&dept=<?php echo $row['1023'];?>&room=1023" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="931" y="174"  width="48" height="30" <?php echo department($row['1023']);?>/></a>
<a title="1032" href="add.php?building=141_1&dept=<?php echo $row['1032'];?>&room=1032" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="871" y="182"  width="46" height="28" <?php echo department($row['1032']);?>/></a>
<a title="1022" href="add.php?building=141_1&dept=<?php echo $row['1022'];?>&room=1022" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="905" y="145"  width="46" height="29" <?php echo department($row['1022']);?>/></a>
<a title="1021" href="add.php?building=141_1&dept=<?php echo $row['1021'];?>&room=1021" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="871" y="126"  width="37" height="42" <?php echo department($row['1021']);?>/></a>
<a title="1163" href="add.php?building=141_1&dept=<?php echo $row['1163'];?>&room=1163" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="679"  width="47" height="39" <?php echo department($row['1163']);?>/></a>
<a title="1161" href="add.php?building=141_1&dept=<?php echo $row['1161'];?>&room=1161" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="639"  width="45" height="39" <?php echo department($row['1161']);?>/></a>
<a title="1159" href="add.php?building=141_1&dept=<?php echo $row['1159'];?>&room=1159" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="602"  width="45" height="37" <?php echo department($row['1159']);?>/></a>
<a title="1157" href="add.php?building=141_1&dept=<?php echo $row['1157'];?>&room=1157" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="563"  width="47" height="35" <?php echo department($row['1157']);?>/></a>
 <a title="1155" href="add.php?building=141_1&dept=<?php echo $row['1155'];?>&room=1155" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="526"  width="45" height="35" <?php echo department($row['1155']);?>/></a>
<a title="1153" href="add.php?building=141_1&dept=<?php echo $row['1153'];?>&room=1153" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="484"  width="46" height="38" <?php echo department($row['1153']);?>/></a>
<a title="1151" href="add.php?building=141_1&dept=<?php echo $row['1151'];?>&room=1151" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="444"  width="44" height="39" <?php echo department($row['1151']);?>/></a>
<a title="1130" href="add.php?building=141_1&dept=<?php echo $row['1130'];?>&room=1130" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="405"  width="47" height="41" <?php echo department($row['1130']);?>/></a>
<a title="1127" href="add.php?building=141_1&dept=<?php echo $row['1127'];?>&room=1127" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1177" y="343"  width="44" height="33" <?php echo department($row['1127']);?>/></a>
<a title="1125" href="add.php?building=141_1&dept=<?php echo $row['1125'];?>&room=1125" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1195" y="318"  width="45" height="26" <?php echo department($row['1125']);?>/></a>
<a title="1123" href="add.php?building=141_1&dept=<?php echo $row['1123'];?>&room=1123" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1224" y="293"  width="44" height="24" <?php echo department($row['1123']);?>/></a>
<a title="1121" href="add.php?building=141_1&dept=<?php echo $row['1121'];?>&room=1121" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1253" y="260"  width="43" height="29" <?php echo department($row['1121']);?>/></a>
<a title="1122" href="add.php?building=141_1&dept=<?php echo $row['1122'];?>&room=1122" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1278" y="222"  width="39" height="31" <?php echo department($row['1122']);?>/></a>
<a title="1105" href="add.php?building=141_1&dept=<?php echo $row['1105'];?>&room=1105" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1253" y="126"  width="64" height="63" <?php echo department($row['1105']);?>/></a>
<a title="1104" href="add.php?building=141_1&dept=<?php echo $row['1104'];?>&room=1104" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1153" y="210"  width="77" height="79" <?php echo department($row['1104']);?>/></a>
<a title="1102" href="add.php?building=141_1&dept=<?php echo $row['1102'];?>&room=1102" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1147" y="149"  width="44" height="59" <?php echo department($row['1102']);?>/></a>
<a title="1101" href="add.php?building=141_1&dept=<?php echo $row['1101'];?>&room=1101" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="966" y="63"  width="174" height="59" <?php echo department($row['1101']);?>/></a>
<a title="1146" href="add.php?building=141_1&dept=<?php echo $row['1146'];?>&room=1146" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1221" y="539"  width="84" height="179" <?php echo department($row['1146']);?>/></a>
<a title="1142" href="add.php?building=141_1&dept=<?php echo $row['1142'];?>&room=1142" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1230" y="446"  width="72" height="92" <?php echo department($row['1142']);?>/></a>
<a title="1133" href="add.php?building=141_1&dept=<?php echo $row['1133'];?>&room=1133" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1268" y="405"  width="36" height="40" <?php echo department($row['1133']);?>/></a>
<a title="1131" href="add.php?building=141_1&dept=<?php echo $row['1131'];?>&room=1131" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1223" y="405"  width="44" height="41" <?php echo department($row['1131']);?>/></a>
<a title="1128" href="add.php?building=141_1&dept=<?php echo $row['1128'];?>&room=1128" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1230" y="346"  width="62" height="31" <?php echo department($row['1128']);?>/></a>
<a title="1126" href="add.php?building=141_1&dept=<?php echo $row['1126'];?>&room=1126" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1278" y="300"  width="38" height="43" <?php echo department($row['1126']);?>/></a>
<a title="1124" href="add.php?building=141_1&dept=<?php echo $row['1124'];?>&room=1124" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1304" y="267"  width="37" height="25" <?php echo department($row['1124']);?>/></a>
<a title="1149" href="add.php?building=141_1&dept=<?php echo $row['1149'];?>&room=1149" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1386" y="704"  width="73" height="32" <?php echo department($row['1149']);?>/></a>
<a title="1145" href="add.php?building=141_1&dept=<?php echo $row['1145'];?>&room=1145" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="1333" y="457"  width="126" height="247" <?php echo department($row['1145']);?>/>
	<rect x="1374" y="431"  width="85" height="26" <?php echo department($row['1145']);?>/>
	</g>
</a>
<a title="1137" href="add.php?building=141_1&dept=<?php echo $row['1137'];?>&room=1137" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1374" y="394"  width="85" height="36" <?php echo department($row['1137']);?>/></a>
<a title="1135" href="add.php?building=141_1&dept=<?php echo $row['1135'];?>&room=1135" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1341" y="394"  width="30" height="37" <?php echo department($row['1135']);?>/></a>
<a title="1115" href="add.php?building=141_1&dept=<?php echo $row['1115'];?>&room=1115" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1391" y="336"  width="46" height="35" <?php echo department($row['1115']);?>/></a>
<a title="1113" href="add.php?building=141_1&dept=<?php echo $row['1113'];?>&room=1113" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1391" y="300"  width="46" height="35" <?php echo department($row['1113']);?>/></a>
<a title="1111" href="add.php?building=141_1&dept=<?php echo $row['1111'];?>&room=1111" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1395" y="260"  width="42" height="36" <?php echo department($row['1111']);?>/></a>
<a title="1109" href="add.php?building=141_1&dept=<?php echo $row['1109'];?>&room=1109" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1391" y="222"  width="46" height="37" <?php echo department($row['1109']);?>/></a>
<a title="1118" href="add.php?building=141_1&dept=<?php echo $row['1118'];?>&room=1118" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1341" y="335"  width="51" height="37" <?php echo department($row['1118']);?>/></a>
<a title="1116" href="add.php?building=141_1&dept=<?php echo $row['1116'];?>&room=1116" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1341" y="296"  width="47" height="39" <?php echo department($row['1116']);?>/></a>
<a title="1114" href="add.php?building=141_1&dept=<?php echo $row['1114'];?>&room=1114" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1341" y="259"  width="48" height="37" <?php echo department($row['1114']);?>/></a>
<a title="1112" href="add.php?building=141_1&dept=<?php echo $row['1112'];?>&room=1112" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1341" y="222"  width="48" height="36" <?php echo department($row['1112']);?>/></a>
<a title="1065" href="add.php?building=141_1&dept=<?php echo $row['1065'];?>&room=1065" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="837.5" y="376.5"  width="26" height="53"<?php echo department($row['1065']);?>/></a>

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
	var buildingNum = '141_1';
</script>

