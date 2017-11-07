 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 321C:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 321C_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 1287 1461" 
	 style="enable-background:new 0 0 1287 1461" xml:space="preserve">
		
	
<image overflow="visible" width="2136" height="3228" xlink:href="assets/images/321C-2.jpg"  transform="matrix(0.6025 0 0 0.4526 0 0)"></image>

<a title="2351E" href="add.php?building=321C_2&dept=<?php echo $row['2351E'];?>&room=2351E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="154" y="593"  width="29" height="39"<?php echo department($row['2351E']);?>/></a>
<a title="2351D" href="add.php?building=321C_2&dept=<?php echo $row['2351D'];?>&room=2351D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="183" y="593"  width="39" height="40"<?php echo department($row['2351D']);?>/></a>
<a title="2351C" href="add.php?building=321C_2&dept=<?php echo $row['2351C'];?>&room=2351C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="222" y="593"  width="33" height="40"<?php echo department($row['2351C']);?>/></a>
<a title="2351B" href="add.php?building=321C_2&dept=<?php echo $row['2351B'];?>&room=2351B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="255" y="593"  width="42" height="40"<?php echo department($row['2351B']);?>/></a>
<a title="2351A" href="add.php?building=321C_2&dept=<?php echo $row['2351A'];?>&room=2351A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="301" y="593"  width="26" height="40"<?php echo department($row['2351A']);?>/></a>
<a title="2345" href="add.php?building=321C_2&dept=<?php echo $row['2345'];?>&room=2345" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="327" y="549"  width="204" height="83"<?php echo department($row['2345']);?>/></a>
<a title="2347" href="add.php?building=321C_2&dept=<?php echo $row['2347'];?>&room=2347" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="531" y="534"  width="91" height="98"<?php echo department($row['2347']);?>/></a>
<a title="2347A" href="add.php?building=321C_2&dept=<?php echo $row['2347A'];?>&room=2347A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="573" y="497"  width="49" height="37"<?php echo department($row['2347A']);?>/></a>
<a title="2348A" href="add.php?building=321C_2&dept=<?php echo $row['2348A'];?>&room=2348A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="510" y="460"  width="112" height="37"<?php echo department($row['2348A']);?>/></a>
<a title="2348E" href="add.php?building=321C_2&dept=<?php echo $row['2348E'];?>&room=2348E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="510" y="374"  width="110" height="86"<?php echo department($row['2348E']);?>/></a>
<a title="2348" href="add.php?building=321C_2&dept=<?php echo $row['2348'];?>&room=2348" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="416" y="374"  width="94" height="121"<?php echo department($row['2348']);?>/></a>
<a title="2348B" href="add.php?building=321C_2&dept=<?php echo $row['2348B'];?>&room=2348B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="327" y="374"  width="85" height="28"<?php echo department($row['2348B']);?>/></a>
<a title="2348C" href="add.php?building=321C_2&dept=<?php echo $row['2348C'];?>&room=2348C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="354" y="402"  width="58" height="26"<?php echo department($row['2348C']);?>/></a>
<a title="2348D" href="add.php?building=321C_2&dept=<?php echo $row['2348D'];?>&room=2348D" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="354" y="432"  width="60" height="28"<?php echo department($row['2348D']);?>/></a>
<a title="2411A" href="add.php?building=321C_2&dept=<?php echo $row['2411A'];?>&room=2411A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1077" y="367"  width="39" height="35"<?php echo department($row['2411A']);?>/></a>
<a title="2411B" href="add.php?building=321C_2&dept=<?php echo $row['2411B'];?>&room=2411B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1116" y="367"  width="41" height="34"<?php echo department($row['2411B']);?>/></a>
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
	var buildingNum = '321C_2';
</script>

