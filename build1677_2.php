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
	
<image overflow="visible" width="2122" height="1839" xlink:href="assets/images/1677-2.jpg"  transform="matrix(0.5655 0 0 0.6525 0 0)">
</image>

<a title="2084" href="add.php?building=1677_2&dept=<?php echo $row['2084'];?>&room=2084" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="346" y="1037"  width="114" height="87"<?php echo department($row['2084']);?>/></a>
<a title="2082" href="add.php?building=1677_2&dept=<?php echo $row['2082'];?>&room=2082" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="1037"  width="76" height="84"<?php echo department($row['2082']);?>/></a>
<a title="2080" href="add.php?building=1677_2&dept=<?php echo $row['2080'];?>&room=2080" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="540" y="1037"  width="84" height="85"<?php echo department($row['2080']);?>/></a>
<a title="2078" href="add.php?building=1677_2&dept=<?php echo $row['2078'];?>&room=2078" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="628" y="1037"  width="80" height="84"<?php echo department($row['2078']);?>/></a>
<a title="2076" href="add.php?building=1677_2&dept=<?php echo $row['2076'];?>&room=2076" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="714" y="1037"  width="78" height="85"<?php echo department($row['2076']);?>/></a>
<a title="2074" href="add.php?building=1677_2&dept=<?php echo $row['2074'];?>&room=2074" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="792" y="1037"  width="84" height="84"<?php echo department($row['2074']);?>/></a>
<a title="2072" href="add.php?building=1677_2&dept=<?php echo $row['2072'];?>&room=2072" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="880" y="1037"  width="79" height="84"<?php echo department($row['2072']);?>/></a>
<a title="2002" href="add.php?building=1677_2&dept=<?php echo $row['2002'];?>&room=2002" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="908"  width="77" height="124"<?php echo department($row['2002']);?>/></a>
<a title="2004" href="add.php?building=1677_2&dept=<?php echo $row['2004'];?>&room=2004" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="779"  width="74" height="125"<?php echo department($row['2004']);?>/></a>
<a title="2008" href="add.php?building=1677_2&dept=<?php echo $row['2008'];?>&room=2008" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="157" y="682"  width="72" height="93"<?php echo department($row['2008']);?>/></a>
<a title="2010" href="add.php?building=1677_2&dept=<?php echo $row['2010'];?>&room=2010" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="586"  width="79" height="96"<?php echo department($row['2010']);?>/></a>
<a title="2012" href="add.php?building=1677_2&dept=<?php echo $row['2012'];?>&room=2012" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="489"  width="78" height="90"<?php echo department($row['2012']);?>/></a>
<a title="2014" href="add.php?building=1677_2&dept=<?php echo $row['2014'];?>&room=2014" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="393"  width="77" height="92"<?php echo department($row['2014']);?>/></a>
<a title="2016" href="add.php?building=1677_2&dept=<?php echo $row['2016'];?>&room=2016" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="295"  width="78" height="92"<?php echo department($row['2016']);?>/></a>
<a title="2020" href="add.php?building=1677_2&dept=<?php echo $row['2020'];?>&room=2020" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="152" y="160"  width="79" height="131"<?php echo department($row['2020']);?>/></a>
<a title="2022" href="add.php?building=1677_2&dept=<?php echo $row['2022'];?>&room=2022" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="157" y="73"  width="107" height="82"<?php echo department($row['2022']);?>/></a>
<a title="2024" href="add.php?building=1677_2&dept=<?php echo $row['2024'];?>&room=2024" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="264" y="73"  width="82" height="87"<?php echo department($row['2024']);?>/></a>
<a title="2026" href="add.php?building=1677_2&dept=<?php echo $row['2026'];?>&room=2026" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="350" y="73"  width="36" height="85"<?php echo department($row['2026']);?>/></a>
<a title="2001" href="add.php?building=1677_2&dept=<?php echo $row['2001'];?>&room=2001" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="264" y="699"  width="84" height="295"<?php echo department($row['2001']);?>/></a>
<a title="2092" href="add.php?building=1677_2&dept=<?php echo $row['2092'];?>&room=2092" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="271" y="557"  width="75" height="142"<?php echo department($row['2092']);?>/>
	<rect x="348" y="557"  width="73" height="84"<?php echo department($row['2092']);?>/>
	</g>
