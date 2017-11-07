<!DOCTYPE html>

<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>SPACE Planner v2.0</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="Steve DiStefano">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
  <link rel="stylesheet" type="text/css" href="assets/mods.css">

</head>

<body class="dashboard-page">
  <div id="main">
  
  	
 <header class="navbar navbar-fixed-top navbar-shadow">

  <div class="navbar-branding">

	<a class="navbar-brand" href="">
	  <b class="text-success">SPACE:</b> Planner <sub> v2.0 </sub>
	</a>
	<span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
</header>

	<!-- Start: Header -->
	<?php require_once "includes/session.php"; ?>
	<?php require_once "includes/functions.php"; ?>
	<?php include "includes/db.php"; ?>
	<!-- End: Header -->


    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">
      <!-- Start: Sidebar Left Content -->
	<div class="sidebar-left-content nano-content">


	<ul class="nav sidebar-menu">
	</ul>

	      <!-- Start: Sidebar Collapse Button -->

	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div><!-- End: Sidebar Collapse Button -->
      </div><!-- End: Sidebar Left Content -->
    </aside><!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->

    <section id="content_wrapper"><!-- Start: Topbar -->

      <header id="topbar" class="alt">
        <div class="topbar-left">
        </div>
      </header><!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center">			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-3 "> 
				<?php
					$username = "";
					
					if (isset($_POST['submit'])) {
					  // Process the form
					  
					  // validations
					  $required_fields = array("username", "password");
					  validate_presences($required_fields);
					  
					  if (empty($errors)) {
						// Attempt Login
					
							$username = $_POST["username"];
							$password = $_POST["password"];
							
							$found_admin = attempt_login($username, $password);
					
						if ($found_admin) {
						  // Success
								// Mark user as logged in
								$_SESSION["admin_id"] = $found_admin["id"];
								$_SESSION["username"] = $found_admin["name"];
								$_SESSION["b"]= $found_admin["authorization"];
						  		header("Location: home.php"); 

						} else {
						  // Failure
						  $_SESSION["message"] = "Username/password not valid.";
						}
					  }
					} else {
					  
					} // end: if (isset($_POST['submit']))
					
					?>
					
					<?php //$layout_context = "admin"; ?>
					
						<?php //echo message(); ?>
						<?php echo form_errors($errors); ?>
						
						<h2>Login</h2>
						<form action="http://tid-appsvr.llnl.gov/NEWSitePlanner/login.php" method="post">
						  <p>Username:
							<input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
						  </p>
						  <p>Password:
							<input type="password" name="password" value="" />
						  </p>
						  <input type="submit" name="submit" value="Submit" />
						</form>
					</div>
				</div>      
			</section> 
      <!-- End: Content -->

      <!-- Begin: Page Footer -->

      <footer id="content-footer" class="affix">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">© 2016 LLNL</span>
          </div>
          <div class="col-md-6 text-right">
            <a href="#content" class="footer-return-top">
              <span class="fa fa-arrow-up"></span>
            </a>
          </div>
        </div>
      </footer><!-- End: Page Footer -->
    </section><!-- End: Content-Wrapper -->
  </div><!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->

  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="assets/js/demo/widgets.js"></script>
  
   <!-- HighCharts Plugin -->

  <script src="vendor/plugins/highcharts/highcharts.js"></script>
    <!-- Theme Javascript -->

  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Widget Javascript -->

	<script src="assets/js/demo/widgets.js"></script>  
	<script type="text/javascript">
  
  jQuery(document).ready(function() {

    "use strict";

    Demo.init(); // Init Demo JS
    Core.init(); // Init Theme Core

 
 
 });// end document ready function
</script>
</body>
</html>

  