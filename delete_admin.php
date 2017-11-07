
<?php include "includes/header.php"; ?>
<?php require_once "includes/session.php"; ?>
<?php require_once "includes/functions.php"; ?>
<?php require_once "includes/db.php"; ?>

	<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>
	
 <body class="dashboard-page">
 

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center">
			<?php
			  $admin = find_users_by_id($_GET["id"]);
			  if (!$admin) {
				// admin ID was missing or invalid or 
				// admin couldn't be found in database
				header("Location: manage_admin.php"); 
			  }
			  
			  $id = $admin["id"];
			  $query = "DELETE FROM users WHERE id = {$id} LIMIT 1";
			  $result = mysqli_query($conn, $query);
			
			  if ($result && mysqli_affected_rows($conn) == 1) {
				// Success
				$_SESSION["message"] = "Admin/ User deleted.";
				header("Location: manage_admin.php"); 
			  } else {
				// Failure
				$_SESSION["message"] = "Admin? User deletion failed.";
				header("Location: manage_admin.php"); 
			  }
			  
			?>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->

<?php include "includes/footer.php"; ?>

  