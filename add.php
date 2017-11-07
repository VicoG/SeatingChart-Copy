<!DOCTYPE html>

<html>



<head>

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>SPACE Planner v2.0</title>
  <meta name="Steve DiStefano" content="LLNL">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font CSS (Via CDN) -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
	<!-- Tooltip CSS file -->
	<link type="text/css" rel="stylesheet" href="assets/jquery.qtip.css" />
	
	<!-- Admin Forms CSS -->
	<link rel="stylesheet" type="text/css"  media="all" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
	<link rel="stylesheet" type="text/css" href="assets/mods.css">
	
	<body class="dashboard-page">

<?php require "includes/db.php";?>
<?php require "includes/session.php";?>
<?php include "includes/functions.php"; ?>
   
	<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>
	
<?php // GET information
	$building = $_GET['building'];//table name i.e. building and floor
	$dept = (int) $_GET['dept']; // Department number
	$room = (string) $_GET['room']; // room Number

?>
	
<!-- Modal content-->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="panel-heading">
	<span class="panel-title">
	<h2 class="fa fa-pencil-square"></span> Add/ Edit Room Assignment: Building <?php echo $building; ?></h2>
</div>
</div>
<div class="modal-body panel-group">
<div class="panel-body" id="invoice-item">            
	<div class="row">
		<div class="col-md-12">
				
   				  <!-- Begin Forms -->                           

	<form method="post" action="editRow.php" class="form-horizontal" role="form"> <!-- Add new Person to room -->
	
		<input type='hidden' name='building' value="<?php echo htmlspecialchars($building); ?>"; />
		<input type='hidden' name='room' value="<?php echo htmlspecialchars($room); ?>"; />
		 
		  <div class="form-group">
			<p class="col-md-12  text-primary"><span class="fa fa-pencil-square"></span> ADD an Occupant to Room <?php echo $room ?></p>
			<p><label for="inputStandard" class="col-md-4 control-label text-primary pull-left">Name of Occupant</label></p>
			<div class="col-md-8">
			  <div>
				<input type="text" required name="name" class="form-control" pattern=".{0,50}"  title=" Maximum characters is 50" placeholder="Required">
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<p><label for="inputStandard" class="col-md-4 control-label text-primary pull-left">Phone Number</label></p>
			<div class="col-md-8">
			  <div>
				<input type="text" name="phone" class="form-control" pattern=".{0,12}"  title=" Maximum characters is 12" placeholder="Optional">
			  </div>
			</div>
		  </div>
		  
		  <div class="form-group">
		  <div class="row"></div>
			<h4 ><label for="inputStandard" class="col-md-6 control-label text-primary">Assign the Room a Department:</label></h4><div class="col-md-5"></div>
		  </div>
		  	<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '3') echo 'checked="checked"'; ?> value="3">WCI – Weapons and Complex Integration</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '6') echo 'checked="checked"'; ?> value="6">AD – Association Director (Engineering)</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '7') echo 'checked="checked"'; ?> value="7">NSED – National  Security Engineering Division</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '8') echo 'checked="checked"'; ?> value="8">LSEO – Laser Systems Engineering & Operations Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '9') echo 'checked="checked"'; ?> value="9">DTED – Defense Technologies Engineering Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '10') echo 'checked="checked"'; ?> value="10">MED – Materials Engineering Division</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '11') echo 'checked="checked"'; ?> value="11">CED – Computational Engineering Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '1') echo 'checked="checked"'; ?> value="1">IT Support</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '5') echo 'checked="checked"'; ?> value="5">Common Area</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '4') echo 'checked="checked"'; ?> value="4">Other</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '0') echo 'checked="checked"'; ?> value="0">Empty</label>
					</div>
				</div>
				<div id="invoice-footer">
				<div class="col-md-12">                
						<div class="invoice-buttons pull-right mt15">
							<input type="submit" class="btn btn-primary mr10" name="submit" value="Add Person to Room" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
				    </div>	
				</div>
			</form>
			</div>
		</div>
	</div>
	
<?php
	
