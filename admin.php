

<body class="dashboard-page">

  <div id="main">

    <!-- Header -->
   <?php include "includes/header.php"; ?>
   <?php include "includes/db.php"; ?>
   <?php include "includes/functions.php"; ?>

    
	<!-- Confirm Logged in -->
	<?php confirm_logged_in(); ?>
	<?php //layoutContext(); ?>

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
      <section id="content" class="table-layout animated fadeIn pt30">
		 <div class="tray tray-center pt30">
			
			
			<?php //$layout_context = "admin"; ?>
			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-3 pt30"> 
				<h1>Administration Menu</h1>
				  <h4><a href="manage_admin.php">Manage Admin/ Users</a></h4>
				  <h4><a href="logout.php">Logout</a></h4>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->

 <?php include "includes/footer.php"; ?>