</a>
<a title="2011" href="add.php?building=1677_2&dept=<?php echo $row['2011'];?>&room=2011" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="271" y="405"  width="51" height="130"<?php echo department($row['2011']);?>/></a>
<a title="2094" href="add.php?building=1677_2&dept=<?php echo $row['2094'];?>&room=2094" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="326" y="387"  width="99" height="146"<?php echo department($row['2094']);?>/></a>
<a title="2098" href="add.php?building=1677_2&dept=<?php echo $row['2098'];?>&room=2098" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="350" y="205"  width="70" height="182"<?php echo department($row['2098']);?>/></a>
<a title="2025" href="add.php?building=1677_2&dept=<?php echo $row['2025'];?>&room=2025" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="271" y="205"  width="75" height="98"<?php echo department($row['2025']);?>/></a>
<a title="2083" href="add.php?building=1677_2&dept=<?php echo $row['2083'];?>&room=2083" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="460" y="839"  width="78" height="155"<?php echo department($row['2083']);?>/></a>
<a title="2079" href="add.php?building=1677_2&dept=<?php echo $row['2079'];?>&room=2079" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="540" y="904"  width="84" height="85"<?php echo department($row['2079']);?>/></a>
<a title="2077" href="add.php?building=1677_2&dept=<?php echo $row['2077'];?>&room=2077" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="624" y="904"  width="83" height="87"<?php echo department($row['2077']);?>/></a>
<a title="2075" href="add.php?building=1677_2&dept=<?php echo $row['2075'];?>&room=2075" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="714" y="904"  width="78" height="87"<?php echo department($row['2075']);?>/></a>
<a title="2073" href="add.php?building=1677_2&dept=<?php echo $row['2073'];?>&room=2073" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="792" y="908"  width="126" height="81"<?php echo department($row['2073']);?>/></a>
<a title="2063" href="add.php?building=1677_2&dept=<?php echo $row['2063'];?>&room=2063" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip">
	<g>
	<rect x="928" y="904"  width="112" height="87"<?php echo department($row['2063']);?>/>
	<rect x="963" y="839"  width="77" height="67"<?php echo department($row['2063']);?>/>
	</g>