// Database query for TESA information
	$notesQuery = "SELECT * FROM room WHERE roomNumber= '$room' AND building= '$building'";
	
	$notesResult = mysqli_query($conn, $notesQuery);
	//Test if there was a query error
	if(!$notesResult) {?>
		<script>
			function myFunction() {
				alert("Database NOTES query failed.");
			}
		</script>
<?php }
if(mysqli_num_rows($notesResult)>0) { 

	while($notesRow = mysqli_fetch_assoc($notesResult)) { 
?>
	
	<div class="panel-body" id="invoice-item"> <!-- Edit Existing TESA and Notes -->	           
	<div class="row">
		<div class="col-md-12">
		
		<form method="post" action="editRow.php" class="form-horizontal" role="form">
			<?php echo '<input type="hidden" name="id" value="' . $notesRow["id"] . '" />'; ?>
			<?php echo '<input type="hidden" name="building" value="' . $notesRow["building"] . '" />'; ?>
			
			<div class="form-group">
				<p class="col-md-12  text-alert"><span class="fa fa-pencil-square"></span> EDIT Room <?php echo $room ?> Information</p>
				<p><label for="inputStandard" class="col-md-1 control-label text-alert">TESA</label></p>
				<div class="col-md-11">
				  <div>
					<textarea type="text" name="tesa" maxlength="150" title=" Maximum characters is 150" class="form-control" placeholder="Optional - Max Length 150 characters" rows="2" cols="70"><?php if( $notesRow["tesa"] !=""){echo $notesRow["tesa"];} ?></textarea>
				  </div>
				</div>
			</div>
			<div class="form-group">
				<p><label for="inputStandard" class="col-md-1 control-label text-alert">Notes</label></p>
				<div class="col-md-11">
				  <div>
					<textarea type="text" name="notes" maxlength="1500" title=" Maximum characters is 1500" placeholder="Optional - Max Length 1500 characters" class="form-control" rows="3" cols="70"><?php if( $notesRow["notes"] !=""){echo $notesRow["notes"]; } ?></textarea>
				  </div>
				</div>
			</div>
						 
			<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>             
						<div class="invoice-buttons pull-right">
							<input type="submit" class="btn btn-alert mr10" name="submitNotesEdit" value="EDIT Room Information" />
							<input type="submit" class="btn btn-danger mr10" name="deleteRoomInfo" value="Remove Room Information" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
				    </div>	
				</div>
			</form>
		</div>
	</div><!-- End row -->
  </div> <!-- End Invoice -->
			
<?php
	}  // End While
} else { ?>
	
	<div class="panel-body" id="invoice-item"> <!-- ADD TESA and Notes -->	           
	<div class="row">
		<div class="col-md-12">
		
		<form method="post" action="editRow.php" class="form-horizontal" role="form">
			
			<input type='hidden' name='room' value="<?php echo htmlspecialchars($room); ?>"; />
			<input type='hidden' name='building' value="<?php echo htmlspecialchars($building); ?>"; />
			
			<div class="form-group">
				<p class="col-md-12  text-alert"><span class="fa fa-pencil-square"></span> ADD Room <?php echo $room ?> Information</p>
				<p><label for="inputStandard" class="col-md-1 control-label text-alert">TESA</label></p>
				<div class="col-md-11">
				  <div>
					<textarea type="text" name="tesa" maxlength="150" class="form-control" title=" Maximum characters is 150" placeholder="Optional - Max Length 150 characters" rows="2" cols="70"></textarea>
				  </div>
				</div>
			</div>
			<div class="form-group">
				<p><label for="inputStandard" class="col-md-1 control-label text-alert">Notes</label></p>
				<div class="col-md-11">
				  <div>
					<textarea type="text" name="notes" maxlength="1500" class="form-control" title=" Maximum characters is 1500" placeholder="Optional - Max Length 1500 characters" rows="3" cols="70"></textarea>
				  </div>
				</div>
			</div>
						 
			<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>             
						<div class="invoice-buttons pull-right">
							<input type="submit" class="btn btn-alert mr10" name="submitNotesAdd" value="ADD Room Information" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
				    </div>	
				</div>
			</form>
		</div>
	</div><!-- End row -->
  </div> <!-- End Invoice -->
	
<?php		
}  // End Else
 
	
// Database query for Edit information
	$editQuery = "SELECT * FROM directory WHERE room= '$room' AND building= '$building'";
	
	$editResult = mysqli_query($conn, $editQuery);
	//Test if there was a query error
	if(!$editResult) {?>
		<script>
			function myFunction() {
				alert("Database Edit query failed.");
			}
		</script>
<?php } 

