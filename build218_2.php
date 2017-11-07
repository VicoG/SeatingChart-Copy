 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 218:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 218_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1872 1305" 
	 style="enable-background:new 0 0 1872 1305" xml:space="preserve">
		
	
<image overflow="visible" width="4000" height="3000" xlink:href="assets/images/218-2.png"  transform="matrix(0.468 0 0 0.4343 0 0)">
</image>
<a title="291" href="add.php?building=218_2&dept=<?php echo $row['291'];?>&room=291" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="1012"  width="166" height="87"<?php echo department($row['291']);?>/></a>
<a title="289" href="add.php?building=218_2&dept=<?php echo $row['289'];?>&room=289" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="123" y="926"  width="123" height="78"<?php echo department($row['289']);?>/></a>
<a title="287" href="add.php?building=218_2&dept=<?php echo $row['287'];?>&room=287" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="840"  width="127" height="79"<?php echo department($row['287']);?>/></a>
<a title="285" href="add.php?building=218_2&dept=<?php echo $row['285'];?>&room=285" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="755"  width="123" height="85"<?php echo department($row['285']);?>/></a>
<a title="283" href="add.php?building=218_2&dept=<?php echo $row['283'];?>&room=283" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="674"  width="127" height="77"<?php echo department($row['283']);?>/></a>
<a title="281" href="add.php?building=218_2&dept=<?php echo $row['281'];?>&room=281" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="590"  width="127" height="84"<?php echo department($row['281']);?>/></a>
<a title="279" href="add.php?building=218_2&dept=<?php echo $row['279'];?>&room=279" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="505"  width="125" height="81"<?php echo department($row['279']);?>/></a>
<a title="277" href="add.php?building=218_2&dept=<?php echo $row['277'];?>&room=277" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="424"  width="127" height="76"<?php echo department($row['277']);?>/></a>
<a title="275" href="add.php?building=218_2&dept=<?php echo $row['275'];?>&room=275" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rectx="119" y="339"  width="126" height="81"<?php echo department($row['275']);?>/></a>
<a title="273" href="add.php?building=218_2&dept=<?php echo $row['273'];?>&room=273" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="119" y="244"  width="123" height="89"<?php echo department($row['273']);?>/></a>
<a title="288" href="add.php?building=218_2&dept=<?php echo $row['288'];?>&room=288" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="291" y="960"  width="78" height="139"<?php echo department($row['288']);?>/></a>
<a title="286" href="add.php?building=218_2&dept=<?php echo $row['286'];?>&room=286" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="291" y="816"  width="81" height="144"<?php echo department($row['286']);?>/></a>
<a title="282" href="add.php?building=218_2&dept=<?php echo $row['282'];?>&room=282" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="291" y="660"  width="80" height="156"<?php echo department($row['282']);?>/></a>
<a title="276" href="add.php?building=218_2&dept=<?php echo $row['276'];?>&room=276" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="285" y="466"  width="89" height="129"<?php echo department($row['276']);?>/></a>
<a title="274" href="add.php?building=218_2&dept=<?php echo $row['274'];?>&room=274" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="291" y="339"  width="79" height="121"<?php echo department($row['274']);?>/></a>
<a title="272" href="add.php?building=218_2&dept=<?php echo $row['272'];?>&room=272" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="291" y="205"  width="81" height="128"<?php echo department($row['272']);?>/></a>
<a title="251" href="add.php?building=218_2&dept=<?php echo $row['251'];?>&room=251" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="595" y="632"  width="148" height="101"<?php echo department($row['251']);?>/></a>
<a title="245" href="add.php?building=218_2&dept=<?php echo $row['245'];?>&room=245" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="743" y="632"  width="184" height="101"<?php echo department($row['245']);?>/></a>
<a title="243" href="add.php?building=218_2&dept=<?php echo $row['243'];?>&room=243" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="927" y="632"  width="179" height="102"<?php echo department($row['243']);?>/></a>
<a title="241" href="add.php?building=218_2&dept=<?php echo $row['241'];?>&room=241" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1116" y="632"  width="175" height="99"<?php echo department($row['241']);?>/></a>
<a title="260" href="add.php?building=218_2&dept=<?php echo $row['260'];?>&room=260" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="385" y="490"  width="147" height="65"<?php echo department($row['260']);?>/></a>
<a title="258" href="add.php?building=218_2&dept=<?php echo $row['258'];?>&room=258" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="537" y="490"  width="113" height="103"<?php echo department($row['258']);?>/></a>
<a title="252" href="add.php?building=218_2&dept=<?php echo $row['252'];?>&room=252" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="650" y="490"  width="164" height="103"<?php echo department($row['252']);?>/></a>
<a title="246" href="add.php?building=218_2&dept=<?php echo $row['246'];?>&room=246" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="814" y="490"  width="211" height="104"<?php echo department($row['246']);?>/></a>
<a title="240" href="add.php?building=218_2&dept=<?php echo $row['240'];?>&room=240" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1029" y="490"  width="135" height="104"<?php echo department($row['240']);?>/></a>
<a title="238" href="add.php?building=218_2&dept=<?php echo $row['238'];?>&room=238" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1170" y="490"  width="159" height="101"<?php echo department($row['238']);?>/></a>
<a title="234" href="add.php?building=218_2&dept=<?php echo $row['234'];?>&room=234" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1329" y="490"  width="158" height="100"<?php echo department($row['234']);?>/></a>
<a title="203" href="add.php?building=218_2&dept=<?php echo $row['203'];?>&room=203" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="1008"  width="121" height="91"<?php echo department($row['203']);?>/></a>
<a title="205" href="add.php?building=218_2&dept=<?php echo $row['205'];?>&room=205" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="901"  width="82" height="103"<?php echo department($row['205']);?>/></a>
<a title="207" href="add.php?building=218_2&dept=<?php echo $row['207'];?>&room=207" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="798"  width="84" height="103"<?php echo department($row['207']);?>/></a>
<a title="209" href="add.php?building=218_2&dept=<?php echo $row['209'];?>&room=209" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="704"  width="85" height="94"<?php echo department($row['209']);?>/></a>
<a title="215" href="add.php?building=218_2&dept=<?php echo $row['215'];?>&room=215" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="481"  width="83" height="110"<?php echo department($row['215']);?>/></a>
<a title="217" href="add.php?building=218_2&dept=<?php echo $row['217'];?>&room=217" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="390"  width="85" height="85"<?php echo department($row['217']);?>/></a>
<a title="219" href="add.php?building=218_2&dept=<?php echo $row['219'];?>&room=219" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="297"  width="82" height="89"<?php echo department($row['219']);?>/></a>
<a title="223" href="add.php?building=218_2&dept=<?php echo $row['223'];?>&room=223" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1499" y="205"  width="84" height="88"<?php echo department($row['223']);?>/></a>
<a title="202" href="add.php?building=218_2&dept=<?php echo $row['202'];?>&room=202" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="901"  width="125" height="198"<?php echo department($row['202']);?>/></a>
<a title="206" href="add.php?building=218_2&dept=<?php echo $row['206'];?>&room=206" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="794"  width="125" height="107"<?php echo department($row['206']);?>/></a>
<a title="210" href="add.php?building=218_2&dept=<?php echo $row['210'];?>&room=210" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="649"  width="125" height="145"<?php echo department($row['210']);?>/></a>
<a title="214" href="add.php?building=218_2&dept=<?php echo $row['214'];?>&room=214" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="566"  width="125" height="83"<?php echo department($row['214']);?>/></a>
<a title="216" href="add.php?building=218_2&dept=<?php echo $row['216'];?>&room=216" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="481"  width="125" height="83"<?php echo department($row['216']);?>/></a>
<a title="218" href="add.php?building=218_2&dept=<?php echo $row['218'];?>&room=218" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="397"  width="128" height="78"<?php echo department($row['218']);?>/></a>
<a title="220" href="add.php?building=218_2&dept=<?php echo $row['220'];?>&room=220" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="315"  width="125" height="75"<?php echo department($row['220']);?>/></a>
<a title="222" href="add.php?building=218_2&dept=<?php echo $row['222'];?>&room=222" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1627" y="240"  width="126" height="69"<?php echo department($row['222']);?>/></a>
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
	var buildingNum = '218_2';
</script>

