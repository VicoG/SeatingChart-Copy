 <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Building 131:</b> Floor 3 </h4>
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
		<?php
		// Database query
			/*$query  = "SELECT * FROM 131_3 ";
		
			$result = mysqli_query($conn, $query);
			//Test if there was a query error
			if(!$result) { ?>
				<script>
					alert("Database query failed.");
				</script>
			<?php  }*/ ?>
				 
		 <div class="panel-body p20 " id="invoice-item">            
        	<div class="row">
            	<div id="maps" class="col-md-12"> 
					<div >
					
<?php	
	//Populate Table 
//	while($row = mysqli_fetch_assoc($result)) { ?>
<svg id="mySVG" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1200 1200"
	 style="enable-background: new 0 0 1200 1200" xml:space="preserve">
	
<image overflow="visible" width="2339" height="1830" xlink:href="assets/images/131-3.jpg"  transform="matrix(0.513 0 0 0.6557 0 0)"></image>

</svg>
						
<?php 
//	 }
	 
 mysqli_free_result($result);
 ?>

			</div> 
		</div>            
	</div>                 
</div> 

 
<script type="text/javascript">
	var buildingNum = '131_3';
</script>

