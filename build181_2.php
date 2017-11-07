 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 181:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 181_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1200 1100" 
	 style="enable-background:new 0 0 1200 1100" xml:space="preserve">
		
	<image overflow="visible" width="3138" height="2472" xlink:href="assets/images/181-2.jpg"  transform="matrix(0.3824 0 0 0.445 0 0)"></image>
	
<a title="2038" href="add.php?building=181_2&dept=<?php echo $row['2038'];?>&room=2038" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="393" y="652"  width="70" height="99" <?php echo department($row['2038']);?>/></a>
<a title="2040" href="add.php?building=181_2&dept=<?php echo $row['2040'];?>&room=2040" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="393" y="550"  width="70" height="102" <?php echo department($row['2040']);?>/></a>
<a title="2042" href="add.php?building=181_2&dept=<?php echo $row['2042'];?>&room=2042" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="393" y="485"  width="69" height="61" <?php echo department($row['2042']);?>/></a>
<a title="2044" href="add.php?building=181_2&dept=<?php echo $row['2044'];?>&room=2044" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="393" y="402"  width="58" height="77" <?php echo department($row['2044']);?>/></a>
<a title="2002" href="add.php?building=181_2&dept=<?php echo $row['2002'];?>&room=2002" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="472" y="313"  width="68" height="57" <?php echo department($row['2002']);?>/></a>
<a title="2004" href="add.php?building=181_2&dept=<?php echo $row['2004'];?>&room=2004" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="545" y="313"  width="55" height="78" <?php echo department($row['2004']);?>/></a>
<a title="2006" href="add.php?building=181_2&dept=<?php echo $row['2006'];?>&room=2006" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="600" y="313"  width="49" height="78" <?php echo department($row['2006']);?>/></a>
<a title="2008" href="add.php?building=181_2&dept=<?php echo $row['2008'];?>&room=2008" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="649" y="313"  width="58" height="82" <?php echo department($row['2008']);?>/></a>
<a title="2010" href="add.php?building=181_2&dept=<?php echo $row['2010'];?>&room=2010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="707" y="313"  width="70" height="78" <?php echo department($row['2010']);?>/></a>
<a title="2037" href="add.php?building=181_2&dept=<?php echo $row['2037'];?>&room=2037" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="687"  width="70" height="64" <?php echo department($row['2037']);?>/></a>
<a title="2039" href="add.php?building=181_2&dept=<?php echo $row['2039'];?>&room=2039" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="619"  width="70" height="68" <?php echo department($row['2039']);?>/></a>
<a title="2041" href="add.php?building=181_2&dept=<?php echo $row['2041'];?>&room=2041" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="550"  width="70" height="66" <?php echo department($row['2041']);?>/></a>
<a title="2043" href="add.php?building=181_2&dept=<?php echo $row['2043'];?>&room=2043" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="479"  width="69" height="67" <?php echo department($row['2043']);?>/></a>
<a title="2045" href="add.php?building=181_2&dept=<?php echo $row['2045'];?>&room=2045" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="413"  width="71" height="66" <?php echo department($row['2045']);?>/></a>
<a title="2047" href="add.php?building=181_2&dept=<?php echo $row['2047'];?>&room=2047" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="290" y="347"  width="69" height="66" <?php echo department($row['2047']);?>/></a>
<a title="2001" href="add.php?building=181_2&dept=<?php echo $row['2001'];?>&room=2001" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="425" y="193"  width="87" height="80" <?php echo department($row['2001']);?>/></a>
<a title="2005" href="add.php?building=181_2&dept=<?php echo $row['2005'];?>&room=2005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="512" y="193"  width="87" height="79" <?php echo department($row['2005']);?>/></a>
<a title="2007" href="add.php?building=181_2&dept=<?php echo $row['2007'];?>&room=2007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="600" y="193"  width="59" height="80" <?php echo department($row['2007']);?>/></a>
<a title="2009" href="add.php?building=181_2&dept=<?php echo $row['2009'];?>&room=2009" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="659" y="193"  width="61" height="79" <?php echo department($row['2009']);?>/></a>
<a title="2011" href="add.php?building=181_2&dept=<?php echo $row['2011'];?>&room=2011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="720" y="193"  width="57" height="80" <?php echo department($row['2011']);?>/></a>
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
	var buildingNum = '181_2';
</script>

