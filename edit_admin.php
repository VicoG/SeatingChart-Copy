<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php include "includes/db.php"; ?>
   <?php include "includes/functions.php"; ?>

	<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>
	
	
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

    <!-- Start: Content-Wrapper -->

    <section id="content_wrapper">

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn pt30">
		 <div class="tray tray-center pt30">
			
			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-3 "> 
				<?php
					  $admin = find_users_by_id($_GET["id"]);
					  
					  if (!$admin) {
						// admin ID was missing or invalid or 
						//admin couldn't be found in database
						header("Location: manage_admin.php");
					  }
					?>
					
					<?php 
					if (isset($_POST['submit'])) {
					  // Process the form
					  
					  // validations
					  $required_fields = array("username", "password");
					  validate_presences($required_fields);
					  
					  $fields_with_max_lengths = array("username" => 25);
					  validate_max_lengths($fields_with_max_lengths);
					  
					  if (empty($errors)) {
						
						// Perform Update
					
						$id = $admin["id"];
						$username = mysql_check($_POST["username"]);
						$hashed_password = password_encrypt($_POST["password"]);
					  
						$query  = "UPDATE users SET ";
						$query .= "name = '$username', ";
						$query .= "password = '$hashed_password' ";
						$query .= "WHERE id = $id ";
						$query .= "LIMIT 1";
						$result = mysqli_query($conn, $query);
					
						if ($result && mysqli_affected_rows($conn) == 1) {
						  // Success
						  $_SESSION["message"] = "Admin/ User updated.";
						  header("Location: manage_admin.php");
						} else {
						  // Failure
						  $_SESSION["message"] = "Admin/ User update failed.";
						}
					  
					  }
					} else {
					  // This is probably a GET request
					  
					} // end: if (isset($_POST['submit']))
					
					?>
					
					<?php //$layout_context = "admin"; ?>					
					<?php //echo message(); ?>
					<?php echo form_errors($errors); ?>
					
					<h2>Edit Admin: <?php echo htmlentities($admin["name"]); ?></h2>
					<form action="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>" method="post">
					  <p>Username:
						<input type="text" name="username" value="<?php echo htmlentities($admin["name"]); ?>" />
					  </p>
					  <p>Password:
						<input type="password" name="password" value="" />
					  </p>
					  <input class="btn btn-xs btn-success" type="submit" name="submit" value="Edit Admin/ User" />
					</form>
					<br />
					<a href="manage_admin.php">Cancel</a>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->



<?php include "includes/footer.php";?>


