<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php include "includes/db.php"; ?>
   <?php include "includes/functions.php"; ?>

		<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>

<?php 

if (isset($_POST['submitEdit'])) {
		//Update an Occupants information; 
	$id= (int) mysql_check($_POST["id"]);
	$name= mysql_check($_POST["name"]); 
	$building= mysql_check($_POST["building"]);  
	$phone= mysql_check($_POST["phone"]);
	$room= mysql_check($_POST["room"]);

	// Process Directory Update
	$updateDirectoryQuery  = "UPDATE directory SET ";
	$updateDirectoryQuery .= "name= '$name', ";
	$updateDirectoryQuery .= "building= '$building', ";  
	$updateDirectoryQuery .= "phone= '$phone' ";
	$updateDirectoryQuery .= "WHERE id = $id ";
	$updateDirectoryQuery .= "LIMIT 1";
	
	$updateDirectoryResult = mysqli_query($conn, $updateDirectoryQuery);
	
	if($updateDirectoryResult && mysqli_affected_rows($conn) ==1) {
			//Success
			redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Updating the directory has failed. Please see the Site Administrator");
		</script><?php
	} 
	
}else if(isset($_POST['submitRoomDept'])) {
	// Process room Dept 
	
	$building= mysql_check($_POST["building"]); 
	$room= mysql_check($_POST["room"]);
	$dept= mysql_check($_POST["dept"]);
 
	$updateRoomDeptResult = mysqli_query($conn, "UPDATE `" . mysqli_real_escape_string($conn,$building) . "` SET `" . mysqli_real_escape_string($conn,$room) . "` = '" . mysqli_real_escape_string($conn,$dept) . "' LIMIT 1");
	
	if($updateRoomDeptResult && mysqli_affected_rows($conn) ==1) {
		redirectTo("$building"); 
	}else{
		?><script type="text/javascript">
			alert("Updating the Department has failed. Please see the Site Administrator");
		</script><?php
	} 
	
}else if(isset($_POST['submit'])) {	
		// Add a New Person To room	
	$name= mysql_check($_POST["name"]); 
	$building= mysql_check($_POST["building"]);  
	$phone= mysql_check($_POST["phone"]);
	$room= mysql_check($_POST["room"]);
	$dept= (int) mysql_check($_POST["dept"]);

	// Process Add New Occupant
	$addPersonQuery  = "INSERT INTO directory ";
	$addPersonQuery .= "(name, room, building, phone) ";
	$addPersonQuery .= "VALUES ";  
	$addPersonQuery .= "('$name', '$room', '$building', '$phone') ";
	
	$addPersonResult = mysqli_query($conn, $addPersonQuery);
	
	if($addPersonResult && mysqli_affected_rows($conn) ==1) { // If Add new person successful NOW update room info 
			
	$updateDeptResult = mysqli_query($conn, "UPDATE `" . mysqli_real_escape_string($conn,$building) . "` SET `" . mysqli_real_escape_string($conn,$room) . "` = '" . mysqli_real_escape_string($conn,$dept) . "' LIMIT 1");
	
		/*if($updateDeptResult && mysqli_affected_rows($conn) ==1) {
			redirectTo("$building");
		}else{
			?><script type="text/javascript">
				alert("Updating the Department has failed. Please see the Site Administrator");
			</script><?php
		} */
		redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Adding Person to the directory has failed. Please see the Site Administrator");
		</script><?php
	} 			

}else if(isset($_POST['submitNotesAdd'])) {	
		//Update an TESA/ Notes room information; 
	$tesa= mysql_check($_POST["tesa"]); 
	$notes= mysql_check($_POST["notes"]);
	$room= mysql_check($_POST["room"]);
	$building= mysql_check($_POST["building"]);

	// Process Directory Update
	$addNotesQuery  = "INSERT INTO room ";
	$addNotesQuery .= "(building, roomNumber, tesa, notes) ";
	$addNotesQuery .= "VALUES ";  
	$addNotesQuery .= "('$building', '$room', '$tesa', '$notes') ";
	
	$addNotesResult = mysqli_query($conn, $addNotesQuery);
	
	if($addNotesResult && mysqli_affected_rows($conn) ==1) {
			//Success
			redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Adding Room / TESA notes has failed. Please see the Site Administrator");
		</script><?php
	} 
	
	
} else if(isset($_POST['submitNotesEdit'])) {	
		//Update an Occupants information; 
	$id= (int) mysql_check($_POST["id"]);
	$tesa= mysql_check($_POST["tesa"]); 
	$notes= mysql_check($_POST["notes"]);
	$building= mysql_check($_POST["building"]);  

	// Process Directory Update
	$updateNotesQuery  = "UPDATE room SET ";
	$updateNotesQuery .= "tesa= '$tesa', ";  
	$updateNotesQuery .= "notes= '$notes' ";
	$updateNotesQuery .= "WHERE id = $id ";
	$updateNotesQuery .= "LIMIT 1";
	
	$updateNotesResult = mysqli_query($conn, $updateNotesQuery);
	
	if($updateNotesResult && mysqli_affected_rows($conn) ==1) {
			//Success
			redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Updating Room / TESA notes  has failed. Please see the Site Administrator");
		</script><?php
	} 
} else if(isset($_POST['deleteRoomInfo'])) {
		
	$id= (int) mysql_check($_POST["id"]);
	$building= mysql_check($_POST["building"]);  
			  
	$deleteRoomInfoQuery = "DELETE FROM room WHERE id = {$id} LIMIT 1";
	$deleteRoomInfoResult = mysqli_query($conn, $deleteRoomInfoQuery);
	
	if ($deleteRoomInfoResult && mysqli_affected_rows($conn) == 1) {
		redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Deleting Room / TESA notes  has failed. Please see the Site Administrator");
		</script><?php
	} 
			  
} else if(isset($_POST['deleteOccupant'])) {
				
	$id= (int) mysql_check($_POST["id"]);
	$building= mysql_check($_POST["building"]);  
			  
	$deleteOccupantQuery = "DELETE FROM directory WHERE id = $id LIMIT 1";
	$deleteOccupantResult = mysqli_query($conn, $deleteOccupantQuery);
	
	if ($deleteOccupantResult && mysqli_affected_rows($conn) == 1) {
		redirectTo("$building");
	} else { // Directory update failed 
		?><script type="text/javascript">
			alert("Deleting Occupant has failed. Please see the Site Administrator");
		</script><?php
	} 

} else {  //closing else statement
	//If not a submit leave page
	header("Location: https://www.google.com/"); 
}
?>
	
</body>

<?php //include "includes/footer.php"; ?>

<?php
	if (isset($conn)) { mysqli_close($conn); }
?>

<?php include "includes/footer.php";?>