</a>
<a title="2061" href="add.php?building=1677_2&dept=<?php echo $row['2061'];?>&room=2061" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="743"  width="75" height="90"<?php echo department($row['2061']);?>/></a>
<a title="2059" href="add.php?building=1677_2&dept=<?php echo $row['2059'];?>&room=2059" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="646"  width="75" height="93"<?php echo department($row['2059']);?>/></a>
<a title="2057" href="add.php?building=1677_2&dept=<?php echo $row['2057'];?>&room=2057" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="959" y="550"  width="79" height="91"<?php echo department($row['2057']);?>/></a>
<a title="2055" href="add.php?building=1677_2&dept=<?php echo $row['2055'];?>&room=2055" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="451"  width="76" height="99"<?php echo department($row['2055']);?>/></a>
<a title="2053" href="add.php?building=1677_2&dept=<?php echo $row['2053'];?>&room=2053" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="959" y="356"  width="79" height="91"<?php echo department($row['2053']);?>/></a>
<a title="2052" href="add.php?building=1677_2&dept=<?php echo $row['2052'];?>&room=2052" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="291"  width="76" height="60"<?php echo department($row['2052']);?>/></a>
<a title="2051" href="add.php?building=1677_2&dept=<?php echo $row['2051'];?>&room=2051" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="226"  width="75" height="60"<?php echo department($row['2051']);?>/></a>
<a title="2041" href="add.php?building=1677_2&dept=<?php echo $row['2041'];?>&room=2041" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="876" y="205"  width="82" height="81"<?php echo department($row['2041']);?>/></a>
<a title="2039" href="add.php?building=1677_2&dept=<?php echo $row['2039'];?>&room=2039" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="796" y="205"  width="80" height="81"<?php echo department($row['2039']);?>/></a>
<a title="2037" href="add.php?building=1677_2&dept=<?php echo $row['2037'];?>&room=2037" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="714" y="205"  width="77" height="81"<?php echo department($row['2037']);?>/></a>
<a title="2035" href="add.php?building=1677_2&dept=<?php echo $row['2035'];?>&room=2035" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="628" y="205"  width="79" height="81"<?php echo department($row['2035']);?>/></a>
<a title="2033" href="add.php?building=1677_2&dept=<?php echo $row['2033'];?>&room=2033" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="544" y="205"  width="80" height="81"<?php echo department($row['2033']);?>/></a>
<a title="2031" href="add.php?building=1677_2&dept=<?php echo $row['2031'];?>&room=2031" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="460" y="205"  width="59" height="39"<?php echo department($row['2031']);?>/></a>
<a title="2099" href="add.php?building=1677_2&dept=<?php echo $row['2099'];?>&room=2099" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="260"  width="74" height="91"<?php echo department($row['2099']);?>/></a>
<a title="2097" href="add.php?building=1677_2&dept=<?php echo $row['2097'];?>&room=2097" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="356"  width="75" height="94"<?php echo department($row['2097']);?>/></a>
<a title="2095" href="add.php?building=1677_2&dept=<?php echo $row['2095'];?>&room=2095" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="450"  width="75" height="95"<?php echo department($row['2095']);?>/></a>
<a title="2093" href="add.php?building=1677_2&dept=<?php echo $row['2093'];?>&room=2093" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="550"  width="75" height="91"<?php echo department($row['2093']);?>/></a>
<a title="2091" href="add.php?building=1677_2&dept=<?php echo $row['2091'];?>&room=2091" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="460" y="646"  width="81" height="93"<?php echo department($row['2091']);?>/></a>
<a title="2089" href="add.php?building=1677_2&dept=<?php echo $row['2089'];?>&room=2089" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="464" y="739"  width="74" height="95"<?php echo department($row['2089']);?>/></a>
<a title="2066" href="add.php?building=1677_2&dept=<?php echo $row['2066'];?>&room=2066" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1075" y="906"  width="80" height="85"<?php echo department($row['2066']);?>/></a>
<a title="2064" href="add.php?building=1677_2&dept=<?php echo $row['2064'];?>&room=2064" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1075" y="775"  width="84" height="133"<?php echo department($row['2064']);?>/></a>
<a title="2060" href="add.php?building=1677_2&dept=<?php echo $row['2060'];?>&room=2060" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1080" y="682"  width="75" height="91"<?php echo department($row['2060']);?>/></a>
<a title="2058" href="add.php?building=1677_2&dept=<?php echo $row['2058'];?>&room=2058" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1080" y="586"  width="75" height="93"<?php echo department($row['2058']);?>/></a>
<a title="2056" href="add.php?building=1677_2&dept=<?php echo $row['2056'];?>&room=2056" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1075" y="489"  width="81" height="92"<?php echo department($row['2056']);?>/></a>
<a title="2054" href="add.php?building=1677_2&dept=<?php echo $row['2054'];?>&room=2054" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1075" y="393"  width="80" height="96"<?php echo department($row['2054']);?>/></a>
<a title="2050" href="add.php?building=1677_2&dept=<?php echo $row['2050'];?>&room=2050" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1075" y="295"  width="81" height="94"<?php echo department($row['2050']);?>/></a>
<a title="2048" href="add.php?building=1677_2&dept=<?php echo $row['2048'];?>&room=2048" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1080" y="167"  width="74" height="119"<?php echo department($row['2048']);?>/></a>
<a title="2044" href="add.php?building=1677_2&dept=<?php echo $row['2044'];?>&room=2044" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="1047" y="73"  width="107" height="87"<?php echo department($row['2044']);?>/></a>
<a title="2042" href="add.php?building=1677_2&dept=<?php echo $row['2042'];?>&room=2042" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="963" y="73"  width="79" height="88"<?php echo department($row['2042']);?>/></a>
<a title="2040" href="add.php?building=1677_2&dept=<?php echo $row['2040'];?>&room=2040" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="880" y="73"  width="76" height="82"<?php echo department($row['2040']);?>/></a>
<a title="2038" href="add.php?building=1677_2&dept=<?php echo $row['2038'];?>&room=2038" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="791" y="73"  width="83" height="84"<?php echo department($row['2038']);?>/></a>
<a title="2036" href="add.php?building=1677_2&dept=<?php echo $row['2036'];?>&room=2036" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="707" y="73"  width="83" height="82"<?php echo department($row['2036']);?>/></a>
<a title="2034" href="add.php?building=1677_2&dept=<?php echo $row['2034'];?>&room=2034" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="628" y="73"  width="79" height="85"<?php echo department($row['2034']);?>/></a>
<a title="2032" href="add.php?building=1677_2&dept=<?php echo $row['2032'];?>&room=2032" <?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { echo 'data-target="#myModal"';} ?> role="button" data-toggle="modal" rel="tooltip"><rect x="550" y="73"  width="74" height="86"<?php echo department($row['2032']);?>/></a>
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