if($dept != 0 || mysqli_num_rows($notesResult)>0) { ?>	

<div class="panel-body" id="invoice-item">  <!-- Edit Room's Department  -->          
	<div class="row">
		<div class="col-md-12">
		<form method="post" action="editRow.php" class="form-horizontal" role="form">
			
			<input type='hidden' name='building' value="<?php echo htmlspecialchars($building); ?>"; />
			<input type='hidden' name='room' value="<?php echo htmlspecialchars($room); ?>"; />
		 
		    <div class="form-group">
			  <div class="row"></div>
				<h4><label for="inputStandard" class="col-md-7 control-label text-info">EDIT: Room <?php echo $room ?>'s department here</label></h4><div class="col-md-5"></div>
			  </div>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '3') echo 'checked="checked"'; ?> value="3">WCI – Weapons and Complex Integration</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '6') echo 'checked="checked"'; ?> value="6">AD – Association Director (Engineering)</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '7') echo 'checked="checked"'; ?> value="7">NSED – National  Security Engineering Division</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '8') echo 'checked="checked"'; ?> value="8">LSEO – Laser Systems Engineering & Operations Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '9') echo 'checked="checked"'; ?> value="9">DTED – Defense Technologies Engineering Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '10') echo 'checked="checked"'; ?> value="10">MED – Materials Engineering Division</label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" name="dept" <?php if ($dept == '11') echo 'checked="checked"'; ?> value="11">CED – Computational Engineering Division</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '1') echo 'checked="checked"'; ?> value="1">IT Support</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '5') echo 'checked="checked"'; ?> value="5">Common Area</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '0') echo 'checked="checked"'; ?> value="0">Empty</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="dept"  <?php if ($dept == '4') echo 'checked="checked"'; ?> value="4">Other</label>
					</div>
				</div>
			<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>             
						<div class="invoice-buttons pull-right  mt15">
							<input type="submit" class="btn btn-info mr10" name="submitRoomDept" value="Change Room's Department Information" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
				    </div>	
				</div>
			</form>				 
		</div>
	</div><!-- End row -->
  </div> <!-- End Invoice -->
  <?php	} // End Department change if statement -->	


// Database query for Edit information
	$roomQuery = "SELECT * FROM directory WHERE room= '$room' AND building= '$building'";
	
	$editResult = mysqli_query($conn, $editQuery);
	//Test if there was a query error
	if(!$editResult) {?>
		<script>
			function myFunction() {
				alert("Database Edit query failed.");
			}
		</script>
<?php } 

if(mysqli_num_rows($editResult)>0) { ?>

<div class="panel-body" id="invoice-item">  <!-- Header Edit existing Person in room --> 
	  <div class="form-group">
		<h4 class="col-md-12  text-system"><span class="fa fa-pencil-square"></span> EDIT/ DELETE Occupant's Information Below</h4>
	  </div>
</div>	
<?php	
while($row = mysqli_fetch_assoc($editResult)) { 	?>	

<div class="panel-body" id="invoice-item">  <!-- Edit existing Person in room -->          
	<div class="row">
		<div class="col-md-12">
		<form method="post" action="editRow.php" class="form-horizontal" role="form">
		
		 <!-- Pass id and subid -->
		 
		<input type='hidden' name='id' value="<?php echo  $row["id"]; ?>"; />
		<input type='hidden' name='building' value="<?php echo htmlspecialchars($building); ?>"; />
		<input type='hidden' name='room' value="<?php echo htmlspecialchars($room); ?>"; />
		
		  <div class="form-group">
			<p><label for="inputStandard" class="col-md-4 control-label text-system">Name of Occupant</label></p>
			<div class="col-md-8">
			  <div>
				<input type="text" required name="name" value="<?php	if( $row["name"] !=""){echo $row["name"];} ?>" class="form-control" pattern=".{0,50}"  title=" Maximum characters is 50" placeholder="<?php	if( $row["name"] !=""){echo $row["name"];} else{ echo 'Required'; }?>">
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<p><label for="inputStandard" class="col-md-4 control-label text-system pull-left">Phone Number</label></p>
			<div class="col-md-8">
			  <div>
				<input type="text" name="phone" value="<?php if( $row["phone"] !=""){echo $row["phone"];} ?>"class="form-control" pattern=".{0,12}"  title=" Maximum characters is 12" placeholder="<?php if( $row["phone"] !=""){echo $row["phone"];} else{ echo 'Optional'; }?>">
			  </div>
			</div>
		  </div>			 
			<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>             
						<div class="invoice-buttons pull-right  mt15">
							<input type="submit" class="btn btn-system mr10" name="submitEdit" value="Edit Person's Information" />
							<input type="submit" class="btn btn-danger mr10" name="deleteOccupant" value="Remove Person From Room" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
				    </div>	
				</div>
			</form>
		</div>
	</div><!-- End row -->
  </div> <!-- End Invoice -->
  
  <?php  } //end while
 } // End Occupant Edit  --> ?>
  
</div> <!-- End Modal Body-->


<?php
	// Free result set
	mysqli_free_result($editResult);
	
	if (isset($conn)) { mysqli_close($conn); }
?>

<script src="vendor/jquery/jquery-3.1.0.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="assets/js/demo/widgets.js"></script>
  
    <!-- Theme Javascript -->

  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>


</body>
</html>