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
      <section id="content" class="pt40">
		 <div class="tray tray-center pt30">
			
			<div class="row col-md-6 col-md-offset-3 pull-left">
				<br />
				<a href="admin.php">&laquo; Main menu</a><br />
			</div>			
			 <div class="row">                                        	
                <div class="col-md-6 col-md-offset-3 "> 
				<?php
				  $admin_set = findUsers();
				?>
				
					<?php //echo message(); ?>
					<h2>Manage Administrators/ Users</h2>
					<table class="table table-hover">
					  <thead >
					  	<tr class="success">
							<th style="text-align: left; width: 200px;">Username</th>
							<th colspan="2" style="text-align: left;">Edit User</th>
							<th colspan="2" style="text-align: left;">Delete User</th>
						</tr>
					  </thead>
					<?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
					<tbody>
						  <tr>
							<td><?php echo htmlentities($admin["name"]); ?></td>
							<td colspan="2" style="text-align: left;"><a href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a></td>
							<td colspan="2" style="text-align: left;"><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
						  </tr>
					  </tbody>
					<?php } ?>
					</table>
					<br />
					<a href="new_admin.php">Add new Admin/ User</a>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->

 
<?php include "includes/footer.php";?>
