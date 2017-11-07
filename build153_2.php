 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 153:</b> Floor 2 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			$query  = "SELECT * FROM 153_2 ";
		
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
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1200 1200"
	 style="enable-background:new 0 0 1200 1200" xml:space="preserve">
		
	<image overflow="visible" width="2133" height="1545" xlink:href="assets/images/153-2.jpg"  transform="matrix(0.5626 0 0 0.7767 0 0)"></image>
	
<a title="2002" href="add.php?building=153_2&dept=<?php echo $row['2002'];?>&room=2002" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="498" y="304"  width="99" height="88" <?php echo department($row['2002']);?>/></a>
<a title="2004E" href="add.php?building=153_2&dept=<?php echo $row['2004E'];?>&room=2004E" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="597" y="404"  width="49" height="72" <?php echo department($row['2004E']);?>/></a>
<a title="2004F" href="add.php?building=153_2&dept=<?php echo $row['2004F'];?>&room=2004F" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="650" y="404"  width="46" height="73" <?php echo department($row['2004F']);?>/></a>
<a title="2004G" href="add.php?building=153_2&dept=<?php echo $row['2004G'];?>&room=2004G" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="696" y="404"  width="50" height="74" <?php echo department($row['2004G']);?>/></a>
<a title="2004H" href="add.php?building=153_2&dept=<?php echo $row['2004H'];?>&room=2004H" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="746" y="404"  width="49" height="73" <?php echo department($row['2004H']);?>/></a>
<a title="2010" href="add.php?building=153_2&dept=<?php echo $row['2010'];?>&room=2010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="799" y="337"  width="118" height="139" <?php echo department($row['2010']);?>/></a>
<a title="2004A" href="add.php?building=153_2&dept=<?php echo $row['2004A'];?>&room=2004A" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="597" y="304"  width="49" height="69" <?php echo department($row['2004A']);?>/></a>
<a title="2004B" href="add.php?building=153_2&dept=<?php echo $row['2004B'];?>&room=2004B" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="650" y="304"  width="46" height="69" <?php echo department($row['2004B']);?>/></a>
<a title="2004C" href="add.php?building=153_2&dept=<?php echo $row['2004C'];?>&room=2004C" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="700" y="304"  width="46" height="69" <?php echo department($row['2004C']);?>/></a>
<a title="2004" href="add.php?building=153_2&dept=<?php echo $row['2004'];?>&room=2004" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="746" y="304"  width="49" height="69" <?php echo department($row['2004']);?>/></a>
<a title="2012" href="add.php?building=153_2&dept=<?php echo $row['2012'];?>&room=2012" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="526" y="209"  width="59" height="91" <?php echo department($row['2012']);?>/></a>
<a title="2014" href="add.php?building=153_2&dept=<?php echo $row['2014'];?>&room=2014" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="209"  width="57" height="91" <?php echo department($row['2014']);?>/></a>
<a title="2016" href="add.php?building=153_2&dept=<?php echo $row['2016'];?>&room=2016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="650" y="209"  width="56" height="90" <?php echo department($row['2016']);?>/></a>
<a title="2018" href="add.php?building=153_2&dept=<?php echo $row['2018'];?>&room=2018" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="706" y="209"  width="59" height="91" <?php echo department($row['2018']);?>/></a>
<a title="2020" href="add.php?building=153_2&dept=<?php echo $row['2020'];?>&room=2020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="771" y="209"  width="55" height="89" <?php echo department($row['2020']);?>/></a>
<a title="2022" href="add.php?building=153_2&dept=<?php echo $row['2022'];?>&room=2022" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="832" y="209"  width="54" height="89" <?php echo department($row['2022']);?>/></a>
<a title="2030" href="add.php?building=153_2&dept=<?php echo $row['2030'];?>&room=2030" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="922" y="168"  width="89" height="309" <?php echo department($row['2030']);?>/></a>
<a title="2003" href="add.php?building=153_2&dept=<?php echo $row['2003'];?>&room=2003" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="401" y="243"  width="97" height="72" <?php echo department($row['2003']);?>/></a>
<a title="2005" href="add.php?building=153_2&dept=<?php echo $row['2005'];?>&room=2005" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="401" y="162"  width="96" height="75" <?php echo department($row['2005']);?>/></a>
<a title="2007" href="add.php?building=153_2&dept=<?php echo $row['2007'];?>&room=2007" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="405" y="82"  width="121" height="76" <?php echo department($row['2007']);?>/></a>
<a title="2011" href="add.php?building=153_2&dept=<?php echo $row['2011'];?>&room=2011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="526" y="82"  width="59" height="90" <?php echo department($row['2011']);?>/></a>
<a title="2013" href="add.php?building=153_2&dept=<?php echo $row['2013'];?>&room=2013" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="589" y="82"  width="56" height="89" <?php echo department($row['2013']);?>/></a>
<a title="2015" href="add.php?building=153_2&dept=<?php echo $row['2015'];?>&room=2015" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="650" y="77"  width="56" height="91" <?php echo department($row['2015']);?>/></a>
<a title="2017" href="add.php?building=153_2&dept=<?php echo $row['2017'];?>&room=2017" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="706" y="77"  width="61" height="93" <?php echo department($row['2017']);?>/></a>
<a title="2019" href="add.php?building=153_2&dept=<?php echo $row['2019'];?>&room=2019" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="767" y="77"  width="60" height="94" <?php echo department($row['2019']);?>/></a>
<a title="2021" href="add.php?building=153_2&dept=<?php echo $row['2021'];?>&room=2021" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="826" y="77"  width="61" height="92" <?php echo department($row['2021']);?>/></a>
<a title="2031" href="add.php?building=153_2&dept=<?php echo $row['2031'];?>&room=2031" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="887" y="77"  width="58" height="93" <?php echo department($row['2031']);?>/></a>
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
	var buildingNum = '153_2';
</script>

