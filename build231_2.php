 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 231:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 231_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1332 1370" 
	 style="enable-background:new 0 0 1332 1370" xml:space="preserve">
		
	
<image overflow="visible" width="3120" height="2497" xlink:href="assets/images/231-2.jpg"  transform="matrix(0.4269 0 0 0.5503 0 -4)"></image>

<a title="2730A" href="add.php?building=231_2&dept=<?php echo $row['2730A'];?>&room=2730A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="484"  width="129" height="118" <?php echo department($row['2730A']);?>/></a>
<a title="2734" href="add.php?building=231_2&dept=<?php echo $row['2734'];?>&room=2734" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="440"  width="42" height="38" <?php echo department($row['2734']);?>/></a>
<a title="2736" href="add.php?building=231_2&dept=<?php echo $row['2736'];?>&room=2736" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="399"  width="40" height="41" <?php echo department($row['2736']);?>/></a>
<a title="2738" href="add.php?building=231_2&dept=<?php echo $row['2738'];?>&room=2738" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="357"  width="42" height="42" <?php echo department($row['2738']);?>/></a>
<a title="2740" href="add.php?building=231_2&dept=<?php echo $row['2740'];?>&room=2740" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="328" y="315"  width="36" height="42" <?php echo department($row['2740']);?>/></a>
<a title="2742" href="add.php?building=231_2&dept=<?php echo $row['2742'];?>&room=2742" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="273"  width="44" height="42" <?php echo department($row['2742']);?>/></a>
<a title="2743" href="add.php?building=231_2&dept=<?php echo $row['2743'];?>&room=2743" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="397" y="273"  width="56" height="46" <?php echo department($row['2743']);?>/></a>
<a title="2741" href="add.php?building=231_2&dept=<?php echo $row['2741'];?>&room=2741" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="382" y="319"  width="67" height="48" <?php echo department($row['2741']);?>/></a>
<a title="2739" href="add.php?building=231_2&dept=<?php echo $row['2739'];?>&room=2739" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="416" y="372"  width="33" height="48" <?php echo department($row['2739']);?>/></a>
<a title="2735" href="add.php?building=231_2&dept=<?php echo $row['2735'];?>&room=2735" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="376" y="372"  width="40" height="50" <?php echo department($row['2735']);?>/></a>
<a title="2727" href="add.php?building=231_2&dept=<?php echo $row['2727'];?>&room=2727" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="449" y="357"  width="95" height="95" <?php echo department($row['2727']);?>/></a>
<a title="2725" href="add.php?building=231_2&dept=<?php echo $row['2725'];?>&room=2725" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="548" y="357"  width="35" height="94" <?php echo department($row['2725']);?>/></a>
<a title="2730" href="add.php?building=231_2&dept=<?php echo $row['2730'];?>&room=2730" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="457" y="452"  width="122" height="151" <?php echo department($row['2730']);?>/></a>
<a title="2604" href="add.php?building=231_2&dept=<?php echo $row['2604'];?>&room=2604" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="347" y="807"  width="40" height="62" <?php echo department($row['2604']);?>/></a>
<a title="2608" href="add.php?building=231_2&dept=<?php echo $row['2608'];?>&room=2608" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="387" y="807"  width="38" height="60" <?php echo department($row['2608']);?>/></a>
<a title="2612" href="add.php?building=231_2&dept=<?php echo $row['2612'];?>&room=2612" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="430" y="807"  width="45" height="60" <?php echo department($row['2612']);?>/></a>
<a title="2614" href="add.php?building=231_2&dept=<?php echo $row['2614'];?>&room=2614" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="475" y="807"  width="33" height="62" <?php echo department($row['2614']);?>/></a>
<a title="2626" href="add.php?building=231_2&dept=<?php echo $row['2626'];?>&room=2626" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="508" y="807"  width="77" height="59" <?php echo department($row['2626']);?>/></a>
<a title="2410" href="add.php?building=231_2&dept=<?php echo $row['2410'];?>&room=2410" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="583" y="807"  width="59" height="54" <?php echo department($row['2410']);?>/></a>
<a title="2410A" href="add.php?building=231_2&dept=<?php echo $row['2410A'];?>&room=2410A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="642" y="807"  width="50" height="53" <?php echo department($row['2410A']);?>/></a>
<a title="2422" href="add.php?building=231_2&dept=<?php echo $row['2422'];?>&room=2422" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="692" y="807"  width="55" height="77" <?php echo department($row['2422']);?>/></a>
<a title="2430" href="add.php?building=231_2&dept=<?php echo $row['2430'];?>&room=2430" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="711" y="884"  width="36" height="41" <?php echo department($row['2430']);?>/></a>
<a title="2434" href="add.php?building=231_2&dept=<?php echo $row['2434'];?>&room=2434" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="711" y="925"  width="36" height="41" <?php echo department($row['2434']);?>/></a>
<a title="2438" href="add.php?building=231_2&dept=<?php echo $row['2438'];?>&room=2438" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="711" y="966"  width="34" height="42" <?php echo department($row['2438']);?>/></a>
<a title="2452" href="add.php?building=231_2&dept=<?php echo $row['2452'];?>&room=2452" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="673" y="1108"  width="74" height="52" <?php echo department($row['2452']);?>/></a>
<a title="2454B" href="add.php?building=231_2&dept=<?php echo $row['2454B'];?>&room=2454B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="711" y="1160"  width="34" height="59" <?php echo department($row['2454B']);?>/></a>
<a title="2454C" href="add.php?building=231_2&dept=<?php echo $row['2454C'];?>&room=2454C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="711" y="1219"  width="35" height="84" <?php echo department($row['2454C']);?>/></a>
<a title="2454D" href="add.php?building=231_2&dept=<?php echo $row['2454D'];?>&room=2454D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="673" y="1258"  width="36" height="45" <?php echo department($row['2454D']);?>/></a>
<a title="2454" href="add.php?building=231_2&dept=<?php echo $row['2454'];?>&room=2454" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="673" y="1160"  width="35" height="94" <?php echo department($row['2454']);?>/></a>
<a title="2415" href="add.php?building=231_2&dept=<?php echo $row['2415'];?>&room=2415" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="659" y="888"  width="33" height="66" <?php echo department($row['2415']);?>/></a>
<a title="2413" href="add.php?building=231_2&dept=<?php echo $row['2413'];?>&room=2413" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="625" y="888"  width="34" height="67" <?php echo department($row['2413']);?>/></a>
<a title="2411" href="add.php?building=231_2&dept=<?php echo $row['2411'];?>&room=2411" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="888"  width="36" height="67" <?php echo department($row['2411']);?>/></a>
<a title="2440A" href="add.php?building=231_2&dept=<?php echo $row['2440A'];?>&room=2440A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="960"  width="52" height="48" <?php echo department($row['2440A']);?>/></a>
<a title="2445" href="add.php?building=231_2&dept=<?php echo $row['2445'];?>&room=2445" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="1008"  width="64" height="55" <?php echo department($row['2445']);?>/></a>
<a title="2451" href="add.php?building=231_2&dept=<?php echo $row['2451'];?>&room=2451" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="585" y="1067"  width="68" height="48" <?php echo department($row['2451']);?>/></a>
<a title="2453" href="add.php?building=231_2&dept=<?php echo $row['2453'];?>&room=2453" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="1115"  width="64" height="51" <?php echo department($row['2453']);?>/></a>
<a title="2461A" href="add.php?building=231_2&dept=<?php echo $row['2461A'];?>&room=2461A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="1166"  width="30" height="55" <?php echo department($row['2461A']);?>/></a>
<a title="2461" href="add.php?building=231_2&dept=<?php echo $row['2461'];?>&room=2461" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="619" y="1166"  width="31" height="53" <?php echo department($row['2461']);?>/></a>
<a title="2440" href="add.php?building=231_2&dept=<?php echo $row['2440'];?>&room=2440" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="641" y="960"  width="50" height="49" <?php echo department($row['2440']);?>/></a>
<a title="2605A" href="add.php?building=231_2&dept=<?php echo $row['2605A'];?>&room=2605A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="324" y="894"  width="35" height="76" <?php echo department($row['2605A']);?>/></a>
<a title="2605" href="add.php?building=231_2&dept=<?php echo $row['2605'];?>&room=2605" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="359" y="914"  width="30" height="52" <?php echo department($row['2605']);?>/></a>
<a title="2607" href="add.php?building=231_2&dept=<?php echo $row['2607'];?>&room=2607" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="393" y="894"  width="32" height="73" <?php echo department($row['2607']);?>/></a>
<a title="2609" href="add.php?building=231_2&dept=<?php echo $row['2609'];?>&room=2609" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="425" y="894"  width="27" height="73" <?php echo department($row['2609']);?>/></a>
<a title="2611" href="add.php?building=231_2&dept=<?php echo $row['2611'];?>&room=2611" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="452" y="894"  width="31" height="73" <?php echo department($row['2611']);?>/></a>
<a title="2613" href="add.php?building=231_2&dept=<?php echo $row['2613'];?>&room=2613" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="483" y="894"  width="33" height="74" <?php echo department($row['2613']);?>/></a>
<a title="2630" href="add.php?building=231_2&dept=<?php echo $row['2630'];?>&room=2630" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="888"  width="48" height="37" <?php echo department($row['2630']);?>/></a>
<a title="2634" href="add.php?building=231_2&dept=<?php echo $row['2634'];?>&room=2634" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="925"  width="50" height="57" <?php echo department($row['2634']);?>/></a>
<a title="2638" href="add.php?building=231_2&dept=<?php echo $row['2638'];?>&room=2638" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="982"  width="50" height="53" <?php echo department($row['2638']);?>/></a>
<a title="2646" href="add.php?building=231_2&dept=<?php echo $row['2646'];?>&room=2646" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="1035"  width="48" height="58" <?php echo department($row['2646']);?>/></a>
<a title="2650" href="add.php?building=231_2&dept=<?php echo $row['2650'];?>&room=2650" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="1093"  width="49" height="54" <?php echo department($row['2650']);?>/></a>
<a title="2658" href="add.php?building=231_2&dept=<?php echo $row['2658'];?>&room=2658" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="535" y="1188"  width="48" height="31" <?php echo department($row['2658']);?>/></a>
<a title="2666A" href="add.php?building=231_2&dept=<?php echo $row['2666A'];?>&room=2666A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="553" y="1241"  width="30" height="62" <?php echo department($row['2666A']);?>/></a>
<a title="2666" href="add.php?building=231_2&dept=<?php echo $row['2666'];?>&room=2666" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="516" y="1241"  width="35" height="64" <?php echo department($row['2666']);?>/></a>
<a title="2666B" href="add.php?building=231_2&dept=<?php echo $row['2666B'];?>&room=2666B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="457" y="1263"  width="59" height="42" <?php echo department($row['2666B']);?>/></a>
<a title="2667" href="add.php?building=231_2&dept=<?php echo $row['2667'];?>&room=2667" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="452" y="1221"  width="64" height="38" <?php echo department($row['2667']);?>/></a>
<a title="2639" href="add.php?building=231_2&dept=<?php echo $row['2639'];?>&room=2639" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="457" y="1009"  width="61" height="44" <?php echo department($row['2639']);?>/></a>
<a title="2637" href="add.php?building=231_2&dept=<?php echo $row['2637'];?>&room=2637" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="457" y="968"  width="59" height="39" <?php echo department($row['2637']);?>/></a>
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
	var buildingNum = '231_2';
</script>

