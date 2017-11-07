

<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php include "includes/db.php"; ?>
   <?php include "includes/functions.php"; ?>

    <!-- Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">
    <!--Sidebar Left Content -->
	<div class="sidebar-left-content nano-content">
    	<?php include "includes/menu.php";?>
	      <!-- Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini ">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
      </div> <!-- End: Sidebar Left Content -->
    </aside><!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar -->
      <header id="topbar" class="alt mt10">
        <div class="topbar-left pt35">
			<h4><b class="text-success">Search For Employee's:</b>  </h4>
        </div>
      </header><!-- End: Topbar -->
	
	<?php
// Database query
	$employeeQuery  = "SELECT * FROM directory ";
	$employeeQuery .= "LEFT JOIN room ";
	$employeeQuery .= "ON directory.room= room.roomNumber ";
	$employeeQuery .= "WHERE directory.building = room.building ";
	

	//$QueryCompleted .= "ORDER BY completed_at ASC ";

	$employeeResult = mysqli_query($conn, $employeeQuery);
	//Test if there was a query error
	if(!$employeeResult) { ?>
	<script type="text/javascript">
		alert("Database Employee query failed.");
	</script>
<?php	} ?>

		
<div class="panel-body p20" id="invoice-item">            
	<div class="row col-md-10 col-md-offset-1  pt40 ">
		<div class="col-md-12 ">
		
        <div id="printTable">      
		<table class="display order-column stripe table table-hover table-bordered" id="employee" >
		<thead>
			<tr class="primary">
				<th>Employee Name</th>
				<th>Building</th> 
				<th>Room Number</th>
				<th>Phone Number</th>
				<th>TESA Information</th>
				<th>Room Notes</th>
			</tr>
		</thead>
		
	  <tbody>
	  <?php	//Populate Table
			while($ResultRow = mysqli_fetch_assoc($employeeResult)) { ?>
	  	<tr>
			<td>
				<p><?php echo $ResultRow["name"]; ?></p>
			</td>
			<td>
				<p> <?php echo $ResultRow["building"]; ?></p>
			</td>
			<td>
				<p> <?php echo $ResultRow["room"]; ?></p>
			</td>
			<td>
				<p> <?php echo $ResultRow["phone"]; ?></p>
			</td>
			<td>
				<p> <?php echo $ResultRow["tesa"]; ?></p>
			</td>
			<td>
				<p> <?php echo $ResultRow["notes"]; ?></p>
			</td>
			</tr>
		<?php 
		} //end while
	 	?>
	  </tbody>
	  
	</table>
	</div>
	</div>            
	</div>                
	<br />
	<div class="row" id="invoice-footer">
		<div class="col-md-12  mb40">                
			<div class="clearfix"></div>
			<div class="invoice-buttons">                        	
				<button id="print" class="btn btn-default mr10"><i class="fa fa-print pr5"></i> Print </button>
          	</div>
     	</div>                               
    </div>         
</div>				                
	 </section>
          


<?php include "includes/footer.php";?>

<script type="text/javascript">
  
  $(document).ready( function () {
    $('#employee').DataTable( {
        "aaSorting": [[ 0, "asc" ]]
    } );
	
	$('#print').on('click',function(){
		$('#' + "printTable").printArea();
			return false;
	})
			
} );
</script>


