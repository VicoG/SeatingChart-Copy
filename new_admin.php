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

    <section id="content_wrapper">

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn pt40">
		 <div class="tray tray-center pt40">
			
			
			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-3 "> 
				<?php 
					if (isset($_POST['submit'])) {
					  // Process the form
					  
					  // validations
					  $required_fields = array("username", "password");
					  validate_presences($required_fields);
					  
					  $fields_with_max_lengths = array("username" => 25);
					  validate_max_lengths($fields_with_max_lengths);
					  
					  if (empty($errors)) {
						// Perform Create
					
						$username = mysql_check($_POST["username"]);
						$hashed_password = password_encrypt($_POST["password"]);
						$auth = $_POST["auth"];
						
						$query  = "INSERT INTO users (";
						$query .= "  name, password, authorization";
						$query .= ") VALUES (";
						$query .= "  '$username', '$hashed_password', $auth";
						$query .= ")";
						$result = mysqli_query($conn, $query);
					
						if ($result != NULL) {
						  // Success
						  header("Location: manage_admin.php");
						  exit();
						} else {
						  // Failure
						  $_SESSION["message"] = "Admin creation failed.";
						}
					  }
					} 
					
					?>
					
						<?php echo message(); ?>
						<?php echo form_errors($errors); ?>
						
						<h2>Create New Administrator or User</h2>
						<hr>
						<form action="new_admin.php" method="post">
						  <p>Username:
							<input type="text" name="username" value="" />
						  </p>
						  <p>Password:
							<input type="password" name="password" value="" />
						  </p>
						  <input type="radio" name="auth" value="0" > Administrator<br>
						  <input type="radio" name="auth" value="1"> User<br><br>
						  <input class="btn btn-sm btn-success" type="submit" name="submit" value="Create Admin" />
						</form>
						<br />
						<a href="manage_admin.php">Cancel</a>
					  </div>
			  </div>
		  </div>
		</div>      
      </section> 
 <!-- End: Content -->

 
<?php include "includes/footer.php";?>
  